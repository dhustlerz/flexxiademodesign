<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/head.inc.php' ?>
        <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css" type="text/css" media="screen" />

    </head>


    <body>


    <!-- START PAGE CONTAINER -->
      <div  class="page-container" style="background: #ffffff;">

    <!-- START PAGE SIDEBAR -->
      <?php include 'includes/sidebar.inc.php';?>
    <!-- END PAGE SIDEBAR -->

    <div style="width:911px;" class=" container">

      <div  style="background-image:url(img/az/azmain2.png); height: 675px; width: 911px; border: 1px solid #e5edf2; ">
         <div class="row">
          <div class="col-sm-1">
          <a   onClick="noty({text: 'Meeting has been successfully created', layout: 'topRight', type: 'success'});"><img style=" cursor: pointer; height: 23px; width: 25px; margin-left: 540px; margin-top: 9px;" src="img/az/oneclick.png"> </a>
        </div>
          <a   onClick="noty({text: 'Meeting has been successfully created', layout: 'topRight', type: 'success'});"><img style=" cursor: pointer; height: 23px;  margin-left: 720px; margin-top: 114px;" src="img/az/wx-drop-down-one-click.png"> </a>



          <!--  <button type="button" class=" mb-control Wxbutton" style=" height: 23px; width: 25px; margin-left: 550px; margin-top: 9px;" data-box="#message-box-success">Success</button> -->
         </div>
      </div>

     <!-- START NOTY PLUGIN -->
      <div class="panel panel-default">
          <div class="panel-heading">
              <h3 class="panel-title">Notifications</h3>
              <ul class="panel-controls">

              </ul>
          </div>
          <div class="panel-body">

              <div class="form-group">
                  <button class="btn btn-success" onClick="noty({text: 'Successful action', layout: 'topRight', type: 'success'});">Success</button>
                  <button class="btn btn-danger" onClick="noty({text: 'There was an error', layout: 'topRight', type: 'error'});">Error</button>
                  <button class="btn btn-warning" onClick="noty({text: 'Best check yo self', layout: 'topRight', type: 'warning'});">Warning</button>
                  <button class="btn btn-info" onClick="noty({text: 'This alert needs your attention', layout: 'topRight', type: 'information'});">Warning</button>
                  <button class="btn btn-primary" onClick="notyConfirm();">Confirm</button>
              </div>
          </div>
      </div>
      <!-- END NOTY PLUGIN -->





      </div>
    <!-- END PAGE CONTAINER
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.fancybox-1.3.4/jquery.fancybox-1.3.4.pack.js"></script>
    -->
    <?php include 'includes/javascript.inc.php';?>

    <script type="text/javascript">

      $(document).ready(function() {

      /* This is basic - uses default settings */

      $("a#single_image").fancybox();

      /* Using custom settings */

      $("a#inline").fancybox({
        'hideOnContentClick': true
      });

      /* Apply fancybox to multiple items */

      $("a.group").fancybox({
        'transitionIn'  : 'elastic',
        'transitionOut' : 'elastic',
        'speedIn'   : 1,
        'speedOut'    : 2,
        'overlayShow' : true
      });

    });
    </script>

    </body>
</html>
