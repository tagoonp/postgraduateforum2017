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
    <?php include "header.php"; ?>

    <div class="main">
      <div class="container">
        <!-- <hr class="style4"> -->
        <div class="row">
          <div class="col-sm-12">
            <button type="button" name="button" class="btn btn-app-red" onclick="javascript:redirect_addsubmission()"><i class="fa fa-plus"></i> Add new submission</button>
          </div>
        </div>
        <div class="row" style="padding-top: 20px;">
          <div class="col-sm-12">

            <div class="card">
              <div class="card-header bg-success">
                  <h4>Your submitted abstract</h4>
              </div>
              <div class="card-block">
                <div class="alert alert-info">
                                    <p><strong>Important!</strong> You can update or delete you submission before 2 week of submission deadline. </p>
                                </div>
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                  <thead>
                      <tr>
                          <th class="text-center"></th>
                          <th class="w-20">
                            ID
                          </th>
                          <th>Title</th>
                          <th class="hidden-xs w-20">Status</th>
                          <th class="hidden-xs w-20">Created</th>
                          <th class="" style="width: 20%;">Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                    $strSQL = "SELECT * FROM t5iw_submission a  WHERE a.username = ? AND a.delete_status = ? ";
                    $resultSubmission = $db->select($strSQL, array($_SESSION[$sprefix.'Username'], 'N'));

                    if($resultSubmission){
                      $c = 1;
                      foreach ($resultSubmission as $value) {
                        ?>
                        <tr>
                            <td class="text-center" style="vertical-align: top;"><?php echo $c; ?></td>
                            <td style="vertical-align: top;"><?php echo $value['id'];?></td>
                            <td class="font-500" style="vertical-align: top;"><a href="submission_info.php?sid=<?php echo $value['submission_id'];?>"><?php echo $value['title'];?></a></td>
                            <td class="hidden-xs" style="vertical-align: top;">
                              <?php
                              $strSQL = "SELECT * FROM t5iw_reject WHERE re_submission_id = ?";
                              $resultReject = $db->select($strSQL, array($value['submission_id']));
                              if($resultReject){
                                ?>
                                <span class="text-red">Reject</span><br>
                                <a href="#" style="font-size: 0.7em;">- View comment -</a>
                                <?php

                              }else{
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
                              }

                              ?>
                            </td>
                            <td class="hidden-xs" style="vertical-align: top;">
                              <?php echo dateConvert_1($value['submit_date_time']); ?>
                            </td>
                            <td class="text-center" style="vertical-align: top;">
                                <div class="btn-group">
                                    <a href="submission_info.php?sid=<?php echo $value['submission_id'];?>" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="View submission"><i class="fa fa-search"></i></a>
                                    <a href="javascript:redirect('submission_edit.php?sid=<?php echo $value['submission_id'];?>')" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit your submission"><i class="fa fa-wrench"></i></a>
                                    <a href="javascript:delete_confirm('../controller/delete-submission.php?sid=<?php echo $value['submission_id']; ?>')" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Delete submission"><i class="fa fa-trash"></i></a>

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
      var pages = 'author/index';
    </script>
    <script src="../assets/js/locate_access.js"></script>
  </body>
</html>
