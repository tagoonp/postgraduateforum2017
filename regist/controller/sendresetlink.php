<?php
include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$strSQL = "SELECT * FROM t5iw_useraccount a INNER JOIN t5iw_userinformation b on a.username = b.username WHERE a.email = ? ";
$result = $db->select($strSQL, array($_POST['username']));
if($result){
  $row = $result->fetch();

  require_once('../lib/phpmailer/class.phpmailer.php');

  $body = "Dear ".$row['prefix_id'].$row["fname"]." ".$row["lname"]."<br>
          <p>
          The 11th Postgraduate Forum on Health Systems and Policy: Integrated Health System and Policy for Sustainable Development Goal
          </p>

          <p>
          For resetting password, please do the following:<br>
          1. Goto <a href='http://postgraduateforum2017.com/regist/login/resetpassword.php?sid=".$row['sid']."&email=".$row['email']."'>http://postgraduateforum2017.com/regist/login/resetpassword/</a> and enter your new password<br>
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
  $mail->Subject  = "The 11th Postgraduate Forum on Health Systems and Policy Password Resetting";
  $mail->MsgHTML($body);

  $address = $_POST["username"];
  $mail->AddAddress($address, $row['prefix_id'].$row["fname"]." ".$row["lname"]);

  if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    die();
  }


  header('Location: ../login/success.php');
  die();
}else{
  ?>
  <script type="text/javascript">
    alert('Invalid e-mail address or this e-mail is not available');
    window.history.back();
  </script>
  <?php
}
$db->disconnect();
die();
?>
