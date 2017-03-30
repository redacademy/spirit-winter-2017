(function ($) {

    $(window).scroll(function () {
         setStickyNav();
    });

    $(window).resize(function(){
       setStickyNav();
    });

    function setStickyNav(){
         var distanceFromTop = $(this).scrollTop();
         if (distanceFromTop >= $('.header-desktop').height()) {
            $('.nav-desktop').addClass('fixed');
        } else {
            $('.nav-desktop').removeClass('fixed');
        }
    }

    // nav mobile toggle 
    $('.responsive-menu').hide(); // hide nav
    $('.sub-menu').hide();
    $('.sub-menu').parent().find('a:first').removeAttr('href').css('cursor', 'pointer');


    $('.menu-toggle').on('click', function () {
        $('.responsive-menu').slideToggle(200); //hide and show nav
        $('.site-content').toggleClass('.no-overflow');
    });

    $('.menu-item').on('hover', function () {
        if ($(window).width() > 642) {
            $('.sub-menu', this).slideToggle(100);
        }
    });

    $('.menu-item').on('click', function () {
        if ($(window).width() <= 642) {
            $('.sub-menu', this).slideToggle(200);
        }
    });


    if($('.gform_confirmation_message_3').length){
        $('.testimonial-heading').hide();
    }



})(jQuery);