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
}

module.exports = Cars;