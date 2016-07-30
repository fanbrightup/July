var util = require('util');

console.log(
util.isError(new Error())+'  '+
  // true
util.isObject(new TypeError())+'  '+
  // true
util.isFunction(function b(){ name: 'Error'; message: 'an error occurred' })
  // false
);
