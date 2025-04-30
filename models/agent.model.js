import { Sequelize, DataTypes } from "sequelize";
import { DB_HOST, DB_USER, DB_PASSWORD, DB_NAME } from "../config/env.js";

const sequelize = new Sequelize(DB_NAME, DB_USER, DB_PASSWORD, {
  host: DB_HOST,
  dialect: "mysql",
});

const Agent = sequelize.define(
  "Agent",
  {
    firstname: {
      type: DataTypes.STRING,
      allowNull: false,
      validate: {
        notEmpty: true,
        len: [2, 50],
      },
    },
    lastname: {
      type: DataTypes.STRING,
      allowNull: false,
      validate: {
        notEmpty: true,
        len: [2, 50],
      },
    },
    email: {
      type: DataTypes.STRING,
      allowNull: false,
      unique: true,
      validate: {
        isEmail: true,
      },
    },
    password: {
      type: DataTypes.STRING,
      allowNull: false,
      validate: {
        len: [6],
      },
    },
    tpin: {
      type: DataTypes.STRING,
      allowNull: false,
      unique: true,
      validate: {
        len: [6],
      },
    },
  },
  {
    timestamps: true,
  }
);

const init = async () => {
  try {
    console.log("Agent table created or updated successfully!");
  } catch (error) {
    console.error("Unable to create or update the Agent table:", error);
  }
};

init();

export default Agent;
