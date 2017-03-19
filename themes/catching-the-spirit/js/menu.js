(function($) {

    if(('ontouchstart' in window)){//check for touch device
        $('.sub-menu').hide();
        $('.menu-item').click(function() { 
            if ($(this).children('ul,p').is(':hidden') == true) {
            $(this).children('ul,p').slideDown('slow');
            return false
            } 
    });
    }
    else{
        $('.sub-menu').hide();
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
        $('.header-logo').toggle(); // hide hide and show logo
        $('.fa-phone').toggle(); // hide and show phone
        $('.responsive-menu').toggle(); //hide and show nav
    });

})(jQuery);