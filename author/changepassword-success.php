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
        <title>PostgradForum2017 Registration</title>

        <meta name="description" content="AppUI - Admin Dashboard Template & UI Framework" />
        <meta name="author" content="rustheme" />
        <meta name="robots" content="noindex, nofollow" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" />
        <link rel="icon" href="assets/img/favicons/favicon.ico" />

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
                          <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" style="padding-top: 80px;">
                            <div class="card">
                              <div class="card-header bg-blue bg-inverse" style="padding-top: 40px; padding-bottom: 30px;">
                                  <h2 class="text-center" style="font-weight: 500; line-height: 0.8;">Change password success<br>
                                    <!-- <small style="color: #fff; font-size: 0.6em; ">
                                      The 11th Postgraduate Forum: on Health Systems and Policy:<br>
                                      Integrated Health System and Policy for Sustainable Development Goal
                                    </small> -->
                                  </h2>
                              </div>
                              <div class="card-block" style="padding-top: 50px; padding-bottom: 50px;">
                                 <p class="text-center">
                                   You password have been change. Check your email for new password.
                                 </p>
                                 <p class="text-center" style="padding-top: 30px;">
                                   <a href="./" class="btn btn-app-blue">Go to home</a>
                                 </p>
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
        <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
        <script src="../registration/assets/js/core/jquery.min.js"></script>
        <script src="../registration/assets/js/core/bootstrap.min.js"></script>
        <script src="../registration/assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="../registration/assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="../registration/assets/js/core/jquery.placeholder.min.js"></script>
        <script src="../registration/assets/js/app.js"></script>
        <script src="../registration/assets/js/app-custom.js"></script>

    </body>

</html>
