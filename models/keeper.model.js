// models/keeper.model.js
import { DataTypes } from "sequelize";
import {sequelize} from "../database/mysql.js";

const Keeper = sequelize.define("Keeper", {
    firstname: { type: DataTypes.STRING, allowNull: false },
    lastname: { type: DataTypes.STRING, allowNull: false },
    email: { type: DataTypes.STRING, allowNull: false, unique: true },
    password: { type: DataTypes.STRING, allowNull: false },
}, {
    timestamps: true,
});

export default Keeper;
