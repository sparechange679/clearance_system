import { Router } from "express";
import { signIn, signOut } from "../controllers/client-auth/client.controller.js";

const keeperRouter = Router();

keeperRouter.post("/sign-in", signIn);
keeperRouter.post("/sign-out", signOut);

export default keeperRouter;
