var http = require('http');
http.createServer(function(req,res){
    res.writeHead(301,{
      'Location':'file:///home/my/Desktop/July/7-25/hello.html'
    });
    res.end();
}).listen(3000).on('error',function(e){
  console.log("本次错误"+e.message)
});
console.log('Server running port:3000');
