(function($) {

    var $forParents = $('.faq-btn-parents');
    var $forYouth = $('.faq-btn-youth');

    var $parentsText = $('.faq-parents');
    var $youthText = $('.faq-youth');

    var $body = $('body');
    var $footer = $('footer');

    $body.addClass('body-fill');
    $footer.addClass('footer-drop');

    $forParents.on('click', function(){
        removeFormatting();
        $parentsText.removeClass('faq-parents-hide');
         if(!$youthText.hasClass('faq-youth-hide')){
            $youthText.toggleClass('faq-youth-hide')
        }
    });

    $forYouth.on('click', function(){
        removeFormatting();
        $youthText.removeClass('faq-youth-hide'); 

        if(!$parentsText.hasClass('faq-parents-hide')){
            $parentsText.toggleClass('faq-parents-hide')
        }
        
    });

    function removeFormatting(){
        $body.removeClass('body-fill');
        $footer.removeClass('footer-drop');
    }

})(jQuery);