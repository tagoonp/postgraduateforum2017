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
    <title>PostgradForum2017 submision</title>

    <meta name="description" content="AppUI - Admin Dashboard Template & UI Framework" />
    <meta name="author" content="rustheme" />
    <meta name="robots" content="noindex, nofollow" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/favicons/apple-touch-icon.png" />
    <link rel="icon" href="../assets/img/favicons/favicon.ico" />

    <!-- Google fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="../assets/js/plugins/datatables/jquery.dataTables.min.css" />
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
                <li class="active"><a href="./">Home</a></li>
                <li><a href="upload-recipe.php" style="color: #fff;">Upload registration fee receipt</a></li>
                <li><a href="upload-recipe.php" style="color: #fff;">Upload hotel reservation receipt</a></li>
                <!-- <li><a href="#" style="color: #fff;">About</a></li>
                <li><a href="#" style="color: #fff;">Contact</a></li> -->

              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Howdy</strong>, <?php echo $rowinfo['prefix_id'].$rowinfo['fname']." ".$rowinfo['lname']; ?> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="userinfo.php">User info.</a></li>
                    <li><a href="changepassword.php">Change password</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="../signout.php">Sign out</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
      </div>
    </div>

    <div class="main">
      <div class="container">
        <div class="row" style="padding-top: 0px;">
          <div class="col-sm-12">

            <div class="card">
              <div class="card-header bg-success">
                  <h4>Summary</h4>
              </div>
              <div class="card-block">
                <table class="table table-striped table-condensed">
                  <tbody>
                    <tr style="background: #32c294;">
                      <td style="font-size: 1.3em; color: #fff;" class="font-500" colspan="2">General information</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td class="col-sm-3">Full name</td>
                      <td class="font-300"><?php echo $rowinfo['prefix_id'].$rowinfo['fname']." ".$rowinfo['lname']; ?></td>
                    </tr>
                    <tr>
                      <td>Participation type </td>
                      <td class="font-300">
                        <?php
                        switch($rowinfo['par_type']){
                          case '1': echo "Presenter"; break;
                          case '2': echo "Non-presenter"; break;
                          default: echo "N/A";
                        }
                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Registration type</td>
                      <td class="font-300">
                        <?php
                        switch($rowinfo['reg_type']){
                          case '1': echo "Thai"; break;
                          case '2': echo "Non-Thai"; break;
                          default: echo "N/A";
                        }
                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td>University/Institute</td>
                      <td class="font-300"><?php echo $rowinfo['university']; ?></td>
                    </tr>
                    <tr>
                      <td>Status</td>
                      <td class="font-300">
                        <?php
                        if($rowinfo['status']!='99'){
                          switch($rowinfo['status']){
                            case '1': echo "Undergraduate student"; break;
                            case '2': echo "Graduate student"; break;
                            case '3': echo "Teacher"; break;
                            case '4': echo "Researcher"; break;
                            default: echo "N/A";
                          }
                        }else{
                          echo $rowinfo['status_other'];
                        }

                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Address</td>
                      <td class="font-300"><?php echo $rowinfo['address']; ?></td>
                    </tr>
                    <tr>
                      <td>Country</td>
                      <td class="font-300"><?php echo $rowinfo['country_name']; ?></td>
                    </tr>
                    <tr>
                      <td>Phone number</td>
                      <td class="font-300"><?php echo $rowinfo['tel']; ?></td>
                    </tr>
                    <tr>
                      <td>E-mail address</td>
                      <td class="font-300"><?php echo $rowinfo['email'] ?></td>
                    </tr>
                    <tr>
                      <td>Meal request</td>
                      <td class="font-300">
                        <?php if($rowinfo['halal']=='Y'){ echo "<span class='text-red'>- Halal</span><br>";} ?>
                        <?php if($rowinfo['vegie']=='Y'){ echo "<span class='text-red'>- Vegetarian</span><br>";} ?>
                        <?php if($rowinfo['nobeef']=='Y'){ echo "<span class='text-red'>- No beef</span><br>";} ?>
                        <?php if($rowinfo['noseafood']=='Y'){ echo "<span class='text-red'>- No Seafood</span><br>";} ?>
                        <?php if(($rowinfo['halal']=='N') && ($rowinfo['vegie']=='N') && ($rowinfo['nobeef']=='N') && ($rowinfo['noseafood']=='N')){ echo "No request"; } ?>
                      </td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr style="background: #32c294;">
                      <td style="font-size: 1.3em; color: #fff;" class="font-500" colspan="2">Accommodation information</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>Accommodation's name </td>
                      <td class="font-300">
                        <?php
                        if($rowinfo['accommodation']!='99'){
                          switch($rowinfo['accommodation']){
                            case '1': echo "Buri Sriphu boutique Hotel"; break;
                            case '2': echo "Crystal Hotel"; break;
                            default: echo "N/A";
                          }
                        }else{
                          echo $rowinfo['accommodation_other'];
                        }
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Arrival </td>
                      <td class="font-300"><?php echo $rowinfo['arr_date']." ".$rowinfo['arr_time']; ?></td>
                    </tr>
                    <tr>
                      <td>Department </td>
                      <td class="font-300"><?php echo $rowinfo['dept_date']." ".$rowinfo['dept_time']; ?></td>
                    </tr>
                    <tr>
                      <td>Travel</td>
                      <td class="font-300">
                        <?php
                        if($rowinfo['travel']!='99'){
                          switch($rowinfo['travel']){
                            case '1': echo "Plane"; break;
                            case '2': echo "Train"; break;
                            case '3': echo "Bus"; break;
                            case '4': echo "Private car"; break;
                            default: echo "N/A";
                          }
                        }else{
                          echo $rowinfo['accommodation_other'];
                        }
                        ?>
                      </td>
                    </tr>
                  </tbody>

                  <tbody>
                    <tr style="background: #32c294;">
                      <td style="font-size: 1.3em; color: #fff;" class="font-500" colspan="2">Registration fee</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>Transfer recipe </td>
                      <td class="font-300">
                        <span class="text-red">Not upload yet.</span>
                        <div class="" style="padding-top: 10px; padding-bottom: 20px;">
                          <button type="button" name="button" class="btn btn-app-blue" data-toggle="tooltip" data-placement="top" title="Upload recipe" ><i class="fa fa-upload"></i> Upload recipe</button>
                        </div>
                      </td>
                    </tr>

                  </tbody>

                </table>
              </div>
            </div>

          </div>
        </div>

        <div class="row" style="padding-top: 30px;padding-bottom: 30px;">
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
    <script src="../assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../lib/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Page JS Code -->
    <script src="../assets/js/pages/base_tables_datatables.js"></script>
    <script type="text/javascript">
      var pages = 'author/index';
    </script>
    <script src="../assets/js/locate_access.js"></script>
  </body>
</html>
