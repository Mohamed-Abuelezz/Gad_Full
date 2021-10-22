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
                url:'../assets/icons/Map-Marker-Ball-Azure-icon.png',
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

//////////////////////////////////////////////////////////////