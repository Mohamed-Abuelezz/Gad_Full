  /// Teachers Section /////////////////////////////////////////////////////////////
// Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: 30.033333, lng: 31.233334 };

  
  const listLocations = [
{lat: 25.549999,lng: 31.700001,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 36.128611,lng: 	31.242222,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 30.033333,lng: 31.233334,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 26.559999,lng: 31.500001,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 30.158611,lng: 	31.252222,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 30.533333,lng: 31.533334,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 25.549999,lng: 31.700001,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 37.128611,lng: 	31.242222,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 38.033333,lng: 31.233334,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 29.559999,lng: 31.500001,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 40.158611,lng: 	31.252222,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 50.533333,lng: 31.533334,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 55.549999,lng: 31.700001,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 66.128611,lng: 	31.242222,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 50.033333,lng: 31.233334,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 22.559999,lng: 31.500001,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 10.158611,lng: 	31.252222,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 40.533333,lng: 31.533334,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 45.549999,lng: 31.700001,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 56.128611,lng: 	31.242222,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 80.033333,lng: 31.233334,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 76.559999,lng: 31.500001,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 10.158611,lng: 	31.252222,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 30.533333,lng: 31.533334,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 87.549999,lng: 31.700001,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 77.128611,lng: 	31.242222,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 99.033333,lng: 31.233334,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 55.559999,lng: 31.500001,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 11.158611,lng: 	31.252222,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 22.533333,lng: 31.533334,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 66.549999,lng: 31.700001,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},
{lat: 87.128611,lng: 	31.242222,img:'https://img.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg?size=626&ext=jpg'},

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
    position: listLocations[i],
    map: map,
    icon: {
      url:'https://freepngimg.com/thumb/web_design/24914-1-pushpin.png',
      scaledSize: new google.maps.Size(50, 50)

    }
  });



  google.maps.event.addListener(marker, 'click', (function(marker, i) {
    var infoContent=`<div class="mapInfoClick" style="margin-left:30px">
    <img src="https://t4.ftcdn.net/jpg/03/83/25/83/360_F_383258331_D8imaEMl8Q3lf7EKU2Pi78Cn0R7KkW9o.jpg" alt="">
    <p>${listLocations[i]['lat'].toString()}</p>
    <div class="stars">
        <span class="fas fa-star checked"></span>
        <span class="fas fa-star checked"></span>
        <span class="fas fa-star checked"></span>
        <span class="fas fa-star"></span>
        <span class="fas fa-star"></span>
        
    </div>
    <a class="btn" href="#">More</a>
  </div>
  
  `;
    return function() {
      infowindow.setContent(infoContent);
      infowindow.open(map, marker);
    }
  })(marker, i));
  }



}



/* taps Section */////////////////////////////////////////////////////////////

var tabEl = document.querySelector('a[data-bs-toggle="tab"]')
tabEl.addEventListener('shown.bs.tab', function (event) {
  event.target // newly activated tab
  event.relatedTarget // previous active tab

  event.target.classList.toggle('activeSelect');
  event.relatedTarget.classList.toggle('activeSelect');
  console.log('s1')
  $("#orderBy").css("display","none");

})

tabEl.addEventListener('hidden.bs.tab', function (event) {
    event.target // newly activated tab
    event.relatedTarget // previous active tab
  
    event.target.classList.toggle('activeSelect');
    event.relatedTarget.classList.toggle('activeSelect');
    console.log('s2')
    $("#orderBy").css("display","block");

  })





// Requstesd Section
