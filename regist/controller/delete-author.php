<?php
session_start();

include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

if(isset($_SESSION[$sprefix.'Username'])){

  $strSQL = "DELETE FROM t5iw_author WHERE auid = ? AND au_sess_id = ?";
  $arr = array($_POST['auids'], session_id());
  $resultDelete = $db->delete($strSQL, $arr);
  //  echo $_POST['auids'];
}

$db->disconnect();
die();
?>
