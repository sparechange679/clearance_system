// models/document.model.js
import { DataTypes } from "sequelize";
import {sequelize} from "../database/mysql.js";

const Document = sequelize.define("Document", {
    filePath: {
        type: DataTypes.STRING,
        allowNull: false
    },
    documentType: {
        type: DataTypes.ENUM('receipt', 'invoice', 'other'),
        defaultValue: 'receipt'
    }
});

export default Document;
