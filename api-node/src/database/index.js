const Sequelize = require('sequelize');
const dbConfig = require('../config/database');

const User = require('../models/User');
const Color = require('../models/Color');
const Brand = require('../models/Brand');
const Cars = require('../models/Cars');

const connection = new Sequelize(dbConfig);

User.init(connection);
Color.init(connection);
Brand.init(connection);
Cars.init(connection);

//User.associate(connection.models);
//Color.associate(connection.models);
//Brand.associate(connection.models);
Cars.associate(connection.models);

module.exports = connection;