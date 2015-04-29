<?php
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
?>
