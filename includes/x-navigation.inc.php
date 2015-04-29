<?php
  $xnavigation_output = '';
  $xnavigation_output.='<ul class="x-navigation x-navigation-horizontal x-navigation-panel ">';
    $xnavigation_output.='<!-- TOGGLE NAVIGATION -->';
    $xnavigation_output.='<li class="xn-icon-button">';
        $xnavigation_output.='<a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>';
    $xnavigation_output.='</li>';
    $xnavigation_output.='<!-- END TOGGLE NAVIGATION -->';
    $xnavigation_output.='<!-- SEARCH -->';
    $xnavigation_output.='<li class="xn-search">';
        $xnavigation_output.='<form role="form">';
            $xnavigation_output.='<input type="text" name="search" placeholder="Search..."/>';
        $xnavigation_output.='</form>';
    $xnavigation_output.='</li>';
    $xnavigation_output.='<!-- END SEARCH -->';
    $xnavigation_output.='<!-- SIGN OUT -->';
    $xnavigation_output.='<li class="xn-icon-button pull-right">';
        $xnavigation_output.='<a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>';
    $xnavigation_output.='</li>';
    $xnavigation_output.='<!-- END SIGN OUT -->';
  $xnavigation_output.='</ul>';

  printf($xnavigation_output);
?>
