import { DataTypes } from "sequelize";
import { sequelize } from "../database/mysql.js"; // import shared instance

const Agent = sequelize.define(
    "Agent",
    {
        firstname: {
            type: DataTypes.STRING,
            allowNull: false,
            validate: { notEmpty: true, len: [2, 50] },
        },
        lastname: {
            type: DataTypes.STRING,
            allowNull: false,
            validate: { notEmpty: true, len: [2, 50] },
        },
        email: {
            type: DataTypes.STRING,
            allowNull: false,
            unique: true,
            validate: { isEmail: true },
        },
        password: {
            type: DataTypes.STRING,
            allowNull: false,
            validate: { len: [6] },
        },
        tpin: {
            type: DataTypes.STRING,
            allowNull: false,
            unique: true,
            validate: { len: [6] },
        },
        document: {
            type: DataTypes.STRING,
            allowNull: false,
            validate: { notEmpty: true },
        },
    },
    {
        timestamps: true,
    }
);

export default Agent;
