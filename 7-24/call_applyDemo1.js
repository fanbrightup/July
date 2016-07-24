var pet = {
  words : "miao",
  speak : function(say){
    console.log(say+' '+this.words);
  }
}
// var dog = {
//   words: "wang"
// }
pet.speak("speak");
