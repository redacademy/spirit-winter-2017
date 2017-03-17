(function($) {
    // nav mobile
    $('.responsive-menu').hide(); // hide nav
    $('.menu-toggle').on('click', function(){
        $('.header-logo').toggle(); // hide hide and show logo
        $('.fa-phone').toggle(); // hide and show phone
        $('.responsive-menu').toggle(); //hide and show nav
    });
    // nav desktop
    $('.sub-menu').hide();
    $('.menu-item').hover(function() {
    //show its submenu
    $('ul', this).fadeIn(100);

    }, function() {
    //hide its submenu
    $('ul', this).fadeOut(100);
    });

})(jQuery);