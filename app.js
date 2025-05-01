import express from "express";
import { PORT } from "./config/env.js";
import userRouter from "./routes/user.routes.js";
import {adminAgentRouter, adminKeeperRouter, adminRouter} from "./routes/admin.routes.js";
import contactsRouter from "./routes/contact.routes.js";
import connectToDatabase, {sequelize} from "./database/mysql.js";
import errorMiddleware from "./middlewares/error.middle.js";
import cookieParser from "cookie-parser";
import pageRouter from "./routes/page.routes.js";
import clientRouter from "./routes/client.routes.js";
import agentRouter from "./routes/agent.routes.js";
import keeperRouter from "./routes/keeper.routes.js";
// Import all models to register them with Sequelize
import "./models/index.models.js";

const app = express();

// Middleware
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());

// Routers
app.use("/clearance/users", userRouter);
app.use("/clearance/contacts", contactsRouter);
app.use("/clearance/admin", adminRouter);
app.use("/clearance/admin/agent", adminAgentRouter);
app.use("/clearance/admin/keeper", adminKeeperRouter);
app.use("/clearance/client", clientRouter);
app.use("/clearance/agent", agentRouter);
app.use("/clearance/keeper", keeperRouter);

// Error middleware
app.use(errorMiddleware);

// Default route to load an HTML file
app.use(pageRouter);

app.listen(PORT, async () => {
  try {
    await connectToDatabase();
    await sequelize.authenticate();
    console.log("Database connected successfully.");

    // Sync all models
    await sequelize.sync({ alter: true }); // or { force: true } for dev

    console.log(`Server running on http://localhost:${PORT}`);
  } catch (error) {
    console.error("Unable to start server:", error);
  }
});
