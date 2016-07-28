var http = require('http');
var options = {
  host:"henanese.top",
  port:80,
  path:'/'
}
  //  http.get()返回一个req对象
  var req = http.get(options,function(res){
    console.log('Will this get called');
  });
  console.log(req);

  req.on('error',function(){
    console.log('Will we catch an error');
  })
