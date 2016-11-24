<?php
session_start();

include "xplor-config.php";
include "xplor-connect.php";

$db = new database();
$db->connect();

if(!isset($_GET['sid'])){
  header('Location: activate-fail.php');
  die();
}

$strSQL = "UPDATE t5iw_useraccount SET activate_status = ?, active_status = ?, sid = '' WHERE sid = ? AND account_type = ?";
$resultUpdate = $db->update($strSQL, array('Y', 'Y', $_GET['sid'], '3'));

if($resultUpdate){
  header('Location: activate-success.php');
  die();
}else{
  header('Location: activate-fail.php');
  die();
}
?>
