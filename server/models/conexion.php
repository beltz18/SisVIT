<?php
session_start();
error_reporting(0);
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

  public function renderingMultTable($sql) {
    $view = "";
    $con  = $this->connect()->query($sql);
    if ($con->num_rows<=0) {
      $view = "
              <tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>
                <td class='px-6 py-3' colspan='5'>
                  <b>No se encontró coincidencias</b>
                </td>
              </tr>";
    } else {    
      while ($res = $con->fetch_assoc()):
        $ced = $res['ced_per'];
        $co1 = $this->connect()->query("SELECT nam_per FROM persona WHERE ced_per = '$ced';");
        $re1 = $co1->fetch_assoc();
        $view .= "
              <tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>
                <th scope='row' class='px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap' id='nombre'>
                  ".$re1['nam_per']."
                </th>
                <td class='px-6 py-4' id='cedula'>
                  ".$res['ced_per']."
                </td>
                <td class='px-6 py-4' id='tipo'>
                  ".$res['mul_mul']."
                </td>
                <td class='px-6 py-4' id='placa'>
                  ".$res['plc_veh']."
                </td>
                <td class='px-6 py-4' id='modelo'>
                  ".$res['mod_veh']."
                </td>
              </tr>";
      endwhile;
    }
    return $view;
  }

  public function getCount() {
    $sq1 = "SELECT COUNT(idt_per) AS suma_per FROM persona;";
    $co1 = $this->connect()->query($sq1);
    $re1 = $co1->fetch_assoc();

    $sq2 = "SELECT COUNT(plc_veh) AS suma_plc FROM multa;";
    $co2 = $this->connect()->query($sq2);
    $re2 = $co2->fetch_assoc();

    $sq3 = "SELECT COUNT(idt_mul) AS suma_mul FROM multa;";
    $co3 = $this->connect()->query($sq3);
    $re3 = $co3->fetch_assoc();

    $array = array(
      'suma_per' => $re1['suma_per'],
      'suma_plc' => $re2['suma_plc'],
      'suma_mul' => $re3['suma_mul']
    );

    return $array;
  }
}