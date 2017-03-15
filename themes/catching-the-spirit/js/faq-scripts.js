(function($) {

    var $forParents = $('.faq-btn-parents');
    var $forYouth = $('.faq-btn-youth');

    var $parentsText = $('.faq-parents');
    var $youthText = $('.faq-youth');

    $forParents.on('click', function(){
        console.log('parents clicked');
        $parentsText.removeClass('faq-parents-hide');
         if(!$youthText.hasClass('faq-youth-hide')){
            $youthText.toggleClass('faq-youth-hide')
        }
    });

    $forYouth.on('click', function(){
        console.log('parents clicked');
        $youthText.removeClass('faq-youth-hide'); 

        if(!$parentsText.hasClass('faq-parents-hide')){
            $parentsText.toggleClass('faq-parents-hide')
        }
        
    });

})(jQuery);