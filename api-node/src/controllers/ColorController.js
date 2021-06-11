const Color = require('../models/Color');

module.exports = {
  async index(req, res) {
    const colors = await Color.findAll();

    return res.json(colors);
  },

  async store(req, res) {
    const { name } = req.body;

    const color = await Color.create({ name });

    return res.json(color);
  }
};