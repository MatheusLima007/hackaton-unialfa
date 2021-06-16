const { Model, DataTypes } = require('sequelize');

class User extends Model {
  static init(sequelize) {
    super.init({
      name: DataTypes.STRING,
      login: DataTypes.STRING,
      password: DataTypes.STRING,
    }, {
      sequelize
    });
  }
  static associate(models) {
    this.belongsTo(models.Cars, { foreignKey: 'user_id', as: 'user' });
  }
};

module.exports = User;