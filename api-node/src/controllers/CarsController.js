const Car = require('../models/Cars');
const Brand = require('../models/Brand');
const Color = require('../models/Color');

module.exports = {
  async index(req, res) {
    const cars = await Car.findAll({ 
      order: [['id', 'DESC']], 
      include: [
        {
          model: Brand,
          as: 'Brand',
          required: true
        },
        {
          model: Color,
          as: 'Color',
          required: true
        }
      ] 
    });

    return res.json(cars);
  },

  async getByid(req, res) {
    const carParams  = req.params;
    
    const car = await Car.findAll({ 
      include: [
        {
          model: Brand,
          as: 'Brand',
          required: true
        },
        {
          model: Color,
          as: 'Color',
          required: true
        }
      ],
      where: {
        id: carParams.id
      }
    })

    return res.json(car);
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