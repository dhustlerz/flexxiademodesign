<?php
include 'functionhtml.inc.php';
$output = '';

      /**
       * START X-NAVIGATION VERTICAL 1
       * we did'nt call x-navigation.inc.php because of some rendering/displaying issues
       */
       $output=top_navigation();
      /**
       * END X-NAVIGATION VERTICAL
       */

    /**
     * START BREADCRUMB
     */
    $output.='<ul class="breadcrumb">';
    $output.='<li><a href="#">Home</a></li>';
    $output.='<li class="active">Dashboard</li>';
$output.='</ul>';
/**
 * END BREADCRUMB
 */

/**
 * PAGE CONTENT WRAPPER
 */
$output.='<div class="page-content-wrap bg-e5edf2">';

    /**
     * START WIDGETS
     */
    $output.='<div class="row">';
        /**
         * START Total Meetings
         */
        $output.='<div class="col-md-4 ">';
           /*--------------------------------------------------------------------------------------*/
            $output.='<div class="dashpage-square-number-wrapper">';
                $output.='<div class="dashpage-square-number-top">';
                  $output.='<div class="row bg-ffffff">';

                    $output.='<div class="col-md-6 col-xs-6 " style="">';
                    /*--------------------------------------------------------------------------------------*/
                      $output.='<div class=" padding-top-10 float-right"><img src="img/icons/cald-icon.png" alt="Mountain View" style="height:50px">';
                      $output.='</div>';
                    /*--------------------------------------------------------------------------------------*/
                    $output.='</div>';

                    $output.='<div class="col-md-6">';
                    /*--------------------------------------------------------------------------------------*/
                      $output.='<div class="dashpage-square-number-top padding-top-10 padding-bottom-10">';
                        $output.='<div class="animate-number h3 line-height-1-5">12</div>';
                        $output.='<div class="h6 padding-top-6">Total Meetings</div>';
                      $output.='</div>';
                    /*--------------------------------------------------------------------------------------*/
                  $output.='</div>';
                $output.='</div>';
            $output.='</div>';
           /*--------------------------------------------------------------------------------------*/
                 $output.='<div class="row  bg-2DAAE1 margin-top-12">';
                $output.='<div class=" col-md-12 padding-top-12">';
                /*--------------------------------------------------------------------------------------*/
                  $output.='<div class="col-md-1 col-xs-1 "><span class="font-size-18 color-fff col-centered">3.50</span></div>';

                  $output.='<div class=" col-md-11 col-xs-11">';
                  /*--------------------------------------------------------------------------------------*/
                    $output.='<div class="dashpage-square-number-left height-26 ">';
                      $output.='<div class="xe-progress ">';
                        $output.='<span class="xe-progress-fill" data-fill-from="0" data-fill-to="56" data-fill-unit="" data-fill-property="width" data-fill-duration="2" data-fill-easing="true" style="width:38%;"></span>';
                        $output.='<span class="xe-progress-fill" data-fill-from="0" data-fill-to="56"></span>';
                      $output.='</div>';
                    $output.='</div>';
                      // $output.='<div class="margin-top-6 margin-bottom-6"></div>';
                      // $output.='<div class="font-size-10"></div>';
                  $output.='</div>';
                  /*--------------------------------------------------------------------------------------*/
                $output.='</div>';
                /*--------------------------------------------------------------------------------------*/

                $output.='<div class="col-md-12">';
                    $output.='<div class="padding-left-10 font-size-16 color-fff margin-bottom-8">Average Speaker Rating</div>';
                    //$output.='<div class="font-size-10 text-center"></div>';
                $output.='</div>';
              $output.='</div>';

        $output.='</div>';
        /**
         * END Total Meetings
         */
        $output.='</div>';
        $output.='<div class="col-md-4 ">';

        /*--------------------------------------------------------------------------------------*/
          $output.='<div class="dashpage-square-number-wrapper">';
              $output.='<div class="dashpage-square-number-top">';
                $output.='<div class="row bg-ffffff">';

                  $output.='<div class="col-md-6 col-xs-6 " style="">';
                  /*--------------------------------------------------------------------------------------*/
                    $output.='<div class=" padding-top-10 float-right"><img src="img/icons/linegraph-icon.png" alt="Mountain View" style="height:50px">';
                    $output.='</div>';
                  /*--------------------------------------------------------------------------------------*/
                  $output.='</div>';

                  $output.='<div class="col-md-6">';
                  /*--------------------------------------------------------------------------------------*/
                    $output.='<div class="dashpage-square-number-top padding-top-10 padding-bottom-10">';
                      $output.='<div class="animate-number-1 h3 line-height-1-5">101</div>';
                      $output.='<div class="h6 padding-top-6">Total Evaluations</div>';
                    $output.='</div>';
                  /*--------------------------------------------------------------------------------------*/
                $output.='</div>';
              $output.='</div>';
          $output.='</div>';
         /*--------------------------------------------------------------------------------------*/
              $output.='<div class="row  bg-3C5B9B margin-top-12">';
                $output.='<div class=" col-md-12 padding-top-12">';
                /*--------------------------------------------------------------------------------------*/
                  $output.='<div class="col-md-1 col-xs-1 "><span class="font-size-18 color-fff col-centered">4.11</span></div>';

                  $output.='<div class=" col-md-11 col-xs-11">';
                  /*--------------------------------------------------------------------------------------*/
                    $output.='<div class="dashpage-square-number-left height-26 ">';
                      $output.='<div class="xe-progress ">';
                        $output.='<span class="xe-progress-fill" data-fill-from="0" data-fill-to="56" data-fill-unit="" data-fill-property="width" data-fill-duration="2" data-fill-easing="true" style="width:50%;"></span>';
                        $output.='<span class="xe-progress-fill" data-fill-from="0" data-fill-to="56"></span>';
                      $output.='</div>';
                    $output.='</div>';
                      // $output.='<div class="margin-top-6 margin-bottom-6"></div>';
                      // $output.='<div class="font-size-10"></div>';
                  $output.='</div>';
                  /*--------------------------------------------------------------------------------------*/
                $output.='</div>';
                /*--------------------------------------------------------------------------------------*/

                $output.='<div class="col-md-12">';
                    $output.='<div class="padding-left-10 font-size-16 color-fff margin-bottom-8">Average Program Rating</div>';
                    //$output.='<div class="font-size-10 text-center"></div>';
                $output.='</div>';
              $output.='</div>';

        $output.='</div>';

        $output.='</div>';
        $output.='<div class="col-md-4" >';
                     /*--------------------------------------------------------------------------------------*/
            $output.='<div class="dashpage-square-number-wrapper">';
                $output.='<div class="dashpage-square-number-top">';
                  $output.='<div class="row bg-ffffff">';

                    $output.='<div class="col-md-6 col-xs-6 " style="">';
                    /*--------------------------------------------------------------------------------------*/
                      $output.='<div class=" padding-top-10 float-right"><img src="img/icons/user-icon.png" alt="Mountain View" style="height:50px">';
                      $output.='</div>';
                    /*--------------------------------------------------------------------------------------*/
                    $output.='</div>';

                    $output.='<div class="col-md-6">';
                    /*--------------------------------------------------------------------------------------*/
                      $output.='<div class="dashpage-square-number-top padding-top-10 padding-bottom-10">';
                        $output.='<div class="animate-number-2 h3 line-height-1-5">210</div>';
                        $output.='<div class="h6 padding-top-6">Total Attendees</div>';
                      $output.='</div>';
                    /*--------------------------------------------------------------------------------------*/
                  $output.='</div>';
                $output.='</div>';
            $output.='</div>';
           /*--------------------------------------------------------------------------------------*/
                $output.='<div class="row  bg-0173B2 margin-top-12">';
                  $output.='<div class=" col-md-12 padding-top-12">';
                  /*--------------------------------------------------------------------------------------*/
                    $output.='<div class="col-md-1 col-xs-1 "><span class="font-size-18 color-fff col-centered">80.9%</span></div>';

                    $output.='<div class=" col-md-11 col-xs-11">';
                    /*--------------------------------------------------------------------------------------*/
                      $output.='<div class="dashpage-square-number-left height-26 ">';
                        $output.='<div class="xe-progress ">';
                          $output.='<span class="xe-progress-fill" data-fill-from="0" data-fill-to="56" data-fill-unit="" data-fill-property="width" data-fill-duration="2" data-fill-easing="true" style="width:84.9%;"></span>';
                          $output.='<span class="xe-progress-fill" data-fill-from="0" data-fill-to="56"></span>';
                        $output.='</div>';
                      $output.='</div>';
                        // $output.='<div class="margin-top-6 margin-bottom-6"></div>';
                        // $output.='<div class="font-size-10"></div>';
                    $output.='</div>';
                    /*--------------------------------------------------------------------------------------*/
                  $output.='</div>';
                  /*--------------------------------------------------------------------------------------*/

                  $output.='<div class="col-md-12">';
                      $output.='<div class="padding-left-10 font-size-16 color-fff margin-bottom-8">Customer Satisfaction</div>';
                      //$output.='<div class="font-size-10 text-center"></div>';
                  $output.='</div>';
                $output.='</div>';
        $output.='</div>';


        $output.='</div>';
    //     $output.='<div class="col-md-3 text-center">';

    //         /**
    //          * START WIDGET CLOCK
    //          */
    //          $output.='<div class="dashpage-square-number-wrapper  bg-ffffff">';
    //                 $output.='<div class="dashpage-square-number-top padding-top-10 border-1-e7e7e7">';
    //                     $output.='<div class="h6 padding-top-6">Avg. Speaker Rating</div>';
    //                     $output.='<div class="animate-number-3 h3 line-height-1-5">4.64</div>';
    //                 $output.='</div><div class="row margin-0">';
    //                 $output.='<div class="dashpage-square-number-left col-xs-6 bg-a3bad9 color-002840 padding-0 height-52">';
    //                     $output.='<div class="margin-top-6 margin-bottom-6">4.66</div>';
    //                     $output.='<div class="font-size-10">Accredited</div>';
    //                 $output.='</div>';
    //                 $output.='<div class="dashpage-square-number-right col-xs-6 bg-005180 color-fff padding-0 height-52">';
    //                     $output.='<div class="margin-top-6 margin-bottom-6">4.50</div>';
    //                     $output.='<div class="font-size-10 text-center">Non Accred</div>';
    //                 $output.='</div>';
    //             $output.='</div>';
    //         $output.='</div>';
    //         /**
    //          * END WIDGET CLOCK
    //          */
    //     $output.='</div>';
     $output.='</div>';
    /**
     * END WIDGETS
     */
    /*----------------------------------------------------------------------------------------------------------------------------*/
    $output.='<div  id="Diebetes-BUPSplit-Acc-Pro-Break" class="row margin-top-24" >';

        $output.='<div id="refresh" class=" col-md-6 " style="">';
          /**
           * START Horizontal bar CHART
           */
          $output.='<div class="panel ">';
          $output.='<div class=" panel-header">BU Program Split</div>';
              $output.='<div class="panel-body bg-ffffff" style="height: 330px;">';
                  $output.='<div class="" id="google-stacked-chart-diabetes-non-accr" ><svg></svg></div>';
              $output.='</div>';
          $output.='</div>';
          /**
           * END REGULAR PIE CHART
           */
        $output.='</div>';

        $output.='<div class="col-md-6 " style="">';
            /**
             * START REGULAR PIE CHART
             */
            $output.='<div class="panel ">';
            $output.='<div class=" panel-header">Target Audience Participation </div>';
            $output.='<div class="panel-body bg-ffffff padding-0">';
               $output.='<div class="text-center padding-top-80  font-size-14"  style="height: 330px;">';
                    $output.='<div><canvas id="diabetes-gauge-non-accr"></canvas></div>';
                    $output.='<div class="color-2DAAE1 font-size-18 font-bold"><span id="diabetes-gauge-non-accr-value"></span></div>';
                    //$output.='<input class="knob" data-width="200" data-thickness=".3" data-angleOffset="270" data-angleArc="180" data-fgColor="#0173B2" value="90"/>';
                $output.='</div>';
                // $output.='<div class="panel-body bg-ffffff padding-0">';
                //     $output.='<div class="" id="chart-9-diabetes" style="height: 300px;"><svg></svg></div>';
                // $output.='</div>';
            $output.='</div>';
            /**
             * END REGULAR PIE CHART
             */
        $output.='</div>';


    $output.='</div>';
    /*----------------------------------------------------------------------------------------------------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------------------*/
    // $output.='<div  id="Diebetes-BU-target-audience"  class="row margin-top-24" >';

    //     $output.='<div id="refresh" class=" col-md-6 " style="">';
    //       /**
    //        * START Horizontal bar CHART
    //        */
    //       $output.='<div class="panel ">';
    //       $output.='<div class=" panel-header">BU Program Split</div>';
    //           $output.='<div class="panel-body bg-ffffff" style="height: 330px;">';
    //               $output.='<div class="" id="google-stacked-chart-diabetes" ><svg></svg></div>';
    //           $output.='</div>';
    //       $output.='</div>';
    //       /**
    //        * END REGULAR PIE CHART
    //        */
    //     $output.='</div>';

    //     $output.='<div class="col-md-6 " style="">';
    //         /**
    //          * START REGULAR PIE CHART
    //          */
    //         $output.='<div class="panel ">';
    //         $output.='<div class=" panel-header">Target Audience Participation </div>';
    //         $output.='<div class="panel-body bg-ffffff padding-0">';
    //             $output.='<div class="text-center padding-top-80  font-size-14"  style="height: 330px;">';
    //                 $output.='<input class="knob" data-width="200" data-thickness=".3" data-angleOffset="270" data-angleArc="180" data-fgColor="#0173B2" value="90"/>';
    //                  $output.='</div>';
    //             $output.='</div>';
    //             // $output.='<div class="panel-body bg-ffffff padding-0">';
    //             //     $output.='<div class="" id="chart-9-diabetes" style="height: 300px;"><svg></svg></div>';
    //             // $output.='</div>';
    //         $output.='</div>';
    //         /**
    //          * END REGULAR PIE CHART
    //          */
    //     $output.='</div>';


    // $output.='</div>';
    /*------------------------------------------------------------------------------------------------------*/

    // $output.='<div class="row margin-top-24">';
    //       $output.='<div class="col-md-4 ">';
    //         /**
    //          * START PIE CHART
    //          */
    //         $output.='<div class="panel ">';
    //         $output.='<div class=" panel-header">Accredited Program Breakdown</div>';
    //             $output.='<div class="panel-body">';
    //                 $output.='<div id="chart-9" style="height: 300px;"><svg></svg></div>';
    //             $output.='</div>';
    //         $output.='</div>';
    //         /**
    //          * END PIE CHART
    //          */
    //     $output.='</div>';

    //     $output.='<div class="col-md-4 ">';
    //        /**
    //          * START REGULAR PIE CHART
    //          */
    //         $output.='<div class="panel ">';
    //         $output.='<div class=" panel-header">Non-Accredited Program Breakdown </div>';
    //             $output.='<div class="panel-body bg-ffffff" ">';
    //                 $output.='<div class="" id="chart-10" style="height: 300px;"><svg></svg></div>';
    //             $output.='</div>';
    //         $output.='</div>';
    //         /**
    //          * END REGULAR PIE CHART
    //          */
    //     $output.='</div>';

    //     $output.='<div class="col-md-4" >';
    //         /**
    //          * START Gauge CHART
    //          */
    //         $output.='<div class="panel">';
    //         $output.='<div class=" panel-header">Target Audience Participation</div>';
    //             $output.='<div class="panel-body bg-ffffff padding-0">';
    //                 $output.='<div class="text-center padding-top-80  font-size-14"  style="height: 330px;">';
    //                 $output.='<input class="knob" data-width="200" data-thickness=".3" data-angleOffset="270" data-angleArc="180" data-fgColor="#0173B2" value="90"/>';
    //                  $output.='</div>';
    //             $output.='</div>';
    //         $output.='</div>';
    //         /**
    //          * END gauge CHART
    //          */
    //     $output.='</div>';
    // $output.='</div>';
    // /*-------------------------------------------------------------------------------------------------------------*/
    // $output.='<div id="Diebetes-Acc-Nonaccre-Graphs" class="row margin-top-24" >';

    //     $output.='<div class="col-md-6 " style="">';
    //       /**
    //        * START REGULAR PIE CHART
    //        */
    //       $output.='<div class="panel ">';
    //       $output.='<div class=" panel-header">Accredited Program Breakdown </div>';
    //         $output.='<div class="panel-body bg-ffffff" style="height: 300px;">';
    //             $output.='<div class="" id="chart-9-diabetes" style="height: 300px;"><svg></svg></div>';
    //         $output.='</div>';
    //       $output.='</div>';
    //       /**
    //        * END REGULAR PIE CHART
    //        */
    //     $output.='</div>';

    //     $output.='<div class="col-md-6 " style="">';
    //         /**
    //          * START REGULAR Donut CHART
    //          */
    //         $output.='<div class="panel ">';
    //         $output.='<div class=" panel-header">Non-Accredited Program Breakdown</div>';
    //             $output.='<div class="panel-body bg-ffffff padding-0">';
    //                 $output.='<div id="chart-10-diabetes" style=" height: 300px;"><svg></svg></div>';
    //             $output.='</div>';
    //         $output.='</div>';
    //         /**
    //          * END REGULAR Donut CHART
    //          */
    //     $output.='</div>';


    // $output.='</div>';
    /*---------------------------------------------------------------------------------------------------------------*/
    // $output.='<div class="row">';
    //      /**
    //       * START GOOGLE WORLD MAP
    //       */
    //     $output.='<div class="col-md-12">';
    //         $output.='<div class="panel panel-default">';
    //         $output.='<div class=" panel-header">Regional Meeting Detail</div>';
    //             $output.='<div class="panel-body panel-body-map">';
    //                 $output.='<div id="google_world_map_canada" style="height: 300px;"></div>';
    //             $output.='</div>';
    //         $output.='</div>';
    //     $output.='</div>';
    // $output.='</div>';
    /**
     * END GOOGLE WORLD MAP
     */

      $output.='<div class="row">';
          $output.='<div class="col-md-6">';
            $output.='<div class="panel panel-default ">';
              /**
               * START DEFAULT DATATABLE
               */
              require 'simple-speaker-table.inc.php' ;
              /**
               * END DEFAULT DATATABLE
               */
            $output.='</div>';
        $output.='</div>';
          $output.='<div class="col-md-6">';
            /**
             * START DatatTables
             */
            $output.='<div class="panel panel-default ">';
              /**
               * START DEFAULT DATATABLE
               */
               require 'simple-program-table.inc.php' ;
              /**
               * END DEFAULT DATATABLE
               */
            $output.='</div>';
            /**
             * END DatatTables
             */
        $output.='</div>';
    $output.='</div>';
$output.='</div>';
/**
 * END PAGE CONTENT WRAPPER
 */

print($output);

?>
