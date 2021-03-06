jQuery(document).ready(function(){

    /* PROGGRESS START */
    jQuery.mpb("show",{value: [0,50],speed: 5});
    /* END PROGGRESS START */

    var html_click_avail = true;

    jQuery("html").on("click", function(){
        if(html_click_avail)
            jQuery(".x-navigation-horizontal li,.x-navigation-minimized li").removeClass('active');
    });

    jQuery(".x-navigation-horizontal .panel").on("click",function(e){
        e.stopPropagation();
    });

    /* WIDGETS (DEMO)*/
    jQuery(".widget-remove").on("click",function(){
        jQuery(this).parents(".widget").fadeOut(400,function(){
            jQuery(this).remove();
            jQuery("body > .tooltip").remove();
        });
        return false;
    });
    /* END WIDGETS */

    /* Gallery Items */
    jQuery(".gallery-item .iCheck-helper").on("click",function(){
        var wr = jQuery(this).parent("div");
        if(wr.hasClass("checked")){
            jQuery(this).parents(".gallery-item").addClass("active");
        }else{
            jQuery(this).parents(".gallery-item").removeClass("active");
        }
    });
    jQuery(".gallery-item-remove").on("click",function(){
        jQuery(this).parents(".gallery-item").fadeOut(400,function(){
            jQuery(this).remove();
        });
        return false;
    });
    jQuery("#gallery-toggle-items").on("click",function(){

        jQuery(".gallery-item").each(function(){

            var wr = jQuery(this).find(".iCheck-helper").parent("div");

            if(wr.hasClass("checked")){
                jQuery(this).removeClass("active");
                wr.removeClass("checked");
                wr.find("input").prop("checked",false);
            }else{
                jQuery(this).addClass("active");
                wr.addClass("checked");
                wr.find("input").prop("checked",true);
            }

        });

    });
    /* END Gallery Items */

    // XN PANEL DRAGGING
    jQuery( ".xn-panel-dragging" ).draggable({
        containment: ".page-content", handle: ".panel-heading", scroll: false,
        start: function(event,ui){
            html_click_avail = false;
            jQuery(this).addClass("dragged");
        },
        stop: function( event, ui ) {
            jQuery(this).resizable({
                maxHeight: 400,
                maxWidth: 600,
                minHeight: 200,
                minWidth: 200,
                helper: "resizable-helper",
                start: function( event, ui ) {
                    html_click_avail = false;
                },
                stop: function( event, ui ) {
                    jQuery(this).find(".panel-body").height(ui.size.height - 82);
                    jQuery(this).find(".scroll").mCustomScrollbar("update");

                    setTimeout(function(){
                        html_click_avail = true;
                    },1000);

                }
            })

            setTimeout(function(){
                html_click_avail = true;
            },1000);
        }
    });
    // END XN PANEL DRAGGING

    /* DROPDOWN TOGGLE */
    jQuery(".dropdown-toggle").on("click",function(){
        onresize();
    });
    /* DROPDOWN TOGGLE */

    /* MESSAGE BOX */
    jQuery(".mb-control").on("click",function(){
        var box = jQuery(jQuery(this).data("box"));
        if(box.length > 0){
            box.toggleClass("open");

            var sound = box.data("sound");

            if(sound === 'alert')
                playAudio('alert');

            if(sound === 'fail')
                playAudio('fail');

        }
        return false;
    });
    jQuery(".mb-control-close").on("click",function(){
       jQuery(this).parents(".message-box").removeClass("open");
       return false;
    });
    /* END MESSAGE BOX */

    /* CONTENT FRAME */
    jQuery(".content-frame-left-toggle").on("click",function(){
        jQuery(".content-frame-left").is(":visible")
        ? jQuery(".content-frame-left").hide()
        : jQuery(".content-frame-left").show();
        page_content_onresize();
    });
    jQuery(".content-frame-right-toggle").on("click",function(){
        jQuery(".content-frame-right").is(":visible")
        ? jQuery(".content-frame-right").hide()
        : jQuery(".content-frame-right").show();
        page_content_onresize();
    });
    /* END CONTENT FRAME */

    /* MAILBOX */
    jQuery(".mail .mail-star").on("click",function(){
        jQuery(this).toggleClass("starred");
    });

    jQuery(".mail-checkall .iCheck-helper").on("click",function(){

        var prop = jQuery(this).prev("input").prop("checked");

        jQuery(".mail .mail-item").each(function(){
            var cl = jQuery(this).find(".mail-checkbox > div");
            cl.toggleClass("checked",prop).find("input").prop("checked",prop);
        });

    });
    /* END MAILBOX */

    /* PANELS */

    jQuery(".panel-fullscreen").on("click",function(){
        panel_fullscreen(jQuery(this).parents(".panel"));
        return false;
    });

    jQuery(".panel-collapse").on("click",function(){
        panel_collapse(jQuery(this).parents(".panel"));
        jQuery(this).parents(".dropdown").removeClass("open");
        return false;
    });
    jQuery(".panel-remove").on("click",function(){
        panel_remove(jQuery(this).parents(".panel"));
        jQuery(this).parents(".dropdown").removeClass("open");
        return false;
    });
    jQuery(".panel-refresh").on("click",function(){
        var panel = jQuery(this).parents(".panel");
        panel_refresh(panel);

        setTimeout(function(){
            panel_refresh(panel);
        },3000);

        jQuery(this).parents(".dropdown").removeClass("open");
        return false;
    });
    /* EOF PANELS */

    /* ACCORDION */
    jQuery(".accordion .panel-title a").on("click",function(){

        var blockOpen = jQuery(this).attr("href");
        var accordion = jQuery(this).parents(".accordion");
        var noCollapse = accordion.hasClass("accordion-dc");


        if(jQuery(blockOpen).length > 0){

            if(jQuery(blockOpen).hasClass("panel-body-open")){
                jQuery(blockOpen).slideUp(200,function(){
                    jQuery(this).removeClass("panel-body-open");
                });
            }else{
                jQuery(blockOpen).slideDown(200,function(){
                    jQuery(this).addClass("panel-body-open");
                });
            }

            if(!noCollapse){
                accordion.find(".panel-body-open").not(blockOpen).slideUp(200,function(){
                    jQuery(this).removeClass("panel-body-open");
                });
            }

            return false;
        }

    });
    /* EOF ACCORDION */

    /* DATATABLES/CONTENT HEIGHT FIX */
    jQuery(".dataTables_length select").on("change",function(){
        onresize();
    });
    /* END DATATABLES/CONTENT HEIGHT FIX */

    /* TOGGLE FUNCTION */
    jQuery(".toggle").on("click",function(){
        var elm = jQuery("#"+jQuery(this).data("toggle"));
        if(elm.is(":visible"))
            elm.addClass("hidden").removeClass("show");
        else
            elm.addClass("show").removeClass("hidden");

        return false;
    });
    /* END TOGGLE FUNCTION */

    /* MESSAGES LOADING */
    jQuery(".messages .item").each(function(index){
        var elm = jQuery(this);
        setInterval(function(){
            elm.addClass("item-visible");
        },index*300);
    });
    /* END MESSAGES LOADING */

    x_navigation();
});

jQuery(function(){
    onload();

    /* PROGGRESS COMPLETE */
    jQuery.mpb("update",{value: 100, speed: 5, complete: function(){
        jQuery(".mpb").fadeOut(200,function(){
            jQuery(this).remove();
        });
    }});
    /* END PROGGRESS COMPLETE */
});




jQuery(window).resize(function(){
    x_navigation_onresize();
    page_content_onresize();
});

function progressbarCustom() {
jQuery.mpb("update",{value: 100, speed: 5, complete: function(){
        jQuery(".mpb").fadeOut(200,function(){
            jQuery(this).remove();
        });
    }});
}

/* reportrange */
  reportRange();
  function reportRange() {

    if(jQuery(".reportrange").length > 0){
        jQuery(".reportrange").daterangepicker({
            ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days': [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM.DD.YYYY',
            separator: ' to ',
            startDate: moment().subtract('days', 29),
            endDate: moment()
          },function(start, end) {
              jQuery('.reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        });

        jQuery(".reportrange span").html(moment().subtract('days', 29).format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    }

  }
  /* end reportrange */

/* Initialize content of Diabetes all programs page page */


jQuery('#diabetes-program').on('click', 'a', function(e){
    jQuery.mpb("show",{value: [0,50],speed: 5});
    jQuery.ajax({
      type: "GET",
      url: 'includes/content-diabetes.inc.php',

      success: function(data) {
        //pageLoadingFrame("show","v1");
        onload();
        jQuery('.page-content').html(data);
        nvd3Charts.init();
        gaugejs("diabetes-gauge","diabetes-gauge-font",90);
        reportRange();
        drawGoogleHorizontalStackedChart();
        googleMaps();
        progressbarCustom()
       }
    });
});


/* Initialize content of Diabetes acceredited page page */

jQuery('#diabetes-program-acrr').on('click', 'a', function(e){
  jQuery.mpb("show",{value: [0,50],speed: 5});
    jQuery.ajax({
      type: "GET",
      url: 'includes/content-diabetes-accredited.inc.php',

      success: function(data) {

        nvd3Charts.init();
        jQuery('.page-content').html(data);
        gaugejs("diabetes-gauge-accr","diabetes-gauge-accr-value",95);
        reportRange();
        drawGoogleHorizontalStackedChartDiabetesAccr();
        googleMaps();
        progressbarCustom();


       }
    });
});


/* Initialize content of Diabetes non-acceredited page page */

jQuery('#diabetes-program-non-acrr').on('click', 'a', function(e){
  jQuery.mpb("show",{value: [0,50],speed: 5});
    jQuery.ajax({
      type: "GET",
      url: 'includes/content-diabetes-non-accredited.inc.php',

      success: function(data) {
        nvd3Charts.init();
        jQuery('.page-content').html(data);
        gaugejs("diabetes-gauge-non-accr","diabetes-gauge-non-accr-value",85);
        reportRange();
        drawGoogleHorizontalStackedChartDiabetesNonAccr();
        googleMaps();
        progressbarCustom();
       }
    });
});


// function googleMapChart() {

//   drawGoogleHorizontalStackedChartDiabetesNonAccr();
//   drawGoogleHorizontalStackedChartDiabetesAccr();
//   drawGoogleHorizontalStackedChart();
//   googleMaps();

// }


/*
 * angular JS function START
 * Author: JP
 */
var app = angular.module('myApp', []);
    app.controller("contentCtrl", function($scope,$http) {

        $scope.divContentDiabetes = {};

        $scope.divContentDiabetes.doClick = function() {

            var response = $http.get("includes/content-diabetes.inc.php");
             //$scope.divContentDiabetes.diabetesConten = $scope.trustAsHtml(someHtmlVar);
            response.success(function(data,status,header,config) {
              $scope.divContentDiabetes.diabetesContent = data;
            });
            response.error(function(data,status,header,config) {
              alert("AJAX failed!");
            });


        }



});




// function divContentDiabetes($scope, $http) {

//     // URL to fetch Content content-diabetes.inc.php
//     $scope.url = 'includes/content-diabetes.inc.php';

//     // The function that will be executed on button click (diabetes-content())
//     $scope.diabetes-content = function() {

//         // create the http get request
//         // The data will hold the content output
//         // The Response in simple php to html output

//         $http.get($scope.url, {"data"})
//     }
//}



 /*
  * Angular JS functions END
  */








function onload(){
    x_navigation_onresize();
    page_content_onresize();
}

function page_content_onresize(){
    jQuery(".page-content,.content-frame-body,.content-frame-right,.content-frame-left").css("width","").css("height","");

    var content_minus = 0;
    content_minus = (jQuery(".page-container-boxed").length > 0) ? 40 : content_minus;
    content_minus += (jQuery(".page-navigation-top-fixed").length > 0) ? 50 : 0;

    var content = jQuery(".page-content");
    var sidebar = jQuery(".page-sidebar");

    if(content.height() < jQuery(document).height() - content_minus){
        content.height(jQuery(document).height() - content_minus);
    }

    if(sidebar.height() > content.height()){
        content.height(sidebar.height());
    }

    if(jQuery(window).width() > 1024){

        if(jQuery(".page-sidebar").hasClass("scroll")){
            if(jQuery("body").hasClass("page-container-boxed")){
                var doc_height = jQuery(document).height() - 40;
            }else{
                var doc_height = jQuery(window).height();
            }
           jQuery(".page-sidebar").height(doc_height);

       }

        if(jQuery(".content-frame-body").height() < jQuery(document).height()-162){
            jQuery(".content-frame-body,.content-frame-right,.content-frame-left").height(jQuery(document).height()-162);
        }else{
            jQuery(".content-frame-right,.content-frame-left").height(jQuery(".content-frame-body").height());
        }

        jQuery(".content-frame-left").show();
        jQuery(".content-frame-right").show();
    }else{
        jQuery(".content-frame-body").height(jQuery(".content-frame").height()-80);

        if(jQuery(".page-sidebar").hasClass("scroll"))
           jQuery(".page-sidebar").css("height","");
    }

    if(jQuery(window).width() < 1200){
        if(jQuery("body").hasClass("page-container-boxed")){
            jQuery("body").removeClass("page-container-boxed").data("boxed","1");
        }
    }else{
        if(jQuery("body").data("boxed") === "1"){
            jQuery("body").addClass("page-container-boxed").data("boxed","");
        }
    }
}

/* PANEL FUNCTIONS */
function panel_fullscreen(panel){

    if(panel.hasClass("panel-fullscreened")){
        panel.removeClass("panel-fullscreened").unwrap();
        panel.find(".panel-body,.chart-holder").css("height","");
        panel.find(".panel-fullscreen .fa").removeClass("fa-compress").addClass("fa-expand");

        jQuery(window).resize();
    }else{
        var head    = panel.find(".panel-heading");
        var body    = panel.find(".panel-body");
        var footer  = panel.find(".panel-footer");
        var hplus   = 30;

        if(body.hasClass("panel-body-table") || body.hasClass("padding-0")){
            hplus = 0;
        }
        if(head.length > 0){
            hplus += head.height()+21;
        }
        if(footer.length > 0){
            hplus += footer.height()+21;
        }

        panel.find(".panel-body,.chart-holder").height(jQuery(window).height() - hplus);


        panel.addClass("panel-fullscreened").wrap('<div class="panel-fullscreen-wrap"></div>');
        panel.find(".panel-fullscreen .fa").removeClass("fa-expand").addClass("fa-compress");

        jQuery(window).resize();
    }
}

function panel_collapse(panel,action,callback){

    if(panel.hasClass("panel-toggled")){
        panel.removeClass("panel-toggled");

        panel.find(".panel-collapse .fa-angle-up").removeClass("fa-angle-up").addClass("fa-angle-down");

        if(action && action === "shown" && typeof callback === "function")
            callback();

        onload();

    }else{
        panel.addClass("panel-toggled");

        panel.find(".panel-collapse .fa-angle-down").removeClass("fa-angle-down").addClass("fa-angle-up");

        if(action && action === "hidden" && typeof callback === "function")
            callback();

        onload();

    }
}
function panel_refresh(panel,action,callback){
    if(!panel.hasClass("panel-refreshing")){
        panel.append('<div class="panel-refresh-layer"><img src="img/loaders/default.gif"/></div>');
        panel.find(".panel-refresh-layer").width(panel.width()).height(panel.height());
        panel.addClass("panel-refreshing");

        if(action && action === "shown" && typeof callback === "function")
            callback();
    }else{
        panel.find(".panel-refresh-layer").remove();
        panel.removeClass("panel-refreshing");

        if(action && action === "hidden" && typeof callback === "function")
            callback();
    }
    onload();
}
function panel_remove(panel,action,callback){
    if(action && action === "before" && typeof callback === "function")
        callback();

    panel.animate({'opacity':0},200,function(){
        panel.parent(".panel-fullscreen-wrap").remove();
        jQuery(this).remove();
        if(action && action === "after" && typeof callback === "function")
            callback();


        onload();
    });
}
/* EOF PANEL FUNCTIONS */

/* X-NAVIGATION CONTROL FUNCTIONS */
function x_navigation_onresize(){

    var inner_port = window.innerWidth || jQuery(document).width();

    if(inner_port < 1025){
        jQuery(".page-sidebar .x-navigation").removeClass("x-navigation-minimized");
        jQuery(".page-container").removeClass("page-container-wide");
        jQuery(".page-sidebar .x-navigation li.active").removeClass("active");


        jQuery(".x-navigation-horizontal").each(function(){
            if(!jQuery(this).hasClass("x-navigation-panel")){
                jQuery(".x-navigation-horizontal").addClass("x-navigation-h-holder").removeClass("x-navigation-horizontal");
            }
        });


    }else{
        if(jQuery(".page-navigation-toggled").length > 0){
            x_navigation_minimize("close");
        }

        jQuery(".x-navigation-h-holder").addClass("x-navigation-horizontal").removeClass("x-navigation-h-holder");
    }

}

function x_navigation_minimize(action){

    if(action == 'open'){
        jQuery(".page-container").removeClass("page-container-wide");
        jQuery(".page-sidebar .x-navigation").removeClass("x-navigation-minimized");
        jQuery(".x-navigation-minimize").find(".fa").removeClass("fa-indent").addClass("fa-dedent");
        jQuery(".page-sidebar.scroll").mCustomScrollbar("update");
    }

    if(action == 'close'){
        jQuery(".page-container").addClass("page-container-wide");
        jQuery(".page-sidebar .x-navigation").addClass("x-navigation-minimized");
        jQuery(".x-navigation-minimize").find(".fa").removeClass("fa-dedent").addClass("fa-indent");
        jQuery(".page-sidebar.scroll").mCustomScrollbar("disable",true);
    }

    jQuery(".x-navigation li.active").removeClass("active");

}

function x_navigation(){

    jQuery(".x-navigation-control").click(function(){
        jQuery(this).parents(".x-navigation").toggleClass("x-navigation-open");

        onresize();

        return false;
    });

    if(jQuery(".page-navigation-toggled").length > 0){
        x_navigation_minimize("close");
    }

    jQuery(".x-navigation-minimize").click(function(){

        if(jQuery(".page-sidebar .x-navigation").hasClass("x-navigation-minimized")){
            jQuery(".page-container").removeClass("page-navigation-toggled");
            x_navigation_minimize("open");
        }else{
            jQuery(".page-container").addClass("page-navigation-toggled");
            x_navigation_minimize("close");
        }

        onresize();

        return false;
    });

    jQuery(".x-navigation  li > a").click(function(){

        var li = jQuery(this).parent('li');
        var ul = li.parent("ul");

        ul.find(" > li").not(li).removeClass("active");

    });

    jQuery(".x-navigation li").click(function(event){
        event.stopPropagation();

        var li = jQuery(this);

            if(li.children("ul").length > 0 || li.children(".panel").length > 0 || jQuery(this).hasClass("xn-profile") > 0){
                if(li.hasClass("active")){
                    li.removeClass("active");
                    li.find("li.active").removeClass("active");
                }else
                    li.addClass("active");

                onresize();

                if(jQuery(this).hasClass("xn-profile") > 0)
                    return true;
                else
                    return false;
            }
    });

    /* XN-SEARCH */
    jQuery(".xn-search").on("click",function(){
        jQuery(this).find("input").focus();
    })
    /* END XN-SEARCH */

}
/* EOF X-NAVIGATION CONTROL FUNCTIONS */

/* PAGE ON RESIZE WITH TIMEOUT */
function onresize(timeout){
    timeout = timeout ? timeout : 200;

    setTimeout(function(){
        page_content_onresize();
    },timeout);
}
/* EOF PAGE ON RESIZE WITH TIMEOUT */

/* PLAY SOUND FUNCTION */
function playAudio(file){
    if(file === 'alert')
        document.getElementById('audio-alert').play();

    if(file === 'fail')
        document.getElementById('audio-fail').play();
}
/* END PLAY SOUND FUNCTION */

/* NEW OBJECT(GET SIZE OF ARRAY) */
Object.size = function(obj) {
    var size = 0, key;
    for (key in obj) {
        if (obj.hasOwnProperty(key)) size++;
    }
    return size;
};

var morrisCharts = function() {
        Morris.Bar({
        element: 'morris-bar-example',
        data: [
            { y: '2006', a: 100, b: 90 },
            { y: '2007', a: 75,  b: 65 },
            { y: '2008', a: 50,  b: 40 },
            { y: '2009', a: 75,  b: 65 },
            { y: '2010', a: 50,  b: 40 },
            { y: '2011', a: 75,  b: 65 },
            { y: '2012', a: 100, b: 90 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        barColors: ['#7A92A3', '#0B62A4']
    });
}();



/* EOF NEW OBJECT(GET SIZE OF ARRAY) */


//     /* Animate number
//      * @Author jP flexxia
//      * To animate number
//      */
// jQuery(document).ready( function() {

// // animateNumber accepts same arguments, as animate does
// // it adds only 'number' and 'numberStep' params
// var comma_separator_number_step = jQuery.animateNumber.numberStepFactories.separator(',');
// jQuery('.animate-number').animateNumber(
//   {
//     number: 417,
//     numberStep: comma_separator_number_step
//     },

//   5000
// );
// jQuery('.animate-number-1').animateNumber(
//   {
//     number: 1275,
//     numberStep: comma_separator_number_step
//     },

//   5000
// );
// jQuery('.animate-number-2').animateNumber(
//   {
//     number: 1530,
//     numberStep: comma_separator_number_step
//     //jQuery(".animate-number-3").text('+'+number);
//     },

//   5000
// );
// var decimal_places = 2;
// var decimal_factor = decimal_places === 0 ? 1 : decimal_places * 10;
// jQuery('.animate-number-3').animateNumber(

//    {
//       number: 4.64 * decimal_factor,

//       numberStep: function(now, tween) {
//         var floored_number = Math.floor(now) / decimal_factor,
//             target = jQuery(tween.elem);

//         if (decimal_places > 0) {
//           // force decimal places even if they are 0
//           floored_number = floored_number.toFixed(decimal_places);

//           // replace '.' separator with ','
//           floored_number = floored_number.toString().replace('.', ',');
//         }

//         jQuery(".animate-number-3").text(floored_number);
//       }
//     },
//     5000
// );

// });


    /* EOF ACCORDION */
