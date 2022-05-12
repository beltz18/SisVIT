<?php
if (isset($_POST['btn_inf'])) {
  $ced = $_POST['ced'];
  $nom = $_POST['nom'];
  $plc = $_POST['plc'];
  $mod = $_POST['mod'];
  $num = $_POST['num'];

  $ch1 = $_POST['ch1'];
  $ch2 = $_POST['ch2'];
  $ch3 = $_POST['ch3'];

  echo $ch1.$ch2.$ch3;
}
