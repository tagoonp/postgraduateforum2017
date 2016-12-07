<?php
session_start();

include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$strSQL = "SELECT * FROM t5iw_useraccount WHERE (email = ? OR username = ?) AND activate_status = ?";
$result = $db->select($strSQL, array($_POST['email'], $_POST['email'] , 'Y'));

// echo $sprefix."asd";
// die();

if($result){
  ?>
  <script type="text/javascript">
    alert('Duplicate e-mail address, Erro-code: 1-1x01');
    window.history.back();
  </script>
  <?php
  $db->disconnect();
  die();
}

$salt = $db->getSaltkey();
$pwd = generateRandomString(8);
$sid = generateRandomString(20);
$sprefix = $db->getSessionPrefix();




$hashPWD = hash_hmac('md5', $pwd, $salt);

$strSQL = "INSERT INTO t5iw_useraccount (username, password, 	email, regdate, sid, account_type)
          VALUES (?,?,?,?,?,?)";
$resultInsert1 = $db->insert($strSQL, array($_POST['email'], $hashPWD, $_POST['email'], date('Y-m-d'), $sid, '3'));
// $strSQL = "INSERT INTO t5iw_useraccount (username, password, 	email, regdate, sid, account_type)
//           VALUES ('".$_POST['email']."','".$hashPWD."','".$_POST['email']."','".date('Y-m-d')."','".$sid."',?)";
//
// $resultInsert1 = $db->insert($strSQL, array('3'));
// echo "INSERT INTO t5iw_useraccount (username, password, 	email, regdate, sid, account_type)
//           VALUES ('".$_POST['email']."','".$hashPWD."','".$_POST['email']."','".date('Y-m-d')."','".$sid."','3')";
// die();

$m1 = 'N'; $m2 = 'N'; $m3 = 'N'; $m4 = 'N';
if(isset($_POST['meal1'])){ $m1 = $_POST['meal1']; }
if(isset($_POST['meal2'])){ $m2 = $_POST['meal2']; }
if(isset($_POST['meal3'])){ $m3 = $_POST['meal3']; }
if(isset($_POST['meal4'])){ $m4 = $_POST['meal4']; }

if($resultInsert1){

  $strSQL = "INSERT INTO t5iw_userinformation (	par_type, prefix_id, fname, lname, university, status, status_other,
            address, country_id, tel, halal, 	vegie, 	nobeef,	noseafood, accommodation, accommodation_other, arr_date,
            arr_time, 	dept_date, dept_time, travel, travel_other, reg_type, username)
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
            ";
  $arr = array($_POST['pre_type'], $_POST['prefix'], $_POST['fname'], $_POST['lname'], $_POST['university'], $_POST['status'],
        $_POST['status_other'], $_POST['address'], $_POST['country'], $_POST['phone'], $m1, $m2, $m3, $m4,
        $_POST['accommodation'], $_POST['accommodation_other'], $_POST['arr_date'], $_POST['arr_time1'].":".$_POST['arr_time2'].":00",
        $_POST['dept_date'], $_POST['dept_time1'].":".$_POST['dept_time2'].":00", $_POST['travel_type'], $_POST['travel_type_other'],
        $_POST['reg_type'], $_POST['email']
      );
  $resultInsert2 = $db->insert($strSQL, $arr);

  if($resultInsert2){
    //error_reporting(E_STRICT);
    error_reporting(E_STRICT);
    // date_default_timezone_set('America/Toronto');
    // Send an Email to registra
    require_once('../lib/phpmailer/class.phpmailer.php');

    $body = "Dear ".$_POST['prefix'].$_POST["fname"]." ".$_POST["lname"]."<br>
            <p>
            The 11th Postgraduate Forum on Health Systems and Policy: Integrated Health System and Policy for Sustainable Development Goal
            </p>

            <p>
            Firstly, please do the following:<br>
            1. Click this link for activate your account >> <a href='http://postgraduateforum2017.wisnior.com/registration/activate.php?sid=".$sid."'>http://postgraduateforum2017.wisnior.com/registration/activate</a><br>
            2. Goto <a href='http://postgraduateforum2017.wisnior.com/regist/login'>http://postgraduateforum2017.wisnior.com/regist/login</a> and Log in using your account information: <br><br>
            Username: ".$_POST["email"]."<br>
            Password: ".$pwd."
            </p>


            <p>
            You can use the above USER ID and PASSWORD to log in to the site and check the status of your submission.
            This password is case-sensitive and temporary.  Please log in, update your account information and change your password.
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

    $address = $_POST["email"];
    $mail->AddAddress($address, $_POST['prefix'].$_POST["fname"]." ".$_POST["lname"]);

    if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
      die();
    }

    if($_POST['pre_type']==1){

      $_SESSION[$sprefix.'ID'] = session_id();
      $_SESSION[$sprefix.'Username'] = $_POST["email"];
      session_write_close();

      $db->disconnect();
      header('Location: authen_session.php?sid='.$sid);
      die();

    }else{

      $strSQL = "UPDATE t5iw_useraccount SET account_type = ? WHERE username = ? AND email = ?";
      $resyltUpdate = $db->update($strSQL, array('4', $_POST['email'], $_POST['email']));

      $db->disconnect();
      header('Location: ../signup/success.php');
      die();
    }

  }else{

    $strSQL = "DELETE FROM t5iw_useraccount WHERE username = ? AND activate_status = ? AND  active_status = ? AND sid = ?";
    $resultDel = $db->delete($strSQL, array($_POST['email'], 'N', 'N', $sid));

    ?>
    <script type="text/javascript">
      alert('Registration fail!, Erro-code: 1-1x03');
      window.location = '../';
    </script>
    <?php
    $db->disconnect();
    die();
  }

}else{
  ?>
  <script type="text/javascript">
    alert('This e-mail address already available!');
    window.history.back();
  </script>
  <?php
  $db->disconnect();
  die();
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
