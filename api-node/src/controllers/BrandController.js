const Brand = require('../models/Brand');

module.exports = {
  async index(req , res) {
    const brands = await Brand.findAll();

    return res.json(brands);
  },

  async store(req , res) {
    console.log(req.body);
    const { brand } = req.body;

    const brandResponse = await Brand.create({ brand });

    return res.json(brandResponse); 
  }
};