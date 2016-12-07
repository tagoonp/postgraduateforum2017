<?php
session_start();

include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

$user = '';
if(isset($_SESSION[$sprefix.'Username'])){
  $user = $_SESSION[$sprefix.'Username'];
}

$ip_add = $_SERVER['REMOTE_ADDR'];

$strSQL = "INSERT INTO t5iw_accesslog (acs_lat, acs_lng, acs_ip, acs_datetime, acs_page, acs_account)
          VALUES (?,?,?,?,?,?)";
$arr = array($_POST['lat'], $_POST['lng'], $ip_add, date('Y-m-d H:i:s'), $_POST['page'], $user);
$resultInsert = $db->insert($strSQL, $arr);

$db->disconnect();
die();

 ?>
