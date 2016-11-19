<?php
session_start();

include "../../registration/xplor-config.php";
include "../../registration/xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

if (isset($_POST['file_id'])) {

  if(isset($_SESSION[$sprefix.'Username'])){
    $strSQL = "DELETE FROM t5iw_fileupload WHERE fid = ? AND user_upload = ?";
    $resultDel = $db->delete($strSQL, array($_POST['file_id'], $_SESSION[$sprefix.'Username']));

    echo "Y";
  }

}



$db->disconnect();
die();
?>
