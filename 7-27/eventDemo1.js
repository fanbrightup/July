var EventEmitter = require('events').EventEmitter;
var life = new EventEmitter();
// life.setMaxListeners(15);
life.on('求安慰',function(who){
  console.log('给 '+who+' 倒水1' );
});
life.on('求安慰',function(who){
  console.log('给 '+who+' 倒水1' );
});
life.on('求安慰',function(who){
  console.log('给 '+who+' 倒水1' );
});
life.defaultMaxListeners;
life.on('求安慰',function(who){
  console.log('给 '+who+' 倒水1' );
});
life.on('求安慰',function(who){
  console.log('给 '+who+' 倒水1' );
});
life.setMaxListeners(6);

life.on('求安慰',function(who){
  console.log('给 '+who+' 倒水1' );
});
life.on('求安慰',function(who){
  console.log('给 '+who+' 倒水1' );
});
life.on('求安慰',function(who){
  console.log('给 '+who+' 倒水1' );
});
life.on('求安慰',function(who){
  console.log('给 '+who+' 倒水1' );
});
life.on('求安慰',function(who){
  console.log('给 '+who+' 倒水1' );
});
life.on('求安慰',function(who){
  console.log('给 '+who+' 倒水1' );
});
life.on('求安慰',function(who){
  console.log('给 '+who+' 倒水1' );
});
life.on('求安慰',function(who){
  console.log('给 '+who+' 倒水1' );
});
life.on('求安慰',function(who){
  console.log('给 '+who+' 倒水1' );
});
life.on('求安慰',function(who){
  console.log('给 '+who+' 倒水1' );
});
life.on('求溺爱',function(who){
  console.log('给 '+who+' 花钱' );
});
function daji(who){
  console.log('给 '+who+' 打击' );
}
life.on('求打击',daji);
life.on('求打击',daji);
life.on('求打击',daji);
life.on('求打击',daji);
life.on('求打击',daji);

//  移除所有的事件监听器
// life.removeAllListeners();
//  移除所有'求安慰'的事件
var count = EventEmitter.listenerCount(life,'求打击');
console.log('求打击个数'+count);
life.removeAllListeners('求安慰');

life.emit('求安慰','我');
life.emit('求溺爱','溺爱的人');
// 通过removeListener来移除,只能移除具名函数,不能移除匿名函数
// life.removeListener('求打击',daji);//  加上函数名
life.emit('求打击','打击的人');
