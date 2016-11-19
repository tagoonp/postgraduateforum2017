<?php
session_start();

include "../../registration/xplor-config.php";
include "../../registration/xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

if(isset($_SESSION[$sprefix.'Username'])){
  if(isset($_GET['sid'])){

    $strSQL = "SELECT * FROM t5iw_submission WHERE submission_id = ? AND username = ?";
    $resultCheck = $db->select($strSQL, array($_GET['sid'], $_SESSION[$sprefix.'Username']));

    if($resultCheck){
      $strSQL = "UPDATE t5iw_submission SET delete_status = ? WHERE submission_id = ? AND username = ?";
      $resultUpdate = $db->update($strSQL, array('Y', $_GET['sid'], $_SESSION[$sprefix.'Username']));

      $db->disconnect();
      header('Location: ../');
      die();
    }else{
      $db->disconnect();
      header('Location: ../');
      die();
    }

  }else{
    $db->disconnect();
    header('Location: ../');
    die();
  }
}else{
  $db->disconnect();
  header('Location: ../../registration/submission/');
  die();
}
?>
