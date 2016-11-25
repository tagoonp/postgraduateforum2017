<?php
session_start();

include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

if(isset($_SESSION[$sprefix.'Username'])){

  $strSQL = "SELECT * FROM t5iw_author WHERE au_sess_id = ?";
  $resultSelect = $db->select($strSQL, array(session_id()));

  if($resultSelect){
    ?>
    <table class="table table-striped table-condensed table-bordered ">
      <thead>
        <tr>
          <th class="text-center">#</th>
          <th>Fulle name</th>
          <th>Department / University/ Institute</th>
          <th>Email</th>
          <th class="text-center" style="width: 15%;">Action</th>
        </tr>
      </thead>
      <tbody style="font-size: 0.8em;">
        <?php
        $c = 1;
        foreach ($resultSelect as $value) {
          ?>
          <tr>
            <td><?php echo $c; ?></td>
            <td><?php echo $value['au_prefix'].$value['au_fname']." ".$value['au_lname']; ?><br>
              <a href="javascript:setPresenter('<?php echo $value['au_prefix'].$value['au_fname']." ".$value['au_lname']; ?>')">- Set as presenter -</a>
            </td>
            <td><?php echo $value['au_department']; ?></td>
            <td><?php echo $value['au_email']; ?></td>
            <td class="text-center" >
              <div class="btn-group">
                <?php
                if($_SESSION[$sprefix.'Username']!=$value['au_email']){
                  ?>
                  <button type="button" name="button" class="btn btn-xs btn-default" onclick="javascript:editAuthor_edit('<?php echo $value['auid'];?>')"><i class="fa fa-wrench"></i></button>
                  <button type="button" name="button" class="btn btn-xs btn-default" onclick="javascript:deleteAuthor('<?php echo $value['auid'];?>')"><i class="fa fa-trash"></i></button>
                  <?php
                }
                 ?>

              </div>
            </td>
          </tr>
          <?php
          $c++;
        }
         ?>
      </tbody>
    </table>
    <?php
  }else{
    ?>
    <table class="table table-striped table-condensed table-bordered ">
      <thead>
        <tr>
          <th class="text-center">#</th>
          <th>Fulle name</th>
          <th>Department / University/ Institute</th>
          <th>Email</th>
          <th  class="text-center" style="width: 15%;">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="5">No author information</td>
        </tr>
      </tbody>
    </table>
    <?php
  }
}else{
  ?>
  <table class="table table-striped table-condensed table-bordered ">
    <thead>
      <tr>
        <th class="text-center">#</th>
        <th>Fulle name</th>
        <th>Department / University/ Institute</th>
        <th>Email</th>
        <th  class="text-center" style="width: 15%;">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="5">No author information</td>
      </tr>
    </tbody>
  </table>
  <?php
}

$db->disconnect();
die();
?>
