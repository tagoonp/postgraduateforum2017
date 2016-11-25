<?php
session_start();

include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

$return = '';

if(isset($_SESSION[$sprefix.'Username'])){

  $strSQL = "SELECT * FROM t5iw_author WHERE auid = ?";
  $arr = array($_POST['auids']);
  $resulSelect = $db->select($strSQL, $arr);

  if($resulSelect){
    $i = 0;
    foreach ($resulSelect as $value) {
      $return[$i]['auid'] = $value['auid'];
      $return[$i]['au_prefix'] = $value['au_prefix'];
      $return[$i]['au_fname'] = $value['au_fname'];
      $return[$i]['au_lname'] = $value['au_lname'];
      $return[$i]['au_department'] = $value['au_department'];
      $return[$i]['au_email'] = $value['au_email'];
      $i++;
    }
  }
}

echo json_encode($return);

$db->disconnect();
die();
?>
