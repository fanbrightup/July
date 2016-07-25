var http = require('http');

http.createServer(function(req,res){
  res.writeHead(200,{'Content-Type':'text/plained'});
  res.end("hello world");
}).listen(3000);
console.log('server running at http://localhost:3000');
