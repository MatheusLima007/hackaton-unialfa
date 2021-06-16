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
  
   async put(req, res) {
    const brand  = req.params; // recupera o index com os dados
    
    brand[index] = brand; // sobrepõe o index obtido na rota de acordo com o novo valor
    
    return res.json(brand);
  },

  async delete( req, res) {
    const { brand_id } = req.params;
    const Brand = req.body;

    Brand.destroy({ where: { id: brand_id }});
    
    return res.json();

  }
};


