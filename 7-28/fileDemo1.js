var fs = require('fs');
fs.readFile('a.txt','utf8',function(err,data){
  console.log(data);
});
fs.readFile('b.txt','utf8',function(err,data){
  console.log(data);
});
