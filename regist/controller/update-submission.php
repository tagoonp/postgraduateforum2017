<?php
session_start();
include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

if(!isset($_SESSION[$sprefix.'ID'])){
  ?>
  <script type="text/javascript">
    alert('Session denine! - Eror code: 2x101');
    window.location = '../';
  </script>
  <?php
  $db->disconnect();
  // header('Location: ../');
  die();
}

if(!isset($_SESSION[$sprefix.'Username'])){
  ?>
  <script type="text/javascript">
    alert('Session denine! - Eror code: 2x103');
    window.location = '../';
  </script>
  <?php
  $db->disconnect();
  // header('Location: ../');
  die();
}

$strSQL = "SELECT * FROM t5iw_useraccount a INNER JOIN t5iw_userinformation b on a.username = b.username WHERE a.username = ? AND a.activate_status = 'Y' AND a.active_status = 'Y'";
$resultSelect = $db->select($strSQL, array($_SESSION[$sprefix.'Username']));

if(!$resultSelect){
  ?>
  <script type="text/javascript">
    alert('Session denine! - Eror code: 2x104');
    window.location = '../';
  </script>
  <?php
  $db->disconnect();
  // header('Location: ../');
  die();
}

$rowinfo = $resultSelect->fetch();

if(isset($_POST['val-subid'])){

  $strSQL = "UPDATE t5iw_submission SET
            id = ?,
            title = ?,
            presentation_type = ?,
            topic_group = ?,
            presenter_name = ?,
            abstract = ?,
            word_count = ?
            WHERE
            submission_id = ?
            ";
  $arr = array(mysql_real_escape_string( "PGF17-".$_POST['val-subid']."-".$_POST['reg_type']."-".$_POST['topic_type']) ,$_POST['txt-title'], $_POST['reg_type'], $_POST['topic_type'], $_POST['pname'], $_POST['txt-abstract']
        , $_POST['wcount'], $_POST['val-subid']);
  $resultUpdate = $db->update($strSQL, $arr);

  $strSQL = "UPDATE t5iw_author SET au_submission_id = ? WHERE au_sess_id = ?";
  $resultUpdate = $db->update($strSQL, array($_POST['val-subid'], session_id()));

  header('Location: ../author/submission_info.php?sid='.$_POST['val-subid']);
  die();

}else{
  ?>
  <script type="text/javascript">
    alert('Submission info error! - Eror code: 2x104');
    window.location = '../';
  </script>
  <?php
  $db->disconnect();
  die();
}

?>
