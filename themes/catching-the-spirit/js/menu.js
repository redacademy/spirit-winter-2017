(function($) {

    $(window).scroll(function() {
        var distanceFromTop = $(this).scrollTop();
        if (distanceFromTop >= $('.header-desktop').height()) {
            $('.nav-desktop').addClass('fixed');
        } else {
            $('.nav-desktop').removeClass('fixed');
        }
    });
    

    if(('ontouchstart' in window)){//check for touch device
        $('.sub-menu').hide();
        // remove parent link
        $('.sub-menu').parent().find('a:first').removeAttr('href').css('cursor','default');
        // show hide submenu when click on parent
        $('.menu-item').on('click', function () {
        $('.sub-menu', this).toggle();
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