(function($,undefined){
  $(document).ready(function(){

    console.log('hi')

    $('.menu-icon').on('click',function(){

      if($('.start_nav').is(':visible')){
        $('.start_nav').slideUp();
      }else{
        $('.start_nav').slideDown();
      }
    });

    $('.content').on('click',function(){
      $('.start_nav').slideUp();
    });



  });
})(jQuery);
