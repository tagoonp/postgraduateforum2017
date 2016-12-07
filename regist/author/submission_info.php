<?php
session_start();

include "../../xplor-config.php";
include "../../xplor-connect.php";
include "../lib/dateTime-inter.php";

$db = new database();
$db->connect();

$sprefix = $db->getSessionPrefix();

include "check-userinfo.php";

if(!isset($_GET['sid'])){
  //Page not found
  header('Location: error-404.html');
  die();
}

$strSQL = "SELECT * FROM t5iw_submission a INNER JOIN t5iw_useraccount b on a.username = b.username
          INNER JOIN t5iw_category c on a.topic_group = c.cat_id
          INNER JOIN t5iw_presentation_type d on a.presentation_type = d.pr_id
          WHERE a.submission_id = ? AND a.username = ?";
$resultSubmission = $db->select($strSQL, array($_GET['sid'], $_SESSION[$sprefix.'Username']));

if(!$resultSubmission){
  //Page not found
  header('Location: error-404.html');
  die();
}

$rowSubmission = $resultSubmission->fetch();

?>
<html>
<head>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <!-- Document title -->
    <title>PostgradForum2017 Submission System</title>

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
          <div class="col-sm-6 text-left">
            <button type="button" name="button" class="btn btn-app-blue" onclick="javascript:location='submission_edit.php?sid=<?php echo $rowSubmission['submission_id'];?>'"><i class="fa fa-wrench"></i> Edit</button>
          </div>
          <div class="col-sm-6 text-right">

            <button type="button" name="button" class="btn btn-app-red" onclick="javascript:delete_confirm('../controller/delete-submission.php?sid=<?php echo $rowSubmission['submission_id']; ?>')"><i class="fa fa-trash"></i> Delete this submission</button>
          </div>
        </div>
        <div class="row" style="padding-top: 20px;">
          <div class="col-sm-12">

            <div class="card">
              <div class="card-header bg-success">
                  <h3><small>Submitted abstract information</small><br><br><?php echo $rowSubmission['title']; ?></h3>
              </div>
              <div class="card-block">
                <p>
                  <strong>Presentation type : </strong><?php echo $rowSubmission['pr_name']; ?>
                </p>
                <p>
                  <strong>Topic categorie : </strong><?php echo $rowSubmission['cat_name']; ?>
                </p>

                <p>
                  <strong>Author : </strong>
                  <?php

                  $strSQL = "SELECT * FROM t5iw_author WHERE au_submission_id = ?";
                  $resultCheckAut = $db->select($strSQL, array($_GET['sid']));

                  $a = '';
                  if($resultCheckAut){

                    foreach ($resultCheckAut as $value) {
                      $a .= '<a href="#" data-toggle="popover" title="'.$value['au_prefix'].$value['au_fname']." ".$value['au_lname'].'" data-placement="top" data-content="'.$value['au_department'].', '.$value['au_email'].'">'.$value['au_lname'].".".substr($value['au_fname'],0,1)."</a>, ";
                    }
                    echo substr($a,0,-2);
                  }else{
                    $a = 'No author';
                    echo $a;
                  }


                  ?>
                </p>

                <p>
                  <strong>Abstract : </strong><br>
                  <?php echo $rowSubmission['abstract']; ?>
                </p>

                <p>
                  <strong>Words count: </strong><?php echo $rowSubmission['word_count']; ?> words
                </p>

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
      var pages = 'author/view_submission';
    </script>
    <script src="../assets/js/locate_access.js"></script>
  </body>
</html>
