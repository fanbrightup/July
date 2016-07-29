process.on('exit', function(code) {

  // 以下代码永远不会执行
  setTimeout(function() {
    console.log("该代码不会执行");
  }, 0);

  // console.log('退出码为:', code);
});
console.log("程序执行结束");
// console.log(process.argv[0]);
// console.log(process.argv[1]);
// console.log(process.env);
console.log(process.execPath);
console.log(process.platform);
console.log(process.stdout.write("hhhhh"+"/n"));
//  使用foreach
process.argv.forEach(function(val, index, array) {
   console.log(index + ': ' + val);
});
//  输出node已经运行的时间
console.log(process.uptime());
// 输出当前目录
console.log('当前目录: ' + process.cwd());

// 输出当前版本
console.log('当前版本: ' + process.version);

// 输出内存使用情况
console.log(process.memoryUsage());
