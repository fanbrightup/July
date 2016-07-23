// console.log(arguments[0]+arguments[1]);
// console.log(process.argv[0]);
// console.log(process.argv[1]);
// console.log(parseInt(process.argv[2])
//   +parseInt(process.argv[3])
 // +Number(process.argv[3])
// );
var result = 0;
for(var i = 2;i<process.argv.length;i++){
  result += Number(process.argv[i]);
}
console.log(result);
