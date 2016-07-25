var http = require('http');
var options = {
  host:'localhost',// 主机填本地localhost或127.0.0.1
  port:3000,  //  端口就填服务端监听的端口
  path:'/about'
};
http.get(options,function(res){
  if(res.statusCode == 200){
    console.log("The site is up!");
  }else{
    console.log("The site is down!");
  }
}).on('error',function(e){
  console.log("There was an error:" + e.message);
});
