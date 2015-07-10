(function(jQuery) {

    jQuery.noty.layouts.topCenter = {
        name     : 'topCenter',
        options  : { // overrides options

        },
        container: {
            object  : '<ul id="noty_topCenter_layout_container" />',
            selector: 'ul#noty_topCenter_layout_container',
            style   : function() {
                jQuery(this).css({
                    top          : 40,
                    left         : 0,
                    position     : 'fixed',
                    width        : '310px',
                    height       : 'auto',
                    margin       : 0,
                    padding      : 0,
                    listStyleType: 'none',
                    zIndex       : 10000000
                });

                jQuery(this).css({
                    left: (jQuery(window).width() - jQuery(this).outerWidth(false)) / 2 + 'px'
                });
            }
        },
        parent   : {
            object  : '<li />',
            selector: 'li',
            css     : {}
        },
        css      : {
            display: 'none',
            width  : '310px'
        },
        addClass : ''
    };

})(jQuery);
