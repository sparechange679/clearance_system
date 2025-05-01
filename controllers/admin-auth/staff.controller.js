import Agent from "../../models/agent.model.js";
import Keeper from "../../models/keeper.model.js";
import bcrypt from "bcryptjs";
import { JWT_EXPIRES_IN, JWT_SECRET } from "../../config/env.js";
import jwt from "jsonwebtoken";

export const agentSignUp = async (req, res, next) => {
  try {
    const { firstname, lastname, email, password, tpin, document } = req.body;

    const existingAgent = await Agent.findOne({ where: { email } });

    if (existingAgent) {
      const error = new Error("That account already exists");
      error.statusCode = 400;
      throw error;
    }

    // hash password
    const salt = await bcrypt.genSalt(10);
    const hashedPassword = await bcrypt.hash(password, salt);

    const newAgent = await Agent.create({
      firstname,
      lastname,
      email,
      tpin,
      document,
      password: hashedPassword,
    });

    const token = jwt.sign({ agentId: newAgent.id }, JWT_SECRET, {
      expiresIn: JWT_EXPIRES_IN,
    });

    res.status(201).json({
      success: true,
      message: "Agent created successfully",
      data: {
        token,
        agent: newAgent,
      },
    });
  } catch (error) {
    next(error);
  }
};

// create keeper
export const keeperSignUp = async (req, res, next) => {
  try {
    const { firstname, lastname, email, password } = req.body;

    const existingKeeper = await Keeper.findOne({ where: { email } });

    if (existingKeeper) {
      const error = new Error("That account already exists");
      error.statusCode = 400;
      throw error;
    }

    // hash password
    const salt = await bcrypt.genSalt(10);
    const hashedPassword = await bcrypt.hash(password, salt);

    const newKeeper = await Keeper.create({
      firstname,
      lastname,
      email,
      password: hashedPassword,
    });

    const token = jwt.sign({ keeperId: newKeeper.id }, JWT_SECRET, {
      expiresIn: JWT_EXPIRES_IN,
    });

    res.status(201).json({
      success: true,
      message: "Keeper created successfully",
      data: {
        token,
        keeper: newKeeper,
      },
    });
  } catch (error) {
    next(error);
  }
};
