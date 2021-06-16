const Brand = require('../models/Brand');

module.exports = {
  async index(req , res) {
    const brands = await Brand.findAll();

    return res.json(brands);
  },

  async store(req , res) {
    const { brand } = req.body;

    const brandResponse = await Brand.create({ brand });

    return res.json(brandResponse); 
  },
  
   async update(req, res) {
    const brandParams  = req.params;
    const { brand } = req.body;

    const brandResponse = await Brand.update({ brand }, { where: { id: brandParams.id }}); 
    
    return res.json(brandResponse);
  },

  async delete(req, res) {
    const brandParams = req.params;

    await Brand.destroy({ where: { id: brandParams.id }})
    
    return res.json();

  }
};


