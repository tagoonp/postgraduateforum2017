<?php
session_start();
session_regenerate_id();

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
                              <div class="card-header bg-blue bg-inverse" style="padding-top: 30px; padding-bottom: 30px;">
                                  <h2 class="text-left" style="font-weight: 500; line-height: 0.8;">Abstract submission
                                  </h2>
                              </div>
                              <div class="card-block" style="padding-top: 30px;">
                                 <form class="js-validation-bootstrap form-horizontal" action="controller/insert-submission.php" method="post" >

                                   <div class="form-group">
                                     <label class="col-md-3 control-label" for="val-suggestions">Title <span class="text-orange">*</span></label>
                                     <div class="col-md-8">
                                         <textarea class="form-control" id="txt-title" name="txt-title" rows="6" placeholder="Share your ideas with us.."></textarea>
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label class="col-md-3 control-label" for="example-select2">Presentation type <span class="text-red">**</span></label>
                                     <div class="col-md-8">
                                       <select class="form-control" id="reg_type" name="reg_type" size="1">
                                        <option value="" selected="">---- Choose type ----</option>
                                        <option value="1">Oral presentation </option>
                                        <option value="2">Poster presentation</option>
                                      </select>
                                     </div>
                                   </div>

                                   <div class="form-group">
                                     <label class="col-md-3 control-label" for="example-select2">Topic categories <span class="text-red">**</span></label>
                                     <div class="col-md-8">
                                       <select class="form-control" id="topic_type" name="topic_type" size="1">
                                        <option value="" selected="">---- Choose categories ----</option>
                                        <option value="1">Universal health coverage </option>
                                        <option value="2">Health workforce and finance</option>
                                        <option value="3">Primary health care</option>
                                        <option value="4">Health equity</option>
                                        <option value="5">Policy integration for sustainable development</option>
                                        <option value="6">Health systems for sustainable development</option>
                                        <option value="7">Health in sustainable development goals</option>
                                      </select>
                                     </div>
                                   </div>

                                   <div class="form-group" style="margin-top: 0px; padding-bottom: 0px;">
                                     <label class="col-md-3 control-label" for="val-username">Abstract File <span class="text-red">**</span></label>
                                     <div class="col-md-4 col-sm-4" id="filepanel" style="padding-top: 220px;">
                                       <div class="" style="font-size: 0.8em; color: red;">
                                         ( * File type .doc or .docx Only)<br>
                                         ( ** The file should not be larger than 5MB)
                                       </div>
                                       <div class="" style="padding-top: 20px;">
                                         <button type="submit" class="btn btn-app-blue">Submit</button>
                                         <button type="reset" class="btn btn-app-light">Reset</button>
                                       </div>
                                     </div>
                                     <div class="col-md-4 col-sm-4">
                                       <label for="">Uploaded file</label>
                                       <!-- <div class="alert alert-info">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                          <strong>Heads up!</strong> Change a <a class="alert-link" href="#">few things</a> up and try submitting again.
                                        </div>
                                        <div class="alert alert-info">
                                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                           <strong>Heads up!</strong> Change a <a class="alert-link" href="#">few things</a> up and try submitting again.
                                         </div> -->
                                      <div class="">
                                        <span id="uploadResult">
                                          No file upload ...
                                        </span>
                                      </div>
                                      <input type="text" id="filnenumber" name="filnenumber" readonly value="0" style="display:none;">
                                     </div>
                                   </div>
                                 </form>
                              </div>
                            </div>

                            <div class="col-md-8 col-md-offset-3" id="fileupload" style=" position: absolute; z-index: 999;">
                              <form class="dropzone" id="myFile" action="controller/upload_file.php"></form>
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
          $(function(){
            // jQuery
            Dropzone.options.myFile = {
              acceptedFiles: '.docx, .doc',
              maxFilesize: 5,
              maxFiles: 1,
              init: function(){
                this.on("success", function(file) {
                    var response = $.post('controller/check_upload_file.php');
                    response.always(function(res){
                      $('#uploadResult').html(res);
                    });

                    var response2 = $.post('controller/check_upload_file2.php');
                    response2.always(function(res){
                      $('#filnenumber').val(res);
                      console.log(res);
                      if(res!=0){
                        $('.dropzone').css('border-color', '#ccc');
                      }
                    });
                });

                this.on("complete", function(file) {
                  this.removeFile(file);
                });
              }
            };
          });
          </script>
    </body>

</html>
