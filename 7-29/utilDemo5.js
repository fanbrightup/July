
  var util = require('util');

  console.log(
  util.isDate(new Date())+'  '+
    // true
  util.isDate(Date())+'   '+
    // false (without 'new' returns a String)
  util.isDate({})
    // false
);
console.log(typeof( new Date()));
console.log(typeof(Date()));
