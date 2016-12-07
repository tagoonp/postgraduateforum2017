<?php
session_start();

include "../xplor-config.php";
include "../xplor-connect.php";

$db = new database();
$db->connect();

if(!isset($_GET['sid'])){
  header('Location: ../regist/signup/fail.php?p=1');
  die();
}

$strSQL = "UPDATE t5iw_useraccount SET activate_status = ?, active_status = ? WHERE sid = ? ";
$resultUpdate = $db->update($strSQL, array('Y', 'Y', $_GET['sid']));

if($resultUpdate){
  // header('Location: ../regist/signup/success.php?s=2');
  die();
}else{
  // header('Location: ../regist/signup/fail.php?p=1');
  die();
}
?>
