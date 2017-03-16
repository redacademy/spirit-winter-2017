(function($) {

    $(".responsive-menu").hide();
    $(".menu-toggle").on("click", function(){
        $(".responsive-menu").toggle(600);
    });

console.log('hello');
})(jQuery);