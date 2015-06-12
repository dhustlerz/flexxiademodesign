<!-- START PAGE CONTAINER -->
        <?php

        $output ='';
            $output='<div  class="page-container">';



                     // START PAGE SIDEBAR
                    include 'sidebar.inc.php' ;
                    $output.=sidebar();


                     // END PAGE SIDEBAR -->

                     // PAGE CONTENT -->
                    $output.='<div class="page-content">';
                    include 'content.inc.php';
                    $output.= dashboard_content();
                    $output.='</div>';
                     // END PAGE CONTENT -->




                    print($output);

             $output.='</div>';




        ?>
        <?php include 'javascript.inc.php';?>

        <!-- END PAGE CONTAINER -->


