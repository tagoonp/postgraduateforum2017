<?php
	session_start();

  include "../../registration/xplor-config.php";
  include "../../registration/xplor-connect.php";

	$db = new database();
	$db->connect();

  $sprefix = $db->getSessionPrefix();

	$strSQL = "SELECT * FROM t5iw_fileupload WHERE sess_id = ? AND user_upload = ?";
	$result = $db->select($strSQL, array(session_id(), $_SESSION[$sprefix.'Username']));

	if($result){
				foreach ($result as $value) {
					?>
					<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="delete_tempfile('<?php print $value['fid'];?>')">&times;</button>
							<p><?php echo $value['filename']; ?></p>
					</div>
					<?php
				}
	}
	$db->disconnect();
	die();
?>
