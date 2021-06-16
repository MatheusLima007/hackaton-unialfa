const express = require('express');

const UserController = require('./controllers/UserController');
const ColorController = require('./controllers/ColorController');
const BrandController = require('./controllers/BrandController');
const CarsController = require('./controllers/CarsController');

const routes = express.Router();

routes.get('/users', UserController.index);
routes.post('/users', UserController.store);
routes.put('/users/:id', UserController.update);
routes.delete('/users/:id', UserController.delete);

routes.get('/colors', ColorController.index);
routes.post('/colors', ColorController.store);
routes.put('/colors/:id', ColorController.update);
routes.delete('/colors/:id', ColorController.delete);

routes.get('/brands', BrandController.index);
routes.post('/brands', BrandController.store);
routes.put('/brands/:id', BrandController.update);
routes.delete('/brands/:id', BrandController.delete);

routes.get('/cars', CarsController.index);
routes.post('/cars', CarsController.store);
routes.put('/cars/:id', CarsController.update);
routes.delete('/cars/:id', CarsController.delete);

module.exports = routes;