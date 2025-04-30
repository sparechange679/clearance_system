import { Router } from "express";
import { signIn, signOut, signUp } from "../controllers/admin-auth/auth.controller.js";

const adminRouter = Router();

adminRouter.post("/sign-up", signUp);
adminRouter.post("/sign-in", signIn);
adminRouter.post("/sign-out", signOut);

export default adminRouter;
