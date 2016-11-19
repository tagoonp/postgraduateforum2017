<?php
session_start();

include "../registration/xplor-config.php";
include "../registration/xplor-connect.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

$strSQL = "SELECT * FROM t5iw_useraccount a INNER JOIN t5iw_userinformation b on a.username = b.username WHERE a.username = ?";
$resultInfo = $db->select($strSQL, array($_SESSION[$sprefix.'Username']));
if($resultInfo){
  $rowinfo = $resultInfo->fetch();
}else{
  header('../registration/');
  die();
}

if(!isset($_GET['sid'])){
  header('Location: ./');
  die();
}

$strSQL = "SELECT * FROM t5iw_submission a INNER JOIN t5iw_fileupload b on  a.submission_id = b.submission_id
           INNER JOIN t5iw_userinformation c on a.username = c.username
           INNER JOIN t5iw_useraccount d on a.username = d.username
           WHERE  a.submission_id = ? ";
$resultSubmission = $db->select($strSQL, array( $_GET['sid']));

if(!$resultSubmission){
  header('Location: ./');
  die();
}

$rowsubmission = $resultSubmission->fetch();

$strSQL = "SELECT * FROM t5iw_submission a INNER JOIN t5iw_fileupload b on a.submission_id = b.submission_id WHERE a.stage = ? ";
$resultSubmission = $db->select($strSQL, array('1'));

$newrow = 0;
if($resultSubmission){
  $newrow = sizeof($resultSubmission);
}

$curstage = 1;

$curstage = $rowsubmission['stage'];
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

        <!-- AppUI CSS stylesheets -->
        <link rel="stylesheet" id="css-font-awesome" href="../registration/assets/css/font-awesome.css" />
        <link rel="stylesheet" id="css-ionicons" href="../registration/assets/css/ionicons.css" />
        <link rel="stylesheet" id="css-bootstrap" href="../registration/assets/css/bootstrap.css" />
        <link rel="stylesheet" id="css-app" href="../registration/assets/css/app.css" />
        <link rel="stylesheet" id="css-app-custom" href="../registration/assets/css/app-custom.css" />

        <script src="../ext-lib/ckeditor/ckeditor.js"></script>

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
                                <li><a href="./">Dashboard</a></li>
                                <li><a href="new-submission.php">
                                  <?php
                                  if($newrow!=0){
                                    ?>
                                    <span class="badge pull-right" style="margin-top: 2px; margin-left: 5px;"><?php echo $newrow;?></span>
                                    <?php
                                  }

                                  ?>
                                   New submission</a></li>
                                <li><a href="all-submission.php">All submission</a></li>
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
                                <a href="./"><i class="fa fa-home"></i> Home</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="all-submission.php">All submission list</a>&nbsp;&nbsp;/&nbsp;&nbsp;<?php echo $rowsubmission['id']; ?>
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
                                              <h4 class="text-red" style="padding-top: 0px; margin-top: 0px;">Submission information</h4>
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


                                            </td>
                                            <td style="vertical-align: top;">Applicant</td>
                                            <td class="hidden-xs" style="vertical-align: top;">
                                                <em class="text-muted"><?php echo $rowsubmission['submit_date_time']; ?></em>
                                            </td>
                                        </tr>
                                        <tr>
                                          <td>

                                          </td>
                                          <td colspan="3">
                                            <p>
                                              <h4 class="text-red">User information</h4>
                                              <?php
                                             //  echo $rowsubmission['username'];
                                              $strSQL = "SELECT * FROM t5iw_userinformation a INNER JOIN t5iw_countries b on a.country_id = b.country_code WHERE a.username = ?";
                                              $resultUserSubmit = $db->select($strSQL, array($rowsubmission['username']));
                                              if($resultUserSubmit){
                                                $rowUserSubmit = $resultUserSubmit->fetch();
                                                ?>

                                                <div class="row">
                                                  <div class="col-sm-6">
                                                    <div class="row">
                                                     <div class="col-sm-12">
                                                       <strong>Full name</strong><br>
                                                       <?php echo $rowsubmission['prefix_id'].$rowsubmission['fname']." ".$rowsubmission['lname']; ?>
                                                     </div>
                                                    </div>
                                                    <div class="row">
                                                     <div class="col-sm-12">
                                                       <strong>Phone number</strong><br>
                                                       <?php echo $rowUserSubmit['tel']; ?>
                                                     </div>
                                                    </div>
                                                    <div class="row">
                                                     <div class="col-sm-12">
                                                       <strong>E-mail address</strong><br>
                                                       <?php echo $rowsubmission['email']; ?>
                                                     </div>
                                                    </div>

                                                    <div class="row">
                                                     <div class="col-sm-12">
                                                       <strong>Halal</strong><br>
                                                       <?php
                                                       if($rowUserSubmit['halal']=='Y'){
                                                         ?><span class="text-blue">Yes</span><?php
                                                       }else{
                                                         ?><span class="text-red">No</span><?php
                                                       }
                                                       ?>
                                                     </div>
                                                    </div>

                                                    <div class="row">
                                                     <div class="col-sm-12">
                                                       <strong>Registration type</strong><br>
                                                       <?php
                                                       if($rowUserSubmit['halal']=='Thai'){
                                                         echo "Thai";
                                                       }else if($rowUserSubmit['halal']=='Inter'){
                                                         echo "Inter";
                                                       }else{
                                                         echo "Not applicable";
                                                       }
                                                       ?>
                                                     </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                    <div class="row">
                                                     <div class="col-sm-12">
                                                       <strong>Department/Univerity/Institute</strong><br>
                                                       <?php echo $rowUserSubmit['university']; ?>
                                                     </div>
                                                    </div>

                                                    <div class="row">
                                                     <div class="col-sm-12">
                                                       <strong>Address</strong><br>
                                                       <?php echo $rowUserSubmit['address']; ?>
                                                     </div>
                                                    </div>

                                                    <div class="row">
                                                     <div class="col-sm-12">
                                                       <strong>Country</strong><br>
                                                       <?php echo $rowUserSubmit['country_name']; ?>
                                                     </div>
                                                    </div>
                                                  </div>
                                                </div>






                                                <?php
                                              }else{
                                                echo "No data";
                                              }
                                              ?>
                                            </p>
                                          </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                      <?php
                                      $strSQL = "SELECT * FROM t5iw_transection a INNER JOIN t5iw_userinformation b on a.tr_by=b.username WHERE a.tr_status <> ? AND a.tr_submission_id = ?";
                                      $resultTransection = $db->select($strSQL, array('99', $rowsubmission['submission_id']));
                                      if($resultTransection){
                                        $c = 1;
                                        foreach ($resultTransection as $value) {
                                          ?>
                                          <tr>
                                              <td class="text-center" style="vertical-align:top:"></td>
                                              <td class="font-400" style="vertical-align:top:">
                                                <span class="text-red font-500" style="font-size: 18px;"><?php
                                                if($value['tr_status']=='1'){
                                                  echo "New submission";
                                                }else if($value['tr_status']=='2'){
                                                  echo "Assign reviewer";
                                                }else if($value['tr_status']=='3'){
                                                  echo "Reply with comment";
                                                }else if($value['tr_status']=='4'){
                                                  echo "Finallize before acception";
                                                }else if($value['tr_status']=='5'){
                                                  echo "Accept";
                                                }
                                                ?></span>  <br>
                                                <?php
                                                if($value['tr_status']=='1'){
                                                  ?>
                                                  <small><a href="../tmp_file/<?php echo $rowsubmission['filename'];?>">- View file -</a></small>
                                                  <?php
                                                }
                                                ?>
                                              </td>
                                              <td style="vertical-align:top:">
                                                  <small>
                                                    <?php echo $value['prefix_id'].$value['fname']." ".$value['lname'];; ?>
                                                  </small>
                                              </td>
                                              <td class="hidden-xs" style="vertical-align:top:">
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


                                    <div class="" style="background: rgb(241, 241, 241); padding: 20px 0px 30px 0px;">
                                      <?php
                                      if($curstage==1){
                                        ?>
                                        <h2 class="text-center font-500">Progress</h2>
                                        <div class="row">
                                          <div class="col-sm-8 col-sm-offset-2">
                                            <form class="js-validation-bootstrap form-horizontal" action="base_forms_validation.html" method="post">

                                              <div class="form-group" style="padding-top: 20px;">
                                                      <div class="col-md-12">
                                                        <label for="">Next step <span class="text-orange">*</span></label>
                                                        <select class="form-control" id="example-select" name="example-select" size="1">
                                                          <option value="">---- Choose next stop ----</option>
                                                          <option value="2">Assign reviewer</option>
                                                          <option value="3">Reply with comment</option>
                                                        </select>
                                                      </div>
                                              </div>

                                              <div class="form-group">

                                                <div class="col-md-12">
                                                  <label for="val-email">Reviewer <span class="text-orange">*</span></label>
                                                    <input class="form-control" type="text" id="val-email" name="val-email" placeholder="Enter your valid email..." />
                                                </div>
                                              </div>

                                              <div class="form-group">

                                                <div class="col-md-12">
                                                  <label  for="val-email">Comment / Message </label>
                                                  <textarea name="name" id="commentarea" rows="8" cols="40"></textarea>
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <div class="col-md-12">
                                                  <label  for="val-email">Upload file (Optional)</label>
                                                  <input class="form-control" type="file" id="val-email" name="val-email" placeholder="Enter your valid email..." />
                                                </div>
                                              </div>

                                              <div class="form-group">

                                                <div class="col-md-12 text-center">
                                                  <button type="submit" name="button" class="btn btn-app-blue">Submit</button>
                                                </div>
                                              </div>



                                            </form>
                                          </div>
                                        </div>
                                        <?php
                                      }else if($curstage==2){
                                        ?>
                                        aaa
                                        <?php
                                      }
                                      ?>
                                    </div>
                              </div>

                              <div class="card-block">

                              </div>

                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- End Page Content -->

                </main>

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
        <script src="../registration/assets/js/pages/submission/script.js"></script>
        <script>
            $(function()
            {
                // Init page helpers (BS Datepicker + BS Colorpicker + Select2 + Masked Input + Tags Inputs plugins)
                App.initHelpers('table-tools');
                CKEDITOR.replace( 'commentarea' );
            });
        </script>
    </body>

</html>
