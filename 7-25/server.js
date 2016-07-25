var http = require('http');
var url = require('url');

http.createServer(function(req,res){
  var pathname = url.parse(req.url).pathname;
  if(pathname === '/'){
    res.writeHead(200,{'Content-Type':'text/plained'});
    res.end('Home Page\n');
  }else if(pathname ==='/about' ){
    res.writeHead(200,{'Content-Type':'text/plained'});
    res.end('About us\n');
  }else if(pathname === '/redirect'){
    res.writeHead(301,{'Location':'/'});
    res.end();
  }else {
    res.writeHead(404,{'Content-Type':'text/plained'});
    res.end('Page not found\n');
  }
  res.writeHead(200,{'Content-Type':'text/plained'});
  res.end("hello world");
}).listen(3000,"127.0.0.1").on('error',function(error){
  console.log(error);
});
console.log('server running at http://localhost:3000');
