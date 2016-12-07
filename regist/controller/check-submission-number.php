<?php
session_start();
include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

if(isset($_SESSION[$sprefix.'Username'])){
  $strSQL = "SELECT COUNT(*) numrow FROM t5iw_submission WHERE username = ? AND delete_status = ?";
  $resultCheck = $db->select($strSQL, array( $_SESSION[$sprefix.'Username'], 'N'));
  if($resultCheck){
    $rowCheck = $resultCheck->fetch();
    if($rowCheck['numrow']>=2){
      echo 'Y';
    }else{
      echo 'N';
    }
  }else{
    echo 'N';
  }
}else{
  echo 'N';
}
$db->disconnect();
?>
