<?php
session_start();

include "../xplor-config.php";
include "../xplor-connect.php";

$db = new database();
$db->connect();

$salt = $db->getSaltkey();
$sprefix = $db->getSessionPrefix();
$hashPWD = hash_hmac('md5', $_POST['password'], $salt);

$strSQL = "SELECT * FROM t5iw_useraccount WHERE username = ? AND password = ? AND activate_status = ? AND active_status = ?";
$resultCheck = $db->select($strSQL, array($_POST['username'], $hashPWD, 'Y', 'Y'));

if($resultCheck){
  $row = $resultCheck->fetch();

  $_SESSION[$sprefix.'ID'] = session_id();
  $_SESSION[$sprefix.'Username'] = $row['username'];
  session_write_close();

  $db->disconnect();

  if($row['account_type']=='3'){
    header('Location: ../../author/');
    die();
  }else if($row['account_type']=='2'){
    header('Location: ../../staff/');
    die();
  }else if($row['account_type']=='1'){
    header('Location: ../../administrator/');
    die();
  }else if($row['account_type']=='4'){
    header('Location: ../../reviewer/');
    die();
  }else{
    header('Location: ../login-fail.php');
    die();
  }
}else{
  // echo $strSQL;
  // die();
  $db->disconnect();
  header('Location: ../login-fail.php');
  die();
}

?>
