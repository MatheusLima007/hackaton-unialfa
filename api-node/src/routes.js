const express = require('express');

const UserController = require('./controllers/UserController');
const ColorController = require('./controllers/ColorController');
const BrandController = require('./controllers/BrandController');
const CarsController = require('./controllers/CarsController');

const routes = express.Router();

routes.get('/users', UserController.index);
routes.post('/users', UserController.store);

routes.get('/colors', ColorController.index);
routes.post('/colors', ColorController.store);

routes.get('/brands', BrandController.index);
routes.post('/brands', BrandController.store);
routes.delete('/brands', BrandController.delete);

routes.get('/cars', CarsController.index);
routes.post('/cars', CarsController.store);

module.exports = routes;