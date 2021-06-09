const {Users} =require('../models');
const bcrypt=require('bcryptjs');

module.exports={
    save:async(req,res)=>{

        let senhaLimpa=req.body.senha;
        const salt=bcrypt.genSaltSync(10);
        const senha=bcrypt.hashSync(senhaLimpa,salt);

        console.log(senha);
        
        const data={
            nome:req.body.nome,
            email:req.body.email,
            senha:senha,
            ativo:true
        };
        
        const results=await Users.create(data);

        console.log(results);
        res.redirect('/');

        //console.log(req.body.nome);
    } 
}