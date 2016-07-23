var fs = require('fs');// 调用filesystem这个全局模块
var buffer = fs.readFileSync(process.argv[2]);//  路径不加引号
var  str = buffer.toString().split("\n");
console.log(str.length-1);

//  官方答案
// var fs = require('fs')
//
//      var contents = fs.readFileSync(process.argv[2])
//      var lines = contents.toString().split('\n').length - 1
//      console.log(lines)

     // note you can avoid the .toString() by passing 'utf8' as the
     // second argument to readFileSync, then you'll get a String!
     //
     // fs.readFileSync(process.argv[2], 'utf8').split('\n').length - 1
