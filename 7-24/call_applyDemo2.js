function Pet(words){
  this.words = words;
  this.speak = function(){
    console.log(this.words);
  }
}
function Dog(words){
  Pet.call(this,words);
}
var myDog = new Dog("wang");
myDog.speak();
