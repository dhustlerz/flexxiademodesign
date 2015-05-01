<?php
$output = '';
$output.='<div class="page-content">';
          /**
           * START X-NAVIGATION VERTICAL
           * we did'nt call x-navigation.inc.php because of some rendering/displaying issues
           */
        $output.='<ul class="x-navigation x-navigation-horizontal x-navigation-panel ">';
          $output.='<!-- TOGGLE NAVIGATION -->';
          $output.='<li class="xn-icon-button">';
              $output.='<a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>';
          $output.='</li>';
          $output.='<!-- END TOGGLE NAVIGATION -->';
          $output.='<!-- SEARCH -->';
          $output.='<li class="xn-search">';
              $output.='<form role="form">';
                  $output.='<input type="text" name="search" placeholder="Search..."/>';
              $output.='</form>';
          $output.='</li>';
          $output.='<!-- END SEARCH -->';
          $output.='<!-- SIGN OUT -->';
          $output.='<li class="xn-icon-button pull-right">';
              $output.='<a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>';
          $output.='</li>';
          $output.='<!-- END SIGN OUT -->';
        $output.='</ul>';
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
    $output.='<div class="page-content-wrap ">';

        /**
         * START WIDGETS
         */
        $output.='<div class="row">';
            /**
             * START Total Meetings
             */
            $output.='<div class="col-md-3 text-center">';
                $output.='<div class="dashpage-square-number-wrapper bg-ffffff">';
                    $output.='<div class="dashpage-square-number-top padding-top-10 border-1-e7e7e7">';
                        $output.='<div class="h6 padding-top-6">Total Meetings</div>';
                        $output.='<div class="h3 line-height-1-5">417</div>';
                    $output.='</div><div class="row margin-0">';
                    $output.='<div class="dashpage-square-number-left col-xs-6 bg-a3bad9 color-002840 padding-0 height-52">';
                        $output.='<div class="margin-top-6 margin-bottom-6">387</div>';
                        $output.='<div class="font-size-10">Accredited</div>';
                    $output.='</div>';
                    $output.='<div class="dashpage-square-number-right col-xs-6 bg-005180 color-fff padding-0 height-52">';
                        $output.='<div class="margin-top-6 margin-bottom-6">30</div>';
                        $output.='<div class="font-size-10 text-center">Non Accred</div>';
                    $output.='</div>';
                $output.='</div>';
            $output.='</div>';
            /**
             * END Total Meetings
             */
            $output.='</div>';
            $output.='<div class="col-md-3 text-center">';

                /**
                 * START WIDGET MESSAGES
                 */

                    $output.='<div class="dashpage-square-number-wrapper  bg-ffffff">';
                        $output.='<div class="dashpage-square-number-top padding-top-10 border-1-e7e7e7">';
                            $output.='<div class="h6 padding-top-6">Evaluations Received</div>';
                            $output.='<div class="h3 line-height-1-5">2169</div>';
                        $output.='</div><div class="row margin-0">';
                        $output.='<div class="dashpage-square-number-left col-xs-6 bg-a3bad9 color-002840 padding-0 height-52">';
                            $output.='<div class="margin-top-6 margin-bottom-6">1937</div>';
                            $output.='<div class="font-size-10">Accredited</div>';
                        $output.='</div>';
                        $output.='<div class="dashpage-square-number-right col-xs-6 bg-005180 color-fff padding-0 height-52">';
                            $output.='<div class="margin-top-6 margin-bottom-6">232</div>';
                            $output.='<div class="font-size-10 text-center">Non Accred</div>';
                        $output.='</div>';
                    $output.='</div>';
            $output.='</div>';

                /**
                 * END WIDGET MESSAGES
                 */

            $output.='</div>';
            $output.='<div class="col-md-3 text-center" >';

                /**
                 * START WIDGET REGISTRED
                 */
                $output.='<div class="dashpage-square-number-wrapper  bg-ffffff">';
                        $output.='<div class="dashpage-square-number-top padding-top-10 border-1-e7e7e7">';
                            $output.='<div class="h6 padding-top-6">Avg. Program NTS</div>';
                            $output.='<div class="h3 line-height-1-5">+14</div>';
                        $output.='</div><div class="row margin-0">';
                        $output.='<div class="dashpage-square-number-left col-xs-6 bg-a3bad9 color-002840 padding-0 height-52">';
                            $output.='<div class="margin-top-6 margin-bottom-6">+16</div>';
                            $output.='<div class="font-size-10">Accredited</div>';
                        $output.='</div>';
                        $output.='<div class="dashpage-square-number-right col-xs-6 bg-005180 color-fff padding-0 height-52">';
                            $output.='<div class="margin-top-6 margin-bottom-6">-5</div>';
                            $output.='<div class="font-size-10 text-center">Non Accred</div>';
                        $output.='</div>';
                    $output.='</div>';
                $output.='</div>';
                /**
                 * END WIDGET REGISTRED
                 */

            $output.='</div>';
            $output.='<div class="col-md-3 text-center">';

                /**
                 * START WIDGET CLOCK
                 */
                 $output.='<div class="dashpage-square-number-wrapper  bg-ffffff">';
                        $output.='<div class="dashpage-square-number-top padding-top-10 border-1-e7e7e7">';
                            $output.='<div class="h6 padding-top-6">Avg. Speaker Rating</div>';
                            $output.='<div class="h3 line-height-1-5">4.64</div>';
                        $output.='</div><div class="row margin-0">';
                        $output.='<div class="dashpage-square-number-left col-xs-6 bg-a3bad9 color-002840 padding-0 height-52">';
                            $output.='<div class="margin-top-6 margin-bottom-6">4.66</div>';
                            $output.='<div class="font-size-10">Accredited</div>';
                        $output.='</div>';
                        $output.='<div class="dashpage-square-number-right col-xs-6 bg-005180 color-fff padding-0 height-52">';
                            $output.='<div class="margin-top-6 margin-bottom-6">4.50</div>';
                            $output.='<div class="font-size-10 text-center">Non Accred</div>';
                        $output.='</div>';
                    $output.='</div>';
                $output.='</div>';
                /**
                 * END WIDGET CLOCK
                 */
            $output.='</div>';
        $output.='</div>';
        /**
         * END WIDGETS
         */

        $output.='<div class="row margin-top-24" >';
            $output.='<div class="col-md-6 ">';
                $output.='<div class="panel panel-default ">';
                  $output.='<div class=" panel-header">Programs Total by Month (Jan-Dec) </div>';
                  $output.='<div class="row bg-ffffff padding-left-pt-18 padding-top-30"  style="height: 300px;"">';
                      $output.='<div class="col-md-6 ">';
                      /**
                       * START STACKED CHART
                       */

                          $output.='<div class="panel-body ">';
                                  $output.='<input class="knob" data-min="0" data-max="100" data-width="180" data-height="180" data-thickness=".1" data-fgColor="#8dc63f" data-bgColor="#ebebeb" value="60">';

                          $output.='</div>';

                      /**
                       * END STACKED CHART
                       */
                      $output.='</div>';
                      $output.='<div class="col-md-6 ">';
                      /**
                       * START STACKED CHART
                       */

                          $output.='<div class="panel-body ">';
                              $output.='<input class="knob" data-min="0" data-max="100" data-width="180" data-height="180" data-thickness=".1" data-fgColor="#DA5D74" data-bgColor="#ebebeb" value="78">';
                          $output.='</div>';


                      /**
                       * END STACKED CHART
                       */
                      $output.='</div>';
                  $output.='</div>';
                $output.='</div>';
            $output.='</div>';

             $output.='<div class="col-md-6 " style="">';
                /**
                 * START REGULAR PIE CHART
                 */
                $output.='<div class="panel ">';
                $output.='<div class=" panel-header">Programs Total by Month (Jan-Dec) </div>';
                    $output.='<div class="panel-body bg-ffffff" style="height: 300px;">';
                        $output.='<div class="" id="chart-10" style="height: 300px;"><svg></svg></div>';
                    $output.='</div>';
                $output.='</div>';
                /**
                 * END REGULAR PIE CHART
                 */
            $output.='</div>';


        $output.='</div>';

        $output.='<div class="row margin-top-24">';
              $output.='<div class="col-md-6 ">';
                /**
                 * START STACKED CHART
                 */
                $output.='<div class="panel ">';
                $output.='<div class=" panel-header">Program/Evaluation by Business Unit</div>';
                    $output.='<div class="panel-body">';
                        $output.='<div id="chart-5" style="height: 300px;"><svg></svg></div>';
                    $output.='</div>';
                $output.='</div>';
                /**
                 * END STACKED CHART
                 */
            $output.='</div>';
              $output.='<div class="col-md-6 ">';
                /**
                 * START STACKED CHART
                 */
                 $output.='<div class="panel ">';
                 $output.='<div class=" panel-header">Programs Total by Month (Jan-Dec) </div>';
                    $output.='<div class="panel-body">';
                        $output.='<div id="morris-line-example" style="height: 300px;"></div>';
                    $output.='</div>';
                $output.='</div>';
                /**
                 * END STACKED CHART
                 */
            $output.='</div>';
        $output.='</div>';

        $output.='<div class="row">';
             /**
              * START GOOGLE WORLD MAP
              */
            $output.='<div class="col-md-12">';
                $output.='<div class="panel panel-default">';
                    $output.='<div class="panel-body panel-body-map">';
                        $output.='<div id="google_ptm_map" style="height: 300px;"></div>';
                    $output.='</div>';
                $output.='</div>';
            $output.='</div>';
        $output.='</div>';
        /**
         * END GOOGLE WORLD MAP
         */

          $output.='<div class="row">';
              $output.='<div class="col-md-6">';
                $output.='<div class="panel panel-default ">';
                  /**
                   * START DEFAULT DATATABLE
                   */
                  require 'simpletable.inc.php' ;
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
                   require 'simpletable.inc.php' ;
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
$output.='</div>';
printf($output);

?>
