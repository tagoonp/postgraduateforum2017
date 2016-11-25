<?php
session_start();

include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

if(isset($_SESSION[$sprefix.'Username'])){

  if(isset($_GET['sid'])){

    $strSQL = "DELETE FROM t5iw_submission WHERE submission_id = ? AND username = ?";
    $arr = array($_GET['sid'], $_SESSION[$sprefix.'Username']);
    $resultDelete = $db->delete($strSQL, $arr);

    $strSQL = "DELETE FROM t5iw_author WHERE au_submission_id = ? ";
    $arr = array($_GET['sid']);
    $resultDelete = $db->delete($strSQL, $arr);

    $db->disconnect();
    header('Location: ../author/');
    die();
  }else{
    $db->disconnec();
    ?>
    <script type="text/javascript">
      alert('Can not delete! - Error code: 3x02');
      window.location = '../author/';
    </script>
    <?php
    die();
  }


}else{
  $db->disconnec();
  ?>
  <script type="text/javascript">
    alert('Session timeout! - Error code: 3x03');
    window.location = '../';
  </script>
  <?php
  die();
}

$db->disconnect();
die();
?>
