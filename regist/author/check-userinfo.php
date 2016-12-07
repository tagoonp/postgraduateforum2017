<?php
$strSQL = "SELECT * FROM t5iw_useraccount a INNER JOIN t5iw_userinformation b on a.username = b.username
          INNER JOIN t5iw_countries c on b.country_id = c.country_code
          WHERE a.username = ? AND a.account_type = '3' AND b.par_type = '1'";
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
