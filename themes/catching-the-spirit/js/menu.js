(function($) {

    if(('ontouchstart' in window)){//check for touch device
        $('.sub-menu').hide();
        $('.menu-item').click(function() { 
            if ($(this).children('ul,p').is(':hidden') == true) {
            $(this).find('ul').toggle();
            return false
            } 
    });
    }
    else{
        $('.menu-item').hover(function() {
        //show its submenu
        $('ul', this).fadeIn(100);

        }, function() {
        //hide its submenu
        $('ul', this).fadeOut(100);
        });
    }

    // nav mobile toggle 
    $('.responsive-menu').hide(); // hide nav
    $('.menu-toggle').on('click', function(){
        $('.header-logo').toggle(); //  hide and show logo
        $('.fa-phone').toggle(); // hide and show phone
        $('.responsive-menu').toggle(); //hide and show nav
    });

})(jQuery);