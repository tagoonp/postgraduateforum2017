<?php
session_start();

include "../../registration/xplor-config.php";
include "../../registration/xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();
$salt = $db->getSaltkey();
$hashPWD = hash_hmac('md5', $_POST['val-password1'], $salt);

if(isset($_SESSION[$sprefix.'Username'])){
  $strSQL = "SELECT * FROM t5iw_useraccount a INNER JOIN t5iw_userinformation b on a.username = b.username WHERE a.username = ? AND a.active_status = ? ";
  $resultCheck = $db->select($strSQL, array($_SESSION[$sprefix.'Username'], 'Y'));

  if($resultCheck){
    $resultinfo = $resultCheck->fetch();

    $strSQL = "UPDATE t5iw_useraccount SET password = ? WHERE username = ?";
    $resultUpdate = $db->update($strSQL, array($hashPWD, $_SESSION[$sprefix.'Username']));

    require_once('../../registration/class.phpmailer.php');
    $mail = new PHPMailer();
    $mail->IsHTML(true);
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465;
    $mail->Username = "medpsu.ec@gmail.com";
    $mail->Password = "songserm";
    $mail->From = "medpsu.ec@gmail.com";
    $mail->FromName = "PostgraduateForum 2017";
    $mail->CharSet  = "utf-8";
    $mail->Subject  = "New password for The 11th Postgraduate Forum on Health Systems and Policy 2017 submission system";
    $mail->Body     = "Dear ".$resultinfo['prefix'].$resultinfo["fname"]."&nbsp;".$resultinfo["lname"]."
    <p>
    The 11th Postgraduate Forum on Health Systems and Policy: Integrated Health System and Policy for Sustainable Development Goal
    </p>

    <p>
      You have change password as follow: <br><br>
      Current password: ".$_POST['val-password1']."
    </p>

    <p>
    Thank you for your participation.
    </p>
    <p>
    Sincerely,<br>
    The 11th Postgraduate Forum on Health Systems and Policy 2017 Coordinator.
    </p>";
    $mail->AddAddress($_SESSION[$sprefix.'Username']);
    $mail->Send();


    $db->disconnect();
    header('Location: ../changepassword-success.php');
    die();

  }else{
    $db->disconnect();
    ?>
    <script type="text/javascript">
      alert('Session timeout!');
      window.location = '../../registration/submission/';
    </script>
    <?php
    die();
  }
}else{
  $db->disconnect();
  ?>
  <script type="text/javascript">
    alert('Session timeout!');
    window.location = '../../registration/submission/';
  </script>
  <?php
  die();
}



$db->disconnect();
die();
?>
