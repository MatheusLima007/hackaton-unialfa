const express = require('express');
const router = express.Router();
const find=require('../controllers/find');

router.get('/',find.view);



module.exports = router;
