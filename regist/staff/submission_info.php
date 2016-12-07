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
          INNER JOIN t5iw_userinformation i on b.username = i.username
          INNER JOIN t5iw_category c on a.topic_group = c.cat_id
          INNER JOIN t5iw_presentation_type d on a.presentation_type = d.pr_id
          WHERE a.submission_id = ? ";
$resultSubmission = $db->select($strSQL, array($_GET['sid']));

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

    <script src="../lib/ckeditor/ckeditor.js"></script>

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
                <li  ><a href="./" style="color: #fff;">Home</a></li>
                <li class="active"><a href="slist.php"  style="color: #fff;">Submitted list</a></li>
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
        <!-- <hr class="style4"> -->
        <div class="row">
          <div class="col-sm-6 text-left">
            <?php
            $strSQL = "SELECT * FROM t5iw_readmark WHERE r_submission_id = ? AND r_by = ?";
            $resultMark = $db->select($strSQL, array($rowSubmission['submission_id'], $_SESSION[$sprefix.'Username']));

            if($resultMark){
              $rowMark = $resultMark->fetch();
              if($rowMark['r_status']=='N'){
                ?>
                <button type="button" name="button" class="btn btn-app-light" onclick="javascript:redirect('../controller/mark-reading.php?sid=<?php echo $rowSubmission['submission_id'];?>&to=Y')"  data-toggle="tooltip" data-placement="top" title="Mark of you only"><i class="fa fa-dot-circle-o"></i> Mark as read</button>
                <?php
              }else{
                ?>
                <button type="button" name="button" class="btn btn-app-teal" onclick="javascript:redirect('../controller/mark-reading.php?sid=<?php echo $rowSubmission['submission_id'];?>&to=N')"  data-toggle="tooltip" data-placement="top" title="Mark of you only"><i class="fa fa-circle-o"></i> Mark as unread</button>
                <?php
              }

            }else{
              ?>
              <button type="button" name="button" class="btn btn-app-light" onclick="javascript:redirect('../controller/mark-reading.php?sid=<?php echo $rowSubmission['submission_id'];?>&to=Y')"  data-toggle="tooltip" data-placement="top" title="Mark of you only"><i class="fa fa-dot-circle-o"></i> Mark as read</button>
              <?php
            }
            ?>


            <button type="button" name="button" class="btn btn-app-teal" onclick="javascript:location='submission_edit.php?sid=<?php echo $rowSubmission['submission_id'];?>'"  data-toggle="tooltip" data-placement="top" title="Download as word"><i class="fa fa-download"></i> Download</button>
          </div>
          <div class="col-sm-6 text-right">
            <button type="button" name="button" class="btn btn-app-blue"  data-toggle="tooltip" data-placement="top" title="Progress this submission"><i class="fa fa-check"></i> Submit</button>
            <button type="button" name="button" class="btn btn-app-red"  data-toggle="modal" data-target="#modal-large" id="btnReject"><i class="fa fa-close"></i> Reject</button>
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
                  <strong>ID : </strong><?php echo $rowSubmission['id']; ?>
                </p>
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
                  <strong>Presenter : </strong><?php echo $rowSubmission['presenter_name']; ?>
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

    <!-- Large Modal -->
    <div class="modal" id="modal-large" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="card-header bg-red bg-inverse">
                    <h4>Reject submission</h4>
                    <ul class="card-actions">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                        </li>
                    </ul>
                </div>
                <form class="js-validation-bootstrap-mini1 form-horizontal" action="../controller/reject.php" method="post" onsubmit="return checkConfirm()">
                  <div class="card-block">
                    <div class="form-group" style="display:none;">
                      <div class="col-md-12">
                        <input type="text" class="form-control" name="txt-sid" id="txt-sid" value="<?php echo $rowSubmission['submission_id'];?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-12">
                        <label class="col-md-12 control-label text-left" style="text-align: left; padding-left: 20px;" for="val-suggestions">Message to submission owner <span class="text-red">**</span><br>
                        <div class="" id="a">
                          <textarea class="form-control" id="txt-msg" name="txt-msg" rows="10" placeholder="Enter your abstract...">
                            <p>Dear <?php echo $rowSubmission['prefix_id'].$rowSubmission['fname']." ".$rowSubmission['lname']; ?></p>
                            <p>**-- message here --**</p>
                            <p>Regards,<br>
                              <?php echo $rowinfo['prefix_id'].$rowinfo['fname']." ".$rowinfo['lname']; ?><br>
                              The 11th Post Graduate Forum on Health System and Policy 2017 coordinator
                            </p>
                          </textarea>
                        </div>
                      </div>
                    </div>


                  </div>

                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-app" type="submit" ><i class="ion-checkmark"></i> Submit</button>
                </div>

                </form>
            </div>
        </div>
    </div>
    <!-- End Large Modal -->

    <div class="app-ui-mask-modal"></div>

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
    <script src="../assets/js/pages/staff/main.js"></script>

    <script type="text/javascript">
      var pages = 'staff/view_submission';

    </script>
    <script src="../assets/js/locate_access.js"></script>

    <script type="text/javascript">
      // var regestStagemsg = '';
      //
      // $(document).ready(function(){
      //   regestStagemsg = $('#txt-msg').val();
      // });


      $(function(){
        // $('#btnReject').click(function(){
        //   $('#txt-msg').val('');
        // });
      });

      CKEDITOR.replace( 'txt-msg', {

        on: {
			        instanceReady: function(e) {
                this.document.on("keyup", function(evt){
                    var editorContent = $(e.editor.getData());
                    if(editorContent.text()==''){
                      var res = editorContent.text().split(" ");
                      $('#wcount').val('0');
                    }else{
                      $("#a").css('border', 'none');
                      var res = editorContent.text().split(" ");
                      $('#wcount').val(res.length);
                    }

                });
			        }
        }

      } );




    </script>
  </body>
</html>
