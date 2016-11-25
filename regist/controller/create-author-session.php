<?php
session_start();
session_regenerate_id();

include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

if(isset($_SESSION[$sprefix.'Username'])){

  $strSQL = "SELECT * FROM t5iw_useraccount a INNER JOIN t5iw_userinformation b on a.username = b.username WHERE a.username = ?";
  $resultSelect = $db->select($strSQL, array($_SESSION[$sprefix.'Username']));

  if($resultSelect){
    $row = $resultSelect->fetch();
    $strSQL = "INSERT INTO t5iw_author (au_prefix, au_fname, au_lname, au_department,	au_email, au_sess_id)
              VALUES (?,?,?,?,?,?)
              ";
    $resultInsert = $db->insert($strSQL, array($row['prefix_id'], $row['fname'], $row['lname'], $row['university'], $row['email'], session_id()));
    if($resultInsert){
      echo 'Y';
    }else{
      echo 'N1';
    }
  }else{
    echo 'N2';
  }
}else{
  echo 'N3';
}

$db->disconnect();
die();
?>
