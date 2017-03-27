(function($) {

    $(window).scroll(function() {
        var distanceFromTop = $(this).scrollTop();
        if (distanceFromTop >= $('.header-desktop').height()) {
            $('.nav-desktop').addClass('fixed');
        } else {
            $('.nav-desktop').removeClass('fixed');
        }
    });
    

   // if(('ontouchstart' in window)){//check for touch device

    
    if($(window).width() <= 642 ){
        $('.sub-menu').hide();
        // remove parent link
        $('.sub-menu').parent().find('a:first').removeAttr('href').css('cursor','pointer');
        // show hide submenu when click on parent
        $('.menu-item').on('click', function () {
        $('.sub-menu', this).toggle();
    });

    }
    else{
        $('.sub-menu').parent().find('a:first').removeAttr('href').css('cursor','pointer');
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


    if($('.main-navigation div').hasClass('responsive-menu')){
        console.log('the thing should be showing');
    }else{
        console.log('the thing should NOT be showing');
    }

})(jQuery);