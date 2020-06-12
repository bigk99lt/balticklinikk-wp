$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      items:1,
      loop:true,
      margin:10,
      autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:false
  })
    });

    $(document).ready(function(){
      $('.burger').click(function(){
        $('.nav').toggleClass('show');
      });
    });

    $(document).ready(function(){
      $(window).scroll(function(){
        $('.op').css("opacity", 1 -
          $(window).scrollTop()/700)
      })
    })