<?php
session_start();

include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

if(isset($_SESSION[$sprefix.'Username'])){

  $strSQL = "INSERT INTO t5iw_author (au_prefix, au_fname, au_lname, au_department,	au_email, au_sess_id)
            VALUES (?,?,?,?,?,?)
            ";
  $arr = array($_POST['prefix'], $_POST['fname'], $_POST['lname'], $_POST['dept'], $_POST['email'], session_id());
  $resultInsert = $db->insert($strSQL, $arr);

}

$db->disconnect();
die();
?>