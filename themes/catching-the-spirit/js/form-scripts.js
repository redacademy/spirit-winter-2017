 (function ($) {

   $('input[type=file]').nicefileinput();


//set color of first drop select item
  $('select').css('color','#a9a9a9');
   $('select').change(function() {
      var current = $('select').val();
      if (current !== 'null') {
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

    setTimeout(function() {
        $(this).scrollTop(0);
    }, 100);
   

$('.ginput_container_fileupload').click(function() {
    $('input[type="file"]').click();
});


    })(jQuery);

    