<?php
session_start();

include "../../xplor-config.php";
include "../../xplor-connect.php";

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
    <link rel="stylesheet" href="../assets/js/plugins/datatables/jquery.dataTables.min.css" />


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
                <li><a href="./" style="color: #fff;">Home</a></li>
                <li class="active"><a href="upload-recipe.php" style="color: #fff;">Upload registration fee receipt</a></li>
                <li><a href="upload-recipe.php" style="color: #fff;">Upload hotel reservation receipt</a></li>

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
        <!-- <hr class="style4"> -->
        <h2 class="section-title">Submission form</h2>
        <div class="row" style="padding-top: 0px;">
          <div class="col-sm-12">

            <div class="card">
              <div class="card-header bg-success">
                  <!-- <h4>Your submitted abstract</h4> -->
              </div>
              <div class="card-block">
                <form class="js-validation-bootstrap form-horizontal" action="../controller/insert-submission.php" method="post" >
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

                  <div class="form-group">
                    <label class="col-md-3 control-label" for="val-suggestions">Title <span class="text-red">**</span></label>
                    <div class="col-md-8">
                        <textarea class="form-control" id="txt-title" name="txt-title" rows="6" placeholder="Enter title.."></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label" for="example-select2">Author <span class="text-red">**</span></label>
                    <div class="col-md-8">
                      <button class="btn btn-app btn-block" data-toggle="modal" id="btnAddAuthor" data-target="#modal-normal" type="button" data-placement="top" title="Add author"><i class="fa fa-plus"></i> Add author</button>
                    </div>
                  </div>



                  <div class="form-group">
                    <div class="col-md-8 col-md-offset-3">
                      <span id="resultSpan">
                        <table class="table table-striped table-condensed table-bordered ">
                          <thead>
                            <tr>
                              <th class="text-center">#</th>
                              <th>Fulle name</th>
                              <th>Department / University/ Institute</th>
                              <th>Email</th>
                              <th  class="text-center" style="width: 15%;">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td colspan="5">No author information</td>
                            </tr>
                          </tbody>
                        </table>
                      </span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label" for="example-select2">Presenter <span class="text-red">**</span></label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" id="pname" name="pname" placeholder="Enter presenter's full name ..." value="<?php echo $rowinfo['prefix_id'].$rowinfo['fname']." ".$rowinfo['lname'];?>" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label" for="val-suggestions">Abstract <span class="text-red">**</span><br>
                      <a href="#" data-toggle="modal"  data-target="#modal-normal2">- Read abstract format suggestion -</a>
                    </label>
                    <div class="col-md-8">
                      <div class="" id="a">
                        <textarea class="form-control" id="txt-abstract" name="txt-abstract" rows="20" placeholder="Enter your abstract..."></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="form-group" style="display: none;">
                    <label class="col-md-3 control-label" for="example-select2">Words count <span class="text-red">**</span></label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" id="wcount" name="wcount" placeholder="Enter presenter's full name ..." value="0" readonly />
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-7 col-md-offset-4">

                    </div>
                  </div>

                  <div class="form-group">

                    <div class="col-md-8 col-md-offset-3">
                      <button type="submit" name="button" class="btn btn-app" id="btnSubmit">Submit</button>
                    </div>
                  </div>

                </form>
              </div>
            </div>

          </div>
        </div>

        <div class="row" style="padding-top: 30px; padding-bottom: 30px;">
          <div class="col-sm-12 text-center">
            The 11th Postgraduate Forum on Health Systems and Policy:
  Integrated Health System and Policy for Sustainable Development Goal
          </div>
        </div>
      </div>
    </div>

    <!-- Normal Modal -->
    <div class="modal" id="modal-normal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card-header bg-green bg-inverse">
                    <h4>Add author</h4>
                    <ul class="card-actions">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                        </li>
                    </ul>
                </div>
                <form class="js-validation-bootstrap-mini1 form-horizontal">
                  <div class="card-block">

                      <div class="form-group" style="padding-top: 10px;">
                        <label class="col-md-4 control-label" for="example-select2">Prefix <span class="text-red">**</span></label>
                        <div class="col-md-5">
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
                          <label class="col-md-4 control-label" for="val-username">First name <span class="text-red">**</span></label>
                          <div class="col-md-7">
                              <input class="form-control" type="text" id="val-fname" name="val-fname" placeholder="Choose a nice username..." />
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-md-4 control-label" for="val-username">Surname <span class="text-red">**</span></label>
                          <div class="col-md-7">
                              <input class="form-control" type="text" id="val-lname" name="val-lname" placeholder="Choose a nice username..." />
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-md-4 control-label" for="val-email">Email <span class="text-red">**</span></label>
                          <div class="col-md-7">
                              <input class="form-control" type="text" id="val-email" name="val-email" placeholder="Enter your valid email..." />
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="val-email">Department / University / Institute <span class="text-red">**</span></label>
                          <div class="col-md-7">
                              <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="3" placeholder="Share your ideas with us.."></textarea>
                          </div>
                      </div>


                  </div>
                  <div class="modal-footer">
                      <button class="btn btn-sm btn-default" type="button" data-dismiss="modal" id="btnCloseModal">Close</button>
                      <button class="btn btn-sm btn-app" type="submit" ><i class="ion-checkmark"></i> Ok</button>
                  </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal" id="modal-normal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card-header bg-green bg-inverse">
                    <h4>Abstract format suggestion</h4>
                    <ul class="card-actions">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="card-block">
                  <p>
                    <ul>
                      <li>Abstracts	of	a	<span class="text-red" style="font-weight: 400;">maximum	250	words</span>	should	be	structured	as	follows:</li>
                      <ul class="dashed">
                        <li>&nbsp;&nbsp;Title,	in	brief	but	clearly	indicating	the	content	of	the	paper.	Abbreviations	may	not	be
used	in	abstract	titles.</li>
<li>&nbsp;&nbsp;Authors'	names	and	their	institutional	affiliations	in	separate	fields.	Name	of	presenter
should	be	underlined.</li>
<li>&nbsp;&nbsp;Objective(s)</li>
<li>&nbsp;&nbsp;Methods,	containing	sufficient	detail	to	evaluate	their	appropriateness	and	novelty</li>
<li>&nbsp;&nbsp;Results,	stated	in	sufficient	detail	to	support	conclusions.	It	is	not	satisfactory	to	state,
“results	will	be	discussed”	or	“data	will	be	presented.”
</li>
<li>&nbsp;&nbsp;Conclusions	reached.</li>
                      </ul>
                      <li>Indent	each	paragraph	with	a	tab	space	before	beginning	the text.</li>
                      <li>Do	not	use	underlining	or	capitalization	for	emphasis.</li>
                      <li>Do	not	include	tables,	graphs	or	figures.</li>
                    </ul>
                  </p>
                  <div class="text-center">
                    <button  data-dismiss="modal" type="button" name="button" class="btn btn-app">Close</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Normal Modal -->

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

    <script src="../assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Page JS Code -->
    <script src="../assets/js/pages/submission/base_forms_validation.js"></script>
    <script src="../assets/js/pages/submission/main.js"></script>
    <script type="text/javascript">
      var pages = 'author/submission';
    </script>
    <script src="../assets/js/locate_access.js"></script>
    <script type="text/javascript">

      createSessionAuthor();

      CKEDITOR.replace( 'txt-abstract', {
        wordcount : {
					showCharCount : false,
					showWordCount : true,

					// Maximum allowed Word Count
					maxWordCount: 250,

					// Maximum allowed Char Count
					// maxCharCount: 50000
				},

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
