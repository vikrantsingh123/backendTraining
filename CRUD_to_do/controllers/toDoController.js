const express = require('express');
var router = express.Router();
const mongoose = require('mongoose');
const TODO = mongoose.model('TODO');

router.get('/', (req, res) => {
    TODO.find((err, docs) => {
        if (!err) {
             res.render("layouts/mainLayout", {
                 list: docs
             });
            // res.send(JSON.stringify(docs));
            // console.log(docs);
        }
        else {
            console.log('Error in retrieving employee list :' + err);
        }
    });
});


router.post('/', (req, res) => {
    console.log("reached ");
    if (req.body._id == '')
        {   console.log("insert reached");
            insertRecord(req, res);
            
        }
        else{
            console.log("update called ");
        updateRecord(req, res);}
});

function insertRecord(req, res) {
    var task = new TODO();
    //console.log("Data inserted");
    task.caption = req.body.caption;
    task.save((err, doc) => {
        if (!err){
            // res.redirect('back');
            res.send(doc);
        }
        else {
            if (err.name == 'ValidationError') {
                handleValidationError(err, req.body);
                res.render("todos/", {
                    task: req.body
                });
            }
            else
                console.log('Error during record insertion : ' + err);
                res.redirect('back');
        }
    });
}

function updateRecord(req, res) {
    TODO.findOneAndUpdate({ _id: req.body._id }, req.body, { new: true }, (err, doc) => {
        if (!err) { res.redirect('/todos'); }
        else {
            if (err.name == 'ValidationError') {
                handleValidationError(err, req.body);
                res.render("/todos", {
                    viewTitle: 'Update Task',
                    task: req.body
                });
                res.send(doc);
            }
            else
                console.log('Error during record update : ' + err);
        }
    });
}

router.get('/delete/:id', (req, res) => {
    TODO.findByIdAndRemove(req.params.id, (err, doc) => {
        if (!err) {
            res.redirect('/todos');
        }
        else { console.log('Error in employee delete :' + err); }
    });
});

module.exports =router;