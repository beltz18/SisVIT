<?php
include '../models/conexion.php';
$DB  = new Database();
$ced = $_POST['ced'];
$sql = "SELECT * FROM persona WHERE ced_per = '$ced';";
$a   = $DB->getAllData($sql);
echo json_encode($a);