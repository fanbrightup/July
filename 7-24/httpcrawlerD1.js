// http://www.946bb.com/TXT01/index.html
var http = require('http');
var url = 'http://www.946bb.com/TXT01/index.html';
http.get(url,function(res){
  var html = '';
  res.on('data',function(data){
    html+=data;
  })
  res.on('end',function(){
    console.log(html);
  })
}).on('error',function(){
  console.log('获取课程出错');
})
