var util = require('util');
//  使用util.isArray()函数来判断是否是数组
console.log(util.isArray([])+'   '+
  // true
util.isArray(new Array)+'   '+
  // true
util.isArray({}));
  // false
