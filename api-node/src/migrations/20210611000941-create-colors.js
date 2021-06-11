'use strict';

module.exports = {
  up: async (queryInterface, Sequelize) => {
    await queryInterface.createTable('colors', { 
      id: {
        type: Sequelize.INTEGER,
        primaryKey: true,
        autoIncrement: true,
        allowNull: false,
      },
      color: {
        type: Sequelize.STRING,
        allowNull: false,
      }
   });
 },

  down: async (queryInterface, Sequelize) => {
    await queryInterface.dropTable('colors');
  }
};
