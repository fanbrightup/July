var util = require('util');
console.log(

util.isRegExp(/some regexp/)+'   ' +
  // true
util.isRegExp(new RegExp('another regexp'))+'  '+
  // true
util.isRegExp({})
  // false
);
