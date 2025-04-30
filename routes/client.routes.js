import { Router } from "express";
import { signIn, signOut, signUp } from "../controllers/client-auth/client.controller.js";

const clientRouter = Router();

clientRouter.post("/sign-up", signUp);
clientRouter.post("/sign-in", signIn);
clientRouter.post("/sign-out", signOut);

export default clientRouter;
