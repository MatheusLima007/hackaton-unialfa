const { Model, DataTypes } = require('sequelize');

class Brand extends Model {
  static init(sequelize) {
    super.init({
      name: DataTypes.STRING,
    }, {
      sequelize
    })
  }
}

module.exports = User;