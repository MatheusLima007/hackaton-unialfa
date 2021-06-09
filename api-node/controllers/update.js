const {Users}=require('../models');

module.exports={

    update: async (req,res)=>{
        const param=req.body.id;

        const data={
            nome:req.body.nome,
            email:req.body.email,
            senha:req.body.senha,
        }
        
        let atualiza= await Users.update(data,{
            where:{id:param}
        })

        res.redirect('/');
    },
    trash:async(req,res)=>{
        const param=req.body.id;

        const data={
            ativo:false
        }

        let result=await Users.update(data,{
            where:{id:param,ativo:true},
            attributes:['nome','email']
        });

        let find=await Users.findAll({
            where:{ativo:true},
            attributes:['id','nome','email']

        })

        res.json(find);



    }
}