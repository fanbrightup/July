var c = 0;
function print(){
  console.log(c);
}
//  填入callback参数,也可以是任何参数,然后在函数体中,调用callback()函数即可
function plus(mycall){
setTimeout( function(){
  c += 1;
  mycall();
},1000);
}

plus(print);
// print();
