const mongoose=require('mongoose');

var todoSchema= new mongoose.Schema({
    caption:{
        type:String,
        required:'This field is required. '
    },
    iscompleted:{
        type:Boolean,
        default:false
    }
});

mongoose.model('TODO',todoSchema); 