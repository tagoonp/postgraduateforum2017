<?php
session_start();

include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

$salt = $db->getSaltkey();
$hashPWD = hash_hmac('md5', $_POST['val-password1'], $salt);

if(isset($_SESSION[$sprefix.'Username'])){

  $strSQL = "SELECT * FROM t5iw_useraccount a INNER JOIN t5iw_userinformation b on a.username = b.username WHERE a.username = ? ";
  $resultCheck = $db->select($strSQL, array($_SESSION[$sprefix.'Username']));

  if($resultCheck){
    $resultinfo = $resultCheck->fetch();

    $strSQL = "UPDATE t5iw_useraccount SET password = ? WHERE username = ?";
    $resultUpdate = $db->update($strSQL, array($hashPWD, $_SESSION[$sprefix.'Username']));

    require_once('../lib/phpmailer/class.phpmailer.php');
    $body = "Dear ".$resultinfo['prefix'].$resultinfo["fname"]."&nbsp;".$resultinfo["lname"]."
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

    $mail = new PHPMailer();
    // $mail->IsHTML(true);
    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPDebug  = 2;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host       = "smtp.gmail.com"; // sets the SMTP server
    $mail->Port       = 465;
    $mail->Username   = "epiunit.psu@gmail.com"; // SMTP account username
    $mail->Password   = "io#epi@g7";        // SMTP account password
    $mail->SetFrom('epiunit.psu@gmail.com', 'The 11th PostgraduateForum on Health System and Policy 2017');
    $mail->AddReplyTo("epiunit.psu@gmail.com","The 11th PostgraduateForum on Health System and Policy 2017");
    // $mail->CharSet  = "utf-8";
    $mail->Subject  = "The 11th Postgraduate Forum on Health Systems and Policy Account information";
    $mail->MsgHTML($body);

    $address = $resultinfo["email"];
    $mail->AddAddress($address, $resultinfo['prefix'].$resultinfo["fname"]." ".$resultinfo["lname"]);

    if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
      die();
    }


    $db->disconnect();
    ?>
    <script type="text/javascript">
      alert('Update password success!');
      window.location = '../author/';
    </script>
    <?php
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
