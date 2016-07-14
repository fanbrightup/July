import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
public class ConnectionDemo1 {
// 定义MySQL的数据库驱动程序
public static final String DBDRIVER = "org.gjt.mm.mysql.Driver" ;
// 定义MySQL数据库的连接地址
public static final String DBURL = "jdbc:mysql://localhost:3306/mldn" ;
// MySQL数据库的连接用户名
public static final String DBUSER = "root" ;
// MySQL数据库的连接密码
public static final String DBPASS = "mysqladmin" ;
public static void main(String[] args) {
Connection conn = null ;
// 数据库连接
Class.forName(DBDRIVER) ;
// 加载驱动程序,有异常
// 连接MySQL数据库时,要写上连接的用户名和密码,有异常
conn = DriverManager.getConnection(DBURL, DBUSER, DBPASS); // 有异常
System.out.println(conn) ;
conn.close() ;
// 数
}
}
