<?php
session_start();

include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

if(!isset($_GET['sid'])){
  ?>
  <script type="text/javascript">
    alert('Session denine!');
    window.location = '../';
  </script>
  <?php
  $db->disconnect();
  header('Location: ../');
  die();
}

if(!isset($_SESSION[$sprefix.'ID'])){
  ?>
  <script type="text/javascript">
    alert('Session denine!');
    window.location = '../';
  </script>
  <?php
  $db->disconnect();
  header('Location: ../');
  die();
}

if($_SESSION[$sprefix.'ID']!=session_id()){
  ?>
  <script type="text/javascript">
    alert('Session denine!');
    window.location = '../';
  </script>
  <?php
  $db->disconnect();
  header('Location: ../');
  die();
}

$strSQL = "SELECT * FROM t5iw_useraccount WHERE username = ? AND sid = ?";
$result = $db->select($strSQL, array($_SESSION[$sprefix.'Username'], $_GET['sid']));

if($result){

  $row = $result->fetch();

  $strSQL = "UPDATE t5iw_useraccount SET activate_status = 'Y', active_status = 'Y' WHERE username = ? AND sid = ?";
  $resultUpdate = $db->update($strSQL, array($_SESSION[$sprefix.'Username'],  $_GET['sid']));


  switch($row['account_type']){
    case '1': header('Location: ../admin/'); break;
    case '2': header('Location: ../staff/'); break;
    case '3': header('Location: ../author/'); break;
    default: header("Location: ../");
  }


}else{
  ?>
  <script type="text/javascript">
    alert('Session denine!');
    window.location = '../';
  </script>
  <?php
  $db->disconnect();
  header('Location: ../');
  die();
}

?>
