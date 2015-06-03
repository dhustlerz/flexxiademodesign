<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Atlant - Responsive Bootstrap Admin Template</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

             <!-- START PAGE SIDEBAR -->
            <?php include 'includes/sidebar.inc.php' ?>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <?php require 'includes/x-navigation.inc.php' ?>
                <!-- END X-NAVIGATION VERTICAL -->

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Create Evaluation</a></li>

                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <form class="form-horizontal">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Create Evaluation</strong> Diabetes</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <p></p>
                                </div>
                                <div class=" panel-body">

                                    <div class="form-group">
                                        <!-- <label class="col-md-1 col-xs-12 control-label">Enter Question</label> -->
                                        <div class="col-md-1 col-xs-2">
                                            <input  id="quick-search" type="text" class=" width-30 float-right padding-0 form-control"/>

                                        </div>
                                        <div class="col-md-5 col-xs-11">
                                            <div class="input-group">
                                                <input type="text" class="form-control"/>
                                                <span class="add-Ques input-group-addon"><span class="fa fa-plus"></span></span>
                                            </div>
                                            <span class="help-block"></span>
                                            <span class="add-sub-Ques input-group-addon width-30 margin-left-30"><span class="fa fa-plus"></span></span>
                                        </div>
                                    </div>
                                    <div class="appendQuesHere"></div>
                                    <div class="appendSubQuesHere"></div>




                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>
                                    <button class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>

        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
         <script>
        jQuery(function() {

            var data_1 = [
                "ActionScript",
                "AppleScript",
                "Asp",
                "BASIC",
                "C",
                "C++",
                "Clojure",
                "COBOL",
                "ColdFusion",
                "Erlang",
                "Fortran",
                "Groovy",
                "Haskell",
                "Java",
                "JavaScript",
                "Lisp",
                "Perl",
                "PHP",
                "Python",
                "Ruby",
                "Scala",
                "Scheme"
            ];

            jQuery("#quick-search").autocomplete({
                source: data_1,
                open: function(event, ui) {

                    var autocomplete = jQuery(".ui-autocomplete:visible");
                    var oldTop = autocomplete.offset().top;
                    var newTop = oldTop - jQuery("#quick-search").height() + 25;
                    autocomplete.css("top", newTop);

                }
            });

        });
        </script>
        <script>
        Recurse();
        function Recurse() {
            jQuery(".add-Ques").click(function(){
                appendQuestion ();
           });
            jQuery(".add-sub-Ques").click(function(){
                appendSubQuestion ();
           });
            function appendQuestion () {

                var block = '<div class="form-group"> <!-- <label class="col-md-1 col-xs-12 control-label">Enter Question</label> --> <div class="col-md-1 col-xs-2"> <input id="quick-search" type="text" class=" width-30 float-right padding-0 form-control"/> </div> <div class="col-md-5 col-xs-11"> <div class="input-group"> <input type="text" class="form-control"/> <span class="add-Ques input-group-addon"><span class="fa fa-plus"></span></span> </div> <span class="help-block"></span> <span class="add-sub-Ques input-group-addon width-30 margin-left-30"><span class="fa fa-plus"></span></span> </div> </div>  ';
                jQuery(".appendQuesHere").append(block);
                //jQuery(".appendQuesHere").remove();
                Recurse();
            }
            function appendSubQuestion () {
                var block = '<div class="form-group"> <label class="col-md-1 col-xs-12 control-label"></label> <div class="col-md-1 col-xs-2"> <input type="text" class=" width-30 float-right padding-0 form-control"/> </div> <div class="col-md-5 col-xs-11"> <div class="input-group"> <input type="text" class="form-control"/> <span class="add-Ques input-group-addon"><span class="fa fa-plus"></span></span> </div> <span class="help-block">This is sample of text field</span> </div> </div>';
                jQuery(".appendSubQuesHere").append(block);
                Recurse();
            }
        }
</script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    </body>
</html>






