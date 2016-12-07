<?php
session_start();

include "../registration/xplor-config.php";
include "../registration/xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

if(!isset($_SESSION[$sprefix.'Username'])){
  header('Location: ../registration/submission/');
  die();
}

$strSQL = "SELECT * FROM t5iw_useraccount a INNER JOIN t5iw_userinformation b on a.username = b.username WHERE a.username = ?";
$resultInfo = $db->select($strSQL, array($_SESSION[$sprefix.'Username']));
if($resultInfo){
  $rowinfo = $resultInfo->fetch();
}else{
  header('Location: ../registration/submission/');
  die();
}

if(!isset($_GET['sid'])){
  header('Location: ./');
  die();
}

$strSQL = "SELECT * FROM t5iw_submission a INNER JOIN t5iw_fileupload b on a.submission_id = b.submission_id WHERE a.username = ? AND a.submission_id = ? AND a.delete_status = ?";
$resultSubmission = $db->select($strSQL, array($_SESSION[$sprefix.'Username'], $_GET['sid'], 'N'));

if(!$resultSubmission){
  header('Location: ./');
  die();
}

$rowsubmission = $resultSubmission->fetch();
?>
<!DOCTYPE html>

<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title>PostgradForum2017 submission</title>

        <meta name="description" content="AppUI - Admin Dashboard Template & UI Framework" />
        <meta name="author" content="rustheme" />
        <meta name="robots" content="noindex, nofollow" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="../registration/assets//img/favicons/apple-touch-icon.png" />
        <link rel="icon" href="../registration/assets//img/favicons/favicon.ico" />

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="../registration/assets/js/plugins/datatables/jquery.dataTables.min.css" />
        <link rel="stylesheet" type="text/css" href="../ext-lib/sweetalert/dist/sweetalert.css">
        <!-- AppUI CSS stylesheets -->
        <link rel="stylesheet" id="css-font-awesome" href="../registration/assets/css/font-awesome.css" />
        <link rel="stylesheet" id="css-ionicons" href="../registration/assets/css/ionicons.css" />
        <link rel="stylesheet" id="css-bootstrap" href="../registration/assets/css/bootstrap.css" />
        <link rel="stylesheet" id="css-app" href="../registration/assets/css/app.css" />
        <link rel="stylesheet" id="css-app-custom" href="../registration/assets/css/app-custom.css" />

        <style media="screen">
        .layout-has-drawer .app-layout-header, .layout-has-drawer .app-layout-content, .layout-has-drawer .app-layout-footer {
          padding: 0px;
        }

        .has-error .select2-selection {
              border: 1px solid #a94442;
              border-radius: 4px;
          }
        </style>
        <!-- End Stylesheets -->
    </head>

    <body class="app-ui layout-has-drawer layout-has-fixed-header">
        <div class="app-layout-canvas">
            <div class="app-layout-container">
                <!-- Header -->
                <header class="app-layout-header">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <span class="navbar-page-title" style="padding-left: 10px;">
                                  <a href="../" style="font-size: 1.1em; font-weight: 500;">PostgradForum2017</a>
				                        </span>
                            </div>

                            <div class="collapse navbar-collapse" id="header-navbar-collapse">
                                <ul id="main-menu" class="nav navbar-nav navbar-left">
                                  <li><a href="./">Home</a></li>
                                  <li><a href="new-submission.php">Submission</a></li>
                                </ul>
                                <!-- .navbar-left -->

                                <ul class="nav navbar-nav navbar-right navbar-toolbar hidden-sm hidden-xs">

                                    <li class="dropdown dropdown-profile" style="padding-top: 10px;">
                                        <a href="javascript:void(0)" data-toggle="dropdown">
                                            <span class="m-r-sm">You are currently logged in as <strong style="color: rgb(2, 184, 38);"><?php echo $rowinfo['prefix_id'].$rowinfo['fname']." ".$rowinfo['lname']; ?></strong> <span class="caret"></span></span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="info.php">Profile</a>
                                            </li>
                                            <li>
                                                <a href="changepassword.php">Change password</a>
                                            </li>
                                            <li>
                                                <a href="signout.php">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- .container-fluid -->
                    </nav>
                    <!-- .navbar-default -->
                </header>
                <!-- End header -->

                <main class="app-layout-content">

                    <!-- Page Content -->
                    <div class="container-fluid p-y-md">
                        <!-- <h2 class="section-title">Your content</h2> -->
                        <div class="row">
                          <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1" style="padding-top: 80px;">
                            <div class="card">
                              <div class="card-header" style="padding-top: 30px; padding-bottom: 30px;">
                                  <h2 class="text-left" style="font-weight: 500; line-height: 0.8;">Submission information</h2>
                              </div>
                              <div class="card-block" style="padding: 0px 24px ;">
                                <a href="./"><i class="fa fa-home"></i> Home</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="./">Submitted abstract</a>&nbsp;&nbsp;/&nbsp;&nbsp;<?php echo $rowsubmission['id']; ?>
                              </div>


                              <div class="card-block" style="padding-top: 30px;">
                                <table class="js-table-sections table table-hover table-vcenter">
                                    <thead>
                                        <tr>
                                            <th style="width: 30px;"></th>
                                            <th>Title</th>
                                            <th style="width: 20%;">By</th>
                                            <th class="hidden-xs w-20">Created</th>
                                        </tr>
                                    </thead>
                                    <tbody class="js-table-sections-header open">
                                        <tr>
                                            <td class="text-center" style="vertical-align: top;">
                                                <i class="caret"></i>
                                            </td>
                                            <td style="vertical-align: top;">
                                              <span  class="font-500"><?php echo $rowsubmission['title']; ?></span>
                                              <br><strong>ID :</strong> <?php echo $rowsubmission['id']; ?>
                                              <br><strong>Presentation type  :</strong>
                                              <?php
                                              if($rowsubmission['presentation_type']=='1'){
                                                echo "Oral presentation";
                                              }elseif ($rowsubmission['presentation_type']=='2') {
                                                echo "Poster presentation";
                                              }else{
                                                echo "N/A";
                                              }

                                              ?>
                                              <br><strong>Topic categories :</strong> <?php
                                              if($rowsubmission['topic_group']=='1'){
                                                echo "Universal health coverage";
                                              }elseif ($rowsubmission['topic_group']=='2') {
                                                echo "Health workforce and finance";
                                              }elseif ($rowsubmission['topic_group']=='3') {
                                                echo "Primary health care";
                                              }elseif ($rowsubmission['topic_group']=='4') {
                                                echo "Health equity";
                                              }elseif ($rowsubmission['topic_group']=='5') {
                                                echo "Policy integration for sustainable development";
                                              }elseif ($rowsubmission['topic_group']=='6') {
                                                echo "Health systems for sustainable development";
                                              }elseif ($rowsubmission['topic_group']=='7') {
                                                echo "Health in sustainable development goals";
                                              }else{
                                                echo "N/A";
                                              }
                                               ?>

                                               <?php
                                               if($rowsubmission['sending_status']=='N'){
                                                 ?>
                                                 <div class="" style="padding-top: 20px;">
                                                   <button type="button" name="button" class="btn btn-app-blue" onclick="javascript:redirect('edit_submission.php?sid=<?php echo $rowsubmission['submission_id'];?>')"><i class="fa fa-wrench"></i> Edit</button>
                                                   <button type="button" name="button" class="btn btn-app-blue" onclick="javascript:msg_confirm('You can not delete or withdraw after confirm. If you want to withdraw this submission, please contact with coordinator directly.','controller/confirm_submission.php?sid=<?php echo $rowsubmission['submission_id'];?>')"><i class="fa fa-check"></i> Confirm this submission</button>
                                                   <button type="button" name="button" class="btn btn-app-red" onclick="javascript:delete_confirm('controller/delete_submission.php?sid=<?php echo $rowsubmission['submission_id'];?>')"><i class="fa fa-trash"></i> Delete</button>
                                                 </div>
                                                 <?php
                                               }
                                               ?>

                                            </td>
                                            <td style="vertical-align: top;"><?php echo $rowinfo['prefix_id'].$rowinfo['fname']." ".$rowinfo['lname']; ?></td>
                                            <td class="hidden-xs" style="vertical-align: top;">
                                                <em class="text-muted"><?php echo $rowsubmission['submit_date_time']; ?></em>
                                            </td>
                                        </tr>
                                        <?php
                                        $strSQL = "SELECT * FROM t5iw_transection a INNER JOIN t5iw_userinformation b on a.tr_by=b.username WHERE a.tr_status <> ? AND a.tr_submission_id = ?";
                                        $resultTransection = $db->select($strSQL, array('99', $rowsubmission['submission_id']));
                                        if($resultTransection){
                                          $c = 1;
                                          foreach ($resultTransection as $value) {
                                            ?>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td class="font-400 text-blue">
                                                  <?php
                                                  if($value['tr_status']=='1'){
                                                    echo "New abstract submission";
                                                  }else if($value['tr_status']=='2'){
                                                    echo "Assign reviewer";
                                                  }else if($value['tr_status']=='3'){
                                                    echo "Reply with comment";
                                                  }else if($value['tr_status']=='4'){
                                                    echo "Finallize before acception";
                                                  }else if($value['tr_status']=='5'){
                                                    echo "Accept";
                                                  }
                                                  ?><br>
                                                  <?php
                                                  if($value['tr_status']=='1'){
                                                    ?>
                                                    <small><a href="<?php echo $rowsubmission['filename'];?>">[ Download abstract file ]</a></small>
                                                    <?php
                                                  }
                                                  ?>
                                                </td>
                                                <td>
                                                    <small>
                                                      <?php echo $value['prefix_id'].$value['fname']." ".$value['lname'];; ?>
                                                    </small>
                                                </td>
                                                <td class="hidden-xs">
                                                    <small class="text-muted">
                                                      <?php echo $value['tr_date']; ?>
                                                    </small>
                                                </td>
                                            </tr>
                                            <?php
                                          }
                                        }
                                        ?>
                                    </tbody>

                                    </table>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- End Page Content -->

                </main>
                <footer>
                  <div class="row">
                    <div class="col-sm-12 text-center">
                      <p>
                        The 11th Postgraduate Forum on Health Systems and Policy:
Integrated Health System and Policy for Sustainable Development Goal
                      </p>
                      <p>
                        Contat person: Ms.Anyawadee Limwachirachot
E-mail: <span class="text-green">bags.anyawadee@gmail.com</span>
                      </p>
                    </div>
                  </div>
                </footer>
            </div>
            <!-- .app-layout-container -->
        </div>
        <!-- .app-layout-canvas -->



        <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
        <script src="../registration/assets/js/core/jquery.min.js"></script>
        <script src="../registration/assets/js/core/bootstrap.min.js"></script>
        <script src="../registration/assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="../registration/assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="../registration/assets/js/core/jquery.placeholder.min.js"></script>
        <script src="../registration/assets/js/app.js"></script>
        <script src="../registration/assets/js/app-custom.js"></script>

        <!-- Page JS Plugins -->
        <!-- <script src="../registration/assets/js/plugins/datatables/jquery.dataTables.min.js"></script> -->

        <!-- Page JS Code -->
        <!-- <script src="../registration/assets/js/pages/base_tables_datatables.js"></script> -->
        <script src="../ext-lib/sweetalert/dist/sweetalert.min.js"></script>
        <script src="../registration/assets/js/pages/submission/script.js"></script>
        <script>
            $(function()
            {
                // Init page helpers (BS Datepicker + BS Colorpicker + Select2 + Masked Input + Tags Inputs plugins)
                App.initHelpers('table-tools');
            });
        </script>
    </body>

</html>
