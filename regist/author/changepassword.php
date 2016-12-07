<?php
session_start();

include "../../xplor-config.php";
include "../../xplor-connect.php";
include "../lib/dateTime-inter.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

include "check-userinfo.php";

?>
<html>
<head>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <!-- Document title -->
    <title>PostgradForum2017 change password</title>

    <meta name="description" content="AppUI - Admin Dashboard Template & UI Framework" />
    <meta name="author" content="rustheme" />
    <meta name="robots" content="noindex, nofollow" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/favicons/apple-touch-icon.png" />
    <link rel="icon" href="../assets/img/favicons/favicon.ico" />

    <!-- Google fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="../lib/sweetalert/dist/sweetalert.css">

    <!-- AppUI CSS stylesheets -->
    <link rel="stylesheet" id="css-font-awesome" href="../assets/css/font-awesome.css" />
    <link rel="stylesheet" id="css-ionicons" href="../assets/css/ionicons.css" />
    <link rel="stylesheet" id="css-bootstrap" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" id="css-app" href="../assets/css/app.css" />
    <link rel="stylesheet" id="css-app-custom" href="../assets/css/app-custom.css" />

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

  <body>
    <?php include "header.php"; ?>

    <div class="main">
      <div class="container">
        <div class="row" style="padding-top: 0px;">
          <div class="col-sm-12">

            <div class="card">
              <div class="card-header bg-success">
                  <h4>Change password</h4>
              </div>
              <div class="card-block">
                <form class="js-validation-bootstrap form-horizontal" action="../controller/update-password.php?callback=staff" method="post">
                  <div class="form-group">
                      <label class="col-md-4 control-label" for="val-username">New password <span class="text-red">**</span></label>
                      <div class="col-md-7">
                          <input class="form-control" type="password" id="val-password1" name="val-password1" placeholder="Enter new password..." />
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-md-4 control-label" for="val-email">Verify new password <span class="text-red">**</span></label>
                      <div class="col-md-7">
                          <input class="form-control" type="password" id="val-password2" name="val-password2" placeholder="Enter new password again..." />
                      </div>
                  </div>

                  <div class="form-group m-b-0">
                                                <div class="col-md-8 col-md-offset-4">
                                                    <button class="btn btn-app" type="submit">Submit</button>
                                                    <button class="btn btn-app-light" type="reset">Reset</button>
                                                </div>
                                            </div>
                </form>
              </div>
            </div>

          </div>
        </div>

        <div class="row" style="padding-top: 30px; padding-bottom: 30px;">
          <div class="col-sm-12 text-center">
            The 11th Postgraduate Forum on Health Systems and Policy:
  Integrated Health System and Policy for Sustainable Development Goal
          </div>
        </div>
      </div>
    </div>

    <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/core/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/core/jquery.scrollLock.min.js"></script>
    <script src="../assets/js/core/jquery.placeholder.min.js"></script>
    <script src="../assets/js/app.js"></script>
    <script src="../assets/js/app-custom.js"></script>

    <script src="../lib/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <script src="../assets/js/pages/changepassword/base_forms_validation.js"></script>
    <script type="text/javascript">
      var pages = 'author/changepassword';
    </script>
    <script src="../assets/js/locate_access.js"></script>
  </body>
</html>
