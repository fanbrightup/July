var mysql  = require('mysql');

var connection = mysql.createConnection({
  host     : '127.0.0.1',
  user     : 'root',
  password : '1',
  port: '3306',
  database: 'my_news_test',
});

connection.connect();

var  userGetSql = 'SELECT * FROM node_user';
//查 query
connection.query(userGetSql,function (err, result) {
        if(err){
          console.log('[SELECT ERROR] - ',err.message);
          return;
        }

       console.log('---------------SELECT----------------');
       console.log(result);
       console.log('$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$');
});

connection.end();
