var mysql = require('mysql');
var client = mysql.createConnection({
  host:'localhost',
  DATABASE:'mydb',
  user:'root',
  password:'1'
});
var name = process.argv[2];
//  通过\"来达成在查询语句中存在""的目的,否则查询失败
var queryString = 'SELECT * FROM Ajax_example WHERE name ='+'\"'+name+'\"';
console.log(queryString);
client.connect();
client.query('USE mydb');
client.query(queryString,function  putdata(err,data,fields){
  if(err){
    console.log(err);
  };
  if(data){
    // console.log(data);
    // console.log(data[0].name+'  '+data[0].age+'  '+data[0].sex+'  '+data[0].wpm);

  }
  client.end();
  var resultdata = data[0].name+'  '+data[0].age+'  '+data[0].sex+'  '+data[0].wpm;
  
  return resultdata;
});
