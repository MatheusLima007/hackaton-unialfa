const { Model, DataTypes } = require('sequelize');

class Cars extends Model {
  static init(sequelize) {
    super.init({
      model: DataTypes.STRING,
      model_year: DataTypes.YEAR,
      fabrication_year: DataTypes.YEAR,
      price: DataTypes.DOUBLE,
      type: DataTypes.ENUM,
      spotlight_photo: DataTypes.STRING,
    }, {
      sequelize
    })
  }

  static associate(models) {
    this.belongsTo(models.User, { foreignKey: 'user_id', as: 'user' });
    this.belongsTo(models.Color, { foreignKey: 'color_id', as: 'color' });
    this.belongsTo(models.Brand, { foreignKey: 'brand_id', as: 'brand' });
  }
}

module.exports = Cars;