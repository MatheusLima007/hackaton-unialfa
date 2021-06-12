const Sequelize = require('sequelize');
const dbConfig = require('../config/database');

const User = require('../models/User');
const Color = require('../models/Color');
const Brand = require('../models/Brand');

const connection = new Sequelize(dbConfig);

User.init(connection);
Color.init(connection);
Brand.init(connection);

module.exports = connection;