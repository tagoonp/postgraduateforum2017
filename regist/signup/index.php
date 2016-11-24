<?php
session_start();

include "../../xplor-config.php";
include "../../xplor-connect.php";

$db = new database();
$db->connect();


?>
<html>
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
    <link rel="apple-touch-icon" href="../assets/img/favicons/apple-touch-icon.png" />
    <link rel="icon" href="../assets/img/favicons/favicon.ico" />

    <!-- Google fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="../assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="../assets/js/plugins/select2/select2.min.css" />
    <link rel="stylesheet" href="../assets/js/plugins/select2/select2-bootstrap.css" />
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
      <div class="container" style="padding-top: 20px;">
        <div class="row">
          <div class="col-sm-3">
            <img src="../img/postgrad2017-logo.png" alt="The 11th Post Graduate Forum on Health System and Policy" style="width: 100%;">
          </div>
          <div class="col-sm-9">

          </div>
        </div>

        <nav class="navbar navbar-default" style="padding-left: 0px; background: #32c294; margin-top: 20px; margin-bottom: 20px;">
          <div class="container-fluid" style="padding-left: 0px;">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#" style="color: #fff;">About</a></li>
                <li><a href="#" style="color: #fff;">Contact</a></li>

              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
      </div>
    </div>

    <div class="main">
      <div class="container">
        <!-- <hr class="style4"> -->
        <div class="row">
          <div class="col-sm-12">
            <h2 class="section-title">Registration form</h2>
            <!-- <div class="col-lg-6"> -->
                                  <!-- Classic Validation Wizard (.js-wizard-classic-validation class is initialized in js/pages/base_forms_wizard.js) -->
                                  <!-- For more examples please check http://vadimg.com/twitter-bootstrap-wizard-example/ -->
                                  <div class="card js-wizard-classic-validation">
                                  <!-- <div class="card"> -->
                                      <!-- Step Tabs -->
                                      <ul class="nav nav-tabs nav-justified">
                                          <li class="active">
                                              <a class="inactive " href="#validation-classic-step1" data-toggle="tab">1. Aggreement</a>
                                          </li>
                                          <li>
                                              <a class="inactive" href="#validation-classic-step2" data-toggle="tab">2. Information</a>
                                          </li>
                                      </ul>
                                      <!-- End Step Tabs -->

                                      <!-- Form -->
                                      <!-- jQuery Validation (.js-form1 class is initialized in js/pages/base_forms_wizard.js) -->
                                      <!-- For more examples please check https://github.com/jzaefferer/jquery-validation -->
                                      <form class="js-form1 validation form-horizontal" action="../controller/register.php" method="post">
                                          <!-- Steps Content -->
                                          <div class="card-block tab-content">
                                              <!-- Step 1 -->
                                              <div class="tab-pane m-t-md m-b-lg active" id="validation-classic-step1">
                                                <h3 class="text-center" style="font-weight: 400; background: #32c294; padding: 10px; color: #fff;" >1.1 Read me befor registration and Submission</h3>
                                                <div class="form-group" style="">
                                                  <div class="col-md-12 text-center">
                                                    <label class="css-input css-checkbox css-checkbox-default" for="val-terms">Agreement <span class="text-red">*</span>
                                                      <input type="checkbox" id="val-terms" name="val-terms" value="1" /><span></span> I agree to the agreement
                                                    </label>
                                                  </div>
                                                </div>
                                              </div>
                                              <!-- End Step 1 -->

                                              <!-- Step 2 -->
                                              <div class="tab-pane m-t-md m-b-lg" id="validation-classic-step2">

                                                <h3 style="font-weight: 400; background: #32c294; padding: 10px; color: #fff;" >2.1 General information</h3>
                                                <div class="form-group" style="padding-top: 30px;">
                                                  <label class="col-md-3 control-label" for="example-select2">Registration type <span class="text-red">**</span></label>
                                                  <div class="col-md-8">
                                                    <select class="form-control" id="reg_type" name="reg_type" size="1">
                                                     <option value="" selected="">---- Choose type ----</option>
                                                     <option value="1">Thai</option>
                                                     <option value="2">Non-Thai</option>
                                                   </select>
                                                  </div>

                                                </div>

                                                <div class="form-group">
                                                  <label class="col-md-3 control-label" for="example-select2">Participation type <span class="text-red">**</span></label>
                                                  <div class="col-md-8">
                                                    <select class="form-control" id="pre_type" name="pre_type" size="1">
                                                     <option value="" selected="">---- Choose participation type ----</option>
                                                     <option value="1">Presenter</option>
                                                     <option value="2">Non-Presenter</option>
                                                   </select>
                                                  </div>
                                                  <div class="col-md-8 col-md-offset-3">
                                                    <p style="padding: 5px; font-size: 0.8em;">
                                                      <strong style="font-weight: 500;">Note!</strong> Presenter means the person who register with Oral or Poster presentation. In addition, is non-presenter. E.G. Keynote speaker, Staff , etc.
                                                    </p>
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
                                                     <option value="Assist. Prof.">Assist. Prof.</option>
                                                     <option value="Assoc. Prof.">Assoc. Prof.</option>
                                                     <option value="Prof.">Prof.</option>
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
                                                  <label class="col-md-3 control-label" for="example-select2">Status <span class="text-red">**</span></label>
                                                  <div class="col-md-8">
                                                    <select class="form-control" id="status" name="status" size="1">
                                                     <option value="" selected="">---- Choose status ----</option>
                                                     <option value="1">Undergraduate student</option>
                                                     <option value="2">Graduate student</option>
                                                     <option value="3">Teacher</option>
                                                     <option value="4">Researcher</option>
                                                     <option value="99">Other ...</option>
                                                   </select>
                                                  </div>
                                                </div>

                                                <div class="statusOption" style="display:none;">
                                                  <div class="form-group">
                                                    <label class="col-md-3 control-label" for="val-username">Other status <span class="text-red">**</span></label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="text" id="status_other" name="status_other" placeholder="Enter your status ..." value="-"  />
                                                    </div>
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

                                                <div class="form-group" id="reqEmail">
                                                  <label class="col-md-3 control-label" for="val-username">E-mail address <span class="text-red">**</span></label>
                                                  <div class="col-md-8">
                                                      <input class="form-control" type="text" id="email" name="email" placeholder="Enter e-mail address ..." />
                                                  </div>
                                                </div>

                                                <div class="form-group">
                                                  <label class="col-md-3 control-label" for="val-username">Meal request </label>
                                                  <div class="col-md-8">
                                                    <label class="css-input css-checkbox css-checkbox-success">
                                                      <input type="checkbox" name="meal1" id="meal1" value="Y" /><span></span> Halal food
                                                    </label><br>
                                                    <label class="css-input css-checkbox css-checkbox-success">
                                                      <input type="checkbox" name="meal2" id="meal2" value="Y" /><span></span> Vegetarian
                                                    </label><br>
                                                    <label class="css-input css-checkbox css-checkbox-success">
                                                      <input type="checkbox" name="meal3" id="meal3" value="Y" /><span></span> No-beef
                                                    </label><br>
                                                    <label class="css-input css-checkbox css-checkbox-success">
                                                      <input type="checkbox" name="meal4" id="meal4" value="Y" /><span></span> No-seafood
                                                    </label>
                                                  </div>
                                                </div>

                                                <h3 style="font-weight: 400; background: #32c294; padding: 10px; color: #fff;" >2.2 Accommodation information</h3>
                                                <div class="form-group" style="padding-top: 30px;">
                                                  <label class="col-md-3 control-label" for="example-select2">Accommodation's name <span class="text-red">**</span></label>
                                                  <div class="col-md-8">
                                                    <select class="form-control" id="accommodation" name="accommodation" size="1">
                                                     <option value="" selected="">---- Choose accomodation ----</option>
                                                     <option value="1">Buri Sriphu boutique Hotel</option>
                                                     <option value="2">Crystal Hotel</option>
                                                     <option value="99">Other ...</option>
                                                   </select>
                                                  </div>
                                                  <div class="col-md-8 col-md-offset-3">
                                                    <p style="padding: 5px; font-size: 0.8em;">
                                                      <strong style="font-weight: 500;">Note!</strong> we arrange the transportation from the hotel to the meeting venue if you stay in <span class="text-red">Buri Sriphu boutique Hotel</span> or <span class="text-red">Crystal Hotel</span>.
                                                    </p>
                                                  </div>
                                                </div>

                                                <div class="accommodationOption" style="display:none;">
                                                  <div class="form-group">
                                                    <label class="col-md-3 control-label" for="val-username">Other accommodation <span class="text-red">**</span></label>
                                                    <div class="col-md-8">
                                                      <input class="form-control" type="text" id="accommodation_other" name="accommodation_other" placeholder="Enter accommodation's name ..." value="-"  />
                                                    </div>
                                                  </div>
                                                </div>


                                                <div class="form-group">
                                                  <label class="col-md-3 control-label" for="example-select2">Date of arrival <span class="text-red">**</span></label>
                                                  <div class="col-md-8">
                                                    <input   style="margin: 0px;"  class="js-datepicker form-control" type="text" id="arr_date" name="arr_date" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <label class="col-md-3 control-label" for="example-select2">Time of arrival <span class="text-red">**</span></label>
                                                  <div class="col-sm-2">
                                                    <div class="form-group">
                                                      <div class="col-xs-12">
                                                        <select class="form-control" id="arr_time1" name="arr_time1" size="1">
                                                         <option value="" selected="">HH</option>
                                                         <?php
                                                         for ($i=0; $i < 24; $i++) {
                                                           $ival = $i;
                                                           if($i < 10){
                                                             $ival = "0".$ival;
                                                           }
                                                           ?>
                                                           <option value="<?php echo $ival;?>"><?php echo $ival;?></option>
                                                           <?php
                                                         }
                                                         ?>
                                                       </select>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <div class="col-sm-2">
                                                    <div class="form-group">
                                                      <div class="col-xs-12">
                                                        <select class="form-control" id="arr_time2" name="arr_time2" size="1">
                                                         <option value="" selected="">MN</option>
                                                         <?php
                                                         for ($i=0; $i < 60; $i++) {
                                                           $ival = $i;
                                                           if($i < 10){
                                                             $ival = "0".$ival;
                                                           }
                                                           ?>
                                                           <option value="<?php echo $ival;?>"><?php echo $ival;?></option>
                                                           <?php
                                                         }
                                                         ?>
                                                       </select>
                                                      </div>
                                                    </div>
                                                  </div>

                                                </div>

                                                <div class="form-group">
                                                  <label class="col-md-3 control-label" for="example-select2">Date of depart <span class="text-red">**</span></label>
                                                  <div class="col-md-8">
                                                    <input  style="margin: 0px;" class="js-datepicker form-control" type="text" id="dept_date" name="dept_date" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <label class="col-md-3 control-label" for="example-select2">Time of depart <span class="text-red">**</span></label>
                                                  <div class="col-sm-2">
                                                    <div class="form-group">
                                                      <div class="col-xs-12">
                                                        <select class="form-control" id="dept_time1" name="dept_time1" size="1">
                                                         <option value="" selected="">HH</option>
                                                         <?php
                                                         for ($i=0; $i < 24; $i++) {
                                                           $ival = $i;
                                                           if($i < 10){
                                                             $ival = "0".$ival;
                                                           }
                                                           ?>
                                                           <option value="<?php echo $ival;?>"><?php echo $ival;?></option>
                                                           <?php
                                                         }
                                                         ?>
                                                       </select>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <div class="col-sm-2">
                                                    <div class="form-group">
                                                      <div class="col-xs-12">
                                                        <select class="form-control" id="dept_time2" name="dept_time2" size="1">
                                                         <option value="" selected="">MN</option>
                                                         <?php
                                                         for ($i=0; $i < 60; $i++) {
                                                           $ival = $i;
                                                           if($i < 10){
                                                             $ival = "0".$ival;
                                                           }
                                                           ?>
                                                           <option value="<?php echo $ival;?>"><?php echo $ival;?></option>
                                                           <?php
                                                         }
                                                         ?>
                                                       </select>
                                                      </div>
                                                    </div>
                                                  </div>


                                                </div>

                                                <div class="form-group">
                                                  <label class="col-md-3 control-label" for="example-select2">Travel by <span class="text-red">**</span></label>
                                                  <div class="col-md-8">
                                                    <select class="form-control" id="travel_type" name="travel_type" size="1">
                                                     <option value="" selected="">---- Choose travel type ----</option>
                                                     <option value="1">Plain</option>
                                                     <option value="2">Train</option>
                                                     <option value="3">Bus</option>
                                                     <option value="4">Private car</option>
                                                     <option value="99">Other ...</option>
                                                   </select>
                                                  </div>
                                                </div>

                                                <div class="travelOption" style="display:none;">
                                                  <div class="form-group">
                                                    <label class="col-md-3 control-label" for="val-username">Other travel by </label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="text" id="travel_type_other" name="travel_type_other" placeholder="Enter your status ..." value="-" />
                                                    </div>
                                                  </div>
                                                </div>

                                              </div>
                                              <!-- End Step 2 -->
                                          </div>
                                          <!-- End Steps Content -->

                                          <!-- Steps Navigation -->
                                          <div class="card-block b-t">
                                              <div class="row">
                                                  <div class="col-xs-6">
                                                      <button class="wizard-prev btn btn-default" type="button">Previous</button>
                                                  </div>
                                                  <div class="col-xs-6 text-right">
                                                      <button class="wizard-next btn btn-default" type="button">Next</button>
                                                      <button class="wizard-finish btn btn-app" type="submit"><i class="ion-checkmark m-r-xs"></i> Submit</button>
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- End Steps Navigation -->
                                      </form>
                                      <!-- End Form -->
                                  </div>
                                  <!-- .card -->
                                  <!-- End Classic Validation Wizard -->
                              <!-- </div> -->
                              <!-- .col-lg-6 -->

          </div>

          <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 text-center" style="padding-top: 20px;">
            <a href="forgotpassword/" class="text-black">Forget password?</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="signup/" class="text-blue">Sign Up</a>
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

    <!-- Page JS Plugins -->
    <script src="../assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="../assets/js/plugins/select2/select2.full.min.js"></script>
    <script src="../assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="../assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Page JS Code -->
    <script src="../assets/js/pages/regist/base_forms_wizard.js"></script>
    <script src="../assets/js/pages/regist/main.js"></script>
    <script>
      $(function()
      {
          // Init page helpers (BS Datepicker + BS Colorpicker + Select2 + Masked Input + Tags Inputs plugins)
          App.initHelpers(['datepicker','select2']);
      });
    </script>
  </body>
</html>
