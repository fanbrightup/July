console.info("程序开始执行：");

var counter = 10;
console.log("计数: %d", counter);

console.time("获取数据");
//
// 执行一些代码
//
//  利用Date对象来获取时间
function sleep(seconds){
  var nowTime = Date.now();
  while(Date.now() - nowTime < seconds){

  }
}
sleep(2);
console.timeEnd('获取数据');

console.info("程序执行完毕。")
