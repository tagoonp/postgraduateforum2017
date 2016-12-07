<?php


include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();

if((!isset($_GET['sid'])) || (!isset($_GET['email']))){
  header('Location: fail.php');
  die();
}

$strSQL = "SELECT * FROM t5iw_useraccount WHERE email = ? AND sid = ?";
$resultCheck = $db->select($strSQL, array($_GET['email'], $_GET['sid']));

if(!$resultCheck){
  header('Location: fail.php');
  die();
}
 ?>
<html>
<head>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <!-- Document title -->
    <title>PostgradForum2017 ressetting password</title>

    <meta name="description" content="AppUI - Admin Dashboard Template & UI Framework" />
    <meta name="author" content="rustheme" />
    <meta name="robots" content="noindex, nofollow" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/favicons/apple-touch-icon.png" />
    <link rel="icon" href="../assets/img/favicons/favicon.ico" />

    <!-- Google fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="../assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="../assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" />
    <link rel="stylesheet" href="../assets/js/plugins/select2/select2.min.css" />
    <link rel="stylesheet" href="../assets/js/plugins/select2/select2-bootstrap.css" />
    <link rel="stylesheet" href="../assets/js/plugins/dropzonejs/dropzone.min.css" />
    <link rel="stylesheet" href="../assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css" />

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
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">

          </div>
        </div>
      </div>
    </div>

    <div class="main">
      <div class="container">
        <!-- <hr class="style4"> -->
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
            <div class="text-center" style="padding-top: 40px;">
              <img src="../img/postgrad2017-logo.png" alt="The 11th Post Graduate Forum on Health System and Policy" style="width: 100%;">
            </div>
            <h3 class="text-center" style="font-weight: 400;">Create new password</h3>
            <form class="js-validation-bootstrap form-horizontal" action="../controller/resetpassword.php" method="post" style="padding-top: 30px;">

              <div class="form-group" style="display:none;">
                  <label class="col-md-4 control-label" for="val-username">SID <span class="text-orange">*</span></label>
                  <div class="col-md-7">
                      <input class="form-control" type="text" id="sid" name="sid" autofocus placeholder="Create your new password ..." value="<?php echo $_GET['sid']; ?>" />
                  </div>
              </div>

              <div class="form-group" style="display:none;">
                  <label class="col-md-4 control-label" for="val-username">EMAIL <span class="text-orange">*</span></label>
                  <div class="col-md-7">
                      <input class="form-control" type="text" id="email" name="email" placeholder="Create your new password ..." value="<?php echo $_GET['email']; ?>" />
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-md-4 control-label" for="val-username">New password <span class="text-orange">*</span></label>
                  <div class="col-md-7">
                      <input class="form-control" type="password" id="password1" name="password1" autofocus placeholder="Create your new password ..." />
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-md-4 control-label" for="val-email">Verify new password <span class="text-orange">*</span></label>
                  <div class="col-md-7">
                      <input class="form-control" type="password" id="password2" name="password2" placeholder="Enter new password again ..." />
                  </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12 text-center" style="padding-top: 10px;">
                  <button class="btn btn-app">Submit</button>
                </div>
              </div>
            </form>
          </div>

          <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 text-center" style="padding-top: 20px;">
            <a href="./" class="text-blue">Back to login</a>
          </div>
        </div>

        <div class="row" style="padding-top: 30px;">
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

    <script src="../assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="../assets/js/pages/newpwd/base_forms_validation.js"></script>

  </body>

</html>
