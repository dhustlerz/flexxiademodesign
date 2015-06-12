  <?php

  function scripts() {
    $output = '';
      $output.='<!-- START PRELOADS -->';
        $output.='<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>';
        $output.='<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>';
        $output.='<!-- END PRELOADS -->';

    $output.='<!-- START SCRIPTS -->';
        $output.='<!-- START PLUGINS -->';
        $output.'<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>';
        $output.='<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>';
        $output.='<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>';
        $output.='<!-- END PLUGINS -->';

        $output.='<!-- START THIS PAGE PLUGINS-->';
        $output.='<!-- MAP PLUGINS-->';
        $output.='<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>';
        $output.='<script type="text/javascript" src="js/demo_maps.js"></script>';
        $output.='<!-- END MAP PLUGINS-->';

        $output.='<!-- END MORRIS CHART PLUGINS-->';
        $output.='<script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>';
        $output.='<script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>';
        $output.='<script type="text/javascript" src="js/demo_charts_morris.js"></script>';

        $output.='<!-- END MORRIS CHART PLUGINS-->';
        $output.='<!-- END KNOB CHART PLUGINS-->';
        $output.='<script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>';
        $output.='<script type="text/javascript" src="js/plugins/knob/jquery.knob.min.js"></script>';
        $output.='<!-- END KNOB CHART PLUGINS-->';

        $output.='<!-- START DATATABLES PLUGINS-->';
        $output.='<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>';
        $output.='<!-- END DATATABLES PLUGINS-->';
        $output.='<script>';
        // window.onresize = function(event)
        //     {
        //         document.location.reload(true);
        //     }

        // function resize() {
        //   console.log('working');
        // }

        // d3.select(window).on('resize', resize);
        // jQuery(window).resize( function() {
        //     console.log('working');
        //     //location.reload();
        //       // var win = jQuery(this); //this = window
        //       // if (win.height() >= 820) { /* ... */ }
        //       // if (win.width() >= 1280) { /* ... */ }
        //       //jQuery('#refresh').load(document.URL +  '#refresh');
        // });
        // window.onresize = function(event)
        //     {

        //            jQuery('.refresh').each(function(){
        //               jQuery(this).load(this.href);
        //            })

        //         //alert('working');
        //         //jQuery('.refresh').hide();
        //         //document.location.reload(true);
        //         //jQuery('#page-content').load(document.URL +  '#page-content');
        //         // jQuery.ajaxSetup(
        //         //     {
        //         //         cache: false,
        //         //         // beforeSend: function() {
        //         //         //     jQuery('#content').hide();
        //         //         //     jQuery('#loading').show();
        //         //         // },
        //         //         // complete: function() {
        //         //         //     jQuery('#loading').hide();
        //         //         //     jQuery('#content').show();
        //         //         // },
        //         //         success: function() {
        //         //             jQuery('.refresh').hide();
        //         //             //jQuery('.refresh').show();
        //         //         }
        //         //     });
        //     }
        $output.='</script>';


        $output.='<script type="text/javascript" src="js/markerclusterplus.js"></script>';
        $output.='<script type="text/javascript "src="js/plugins/icheck/icheck.min.js"></script>';
        $output.='<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>';
        $output.='<script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>';
        $output.='<script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>';
        $output.='<script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>';
        $output.='<script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>';
        $output.='<script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>';
        $output.='<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>';
        $output.='<script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>';
        $output.='<script type="text/javascript" src="js/plugins/moment.min.js"></script>';
        $output.='<script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>';
          $output.='<script type="text/javascript" src="js/plugins/markerclustererplus.js"></script>';
          $output.='<script type="text/javascript" src="js/plugins/jquery-animateNumber.js"></script>';
          $output.='<script type="text/javascript" src="js/plugins/gauge.js"></script>';
          $output.='<script type="text/javascript" src="js/demo_gauge.js"></script>';


        $output.='<!-- END THIS PAGE PLUGINS-->';

        $output.='<!-- Start Google Chart PLUGINS-->';
         $output.='<script type="text/javascript" src="https://www.google.com/jsapi"></script>';
         $output.='<script type="text/javascript" src="js/demo_charts_google.js"></script>';
         $output.='<!-- END Google Chart PLUGINS-->';

        $output.='<!-- START TEMPLATE -->';
        $output.='<script type="text/javascript" src="js/settings.js"></script>';
        $output.='<script type="text/javascript" src="js/plugins.js"></script>';
        $output.='<script type="text/javascript" src="js/actions.js"></script>';


        $output.='<script type="text/javascript" src="js/demo_dashboard.js"></script>';
        //$output.='<!--$output.='<script type="text/javascript" src="js/custom-charts.js"></script>';-->';
        $output.='<!-- END TEMPLATE -->';
         $output.='<!-- START D3V3-->';
        $output.='<script type="text/javascript" src="js/plugins/nvd3/lib/d3.v3.js"></script>';
        $output.='<script type="text/javascript" src="js/plugins/nvd3/nv.d3.min.js"></script>';
        $output.='<script type="text/javascript" src="js/demo_charts_nvd3.js"></script>';
        $output.='<!-- END D3V3-->';
    $output.='<!-- END SCRIPTS -->';
    return $output;
}
?>
