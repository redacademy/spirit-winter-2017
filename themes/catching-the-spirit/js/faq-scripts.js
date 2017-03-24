(function ($) {

    var $forParents = $('.faq-btn-parents');
    var $forYouth = $('.faq-btn-youth');

    var $parentsText = $('.faq-parents');
    var $youthText = $('.faq-youth');

    var $body = $('body');
    var $footer = $('footer');

   
//set color of first drop select item
  $('select').css('color','#a9a9a9');
   $('select').change(function() {
      var current = $('select').val();
      if (current != 'null') {
          $('select').css('color','black');
      } else {
          $('select').css('color','#a9a9a9');
      }
   }); 


    $('.show-medical-consent').on('click',function(){
        $('.medical-consent-info').toggleClass('consent-hide');
    });

    $('.show-participation-consent').on('click',function(){
        $(' .participation-consent-info').toggleClass('consent-hide');
    });

    $('.show-transportation-consent').on('click',function(){
        $('.transportation-consent-info').toggleClass('consent-hide');
    });


    window.onload = function () {


        var form = $('#gform_2');
        var formHeight = form.height();

        if (!form || formHeight < 350) {
            $body.addClass('body-fill');
            $footer.addClass('footer-drop');
        }
    };

    $forParents.on('click', function () {
        removeFormatting();
        $parentsText.removeClass('faq-parents-hide');
        if (!$youthText.hasClass('faq-youth-hide')) {
            $youthText.toggleClass('faq-youth-hide')
        }
    });

    $forYouth.on('click', function () {
        removeFormatting();
        $youthText.removeClass('faq-youth-hide');

        if (!$parentsText.hasClass('faq-parents-hide')) {
            $parentsText.toggleClass('faq-parents-hide')
        }

    });

    // $gform_next_button.on('click',function(){
    //      removeFormatting();
    // });

    function removeFormatting() {
        $body.removeClass('body-fill');
        $footer.removeClass('footer-drop');
    }

})(jQuery);