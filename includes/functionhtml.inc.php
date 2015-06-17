<?php

  function top_navigation() {
    $output='';
        $output.='<ul class="x-navigation x-navigation-horizontal x-navigation-panel ">';
      $output.='<!-- TOGGLE NAVIGATION -->';
      $output.='<li class="xn-icon-button">';
          $output.='<a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>';
      $output.='</li>';
      $output.='<!-- END TOGGLE NAVIGATION -->';

      $output.='<!-- END SEARCH -->';

      $output.='<!-- SIGN OUT -->';
      // $output.='<li class="xn-icon-button pull-right">';
      //     $output.='<a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>';
      // $output.='</li>';
      $output.='<!-- END SIGN OUT -->';

      $output.='</li>';
      $output.='<!-- SEARCH -->';
       $output.='<li class="xn-search">';
          $output.='<form role="form">';
              $output.='<input type="text" name="search" placeholder="Search..."/>';
          $output.='</form>';
      $output.='</li>';
    $output.='</ul>';
      /**
       * START X-NAVIGATION VERTICAL 2
       *
       */
    $output.='<div class="bg-F5F5F5">';
    $output.='<ul class=" x-navigation x-navigation-horizontal x-navigation-panel" style="background-color:#F5F5F5">';
      $output.='<!-- TOGGLE NAVIGATION -->';

      $output.='<!-- END TOGGLE NAVIGATION -->';
      $output.='<li >';
       $output.='<span class="color-002840 font-family-inherit padding-left-40 font-size-20 line-height-2-5 ">KPI Reporting DashBoard</span>';
      $output.='</li>';
      $output.='<!-- END SEARCH -->';


          $output.='<li class=" pull-right ">';
              $output.='<div  id="reportrange" class="reportrange border-radius-6 margin-right-6 color-fff bg-005180 padding-px-5 margin-top-10  ">';
              $output.='<span></span><b class="caret"></b>';
          $output.='</div>';
      $output.='</li>';

    $output.='</ul>';
    $output.='</div>';

    return $output;


  }

?>
