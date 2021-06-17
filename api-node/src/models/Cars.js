const { Model, DataTypes } = require('sequelize');

class Cars extends Model {
  static init(sequelize) {
    super.init({
      user_id: DataTypes.INTEGER, 
      color_id: DataTypes.INTEGER, 
      brand_id: DataTypes.INTEGER,
      model: DataTypes.STRING,
      model_year: DataTypes.DATE,
      fabrication: DataTypes.DATE,
      price: DataTypes.DOUBLE,
      type: DataTypes.BOOLEAN,
      image: DataTypes.STRING,
    }, {
      sequelize
    })
  }
  static associate(models) {
    this.belongsTo(models.Brand, { foreignKey: 'brand_id', as: 'Brand' });
    this.belongsTo(models.Color, { foreignKey: 'color_id', as: 'Color' });
  }
}

module.exports = Cars;