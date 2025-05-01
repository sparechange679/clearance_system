// models/index.js
import sequelize from "../database/mysql.js";

import Client from "./client.model.js";
import Shipment from "./shipment.model.js";
import TpinSample from "./tpinSample.model.js";
import Document from "./document.model.js";
// import TpinSampleSeed from "./seedTpinSamples.model.js";

// Register models in an object for convenience
const models = {
    Client,
    Shipment,
    TpinSample,
    Document,
    // TpinSampleSeed
};

// Define associations here AFTER all models are imported
Client.hasMany(Shipment, { foreignKey: "ClientId" });
Shipment.belongsTo(Client, { foreignKey: "ClientId" });

Shipment.belongsTo(TpinSample, { foreignKey: "TpinSampleId" });
TpinSample.hasMany(Shipment, { foreignKey: "TpinSampleId" });

Shipment.hasOne(Document, { foreignKey: "ShipmentId" });
Document.belongsTo(Shipment, { foreignKey: "ShipmentId" });

// Export models and sequelize instance
export { sequelize };
export default models;
