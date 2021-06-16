const Car = require('../models/Cars');

module.exports = {
  async index(req, res) {
    const cars = await Car.findAll();

    return res.json(cars);
  },

  async store(req, res) {
    const { model, model_year, fabrication, price, type, image } = req.body;

    const car = await Car.create({ model, model_year, fabrication, price, type, image });

    return res.json(car);
  }
};