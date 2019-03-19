const mongoose=require('mongoose');
 mongoose.connect('mongodb://localhost:27017/TodoDB',{useNewUrlParser:true},(err)=>{
     if(!err){console.log('MongoDB Connection Succeeded.')}
     else {console.log('Err in db connection :'+err)}
 }); 

 require('./todo.model');
 