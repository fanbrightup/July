var express = require('express');
var app = new express();
app.get('/',function(req,res){
  res.end('Hello myapp1.0');
});
app.listen(3000);
