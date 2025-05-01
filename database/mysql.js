import { Sequelize } from "sequelize";
import { DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, NODE_ENV } from "../config/env.js";

const sequelize = new Sequelize(DB_NAME, DB_USER, DB_PASSWORD, {
  host: DB_HOST,
  dialect: "mysql",
  logging: false,
});

const connectToDatabase = async () => {
  try {
    await sequelize.authenticate();
    console.log(`Connected to MySQL in ${NODE_ENV} Mode.`);
    // Sync all models here:
    await sequelize.sync({ alter: true }); // or { force: true } to drop & recreate tables on every start
    console.log("All models were synchronized successfully.");
  } catch (error) {
    console.error("Unable to connect to MySQL:", error);
  }
};

export { sequelize };
export default connectToDatabase;
