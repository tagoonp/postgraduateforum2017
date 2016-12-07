<?php
session_start();

include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

if(isset($_SESSION[$sprefix.'Username'])){

  $strSQL = "SELECT * FROM t5iw_usseraccount WHERE username = ?";
  $resultCheck = $db->select($strSQL, array())

  if (!empty($_FILES)) {
      $tempFile = $_FILES['file']['tmp_name'];
      $targetPath = '../file/';  //4
      $filename = 'file-registration-'.$_GET['pid'].'-'.date('Y-m-d-H-i-s').$_FILES['file']['name'];
      $targetFile =  $targetPath. $filename;  //5
      move_uploaded_file($tempFile,$targetFile); //6
      $strSQL = "INSERT INTO temp_file_progress_add (tf_name, tf_progress,	tf_session_id, tf_date) VALUES ('".$filename."', '".$_GET['pid']."', '".session_id()."', '".date('Y-m-d')."') ";
      $result_update = $db->insert($strSQL, false, true);
  }
}



$db->disconnect();

?>
