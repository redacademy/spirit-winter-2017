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

    
   // if($(window).width() <= 642 ){
       

    //}
    // else{
    //     $('.sub-menu').parent().find('a:first').removeAttr('href').css('cursor','pointer');
    //     $('.menu-item').hover(function() {
    //     //show its submenu
    //     $('ul', this).fadeIn(100);

    //     }, function() {
    //     //hide its submenu
    //     $('ul', this).fadeOut(100);
    //     });
    // }

    // nav mobile toggle 
    $('.responsive-menu').hide(); // hide nav
    $('.menu-toggle').on('click', function(){
        $('.header-logo').toggle(); //  hide and show logoç
        $('.fa-phone').toggle(); // hide and show phone
        $('.responsive-menu').slideToggle(200); //hide and show nav
    });

     $('.sub-menu').hide();
        // remove parent link
        $('.sub-menu').parent().find('a:first').removeAttr('href').css('cursor','pointer');
        // show hide submenu when click on parent
        $('.menu-item').on('click', function () {
        $('.sub-menu', this).slideToggle(200);
        });


})(jQuery);