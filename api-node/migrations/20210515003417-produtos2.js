'use strict';

module.exports = {
  up: async (queryInterface, Sequelize) => {
    return queryInterface.createTable('Produtos',{
      id:{
        allowNull:false,
        primaryKey:true,
        autoIncrement:true,
        type:Sequelize.INTEGER
      },
      produto:{
        allowNull:false,
        type:Sequelize.STRING(80)
      },
      marca_id:{
        allowNull:false,
        type:Sequelize.INTEGER
      },
      descricao:{
        allowNull:true,
        type:Sequelize.TEXT
      },
      ativo:{
        allowNull:false,
        type:Sequelize.BOOLEAN
      },
      createdAt:{
        allowNull:false,
        type:Sequelize.DATE
      },
      updatedAt:{
        allowNull:false,
        type:Sequelize.DATE
      },
    })
  },

  down: async (queryInterface, Sequelize) => {
    /**
     * Add reverting commands here.
     *
     * Example:
     * await queryInterface.dropTable('users');
     */
  }
};
