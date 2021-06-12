const { Model, DataTypes } = require('sequelize');

class Color extends Model {
  static init(sequelize) {
    super.init({
      color: DataTypes.STRING,
    }, {
      sequelize
    });
  }
  static associate(models) {
    this.belongsTo(models.Cars, { foreignKey: 'color_id', as: 'cars' });
  }
};

module.exports = Color;