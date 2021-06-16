const User = require('../models/User');

module.exports = {
  async index(req, res) {
    const users = await User.findAll();
    
    return res.json(users);
  },

  async store(req, res) {
    const { name, login, password } = req.body;

    const user = await User.create({ name, login, password });

    return res.json(user);
  },

  async update(req, res) {
    const userParams  = req.params;
    const { name, login, password } = req.body;

    const userReponse = await User.update({ name, login, password }, { where: { id: userParams.id }}); 

    return res.json(userReponse);
  },

  async delete(req, res) {
    const userParams = req.params;

    await User.destroy({ where: { id: userParams.id }})
    
    return res.json();

  }
};