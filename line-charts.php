<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include 'includes/head.inc.php' ?>
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
                    <li class="active">LineCharts</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Line Charts</h2>
                </div>
                <!-- END PAGE TITLE -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">


                    <div class="row">
                        <div class="col-md-6">

                        <!-- START DONUT CHART -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Line Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-line-example" style="height: 300px;"><svg></svg></div>
                            </div>
                        </div>
                        <!-- END DONUT CHART -->
                     </div>

                        <div class="col-md-6">

                            <!-- START Simple line CHART -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Simple Line Chart</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="chart-1" style="height: 300px;"><svg></svg></div>
                                </div>
                            </div>
                            <!-- END Simple Line CHART -->

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <!-- START Stacked Area Chart CHART -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Stacked Area Chart</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="chart-3" style="height: 300px;"><svg></svg></div>
                                </div>
                            </div>
                            <!-- END Stacked Area Chart CHART -->

                        </div>
                        <div class="col-md-6">

                            <!-- START Cumulative Line Chart CHART -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Cumulative Line Chart</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="chart-7" style="height: 300px;"><svg></svg></div>
                                </div>
                            </div>
                            <!-- END Cumulative Line Chart CHART -->

                        </div>
                        <div class="row">

                        <div class="col-md-12">

                            <!-- START Line Chart with View Finder CHART -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Line Chart with View Finder</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="chart-8" style="height: 300px;"><svg></svg></div>
                                </div>
                            </div>
                            <!-- END Line Chart with View Finder CHART -->

                        </div>

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

    <!-- Start SCRIPTS -->

        <?php

        include 'includes/javascript.inc.php';

        ?>

    <!-- END SCRIPTS -->
    </body>
</html>






