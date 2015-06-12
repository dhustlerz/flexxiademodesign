<!-- START PAGE CONTAINER -->
        <div  class="page-container">

            <?php

             // START PAGE SIDEBAR
             include 'sidebar.inc.php' ;
             // END PAGE SIDEBAR -->

             //PAGE CONTENT -->
            echo'<div class="page-content">';
            if ( isset($_GET['s']) && $_GET['s'] == 'acceredited') {
                   include 'content-diabetes-accredited.inc.php';
            }
            elseif (isset($_GET['s']) && $_GET['s'] == 'non-acceredited') {
                include 'content-diabetes-non-accredited.inc.php';
            }
            else {
                     include 'content-diabetes.inc.php';
                }
            echo '</div>';
               // include 'includes/content-diabetes.inc.php';
             // END PAGE CONTENT -->
            ?>



        </div>
        <!-- END PAGE CONTAINER -->

<?php

include 'javascript.inc.php';

?>
