import { Sequelize } from "sequelize";
import {DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, NODE_ENV} from "../config/env.js";

const sequelize = new Sequelize(DB_NAME, DB_USER, DB_PASSWORD, {
  host: DB_HOST,
  dialect: "mysql",
});

const connectToDatabase = async () => {
  try {
    await sequelize.authenticate();
    console.log(`Connected to MySQL in ${NODE_ENV} Mode.`);
  } catch (error) {
    console.error("Unable to connect to MySQL:", error);
  }
};

export default connectToDatabase;
