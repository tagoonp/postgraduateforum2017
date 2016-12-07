<?php
session_start();

include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

if((isset($_GET['sid'])) && (isset($_SESSION[$sprefix.'Username'])) && (isset($_GET['to']))){

  $strSQL = "SELECT * FROM t5iw_useraccount WHERE username = ? AND active_status = ?";
  $resultCheck = $db->select($strSQL, array($_SESSION[$sprefix.'Username'], 'Y'));

  if($resultCheck){

    $strSQL = "SELECT * FROM t5iw_submission a INNER JOIN t5iw_useraccount b on a.username = b.username
              INNER JOIN t5iw_category c on a.topic_group = c.cat_id
              INNER JOIN t5iw_presentation_type d on a.presentation_type = d.pr_id
              WHERE a.submission_id = ? ";
    $resultSubmission = $db->select($strSQL, array($_GET['sid']));



    if($resultSubmission){

      $strSQL = "SELECT * FROM t5iw_readmark WHERE r_submission_id = ? AND r_by = ?";
      $resultMark = $db->select($strSQL, array($_GET['sid'], $_SESSION[$sprefix.'Username']));

      // echo $strSQL;
      // die();

      if(!$resultMark){
        $strSQL = "INSERT INTO t5iw_readmark (	r_submission_id , r_by, r_status, r_datetime)
                  VALUES (?,?,?,?)";
        $resultInsert = $db->insert($strSQL, array($_GET['sid'], $_SESSION[$sprefix.'Username'], $_GET['to'], date('Y-m-d H:i:s')));

        $db->disconnect();
        header('Location: ../staff/submission_info.php?sid='.$_GET['sid']);
        die();

      }else{
        $strSQL = "UPDATE t5iw_readmark SET r_status = ?, r_datetime = ? WHERE r_submission_id = ? AND r_by = ?";
        $resultMark = $db->select($strSQL, array($_GET['to'], date('Y-m-d H:i:s'), $_GET['sid'], $_SESSION[$sprefix.'Username']));

        $db->disconnect();
        header('Location: ../staff/submission_info.php?sid='.$_GET['sid']);
        die();
      }


    }else{
      ?>
      <script type="text/javascript">
        alert('Process error! - Error code: 7x03');
        window.history.back();
      </script>
      <?php
    }

  }else{
    ?>
    <script type="text/javascript">
      alert('Process error! - Error code: 7x02');
      window.history.back();
    </script>
    <?php
  }
}else{
  ?>
  <script type="text/javascript">
    alert('Process error! - Error code: 7x01');
    window.history.back();
  </script>
  <?php
}

$db->disconnect();

?>
