(function($) {
    // nav mobile
    $(".responsive-menu").hide();
    $(".menu-toggle").on("click", function(){
        $(".responsive-menu").toggle(600);
    });
    // nav desktop
    $(".sub-menu").hide();
    $('.menu-item').hover(function() {
    //show its submenu
    $('ul', this).fadeIn(100);

    }, function() {
    //hide its submenu
    $('ul', this).fadeOut(100);
    });

})(jQuery);