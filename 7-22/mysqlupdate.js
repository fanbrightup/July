var mysql  = require('mysql');

var connection = mysql.createConnection({
  host     : '127.0.0.1',
  user     : 'root',
  password : '1',      
  port: '3306',
  database: 'my_news_test',
});

connection.connect();

var userModSql = 'UPDATE node_user SET name = ?,age = ? WHERE id = ?';
var userModSql_Params = ['Hello World',99,7];
//改 up
connection.query(userModSql,userModSql_Params,function (err, result) {
   if(err){
         console.log('[UPDATE ERROR] - ',err.message);
         return;
   }
  console.log('----------UPDATE-------------');
  console.log('UPDATE affectedRows',result.affectedRows);
  console.log('******************************');
});

connection.end();
