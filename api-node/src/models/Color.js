const { Model, DataTypes } = require('sequelize');

class Color extends Model {
  static init(sequelize) {
    super.init({
      name: DataTypes.STRING,
    }, {
      sequelize
    })
  }
  static associate(models) {
    this.belongsTo(models.Cars, { foreignKey: 'cars_id', as: 'cars' });
  }
}

module.exports = Color;