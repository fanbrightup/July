function pet(words){
  this.words = words;
  this.speak = function(){
    console.log(words);
    console.log(this);//  this指向函数的拥有者
  }
}
var cat =new pet("miao").speak();
