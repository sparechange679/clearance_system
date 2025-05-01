// models/shipment.model.js
import { DataTypes } from "sequelize";
import {sequelize} from "../database/mysql.js";

const Shipment = sequelize.define("Shipment", {
    productName: {
        type: DataTypes.STRING,
        allowNull: false
    },
    quantity: {
        type: DataTypes.INTEGER,
        allowNull: false
    },
    price: {
        type: DataTypes.DECIMAL(10, 2),
        allowNull: false
    },
    status: {
        type: DataTypes.ENUM('pending', 'approved', 'rejected'),
        defaultValue: 'pending'
    }
});

export default Shipment;
