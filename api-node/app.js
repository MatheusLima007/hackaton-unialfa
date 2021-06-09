const createError = require('http-errors');
const express = require('express');
const path = require('path');
const cookieParser = require('cookie-parser');
const logger = require('morgan');

const indexRouter = require('./routes/index');
const usersRouter = require('./routes/users');
const cadastroRouter=require('./routes/cadastro');
const saveRouter=require('./routes/save');
const listRouter=require('./routes/list');
const editRouter=require('./routes/edit');
const updateRouter=require('./routes/update');
const trashRouter=require('./routes/trash');
const loginRouter=require('./routes/login');
const checkRouter=require('./routes/checklogin');

//instancia da rota de marcas
const marcasRouter=require('./routes/marcas/marcas');
const addMarcaRouter=require('./routes/marcas/addmarcas');
const saveMarcasRouter=require('./routes/marcas/savemarcas');
//const editMarcasRouter=require('./routes/marcas/editmarcas');
const listMarcasRouter=require('./routes/marcas/list');

//instancia rota produtos
const addProdutosRouter=require('./routes/produtos/addprodutos');


const app = express();

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: true }));
app.use(cookieParser());

app.use('/static',
express.static(path.resolve('./public')));

app.use('/static',
express.static(path.resolve('./node_modules/bootstrap')));
app.use('/static',express.static(path.resolve('./node_modules/@popperjs/core')));
app.use('/static',express.static(path.resolve('./node_modules/font-awesome')));

app.use('/', indexRouter);
app.use('/users', usersRouter);
app.use('/cadastro',cadastroRouter);
app.use('/save',saveRouter);
app.use('/list',listRouter);
app.use('/edit',editRouter);
app.use('/update',updateRouter);
app.use('/trash',trashRouter);
app.use('/login',loginRouter);
app.use('/check_login',checkRouter);


//uso da rota marcas
app.use('/marcas',marcasRouter);
app.use('/add_marcas',addMarcaRouter);
app.use('/save_marcas',saveMarcasRouter);
//app.use('/edit_marcas',editMarcasRouter);
app.use('/list_marcas',listMarcasRouter);

//uso da rota produtos

app.use('/add_produtos',addProdutosRouter);


// catch 404 and forward to error handler
app.use(function(req, res, next) {
  next(createError(404));
});

// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get('env') === 'development' ? err : {};

  // render the error page
  res.status(err.status || 500);
  res.render('error');
});

module.exports = app;
