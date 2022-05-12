<?php
if (isset($_POST['btn_login'])) {
  $usr = $_POST['usr'];
  $psw = $_POST['psw'];

  $a = $user->login($usr,md5($psw));
  echo $a;
}