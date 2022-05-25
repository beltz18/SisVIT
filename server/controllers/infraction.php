<?php
include '../models/conexion.php';
$DB = new Database();

$ced = $_POST['ced'];
$nom = $_POST['nom'];
$plc = $_POST['plc'];
$mod = $_POST['mod'];
$num = $_POST['num'];
$val = $_POST['val'];

$sql = "
INSERT INTO
  multa
(ced_per,nom_inf,mul_mul,plc_veh,mod_veh,tlf_per)
  VALUES
('$ced', '$nom', '$val', '$plc', '$mod', '$num');";

$a = $DB->execute($sql);
echo $a;