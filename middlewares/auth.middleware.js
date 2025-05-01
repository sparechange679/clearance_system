import jwt from "jsonwebtoken";
import { JWT_SECRET } from "../config/env.js";
import Client from "../models/client.model.js";

export const authenticate = async (req, res, next) => {
  try {
    const authHeader = req.headers.authorization;

    if (!authHeader || !authHeader.startsWith("Bearer ")) {
      const error = new Error("Authorization token missing or invalid");
      error.statusCode = 401;
      throw error;
    }

    const token = authHeader.split(" ")[1];
    const decodedToken = jwt.verify(token, JWT_SECRET);
   console.log('Auth header:', authHeader);
   console.log('Decoded token:', decodedToken);

    const client = await Client.findByPk(decodedToken.clientId);
   console.log('Client found:', client?.id);

    if (!client || client.tokenVersion !== decodedToken.tokenVersion) {
      const error = new Error("Invalid token");
      error.statusCode = 401;
      throw error;
    }

    req.client = client;
    next();
  } catch (error) {
    next(error);
  }
};