//const { Sequelize } = require("sequelize/types");

module.exports=(Sequelize,DataType)=>{

    const Marcas=Sequelize.define('Marcas',{
        id:{
            allowNull:false,
            primaryKey:true,
            autoIncrement:true,
            type:DataType.INTEGER
          },
          marca:{
            allowNull:false,
            type:DataType.STRING(60)
          },
          ativo:{
            allowNull:false,
            type:DataType.BOOLEAN
          },
          createdAt:{
            allowNull:false,
            type:DataType.DATE
          },
          updatedAt:{
            allowNull:false,
            type:DataType.DATE
          },
    })

    return Marcas
}