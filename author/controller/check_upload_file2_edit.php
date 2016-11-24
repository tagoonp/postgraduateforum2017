<?php
	session_start();

  include "../../registration/xplor-config.php";
  include "../../registration/xplor-connect.php";

	$db = new database();
	$db->connect();

  $sprefix = $db->getSessionPrefix();

	$strSQL = "SELECT * FROM t5iw_fileupload WHERE sess_id = ? AND user_upload = ?";
	$result = $db->select($strSQL, array($_POST['sid'], $_SESSION[$sprefix.'Username']));

	$numFile = 0;

	if($result){
    // $row = $result->fetch();
		// $numFile = sizeof($row);
    $numFile = sizeof($result);

	}
// echo $strSQL;
	echo $numFile;
	$db->disconnect();
	die();
?>
