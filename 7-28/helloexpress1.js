var express = require('express');
var app = express();
app.get('/fan',function(req,res){
  res.end("hello world fanfan");
});
app.listen(3000);
