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
                                  <h2 class="text-left" style="font-weight: 500; line-height: 0.8;">Change password</h2>
                              </div>
                              <div class="card-block" style="padding: 0px 24px ;">
                                <a href="#" style="color: rgb(89, 89, 89);"><i class="fa fa-home"></i> Home</a>&nbsp;&nbsp;/&nbsp;&nbsp;Change password
                              </div>


                              <div class="card-block" style="padding-top: 30px;">
                                <form class="js-validation-bootstrap form-horizontal" action="controller/update-password.php" method="post">
                                  <div class="form-group">
                                      <label class="col-md-4 control-label" for="val-username">New password <span class="text-orange">*</span></label>
                                      <div class="col-md-7">
                                          <input class="form-control" type="password" id="val-password1" name="val-password1" placeholder="Enter new password ..." />
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-md-4 control-label" for="val-username">Verify <span class="text-orange">*</span></label>
                                      <div class="col-md-7">
                                          <input class="form-control" type="password" id="val-password2" name="val-password2" placeholder="Enter new password as same as above ..." />
                                      </div>
                                  </div>

                                  <div class="form-group m-b-0">
                                                <div class="col-md-8 col-md-offset-4">
                                                    <button class="btn btn-app" type="submit">Update</button>
                                                    <button class="btn btn-app-light" type="reset">Reset</button>
                                                </div>
                                            </div>
                                </form>

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
        <script src="../registration/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
         <script src="../registration/assets/js/pages/changepassword/base_forms_validation.js"></script>
        <!-- <script src="../registration/assets/js/pages/changepassword/script.js"></script> -->
        <script>
            $(function()
            {
                // Init page helpers (BS Datepicker + BS Colorpicker + Select2 + Masked Input + Tags Inputs plugins)
                // App.initHelpers(['select2']);
                // App.initHelpers('table-tools');
            });
        </script>
    </body>

</html>
