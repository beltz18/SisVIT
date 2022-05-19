<?php
class User extends Database {
  public function login($usr,$psw) {
    $sql = "SELECT * FROM usuario WHERE usr_usr = '$usr' AND psw_usr = '$psw';";
    $con = parent::connect()->query($sql);
    $num = $con->num_rows;
    if($num > 0) {
      $row = $con->fetch_assoc();
      $_SESSION['active'] = true;
      $_SESSION['usr']    = $row['usr_usr'];
      // header('Location: ./index.php');
      return $row;
    } else {
      return 0;
    }
  }
}