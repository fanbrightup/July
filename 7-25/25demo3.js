//  同步执行,也叫阻塞代码
var http = require('http');

function sleep(milliseconds){
  var start = new Date().getTime();
  while((new Date().getTime() - start) < milliseconds){ //产生延时

  }
}

function fetchPage(){
  console.log('fetecing page');
  sleep(2000);  //形成阻塞
  console.log('data returned from page');
}
function fetchApi(){
  console.log('fetching api');
  sleep(2000);
  console.log('data returned from api');

}
fetchPage();
fetchApi();
