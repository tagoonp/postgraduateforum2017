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

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css" />
        <link rel="stylesheet" href="assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" />
        <link rel="stylesheet" href="assets/js/plugins/select2/select2.min.css" />
        <link rel="stylesheet" href="assets/js/plugins/select2/select2-bootstrap.css" />
        <link rel="stylesheet" href="assets/js/plugins/dropzonejs/dropzone.min.css" />
        <link rel="stylesheet" href="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css" />

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
                                  <a href="#" style="font-size: 1.1em; font-weight: 500;">PostgradForum2017</a>
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
                              <div class="card-header bg-green bg-inverse" style="padding-top: 40px; padding-bottom: 30px;">
                                  <h2 class="text-center" style="font-weight: 500; line-height: 0.8;">Registration form<br>
                                    <small style="color: #fff; font-size: 0.6em; ">
                                      The 11th Postgraduate Forum: on Health Systems and Policy:<br>
                                      Integrated Health System and Policy for Sustainable Development Goal
                                    </small>
                                  </h2>
                              </div>
                              <div class="card-block" style="padding-top: 30px;">
                                 <form class="js-validation-bootstrap form-horizontal" action="controller/insert-register.php" method="post" >
                                   <div class="form-group">
                                     <label class="col-md-3 control-label" for="example-select2">Registration type <span class="text-red">**</span></label>
                                     <div class="col-md-8">
                                       <select class="form-control" id="reg_type" name="reg_type" size="1">
                                        <option value="" selected="">---- Choose type ----</option>
                                        <option value="1">Thai</option>
                                        <option value="2">International</option>
                                      </select>
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label class="col-md-3 control-label" for="example-select2">Prefix <span class="text-red">**</span></label>
                                     <div class="col-md-8">
                                       <select class="form-control" id="prefix" name="prefix" size="1">
                                        <option value="" selected="">---- Choose prefix ----</option>
                                        <option value="Dr.">Dr.</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Ms.">Ms.</option>
                                        <option value="Mrs.">Mrs.</option>
                                      </select>
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label class="col-md-3 control-label" for="val-username">First name <span class="text-red">**</span></label>
                                     <div class="col-md-8">
                                         <input class="form-control" type="text" id="fname" name="fname" placeholder="Enter first name ..." />
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label class="col-md-3 control-label" for="val-username">Last name <span class="text-red">**</span></label>
                                     <div class="col-md-8">
                                         <input class="form-control" type="text" id="lname" name="lname" placeholder="Enter last name..." />
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label class="col-md-3 control-label" for="val-username">University/Institute <span class="text-red">**</span></label>
                                     <div class="col-md-8">
                                         <input class="form-control" type="text" id="university" name="university" placeholder="Enter university or Institute ..." />
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label class="col-md-3 control-label" for="val-username">Address <span class="text-red">**</span></label>
                                     <div class="col-md-8">
                                         <textarea class="form-control" id="address" name="address" rows="5" placeholder="Enter your address ..."></textarea>
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
                                               <option value="<?php echo $value['country_code'];?>"><?php echo $value['country_name'];?></option>
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
                                         <input class="form-control" type="text" id="phone" name="phone" placeholder="Enter phone number ..." />
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label class="col-md-3 control-label" for="val-username">E-mail address <span class="text-red">**</span></label>
                                     <div class="col-md-8">
                                         <input class="form-control" type="text" id="email" name="email" placeholder="Enter e-mail address ..." />
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label class="col-md-3 control-label" for="val-username">Meal request </label>
                                     <div class="col-md-8">
                                       <label class="css-input css-checkbox css-checkbox-success">
                                         <input type="checkbox" name="meal" id="meal" value="Y" /><span></span> Halal food
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

        <!-- Apps Modal -->
        <!-- Opens from the button in the header -->
        <div id="apps-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-sm modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <!-- Apps card -->
                    <div class="card m-b-0">
                        <div class="card-header bg-app bg-inverse">
                            <h4>Apps</h4>
                            <ul class="card-actions">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <div class="row text-center">
                                <div class="col-xs-6">
                                    <a class="card card-block m-b-0 bg-app-secondary bg-inverse" href="index.html">
                                        <i class="ion-speedometer fa-4x"></i>
                                        <p>Admin</p>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="card card-block m-b-0 bg-app-tertiary bg-inverse" href="frontend_home.html">
                                        <i class="ion-laptop fa-4x"></i>
                                        <p>Frontend</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- .card-block -->
                    </div>
                    <!-- End Apps card -->
                </div>
            </div>
        </div>
        <!-- End Apps Modal -->

        <div class="app-ui-mask-modal"></div>

        <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/app-custom.js"></script>

        <!-- Page JS Plugin -->
        <script src="assets/js/plugins/select2/select2.full.min.js"></script>
        <script src="assets/js/plugins/dropzonejs/dropzone.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/registration/base_forms_validation.js"></script>
        <script src="assets/js/pages/registration/script.js"></script>
        <script>
            $(function()
            {
                // Init page helpers (BS Datepicker + BS Colorpicker + Select2 + Masked Input + Tags Inputs plugins)
                App.initHelpers(['select2']);
            });
        </script>
    </body>

</html>
