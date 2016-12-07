<?php
session_start();

include "../../registration/xplor-config.php";
include "../../registration/xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

if(!isset($_SESSION[$sprefix.'Username'])){
  $db->disconnect();
  ?>
  <script type="text/javascript">
    alert('Session timeout');
    window.location = '../../registration/submission/';
  </script>
  <?php
  die();
}

$strSQL = "SELECT * FROM t5iw_useraccount WHERE username = ?";
$resultCheck = $db->select($strSQL, array($_SESSION[$sprefix.'Username']));

if(!$resultCheck){
  //Duplicate
  echo "Account not fund";
  die();
}

$halal = 'N';
if(isset($_POST['meal'])){
  $halal = $_POST['meal'];
}

$strSQL = "UPDATE t5iw_userinformation SET
          prefix_id = ?,
          fname = ?,
          lname = ?,
          university = ?,
          address = ?,
          country_id = ?,
          tel = ?,
          halal = ?,
          reg_type = ?
          WHERE username = ?";
$resultUpdate = $db->update($strSQL, array($_POST['prefix'],$_POST['fname'], $_POST['lname'], $_POST['university'], $_POST['address'],
                 $_POST['country'], $_POST['phone'], $halal, $_POST['reg_type'], $_SESSION[$sprefix.'Username']));

// echo $strSQL."<br>";
// print_r(array($_POST['prefix'],$_POST['fname'], $_POST['lname'], $_POST['university'], $_POST['address'],
//                  $_POST['country'], $_POST['phone'], $halal, $_POST['reg_type'], $_SESSION[$sprefix.'Username']));
// die();

if($resultUpdate){
  $db->disconnect();
  header('Location: ../update-success.php');
  die();
}else{
  // echo "2". $strSQL;die();
  $db->disconnect();
  header('Location: ../update-fail.php');
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
