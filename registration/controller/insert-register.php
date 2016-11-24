<?php
session_start();

include "../xplor-config.php";
include "../xplor-connect.php";

$db = new database();
$db->connect();

$salt = $db->getSaltkey();
$pwd = generateRandomString(8);
$hashPWD = hash_hmac('md5', $pwd, $salt);

$strSQL = "SELECT * FROM t5iw_useraccount WHERE email = ?";
$resultCheck = $db->select($strSQL, array($_POST['email']));

if($resultCheck){
  //Duplicate
  echo "Dupplicate";
  die();
}

$halal = 'N';
if(isset($_POST['meal'])){
  $halal = $_POST['meal'];
}

$strSQL = "INSERT INTO t5iw_useraccount (username, password, 	email, regdate, sid, account_type)
          VALUES (?,?,?,?,?,?)";
$resultInsert1 = $db->insert($strSQL, array($_POST['email'], $hashPWD, $_POST['email'], date('Y-m-d'), session_id(), '3'));

if($resultInsert1){
  $strSQL = "INSERT INTO t5iw_userinformation (	prefix_id, fname,	lname, university, address, country_id, 	tel, 	halal, reg_type, username)
            VALUES (?,?,?,?,?,?,?,?,?,?)";
  $resultInsert2 = $db->insert($strSQL, array($_POST['prefix'], $_POST['fname'], $_POST['lname'], $_POST['university'], $_POST['address'],
                   $_POST['country'], $_POST['phone'], $halal, $_POST['reg_type'], $_POST['email']));
  if($resultInsert2){

    require_once('../class.phpmailer.php');
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
    $mail->Subject  = "The 11th Postgraduate Forum on Health Systems and Policy Account information";
    $mail->Body     = "Dear ".$_POST['prefix'].$_POST["fname"]."&nbsp;".$_POST["lname"]."
    <p>
    The 11th Postgraduate Forum on Health Systems and Policy: Integrated Health System and Policy for Sustainable Development Goal
    </p>

    <p>
    Firstly, please do the following:<br>
    1. Click this link for activate your account >> <a href='http://postgraduateforum2017.com/registration/activate.php?sid=".session_id()."'>http://postgraduateforum2017.com/registration/activate.php?sid=".session_id()."</a><br>
    2. Goto http://postgraduateforum2017.com/ and Log in using your account information: <br><br>
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
    $mail->AddAddress($_POST["email"]);
    $mail->Send();

    $db->disconnect();
    header('Location: ../registration-success.php');
    die();
  }else{

    // echo "1". $strSQL;die();
    $strSQL = "DELETE FROM t5iw_useraccount WHERE username = ? AND activate_status = ? AND  active_status = ? AND sid = ?";
    $resultDel = $db->delete($strSQL, array($_POST['email'], 'N', 'N', session_id()));

    $db->disconnect();
    header('Location: ../registration-fail.php');
    die();
  }
}else{
  // echo "2". $strSQL;die();
  $db->disconnect();
  header('Location: ../registration-fail.php');
  die();
}
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
