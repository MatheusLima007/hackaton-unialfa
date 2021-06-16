const Brand = require('../models/Brand');
const Car = require('../models/Cars');
const Color = require('../models/Color');

module.exports = {
  async index(req, res) {
    const cars = await Car.findAll();

    return res.json(cars);
  },

  async store(req, res) {
    const { user_id, color_id, brand_id, model, model_year, fabrication, price, type, image } = req.body;

    const car = await Car.create({ 
      user_id, 
      color_id, 
      brand_id, 
      model, 
      model_year, 
      fabrication, 
      price, 
      type, 
      image 
    });

    return res.json(car);
  },

  async update(req, res) {
    const carParams  = req.params;
    const { 
      user_id, 
      color_id, 
      brand_id, 
      model, 
      model_year, 
      fabrication, 
      price, 
      type, 
      image  
    } = req.body;

    const carResponse = await Car.update({ user_id, 
      color_id, 
      brand_id, 
      model, 
      model_year, 
      fabrication, 
      price, 
      type, 
      image  }, { where: { id: carParams.id }}); 

    return res.json(carResponse);
  },

  async delete(req, res) {
    const carParams = req.params;

    await Car.destroy({ where: { id: carParams.id }})
    
    return res.json();


  }
};