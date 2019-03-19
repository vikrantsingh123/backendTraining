//Include model model
require('./models/db');

const express=require('express');
const path=require('path');
const exphbs=require('express-handlebars');
const bodyparser=require('body-parser');
const toDoController=require('./controllers/toDoController');

var app=express();
//MiddleWare
app.use(bodyparser.urlencoded({
    extended:true
})).use(bodyparser.json());
// app.use(bodyparser.json());

app.use(express.static(path.join(__dirname, './views')));

app.set('views',path.join(__dirname,'/views/'));
app.engine('hbs',exphbs({extname:'hbs',defaultLayout:'mainLayout',layoutsDir: __dirname+'/views/layouts'}));
app.set('view engine','hbs');

app.listen(3001,()=>{
    console.log('Express server started at port: 3000');
});

app.use('/todos',toDoController);