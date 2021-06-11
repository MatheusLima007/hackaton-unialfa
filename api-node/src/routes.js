const express = require('express');

const UserController = require('./controllers/UserController');
const CarsController = require('./controllers/CarsController');

const routes = express.Router();

routes.get('/users', UserController.index);
routes.post('/users', UserController.store);

routes.get('/cars', CarsController.index);
routes.post('/cars', CarsController.store);

routes.get('/color', ColorController.index);
routes.get('/color', ColorController.store);

/*routes.get('/users/:user_id/addresses', AddressController.index);
routes.post('/users/:user_id/addresses', AddressController.store);*/

module.exports = routes;