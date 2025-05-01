// models/tpinSample.model.js
import { DataTypes } from "sequelize";
import {sequelize} from "../database/mysql.js";

const TpinSample = sequelize.define("TpinSample", {
    tpin: {
        type: DataTypes.STRING(6),
        allowNull: false,
        unique: true,
        validate: {
            len: [6, 6]
        }
    },
    isValid: {
        type: DataTypes.BOOLEAN,
        defaultValue: true
    }
});

export default TpinSample;
