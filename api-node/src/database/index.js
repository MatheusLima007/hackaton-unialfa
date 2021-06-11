const Sequelize = require('sequelize');
const dbConfig = require('../config/database');

const User = require('../models/User');
const Address = require('../models/Address');
const Car = require('../models/Cars');

const connection = new Sequelize(dbConfig);

User.init(connection);
Car.init(connection);
Address.init(connection);

User.associate(connection.models);
Car.associate(connection.models);
Address.associate(connection.models);

module.exports = connection;