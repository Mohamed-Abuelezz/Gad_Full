// check when splash is off
isScreenReady.getOnChange = function() {
    if(this.value) {
        // do some stuff

        setTimeout(
            function() 
            {
              //do something special
              $(".section-header .profileDetails .name").addClass("animate__animated animate__jackInTheBox");
              $(".section-header .profileDetails .bio").addClass("animate__animated animate__fadeInUp");
            
              $(".tab-content .info").addClass("animate__animated animate__zoomInLeft");
              $(".tab-content .rates i").addClass("animate__animated animate__jackInTheBox");
            

            }, 100);
          
    }
}

$('.preview').anarchytip();


// Details Section
$( ".section-details .taps li button" ).on( "click", function(event) {

  $( ".section-details .taps li button" ).css('background-color','transparent');
  $( ".section-details .taps li button").css('color','white');

  $(this).css('background-color','var(--third)');
  $(this).css('color','black');

  console.log( event.target );

} );









var profileDetails_tab = document.getElementById('profileDetails-tab');
var moreInformation_tab = document.getElementById('moreInformation-tab');
var location_tab = document.getElementById('location-tab');
var educationStages_tab = document.getElementById('education-stages-tab');

profileDetails_tab.addEventListener('shown.bs.tab', function (event) {
  $(".tab-content .info").addClass("animate__animated animate__zoomInLeft");
  $(".tab-content .rates i").addClass("animate__animated animate__jackInTheBox");
})

moreInformation_tab.addEventListener('shown.bs.tab', function (event) {
  $(".tab-content .information").addClass("animate__animated animate__backInDown");
})

location_tab.addEventListener('shown.bs.tab', function (event) {
  $(".tab-content .profile_location").addClass("animate__animated animate__flipInX");
})

educationStages_tab.addEventListener('shown.bs.tab', function (event) {
  $(".tab-content .stgs-subj").addClass("animate__animated animate__bounce");
})


// Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: 30.033333, lng: 31.233334 };

  
  const listLocations = [
{lat: 25.549999,lng: 31.700001,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},

];


  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  var infowindow = new google.maps.InfoWindow();

  var marker, i;

  for (i = 0; i < listLocations.length; i++) {

      // The marker, positioned at Uluru
   marker = new google.maps.Marker({
    position: listLocations[0],
    map: map,
    draggable: false,
    animation: google.maps.Animation.DROP,

    icon: {
      url:'../assets/icons/Map-Marker-Ball-Azure-icon.png',
      scaledSize: new google.maps.Size(50, 50)

    }
  });



  google.maps.event.addListener(marker, 'click', (function(marker, i) {
    var infoContent=`
    <div class="mapInfoClick" style="">
    <img class="animate__animated animate__backInDown" src="https://t4.ftcdn.net/jpg/03/83/25/83/360_F_383258331_D8imaEMl8Q3lf7EKU2Pi78Cn0R7KkW9o.jpg" alt="">
    <p class="animate__animated animate__lightSpeedInRight" style="font-weight:bold">Sherif Nabil</p>
    <p class="animate__animated animate__lightSpeedInRight">Teacher</p>
    <div class="stars  animate__animated animate__lightSpeedInLeft">
        <span class="fas fa-star checked"></span>
        <span class="fas fa-star checked"></span>
        <span class="fas fa-star checked"></span>
        <span class="fas fa-star"></span>
        <span class="fas fa-star"></span>
  `;
    return function() {
      infowindow.setContent(infoContent);

      infowindow.open(map, marker);

    }
  })(marker, i));
  }
}  



