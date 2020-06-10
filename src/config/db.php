<?php
  class db{
    // Properties
    private $db_host = 'localhost';
    private $db_user = 'youtid';
    private $db_pass = 'yourpassword';
    private $db_name = 'slimapp';
    
    // Connect
    public function connect(){
      $mysql_connect_str = "mysql:host=$this->db_host;dbname=$this->db_name";
      $dbConnection = new PDO($mysql_connect_str, $this->db_user, $this->db_pass);
      $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $dbConnection;
    }
  }