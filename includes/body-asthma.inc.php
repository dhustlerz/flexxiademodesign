<!-- START PAGE CONTAINER -->
        <div  class="page-container">

            <?php
             // START PAGE SIDEBAR
             include 'includes/sidebar-asthma.inc.php' ;
             // END PAGE SIDEBAR -->

             // PAGE CONTENT
            if ( isset($_GET['s']) && $_GET['s'] == 'acceredited') {
                   include 'includes/content-asthma-accredited.inc.php';
            }
            elseif (isset($_GET['s']) && $_GET['s'] == 'non-acceredited') {
                include 'includes/content-asthma-non-accredited.inc.php';
            }
            else {
                     include 'includes/content-asthma.inc.php';
                }

             // END PAGE CONTENT -->
            ?>



        </div>
        <!-- END PAGE CONTAINER -->

        <?php

         include 'javascript.inc.php';

        ?>
