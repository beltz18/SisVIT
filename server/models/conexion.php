<?php
session_start();
error_reporting();
class Database {
  private $host;
  private $user;
  private $pass;
  private $dbname;

  public function __construct() {
    $this->host = 'localhost';
    $this->user = 'root';
    $this->pass = '';
    $this->dbname = 'sisvit';
  }

  public function connect () {
    $conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
    if($conn->connect_errno):
      echo "Error de conexión a la base de datos";
    endif;
    return $conn;
  }

  public function execute ($sql) {
    if ($con = $this->connect()->query($sql)) {
      return true;
    } else {
      return false;
    }
  }

  public function getAllData($sql) {
    if ($con = $this->connect()->query($sql)) {
      if ($con->num_rows>0) {
        $res = $con->fetch_assoc();
      }else{
        $res = "dont";
      }
      return $res;
    }
  }
}