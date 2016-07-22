var mysql  = require('mysql');
var h = require('http');

var connection = mysql.createConnection({
  host     : '127.0.0.1',
  user     : 'root',
  password : '1',
  port: '3306',
  database: 'my_news_test',
});

connection.connect();

var  userDelSql = 'DELETE FROM node_user WHERE id = 2';
//ɾ
connection.query(userDelSql,function (err, result) {
        if(err){
          console.log('[DELETE ERROR] - ',err.message);
          return;
        }

       console.log('-------------DELETE--------------');
       console.log('DELETE affectedRows',result.affectedRows);
       console.log('&&&&&&&&&&&&&&&&&');
});

connection.end();
