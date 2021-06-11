const Brand = require('../models/Brand');

module.exports = {
  async index(req, res) {
    const brands = await Brand.findAll();

    return res.json(brands);
  },

  async store(req, res) {
    const { name } = req.body;

    const brand = await Brand.create({ name });

    return res.json(brand);
  }
};