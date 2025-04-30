import Agent from "../../models/agent.model.js";
import bcrypt from "bcryptjs";
import { JWT_EXPIRES_IN, JWT_SECRET } from "../../config/env.js";
import jwt from "jsonwebtoken";

export const signIn = async (req, res, next) => {
  try {
    const { email, password } = req.body;

    const agent = await Agent.findOne({ where: { email } });

    if (!agent) {
      const error = new Error("Invalid credentials");
      error.statusCode = 401;
      throw error;
    }

    const isPasswordValid = await bcrypt.compare(password, agent.password);

    if (!isPasswordValid) {
      const error = new Error("Invalid credentials");
      error.statusCode = 401;
      throw error;
    }

    const token = jwt.sign({ agentId: agent.id }, JWT_SECRET, {
      expiresIn: JWT_EXPIRES_IN,
    });

    res.status(200).json({
      success: true,
      message: "Agent logged in successfully",
      data: {
        token,
        agent,
      },
    });
  } catch (error) {
    next(error);
  }
};

export const signOut = async (req, res, next) => {
  try {
    const authHeader = req.headers.authorization;

    if (!authHeader || !authHeader.startsWith("Bearer ")) {
      const error = new Error("Authorization token missing or invalid");
      error.statusCode = 401;
      throw error;
    }

    const token = authHeader.split(" ")[1];
    const decodedToken = jwt.verify(token, JWT_SECRET);

    // Find the user and increment tokenVersion
    const agent = await Agent.findByPk(decodedToken.agentId);
    if (!agent) {
      const error = new Error("Agent not found");
      error.statusCode = 404;
      throw error;
    }

    // Increment the tokenVersion to invalidate the current token
    agent.tokenVersion = (agent.tokenVersion || 0) + 1;
    await agent.save();

    res.status(200).json({
      success: true,
      message: "Agent logged out successfully",
    });
  } catch (error) {
    next(error);
  }
};
