<?php
session_start();

include "xplor-config.php";
include "xplor-connect.php";

$db = new database();
$db->connect();

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
        <link rel="stylesheet" id="css-font-awesome" href="assets/css/font-awesome.css" />
        <link rel="stylesheet" id="css-ionicons" href="assets/css/ionicons.css" />
        <link rel="stylesheet" id="css-bootstrap" href="assets/css/bootstrap.css" />
        <link rel="stylesheet" id="css-app" href="assets/css/app.css" />
        <link rel="stylesheet" id="css-app-custom" href="assets/css/app-custom.css" />

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
                              <ul class="nav navbar-nav navbar-right navbar-toolbar hidden-sm hidden-xs">
                                    <li style="padding: 15px 10px;">
                                        <!-- <a href="javascript:void(0)" class="btn btn-app-blue" data-toggle="modal" data-target="#apps-modal">Submisstion</a> -->
                                        <button type="button" name="button" class="btn btn-app-red" style="font-size: 1em;" onclick="Javascript: location='./submission/'">Go to Submission <i class="fa fa-angle-double-right"></i></button>
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
                              <div class="card-header bg-red bg-inverse" style="padding-top: 40px; padding-bottom: 30px;">
                                  <h2 class="text-center" style="font-weight: 500; line-height: 0.8;">Registration fail<br>
                                    <!-- <small style="color: #fff; font-size: 0.6em; ">
                                      The 11th Postgraduate Forum: on Health Systems and Policy:<br>
                                      Integrated Health System and Policy for Sustainable Development Goal
                                    </small> -->
                                  </h2>
                              </div>
                              <div class="card-block" style="padding-top: 50px; padding-bottom: 50px;">
                                 <p class="text-center">
                                   Please try to register again or contact our coordinator.
                                 </p>
                                 <p class="text-center" style="padding-top: 30px;">
                                   <a href="./submission/" class="btn btn-app-red">Go to registration</a>
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
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/app-custom.js"></script>
    </body>

</html>
