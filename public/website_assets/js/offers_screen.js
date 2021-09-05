/* slider Section */////////////////////////////////////////////////////////////


$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    center : true,
    items:2,
    loop:true,
    margin:15,
    rtl: true,
    responsiveClass:true,
    responsive:{
        0:{
          items:2,
          center : true,
        },
        1000:{
          items:5,
          center : true,

        }
    }

  });
});
