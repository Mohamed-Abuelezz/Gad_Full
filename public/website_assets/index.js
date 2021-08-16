

/* slider Section */////////////////////////////////////////////////////////////
var myCarousel = document.querySelector('#carouselExampleSlidesOnly')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 2000,
  wrap: false,
  touch:true
})

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
