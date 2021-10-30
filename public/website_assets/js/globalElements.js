
var isScreenReady=  {
  value: false,
  set: function (value) {
      this.value = value;
   //  this.getOnChange();
  }
}

$(document).ready(function(){


//splash
if(globalUsageElement['Splash'] == true){
  var count=0;

$('body').loading({

  onStop: function(loading) {
    if(count < 1){
       count++;

   loading.overlay.fadeOut(3000);
    isScreenReady.set(true);

    if(globalUsageElement['Toast'] == true){
      var toastElList = [].slice.call(document.querySelectorAll('.toast'))
      var toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl, {})
      })
      var myToastEl = document.getElementById('myToastEl');
      var myToast = bootstrap.Toast.getInstance(myToastEl); // Returns a Bootstrap toast instance
      myToast.show();
      }

    }
  },
  overlay: $("#splash"),
message:'ok',
//theme: 'dark'
stoppable:false
});

$(window).on('load',function(){
  setInterval(function() {

  $('body').loading('stop');

  },0);
});

}
// Nav Bar Mobile


var myOffcanvas = document.getElementById('offcanvasRight')
myOffcanvas.addEventListener('hidden.bs.offcanvas', function () {
  // do something...
  console.log('closed');
  $('.sideMenuItem').removeClass('animate__animated animate__lightSpeedInRight').hide();
  $('#offcanvasRightLabel').removeClass('animate__animated animate__hinge').hide();

});

myOffcanvas.addEventListener('show.bs.offcanvas', function () {
  // do something...
  console.log('open');
  $('.sideMenuItem').addClass('animate__animated animate__lightSpeedInRight').show();
  $('#offcanvasRightLabel').addClass('animate__animated animate__hinge').show();

});



// Toast 
// if(globalUsageElement['Toast'] == true){
// var toastElList = [].slice.call(document.querySelectorAll('.toast'))
// var toastList = toastElList.map(function (toastEl) {
//   return new bootstrap.Toast(toastEl, {})
// })
// var myToastEl = document.getElementById('myToastEl');
// var myToast = bootstrap.Toast.getInstance(myToastEl); // Returns a Bootstrap toast instance
// myToast.show()
// }

// // Splash Js





// if(globalUsageElement['Splash'] == true){

//   function splash(param) {
//         var time = param;
//         setTimeout(function() {
//           $('#app-splash').fadeOut("slow");
//           isScreenReady.set(true);
//         }, time);
//       }
//     $(document).ready(function(){
//         splash(3000)
//     });
    
//   }
 
// ProfileCover
if(globalUsageElement['AvatarCover'] == true){

$("#profileImage").click(function(e) {
  $("#imageUpload").click();
});

function fasterPreview( uploader ) {
  if ( uploader.files && uploader.files[0] ){
        $('#profileImage').attr('src', 
           window.URL.createObjectURL(uploader.files[0]) );
  }
}

$("#imageUpload").change(function(){
  fasterPreview( this );
});

}


// Wow Animation Scroll
if(globalUsageElement['Wow'] == true){

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
  }


//  Scroll to Top

    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
          $('#back-to-top').fadeIn();
        } else {
          $('#back-to-top').fadeOut();
        }
      });
      // scroll body to 0px on click
      $('#back-to-top').click(function () {
        $('body,html').animate({
          scrollTop: 0
        }, 400);
        return false;
      });


      if(globalUsageElement['authNav'] == true){

 var menuButton = document.querySelector(".menu-button");

 menuButton.addEventListener("click", function(event) {
   event.preventDefault();
   var parent = document.querySelector(".menu-container");
   if (parent.classList.contains("open")) {
     parent.classList.remove("open");
   } else {
     parent.classList.add("open");
   }
});


      }



  })




