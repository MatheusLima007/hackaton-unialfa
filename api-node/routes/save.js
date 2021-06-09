const express=require('express');
//const insert = require('../controllers/insert');
const router=express.Router();
const users=require('../controllers/insert')

router.post('/',users.save);

module.exports=router;