<?php
session_start();

include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();
$sprefix = $db->getSessionPrefix();
$salt = $db->getSaltkey();
$hashPWD = hash_hmac('md5', $_POST['password'], $salt);

$strSQL = "SELECT * FROM t5iw_useraccount a INNER JOIN t5iw_userinformation b
          on a.username = b.username
          WHERE ((a.username = ? AND a.password = ?) OR (a.email = ? AND a.password = ?)) AND a.active_status = ? ";
$arr = array($_POST['username'], $hashPWD, $_POST['username'], $hashPWD,  'Y');
$resultSelect = $db->select($strSQL, $arr);

// echo $strSQL;
// echo $hashPWD;
// die();
$db->disconnect();

if($resultSelect){
  $row = $resultSelect->fetch();

  $_SESSION[$sprefix.'ID'] = session_id();
  $_SESSION[$sprefix.'Username'] = $_POST["username"];
  session_write_close();

  switch($row['account_type']){
    case 1: header('Location: ../admin/'); break;
    case 2: header('Location: ../staff/'); break;
    case 3: if($row['par_type']==1){
              header('Location: ../author/');
            }else{
              header('Location: ../participant/');
            }
            ; break;
  }
}else{
  header('Location: ../login.php?austat=2');
  break;
}
?>
