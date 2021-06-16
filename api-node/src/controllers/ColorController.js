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
  },

  async update(req, res) {
    const colorParams  = req.params;
    const { color } = req.body;

    const colorResponse = await Color.update({ color }, { where: { id: colorParams.id }}); 
    
    return res.json(colorResponse);
  },

  async delete(req, res) {
    const colorParams = req.params;

    await Color.destroy({ where: { id: colorParams.id }})
    
    return res.json();

  }
};