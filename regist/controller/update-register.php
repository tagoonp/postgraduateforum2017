<?php
session_start();

include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

$strSQL = "SELECT * FROM t5iw_useraccount WHERE username = ? AND activate_status = ? AND active_status = ?";
$result = $db->select($strSQL, array($_SESSION[$sprefix.'Username'], 'Y', 'Y'));

// echo $sprefix."asd";
// die();

if(!$result){
  ?>
  <script type="text/javascript">
    alert('Session denine, Erro-code: 5-1x01');
    window.location = '../';
  </script>
  <?php
  $db->disconnect();
  die();
}

$strSQL = "SELECT * FROM t5iw_useraccount WHERE email = ? AND username <> ?";
$result2 = $db->select($strSQL, array($_POST['email'], $_SESSION[$sprefix.'Username']));
if($result2){
  ?>
  <script type="text/javascript">
    alert('Duplicate email address, Erro-code: 5-1x02');
    window.history.back();
  </script>
  <?php
  $db->disconnect();
  die();
}

$passwordChangeStatus = false;

$rowinfo = $result->fetch();
if(($rowinfo['email']!=$_POST['email'])){
  $passwordChangeStatus = true;
}

$m1 = 'N'; $m2 = 'N'; $m3 = 'N'; $m4 = 'N';
if(isset($_POST['meal1'])){ $m1 = $_POST['meal1']; }
if(isset($_POST['meal2'])){ $m2 = $_POST['meal2']; }
if(isset($_POST['meal3'])){ $m3 = $_POST['meal3']; }
if(isset($_POST['meal4'])){ $m4 = $_POST['meal4']; }

$strSQL = "UPDATE t5iw_userinformation
          SET
          	par_type = ?,
          	prefix_id = ?,
            fname = ?,
            lname = ?,
            university = ?,
            status = ?,
            status_other = ?,
            address = ?,
            country_id = ?,
            tel = ?,
            halal = ?,
            vegie = ?,
            nobeef = ?,
            noseafood = ?,
            accommodation = ?,
            accommodation_other = ?,
            arr_date = ?,
            arr_time = ?,
            dept_date = ?,
            dept_time = ?,
            travel = ?,
            travel_other = ?,
            reg_type = ?
          WHERE
            username = ?
          ";

$arr = array($_POST['pre_type'], $_POST['prefix'], $_POST['fname'], $_POST['lname'], $_POST['university'], $_POST['status'],
      $_POST['status_other'], $_POST['address'], $_POST['country'], $_POST['phone'], $m1, $m2, $m3, $m4,
      $_POST['accommodation'], $_POST['accommodation_other'], $_POST['arr_date'], $_POST['arr_time1'].":".$_POST['arr_time2'].":00",
      $_POST['dept_date'], $_POST['dept_time1'].":".$_POST['dept_time2'].":00", $_POST['travel_type'], $_POST['travel_type_other'],
      $_POST['reg_type'], $_POST['email']);
$resultUpdate = $db->update($strSQL, $arr);
// If email changed
if($passwordChangeStatus){
  $strSQL = "UPDATE t5iw_useraccount SET email = ? WHERE username = ?";
  $resultUpdate = $db->update($strSQL, array($_POST['email'], $_SESSION[$sprefix.'Username']));
}
// ---------------------------------------

?>
<script type="text/javascript">
  alert('Update information success!');
  window.location = '../<?php echo $_GET['callback'];?>/index.php';
</script>
<?php
$db->disconnect();
die();
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
