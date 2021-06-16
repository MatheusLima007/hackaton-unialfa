const Color = require('../models/Color');

module.exports = {
  async index(req , res) {
    const colors = await Color.findAll();

    return res.json(colors);
  },

  async store(req , res) {
    const { color } = req.body;

    const colorResponse = await Color.create({ color });

    return res.json(colorResponse); 
  }
};