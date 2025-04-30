import { Router } from "express";
import { signIn, signOut } from "../controllers/client-auth/client.controller.js";

const agentRouter = Router();

agentRouter.post("/sign-in", signIn);
agentRouter.post("/sign-out", signOut);

export default agentRouter;
