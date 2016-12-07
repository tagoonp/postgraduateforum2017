<?php
session_start();
session_regenerate_id();

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
        <link rel="apple-touch-icon" href="../registration/assets//img/favicons/apple-touch-icon.png" />
        <link rel="icon" href="../registration/assets//img/favicons/favicon.ico" />

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="../registration/assets/js/plugins/dropzonejs/dropzone.min.css" />

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
                                  <a href="../../" style="font-size: 1.1em; font-weight: 500;">PostgradForum2017</a>
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
                                  <h2 class="text-left" style="font-weight: 500; line-height: 0.8;">Your information
                                  </h2>
                              </div>
                              <div class="card-block" style="padding: 0px 24px ;">
                                <a href="./"><i class="fa fa-home"></i> Home</a>&nbsp;&nbsp;/&nbsp;&nbsp;User information
                              </div>
                              <div class="card-block" style="padding-top: 30px;">
                                <form class="js-validation-bootstrap form-horizontal" action="controller/update-register.php" method="post" >
                                  <div class="form-group">
                                    <label class="col-md-3 control-label" for="example-select2">Registration type <span class="text-red">**</span></label>
                                    <div class="col-md-8">
                                      <select class="form-control" id="reg_type" name="reg_type" size="1">
                                       <option value="" selected="">---- Choose type ----</option>
                                       <option value="Thai" <?php if($rowinfo['reg_type']=='Thai'){ echo "selected"; } ?>>Thai</option>
                                       <option value="Inter" <?php if($rowinfo['reg_type']=='Inter'){ echo "selected"; } ?>>International</option>
                                     </select>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-md-3 control-label" for="example-select2">Prefix <span class="text-red">**</span></label>
                                    <div class="col-md-8">
                                      <select class="form-control" id="prefix" name="prefix" size="1">
                                       <option value="" selected="">---- Choose prefix ----</option>
                                       <option value="Dr." <?php if($rowinfo['prefix_id']=='Dr.'){ echo "selected"; } ?>>Dr.</option>
                                       <option value="Mr." <?php if($rowinfo['prefix_id']=='Mr.'){ echo "selected"; } ?>>Mr.</option>
                                       <option value="Ms." <?php if($rowinfo['prefix_id']=='Ms.'){ echo "selected"; } ?>>Ms.</option>
                                       <option value="Mrs." <?php if($rowinfo['prefix_id']=='Mrs.'){ echo "selected"; } ?>>Mrs.</option>
                                     </select>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-md-3 control-label" for="val-username">First name <span class="text-red">**</span></label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" id="fname" name="fname" placeholder="Enter first name ..." value="<?php echo $rowinfo['fname'];?>" />
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-md-3 control-label" for="val-username">Last name <span class="text-red">**</span></label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" id="lname" name="lname" placeholder="Enter last name..." value="<?php echo $rowinfo['lname'];?>" />
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-md-3 control-label" for="val-username">University/Institute <span class="text-red">**</span></label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" id="university" name="university" placeholder="Enter university or Institute ..." value="<?php echo $rowinfo['university'];?>" />
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-md-3 control-label" for="val-username">Address <span class="text-red">**</span></label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" id="address" name="address" rows="5" placeholder="Enter your address ..."><?php echo $rowinfo['address'];?></textarea>
                                    </div>
                                  </div>

                                  <div class="form-group" id="r1">
                                    <label class="col-md-3 control-label" for="example-select2">Country <span class="text-red">**</span></label>
                                    <div class="col-md-8">
                                        <select class="form-control js-select2 " id="country" name="country" style="width: 100%;" data-placeholder="---- Choose one ----">
                                          <option value="" selected=""></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                          <?php
                                          $strSQL = "SELECT * FROM t5iw_countries WHERE ? ORDER BY ?";
                                          $resultCountry = $db->select($strSQL, array('1', 'country_name'));
                                          if($resultCountry){
                                            foreach ($resultCountry as $value) {
                                              ?>
                                              <option value="<?php echo $value['country_code'];?>" <?php if($rowinfo['country_id']==$value['country_code']){ echo "selected"; }?>><?php echo $value['country_name'];?></option>
                                              <?php
                                            }
                                          }
                                          ?>
                                        </select>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-md-3 control-label" for="val-username">Telephone number <span class="text-red">**</span></label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" id="phone" name="phone" placeholder="Enter phone number ..." value="<?php echo $rowinfo['tel'];?>" />
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-md-3 control-label" for="val-username">E-mail address <span class="text-red">**</span></label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" id="email" name="email" placeholder="Enter e-mail address ..." value="<?php echo $rowinfo['email'];?>" />
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-md-3 control-label" for="val-username">Meal request </label>
                                    <div class="col-md-8">
                                      <label class="css-input css-checkbox css-checkbox-success">
                                        <input type="checkbox" name="meal" id="meal" value="Y" <?php if($rowinfo['halal']=='Y'){ echo "checked"; } ?> /><span></span> Halal food
                                      </label>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <div class="col-md-8 col-md-offset-3">
                                      <button type="submit" class="btn btn-app">Submit</button>
                                      <button type="reset" class="btn btn-app-light">Reset</button>
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

        <!-- Page JS Plugin -->
        <script src="../registration/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="../registration/assets/js/plugins/dropzonejs/dropzone.min.js"></script>

        <!-- Page JS Code -->
        <script src="../registration/assets/js/pages/submission/base_forms_validation.js"></script>
        <script src="../registration/assets/js/pages/submission/script.js"></script>
        <script src="../registration/assets/js/pages/submission/uploadfile.js"></script>

        <script type="text/javascript">
          $(document).ready(function(){

          });

          $(function(){

          });
          </script>
    </body>

</html>
