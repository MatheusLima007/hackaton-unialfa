const { Model, DataTypes } = require('sequelize');

class Brand extends Model {
  static init(sequelize) {
    super.init({
      brand: DataTypes.STRING,
    }, {
      sequelize
    })
  }
  static associate(models) {
    this.belongsTo(models.Cars, { foreignKey: 'brand_id', as: 'cars' });
  }
}

module.exports = Brand;