//package org.gsfan.clustermonitor.dbconnector;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

public class MysqlConnector {

    private String userName = "root";
    private String passwd = "1";
    private String sql = null;

    private Connection connection = null;
    private PreparedStatement preStatement = null;
    private ResultSet resultSet = null;

  //  private static final String dbDriver = "com.mysql.jdbc.Driver";
  private static final String dbDriver = "org.gjt.mm.mysql.Driver";
//  private static final String dbURL = "jdbc:mysql://192.168.233.130:3306/clusteruser";
    private static final String dbURL = "jdbc:mysql://localhost:3306/MY1";//使用主机IP会出错，这是为什么？

    public MysqlConnector(String userName, String passwd){
        this.userName = userName;
        this.passwd = passwd;

        try {
            Class.forName(dbDriver) ;
        } catch (ClassNotFoundException e1) {
            e1.printStackTrace();
        }

//      String sql = "insert into clusteruser values(2,'gsfan','0620631FGS')";

        try {

            connection = DriverManager.getConnection(dbURL, this.userName, this.passwd);

//          preStatement = connection.prepareStatement(sql);
//          preStatement.executeUpdate();

            sql = "select * from MY1";
            preStatement = connection.prepareStatement(sql);
            resultSet = preStatement.executeQuery();

            while(resultSet.next()){//没有resultSet.next()会出现异常
                System.out.println("userName = "+resultSet.getString(2)+"\t password = "+resultSet.getString(3));
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public static void main(String[] args){
        MysqlConnector connector = new MysqlConnector("root", "0620631FGS");
    }
}
