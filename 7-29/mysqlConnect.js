var mysql = require('mysql');
var connection = mysql.createConnection({
  host:"localhost",
  database:"mydb",
  user:"root",
  password:"1"
});
connection.connect();
connection.query('INSERT INTO mytab1 (id,name) VALUES (3,"wangwu")')
connection.query('SELECT * FROM mytab1',function (err,rows,field){
  if(err) return console.log(err.message);
  console.log(rows);
})
