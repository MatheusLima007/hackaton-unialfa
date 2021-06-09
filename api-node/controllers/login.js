const {Users} =require('../models');
const bcrypt=require('bcryptjs');


module.exports={

    check:async(req,res)=>{
        const email=req.body.email;
        const senha=req.body.senha;
        
        const result=await Users.findOne(
            {where:{
                ativo:true,
                email:email
            }
        }
        );

        if(result === null){
            let message={message:'Email não encontrado'};

            res.render('error',message);
        }else{
            let compara=await bcrypt.compare(senha,result.senha);

            if(compara===true){
                res.redirect('/');
            }

        }

        
        
    }
}
