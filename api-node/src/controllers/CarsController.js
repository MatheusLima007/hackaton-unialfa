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
    // const brandParams  = req.params;
    // const { brand } = req.body;

    // const brandResponse = await Brand.update({ brand }, { where: { id: brandParams.id }}); 
    
    // return res.json(brandResponse);
  },

  async delete(req, res) {
    // const brandParams = req.params;

    // await Brand.destroy({ where: { id: brandParams.id }})
    
    // return res.json();

  }
};