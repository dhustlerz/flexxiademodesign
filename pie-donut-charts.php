<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Flexxia  Demo App</title>
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
            <?php include 'includes/sidebar.inc.php';
             $output=sidebar();
             print($output);
            ?>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <?php require 'includes/x-navigation.inc.php' ?>
                <!-- END X-NAVIGATION VERTICAL -->

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Charts</a></li>
                    <li class="active">NVD3</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Pie/Donut Charts</h2>
                </div>
                <!-- END PAGE TITLE -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">





                    <div class="row">
                        <div class="col-md-6">

                            <!-- START STACKED CHART -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Pie Chart</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="chart-9" style="height: 300px;"><svg></svg></div>
                                </div>
                            </div>
                            <!-- END STACKED CHART -->

                        </div>
                        <div class="col-md-6">

                            <!-- START DISCRETE CHART -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Donut Chart</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="chart-10" style="height: 300px;"><svg></svg></div>
                                </div>
                            </div>
                            <!-- END DISCRETE CHART -->

                        </div>
                    </div>





                </div>
                <!-- PAGE CONTENT WRAPPER -->
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

    <!-- START SCRIPTS -->
        <?php

        include 'includes/javascript.inc.php';

        ?>

    <!-- END SCRIPTS -->
    </body>
</html>






