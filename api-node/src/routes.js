const express = require('express');

const UserController = require('./controllers/UserController');
const ColorController = require('./controllers/ColorController');
const BrandController = require('./controllers/BrandController');

const routes = express.Router();

routes.get('/users', UserController.index);
routes.post('/users', UserController.store);

routes.get('/colors', ColorController.index);
routes.post('/colors', ColorController.store);

routes.get('/brands', BrandController.index);
routes.post('/brands', BrandController.store);

module.exports = routes;