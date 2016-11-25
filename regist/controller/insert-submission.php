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

$strSQL = "SELECT MAX(submission_id) maxid FROM t5iw_submission WHERE ?";
$resultMax = $db->select($strSQL, array('1'));

$newID = 1;
if($resultMax){
  $rowmax = $resultMax->fetch();
  $newID = intval($rowmax['maxid']) + 1;
}



$strSQL = "INSERT INTO t5iw_submission (submission_id, id, 	title, presentation_type, 	topic_group, presenter_name, abstract, word_count,	submit_date_time, sess_id, username)
          VALUES (?,?,?,?,?,?,?,?,?,?,?)
          ";
$arr = array($newID, mysql_real_escape_string( "PGF17-".$newID."-".$_POST['reg_type']."-".$_POST['topic_type']), $_POST['txt-title'], $_POST['reg_type'], $_POST['topic_type'], $_POST['pname'], $_POST['txt-abstract'],
      $_POST['wcount'], date('Y-m-d H:i:s'), session_id(), $_SESSION[$sprefix.'Username']);
$resultInsert = $db->insert($strSQL, $arr);
if($resultInsert){

  $strSQL = "UPDATE t5iw_author SET au_submission_id = ? WHERE au_sess_id = ?";
  $resultUpdate = $db->update($strSQL, array($newID, session_id()));

  error_reporting(E_STRICT);
  date_default_timezone_set('America/Toronto');
  // Send an Email to registra
  require_once('../lib/phpmailer/class.phpmailer.php');

  $body = "Dear ".$rowinfo['prefix'].$rowinfo["fname"]." ".$rowinfo["lname"]."<br>
          <p>
          The 11th Postgraduate Forum on Health Systems and Policy: Integrated Health System and Policy for Sustainable Development Goal
          </p>

          <p>
          You have submitted abstract by follow:<br>
          <strong>Submission ID</strong> : "."PGF17-".$newID."-".$_POST['reg_type']."-".$_POST['topic_type']."<br>
          <strong>Title</strong> : ".$_POST['txt-title']." <br>
          <strong>Presenter</strong> : ".$_POST['pname']."
          </p>

          <p>
          You can visit our submission system via <a href='http://postgraduateforum2017.com/regist/login'>http://postgraduateforum2017.com/regist/login</a> and login with your user account.
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
  $mail->Subject  = "The 11th Postgraduate Forum on Health Systems and Policy submitted abstract information";
  $mail->MsgHTML($body);

  $address = $rowinfo["email"];
  $mail->AddAddress($address, $rowinfo['prefix'].$rowinfo["fname"]." ".$rowinfo["lname"]);

  if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    die();
  }

  header('Location: ../author/');
  die();

}else{
  if(!$resultSelect){
    ?>
    <script type="text/javascript">
      alert('Can not submit abstract!, please contact administrator');
      window.history.back();
    </script>
    <?php
    $db->disconnect();
    // header('Location: ../');
    die();
  }
}

?>
