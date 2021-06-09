module.exports=(Sequelize,DataType)=>{
    const Users=Sequelize.define('Users',{
        id:{
            allowNull:false,
            primaryKey:true,
            autoIncrement:true,
          type:DataType.INTEGER      
        },
        nome:{
          allowNull:false,
          type:DataType.STRING(150)
        },
        email:{
          allowNull:false,
          type:DataType.STRING(70)
        },
        senha:{
          allowNull:false,
          type:DataType.STRING(61)
        },
        ativo:{
          allowNull:false,
          type:DataType.BOOLEAN
        },
        
    });
    return Users;
}