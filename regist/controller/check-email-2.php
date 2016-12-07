<?php
session_start();
include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

$strSQL = "SELECT * FROM t5iw_useraccount WHERE email = ? AND username <> ? ";
$result = $db->select($strSQL, array($_POST['email'], $_SESSION[$sprefix.'Username']));
if($result){
  echo 'Y';
  // echo "SELECT * FROM t5iw_useraccount WHERE email = '".$_POST['email']."' AND username <> '".$_SESSION[$sprefix.'Username']."' ";
}else{
  echo 'N';
}
$db->disconnect();
die();
?>
