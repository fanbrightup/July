//#version 1.0
// var fs = require('fs');
// var str;
// function mycall(callback){
// fs.readFile(process.argv[2],function myasync(err,data){
//   if(err){
//     console.log(err);
//   }
//   str = data.toString().split("\n");
//   callback();
// })
// }
// function logNumber(){
//   console.log(str.length-1);
// }
// mycall(logNumber);

//#version 2.0
var fs = require('fs');
var str;
//  传入utf8直接生成string对象,否则生成的是一个Buffer对象
fs.readFile(process.argv[2],'utf8',function myasync(err,data){
  if(err){
    console.log(err);
  }
  console.log(data.split("\n").length-1);

})
