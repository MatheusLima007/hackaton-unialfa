const {Users} =require('../models');

module.exports={

    show:async(req,res)=>{
        const results=await Users.findAll({
            where:{ativo:true},
            attributes:['id','nome','email']
        });

        //console.log(results);
        res.json(results);
        

    },
    view:async (req,res)=>{
        const results=await Users.findAll({
            where:{ativo:true},
            attributes:['id','nome','email']
        });

        res.render('index',{data:results});
    }
}