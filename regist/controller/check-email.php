<?php
include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$strSQL = "SELECT * FROM t5iw_useraccount WHERE email = ? ";
$result = $db->select($strSQL, array($_POST['email']));
if($result){
  echo 'Y';
}else{
  echo 'N';
}
$db->disconnect();
?>
