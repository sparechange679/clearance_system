import { Router } from "express";
import { signIn, signOut, signUp } from "../controllers/admin-auth/auth.controller.js";
import { agentSignUp, keeperSignUp } from "../controllers/admin-auth/staff.controller.js";

const adminRouter = Router();
const adminAgentRouter = Router();
const adminKeeperRouter = Router();

adminRouter.post("/sign-up", signUp);
adminAgentRouter.post("/sign-up", agentSignUp);
adminKeeperRouter.post("/sign-up", keeperSignUp);
adminRouter.post("/sign-in", signIn);
adminRouter.post("/sign-out", signOut);

export { adminRouter, adminAgentRouter, adminKeeperRouter };
