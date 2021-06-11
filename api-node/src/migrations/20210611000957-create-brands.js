'use strict';

module.exports = {
  up: async (queryInterface, Sequelize) => {
    await queryInterface.createTable('brands', { 
      id: {
        type: Sequelize.INTEGER,
        primaryKey: true,
        autoIncrement: true,
        allowNull: false,
      },
      brand: {
        type: Sequelize.STRING,
        allowNull: false,
      }
   });
 },

  down: async (queryInterface, Sequelize) => {
    await queryInterface.dropTable('brands');
  }
};
