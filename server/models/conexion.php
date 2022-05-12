<?php
session_start();
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
}