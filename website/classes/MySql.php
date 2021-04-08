<?php
  class Generate{
    function generate_database(){
      #STRUCTURE DATABASE
      #CREATE DATABASE
      $conn = new mysqli("db", "root", "root");
      $sql =  "CREATE DATABASE phantomcms";
      $result = $conn->query($sql);

      #CREATE TABLE
      $conn = new mysqli("db", "root", "root", "phantomcms");
      $sql =  "CREATE TABLE `tb.admin_users` (id INT  NOT NULL AUTO_INCREMENT, user VARCHAR(40) NOT NULL, password VARCHAR(40) NOT NULL, PRIMARY KEY (id))";
      $result = $conn->query($sql);

      #INSERT DATA
      $sql = "INSERT INTO `tb.admin_users` (id, user, password) VALUES(1,'admin', 'admin')";
      $result = $conn->query($sql);
    }
  }

  class MySql{    
    private static $pdo;

    public static function conectar(){
      if(self::$pdo == null){
        try
          {
            self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD);
            self::$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          }
        catch(Exception $err)
          {
            echo 'erro ao se conectar:'.$err->getMessage();
          }
      }
      return self::$pdo;
    }
  }
?>