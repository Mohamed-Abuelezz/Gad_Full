



///////////////// Slider Js //////////////////////////////////

$(document).ready(function(){
	
	wow = new WOW(
		{
		boxClass:     'wow',      // default
		animateClass: 'animate__animated', // default
		offset:       0,          // default
		mobile:       true,       // default
		live:         true        // default
	  }
	  )
	  wow.init();


	$('.slider').slick({
'autoplay':true,
'waitForAnimate':true,
'fade':true,
'loop':true,
'speed':500,
'rtl': false

	}).on('beforeChange', function(event, slick, currentSlide, nextSlide) {

var randomsTextAnimation=['animate__zoomInDown','animate__rotateIn','animate__flipInX','animate__fadeInBottomRight','animate__backInLeft','animate__bounce',] 
var randomsBtnAnimation=['animate__rubberBand','animate__jello','animate__backInUp','animate__flipInY','animate__zoomInRight','animate__heartBeat',] 
		

var animationText =  randomsTextAnimation[Math.floor(Math.random()*randomsTextAnimation.length)];
var animationBtn =  randomsBtnAnimation[Math.floor(Math.random()*randomsBtnAnimation.length)];



		$('.s').removeClass('animate__animated '+animationText).hide();
		$('.btn-slider').removeClass('animate__animated '+animationBtn).hide();

		setTimeout(() => {  

		  $('.s').addClass('animate__animated '+animationText).show();
		  $('.btn-slider').addClass('animate__animated '+animationBtn).show();
	
		}, 500);
		
  

	  });


	  





  });
  

  

/////////////////////////////////////////////////////////////

//////// People Rates ///////////////////////////////////////

$(function() {
	// Carousel logic
	$('#quotes-carousel').on('click', '.next', showNextQuoteClick);
	$('#quotes-carousel').on('click', '.previous', showPreviousQuoteClick);
	// Cycle automatically
	window.carouselRunning = true;
	window.restartingCarousel = null;
	var interval = setInterval(function() {
	  if (window.carouselRunning) {
		showNextQuote();
	  }
	}, 4000);
  });
  
  /* Carousel stuff */
  function showNextQuoteClick() {
	window.carouselRunning = false;
	clearTimeout(window.restartingCarousel);
	showNextQuote();
	restartAutomatic();
  }
  
  function showPreviousQuoteClick() {
	window.carouselRunning = false;
	clearTimeout(window.restartingCarousel);
	showPreviousQuote();
	restartAutomatic();
  }
  
  function restartAutomatic() {
	clearTimeout(window.restartingCarousel);
	window.restartingCarousel = setTimeout(function() {
	  window.carouselRunning = true;
	}, 10000);
  }
  
  function showNextQuote() {
	var allQuotes = $('#quotes-carousel').find('.quote'),
		current = $('#quotes-carousel').find('.current'),
		previous = $('#quotes-carousel').find('.previous'),
		next = $('#quotes-carousel').find('.next');
	$(current).removeClass('current').addClass('previous');
	$(next).removeClass('next').addClass('current');
	$(previous).removeClass('previous').addClass('remove-left');
	setTimeout(function() {
	  $(previous).removeClass('remove-left');
	}, 1000);
	// Work out what should now be the "next" item
	$(allQuotes).each(function(index, item) {
	  if ($(item).hasClass('current')) {
		if (allQuotes[index + 1]) {
		  $(allQuotes[index + 1]).addClass('next').removeClass('remove-left');
		} else {
		  $(allQuotes[0]).addClass('next').removeClass('remove-left');
		}
	  }
	});
  }
  
  function showPreviousQuote() {
	var allQuotes = $('#quotes-carousel').find('.quote'),
		current = $('#quotes-carousel').find('.current'),
		previous = $('#quotes-carousel').find('.previous'),
		next = $('#quotes-carousel').find('.next');
	$(current).removeClass('current').addClass('next');
	$(previous).removeClass('previous').addClass('current');
	$(next).removeClass('next');
	// Work out what should now be the "next" item
	$(allQuotes).each(function(index, item) {
	  if ($(item).hasClass('current')) {
		if (allQuotes[index - 1]) {
		  $(allQuotes[index - 1]).addClass('place-left');
		  setTimeout(function() {
			$(allQuotes[index - 1]).addClass('previous').removeClass('place-left');
		  }, 5);
		} else {
		  $(allQuotes[allQuotes.length - 1]).addClass('place-left');
		  setTimeout(function() {
			$(allQuotes[allQuotes.length - 1]).addClass('previous').removeClass('place-left');
		  }, 5);
		}
	  }
	});
  }
  
/////////////////////////////////////////////////////////////  







