<?php
session_start();

include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

if(isset($_SESSION[$sprefix.'Username'])){
  $strSQL = "INSERT INTO t5iw_reject (re_submission_id, re_by, 	re_datetime, re_msg)
            VALUES (?,?,?,?)";
  $resultInsert = $db->insert($strSQL, array($_POST['sid'], $_SESSION[$sprefix.'Username'], date('Y-m-d H:i:s'), $_POST['msg']));

  if($resultInsert){
    echo "Y";
  }else{
    echo "N";
  }
}else{
  echo "N";
}

$db->disconnect();

?>
