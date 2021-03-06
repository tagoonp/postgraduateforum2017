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
                <li><a href="./" style="color: #fff;">Home</a></li>
                <li  class="active"><a href="slist.php"  style="color: #fff;">Submitted list</a></li>
                <!-- <li><a href="#" style="color: #fff;">About</a></li>
                <li><a href="#" style="color: #fff;">Contact</a></li> -->

              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Howdy</strong>, <?php echo $rowinfo['prefix_id'].$rowinfo['fname']." ".$rowinfo['lname']; ?> (Staff) <span class="caret"></span></a>
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
                  <h4>Submitted abstract list</h4>
              </div>
              <div class="card-block">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                  <thead>
                      <tr>
                          <th class="text-center"></th>
                          <th class="w-20">
                            ID
                          </th>
                          <th>Title</th>
                          <th class="hidden-xs">Status</th>
                          <th class="hidden-xs w-20">Created</th>
                          <th class="" style="width: 10%;">Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                    $strSQL = "SELECT * FROM t5iw_submission a INNER JOIN t5iw_useraccount b on a.username = b.username
                              INNER JOIN t5iw_userinformation c on b.username = c.username
                              INNER JOIN t5iw_presentation_type d on a.presentation_type = d.pr_id
                              INNER JOIN t5iw_category e on a.topic_group = e.cat_id
                              WHERE a.delete_status = ? ";
                    $resultSubmission = $db->select($strSQL, array( 'N'));

                    if($resultSubmission){
                      $c = 1;
                      foreach ($resultSubmission as $value) {
                        ?>
                        <tr>
                            <td class="text-center" style="vertical-align: top;"><?php echo $c; ?></td>
                            <td style="vertical-align: top;"><?php echo $value['id'];?></td>
                            <td class="font-500" style="vertical-align: top;">
                              <a href="submission_info.php?sid=<?php echo $value['submission_id'];?>"><?php echo $value['title'];?></a><br>
                              <span style="font-size: 0.8em;" class="font-300"><strong>Topic: </strong><?php echo $value['cat_name']; ?> <strong>Presentation: </strong><?php echo $value['pr_name'];?></span>
                            </td>
                            <td class="hidden-xs" style="vertical-align: top;">
                              <?php
                              switch ($value['stage']) {
                                case '1':
                                  echo "Created";
                                  break;
                                case '2':
                                  echo "Assign reviewer";
                                  break;
                                case '3':
                                  echo "Reply with comment";
                                  break;
                                case '4':
                                  echo "Finallize before acception";
                                  break;
                                case '5':
                                  echo "Accept";
                                  break;
                                default:
                                  echo "N/A";
                                  break;
                              }
                              ?>
                            </td>
                            <td class="hidden-xs" style="vertical-align: top;">
                              <?php echo dateConvert_1($value['submit_date_time']); ?>
                            </td>
                            <td class="text-center" style="vertical-align: top;">
                                <div class="btn-group">
                                    <a href="submission_info.php?sid=<?php echo $value['submission_id'];?>" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="View submission"><i class="fa fa-search"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php
                        $c++;
                      }
                    }

                    ?>
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
      var pages = 'staff/submittion_list';
    </script>
    <script src="../assets/js/locate_access.js"></script>
  </body>
</html>
