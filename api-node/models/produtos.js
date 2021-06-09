//const { Sequelize } = require("sequelize/types");

module.exports=(Sequelize,DataType)=>{
    const Produtos=Sequelize.define('Produtos',{
        id:{
            allowNull:false,
            primaryKey:true,
            autoIncrement:true,
            type:DataType.INTEGER
          },
          produto:{
            allowNull:false,
            type:DataType.STRING(80)
          },
          marca_id:{
            allowNull:false,
            type:DataType.INTEGER
          },
          descricao:{
            allowNull:true,
            type:DataType.TEXT
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
    },{});

    Produtos.associate=(models)=>{
        Produtos.belongsTo(models.Marcas,{
            foreingKey:'marca_id',
            targetKey:'id',
            as:'m'
        })
    };

    return Produtos;
}