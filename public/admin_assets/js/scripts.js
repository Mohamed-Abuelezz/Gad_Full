/*!
    * Start Bootstrap - SB Admin v7.0.2 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2021 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});



// Initialize and add the map
  // Initialize and add the map
  function initMap() {
    // The location of Uluru
    const uluru = { lat: 30.033333, lng: 31.233334 };
  
    var gmarkers = [];

  
  
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: uluru,
    });
  
  
    google.maps.event.addListener(map, 'click', function(event) {

            $("#input_lat").val(event.latLng.lat());
            $("#input_lng").val(event.latLng.lng());




        removeMarkers();

        placeMarker(event.latLng);


     });
     
     function placeMarker(location) {
         var marker = new google.maps.Marker({
             position: location, 
             map: map,
             icon: {
                url:'https://freepngimg.com/thumb/web_design/24914-1-pushpin.png',
                scaledSize: new google.maps.Size(80, 80)
          
              }

         });
// Push your newly created marker into the array:
gmarkers.push(marker);

     }

     function removeMarkers(){
        for(i=0; i<gmarkers.length; i++){
            gmarkers[i].setMap(null);
        }
    }
    

  }







