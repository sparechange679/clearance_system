import Client from "../../models/client.model.js";
import bcrypt from "bcryptjs";
import { JWT_EXPIRES_IN, JWT_SECRET } from "../../config/env.js";
import jwt from "jsonwebtoken";

export const signUp = async (req, res, next) => {
  try {
    const { firstname, lastname, email, password, tpin, document } = req.body;

    const existingClient = await Client.findOne({ where: { email } });

    if (existingClient) {
      const error = new Error("That account already exists");
      error.statusCode = 400;
      throw error;
    }

    // hash password
    const salt = await bcrypt.genSalt(10);
    const hashedPassword = await bcrypt.hash(password, salt);

    const newClient = await Client.create({
      firstname,
      lastname,
      email,
      password: hashedPassword,
        tpin,
        document
    });

    const token = jwt.sign({ userId: newClient.id }, JWT_SECRET, {
      expiresIn: JWT_EXPIRES_IN,
    });

    res.status(201).json({
      success: true,
      message: "Client created successfully",
      data: {
        token,
        client: newClient,
      },
    });
  } catch (error) {
    next(error);
  }
};

export const signIn = async (req, res, next) => {
  try {
    const { email, password } = req.body;

    const client = await Client.findOne({ where: { email } });

    if (!client) {
      const error = new Error("Invalid credentials");
      error.statusCode = 401;
      throw error;
    }

    const isPasswordValid = await bcrypt.compare(password, client.password);

    if (!isPasswordValid) {
      const error = new Error("Invalid credentials");
      error.statusCode = 401;
      throw error;
    }

    const token = jwt.sign({ clientId: client.id }, JWT_SECRET, {
      expiresIn: JWT_EXPIRES_IN,
    });

    res.status(200).json({
      success: true,
      message: "Client logged in successfully",
      data: {
        token,
        client,
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
    const client = await Client.findByPk(decodedToken.clientId);
    if (!client) {
      const error = new Error("Client not found");
      error.statusCode = 404;
      throw error;
    }

    // Increment the tokenVersion to invalidate the current token
    client.tokenVersion = (client.tokenVersion || 0) + 1;
    await client.save();

    res.status(200).json({
      success: true,
      message: "Client logged out successfully",
    });
  } catch (error) {
    next(error);
  }
};
