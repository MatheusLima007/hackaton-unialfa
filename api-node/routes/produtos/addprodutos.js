const express=require('express');
const router=express.Router();

router.get('/',(req,res)=>{
    res.render('addprodutos');
})

module.exports=router;