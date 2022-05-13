<?php
include '../models/conexion.php';
$DB  = new Database();
$val = $_POST['ced'];

if ($val == "all") {
  $sql = "SELECT * FROM multa;";
} else {
  $sql = "SELECT * FROM multa WHERE ced_per LIKE '%$val%' OR mul_mul LIKE '%$val%' OR plc_veh LIKE '%$val%' OR mod_veh LIKE '%$val%' OR tlf_per LIKE '%$val%';";
}

$a   = $DB->getLikeData($sql);
echo json_encode($a);