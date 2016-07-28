var http = require('http');
var options = {
  host:"henanese.top",
  port:80,
  path:'/'
}
//  使用try/catch不能捕获到发生的错误,因为错误发生在js代码外面
try{
  http.get(options,function(res){
    console.log('Will this get called');
  });
}
catch(e){
  console.log('Will we catch an error');
}
