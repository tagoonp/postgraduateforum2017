<?php
session_start();

include "../../registration/xplor-config.php";
include "../../registration/xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

if(isset($_SESSION[$sprefix.'Username'])){
  // $strSQL = "DELETE FROM t5iw_fileupload WHERE submission_id = ? AND user_upload = ?";
  // $resultDel = $db->delete($strSQL, array($_GET['sid'], $_SESSION[$sprefix.'Username']));

  if (!empty($_FILES)) {

      $tempFile = $_FILES['file']['tmp_name'];
      $targetPath = '../../tmp_file/';  //4
      $apr = explode('.', $_FILES['file']['name']);
      $filename = 'submission-upload-'.date('Y-m-d-H-i-s')."-".generateRandomString(6).".".$apr[1];
      $targetFile =  $targetPath. $filename;  //5
      move_uploaded_file($tempFile,$targetFile); //6

      $strSQL = "SELECT * FROM t5iw_fileupload WHERE sess_id = ? AND user_upload = ?";
      $resultCheck = $db->select($strSQL, array($_GET['sid'], $_SESSION[$sprefix.'Username']));

      if($resultCheck){
        // $strSQL = "UPDATE t5iw_fileupload
        //           SET filename = ?,
        //           date_upload = ?
        //           WHERE
        //           submission_id = ? AND user_upload = ?";
        // $result_update = $db->update($strSQL, array($filename , date('Y-m-d'), $_GET['sid'], $_SESSION[$sprefix.'Username']));

        $strSQL = "DELETE FROM t5iw_fileupload WHERE sess_id = ? AND user_upload = ?";
        $resultDel = $db->delete($strSQL, array($_GET['sid'], $_SESSION[$sprefix.'Username']));

      }else{
        // $strSQL = "INSERT INTO t5iw_fileupload (	filename,	sess_id, user_upload,	date_upload)
        //          VALUES (?,?,?,?) ";
        // $result_update = $db->insert($strSQL, array($filename , $_GET['sid'], $_SESSION[$sprefix.'Username'], date('Y-m-d')));
      }

      $strSQL = "INSERT INTO t5iw_fileupload (	filename,	sess_id, user_upload,	date_upload, submission_id)
               VALUES (?,?,?,?,?) ";
      $result_update = $db->insert($strSQL, array($filename , $_GET['sid'], $_SESSION[$sprefix.'Username'], date('Y-m-d'), $_GET['id']));




  }
}

$db->disconnect();



?>
<?php
function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
