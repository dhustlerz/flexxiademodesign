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
    <!-- CSS INCLUDE -->
  </head>

  <body>

    <div style="width:911px;" class=" container">

      <div  style="background-image:url(img/az/azmain.png); height: 675px; width: 911px; border: 1px solid #e5edf2; ">
        <div class="row">
          <a   onClick="successNotify();"><img style=" cursor: pointer;  margin-left: 420px; margin-top: 12px;" src="img/az/oneclick.png"> </a>
        </div>
      </div>

      <!-- START NOTY PLUGIN -->
      <div class="panel panel-default" style="width:911px">
          <div class="panel-heading">
              <h3 class="panel-title">Notifications</h3>
          </div>
          <div class="panel-body">
              <div class="form-group">
                  <button class="btn btn-success" onClick="successNotify();">Success</button>
                  <button class="btn btn-danger" onClick="failureNotify();">Error</button>
              </div>
          </div>
      </div>
      <!-- END NOTY PLUGIN -->

    </div>

    <!-- START PLUGINS -->
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- END PLUGINS -->


    <!-- Noty library plugins -->
    <script type='text/javascript' src='js/plugins/noty/jquery.noty.js'></script>
    <script type='text/javascript' src='js/plugins/noty/layouts/topCenter.js'></script>
    <script type='text/javascript' src='js/plugins/noty/themes/default.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
    <!-- Noty library plugins -->

  </body>
</html>



<?php

/* Snippet to run javascript function in php */

  $x='success';

  if( $x == 'success' ){
    $output = '';
    $output .= '<script type="text/javascript">';
     $output .= 'successNotify();';
    $output .= '</script>';
    echo $output;
  }
  else {
 $output = '<script type="text/javascript">';
   $output .= 'failureNotify();';
  $output .= '</script>';
  echo $output;
  }

?>
