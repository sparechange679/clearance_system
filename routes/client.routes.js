import { Router } from "express";
import { signIn, signOut, signUp } from "../controllers/client-auth/client.controller.js";
import upload from "../middlewares/upload.js";
import TpinSample from "../models/tpinSample.model.js";
import Shipment from "../models/shipment.model.js";
import { authenticate } from "../middlewares/auth.middleware.js";

const clientRouter = Router();

clientRouter.post("/sign-up", signUp);
clientRouter.post("/sign-in", signIn);
clientRouter.post("/sign-out", signOut);

clientRouter.post('/shipment', authenticate, upload.single('document'), async (req, res) => {
    try {
        const { tpin, productName, quantity, price } = req.body;
        const clientId = req.user.id; // Assuming you have authentication middleware

        // Verify TPIN
        const validTPIN = await TpinSample.findOne({
            where: { tpin, isValid: true }
        });

        if (!validTPIN) {
            return res.status(400).json({
                success: false,
                message: 'Invalid TPIN number. Please verify with MRA.'
            });
        }

        // Create shipment
        const shipment = await Shipment.create({
            productName,
            quantity,
            price,
            ClientId: clientId,
            TpinSampleId: validTPIN.id
        });

        // Save document
        const document = await Document.create({
            filePath: req.file.path,
            documentType: 'receipt',
            ShipmentId: shipment.id
        });

        res.status(201).json({
            success: true,
            message: 'Shipment submitted for verification',
            data: { shipment, document }
        });

    } catch (error) {
        console.error('Shipment submission error:', error);
        res.status(500).json({
            success: false,
            message: error.message
        });
    }
});

export default clientRouter;
