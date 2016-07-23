function Person(name,age,job){
  this.name = name;
  this.age = age;
  this.job = job;
  this.sayName = function(){
    console.log(this.name);
  }
}
Person("grey",27,"Doctor");
window.sayName();
