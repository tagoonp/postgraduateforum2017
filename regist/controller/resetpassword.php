<?php
include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$strSQL = "SELECT * FROM t5iw_useraccount a INNER JOIN t5iw_userinformation b on a.username = b.username WHERE a.email = ? AND a.sid = ?";
$resultCheck = $db->select($strSQL, array($_POST['email'], $_POST['sid']));

if(!$resultCheck){
  $db->disconnect();
  ?>
  <script type="text/javascript">
    alert('Renew password fail! - Error code: 6x101');
    window.location = '../login/';
  </script>
  <?php
}

$salt = $db->getSaltkey();
$hashPWD = hash_hmac('md5', $_POST['password1'], $salt);

$strSQL = "UPDATE t5iw_useraccount SET password = ? WHERE email = ? AND sid = ?";
$resultUpdate = $db->update($strSQL, array($hashPWD, $_POST['email'], $_POST['sid']));

$db->disconnect();
header('Location: ../login/success.php?s=1');
die();

 ?>
