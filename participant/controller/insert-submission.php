<?php
session_start();

include "../../registration/xplor-config.php";
include "../../registration/xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

$strSQL = "SELECT MAX(submission_id) maxid FROM t5iw_submission WHERE ?";
$resultMax = $db->select($strSQL, array('1'));

$newID = 1;
if($resultMax){
  $rowmax = $resultMax->fetch();
  $newID = intval($rowmax['maxid']) + 1;
}

if(isset($_SESSION[$sprefix.'Username'])){
  $strSQL = "INSERT INTO t5iw_submission (submission_id, id, title, presentation_type, 	topic_group, 	submit_date_time, sess_id, 	username)
            VALUES (?,?,?,?,?,?,?,?)";
  $resultInsert = $db->insert($strSQL, array($newID, mysql_real_escape_string("PGF17-".$newID."-".$_POST['reg_type']."-".$_POST['topic_type']), mysql_real_escape_string($_POST['txt-title']), $_POST['reg_type'], $_POST['topic_type'], date('Y-m-d H:i:s'), session_id(), $_SESSION[$sprefix.'Username']));

  $strSQL = "SELECT * FROM t5iw_submission WHERE title = ? AND sess_id = ? AND username = ?";
  $resultCheck = $db->select($strSQL, array(mysql_real_escape_string($_POST['txt-title']),  session_id(), $_SESSION[$sprefix.'Username']));

  if($resultCheck){
      $rowcheck = $resultCheck->fetch();

      $strSQL = "INSERT INTO t5iw_transection (	tr_status, 	tr_by, 	tr_date, 	tr_submission_id)
                VALUES (?,?,?,?)";
      $resultInsert = $db->insert($strSQL, array('1', $_SESSION[$sprefix.'Username'], date('Y-m-d'), $rowcheck['submission_id']));

      $strSQL = "UPDATE t5iw_fileupload SET submission_id = ? WHERE sess_id = ? AND user_upload = ?";
      $resultUpdate = $db->update($strSQL, array($rowcheck['submission_id'], session_id(), $_SESSION[$sprefix.'Username']));
  }

  $db->disconnect();
  header('Location: ../');
  die();
}else{
  $db->disconnect();
  header('Location: ../../registration/submission/');
  die();
}
?>
