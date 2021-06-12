const User = require('../models/User');

module.exports = {
  async index(req, res) {
    console.log("a");
    const users = await User.findAll();
    
    return res.json(users);
  },

  async store(req, res) {
    const { name, login, password } = req.body;

    const user = await User.create({ name, login, password });

    return res.json(user);
  }
};