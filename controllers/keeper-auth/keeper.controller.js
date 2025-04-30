import Keeper from "../../models/keeper.model.js";
import bcrypt from "bcryptjs";
import { JWT_EXPIRES_IN, JWT_SECRET } from "../../config/env.js";
import jwt from "jsonwebtoken";

export const signIn = async (req, res, next) => {
  try {
    const { email, password } = req.body;

    const keeper = await Keeper.findOne({ where: { email } });

    if (!keeper) {
      const error = new Error("Invalid credentials");
      error.statusCode = 401;
      throw error;
    }

    const isPasswordValid = await bcrypt.compare(password, keeper.password);

    if (!isPasswordValid) {
      const error = new Error("Invalid credentials");
      error.statusCode = 401;
      throw error;
    }

    const token = jwt.sign({ keeperId: keeper.id }, JWT_SECRET, {
      expiresIn: JWT_EXPIRES_IN,
    });

    res.status(200).json({
      success: true,
      message: "Keeper logged in successfully",
      data: {
        token,
        keeper,
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
    const keeper = await Keeper.findByPk(decodedToken.keeperId);
    if (!keeper) {
      const error = new Error("Keeper not found");
      error.statusCode = 404;
      throw error;
    }

    // Increment the tokenVersion to invalidate the current token
    keeper.tokenVersion = (keeper.tokenVersion || 0) + 1;
    await keeper.save();

    res.status(200).json({
      success: true,
      message: "Keeper logged out successfully",
    });
  } catch (error) {
    next(error);
  }
};
