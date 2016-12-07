<?php
$strSQL = "SELECT * FROM t5iw_useraccount a INNER JOIN t5iw_userinformation b on a.username = b.username WHERE a.username = ? AND a.account_type = '2'";
$resultSelect = $db->select($strSQL, array($_SESSION[$sprefix.'Username']));

if($resultSelect){
  $rowinfo = $resultSelect->fetch();
}else{
  ?>
  <script type="text/javascript">
    alert('Session denine!');
    window.location = '../';
  </script>
  <?php
}
 ?>
