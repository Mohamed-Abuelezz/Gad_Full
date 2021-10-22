/**** Profile Results Tap */

const tabs = document.querySelectorAll('.tab'); 

tabs.forEach(tab => {
  tab.addEventListener('click', event => {
    console.log(event.currentTarget); // show what element was clicked in the console
    console.log(event.currentTarget.dataset); // get .dataset Object key from HTML element 
    
    // Remove 'active' class style from previously selected tab
    document.querySelector('.tab.active')?.classList.remove('active'); // optional chaining
    
    // Add 'active' class style to selected tab
    event.currentTarget.classList.add('active');
    
    // Hide previously selected tab's content
    document.querySelector('.content.show').classList.remove('show');
    
    // Show selected tab's respective content
    const selectedContent = event.currentTarget.dataset.content; // see .dataset console.log() above
    document.querySelector(selectedContent).classList.add('show');
  })
})


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
          
      </div>
      <a class="btn-outline" href="#" style="margin:15px auto">More</a>
    </div>
    
    `;
      return function() {
        infowindow.setContent(infoContent);

        infowindow.open(map, marker);

      }
    })(marker, i));
    }
}  


$('input[name="search"]').autoComplete({
  minChars: 1,
  menuClass:'suggestItems',

  source: function(term, suggest){
      term = term.toLowerCase();
      var choices = ['ActionScript','Action2Script', 'AppleScript', 'Asp', 'ok','ActionScript','Action2Script', 'AppleScript', 'Asp', 'ok'];
      var matches = [];
      for (i=0; i<choices.length; i++)
          if (~choices[i].toLowerCase().indexOf(term)) matches.push(choices[i]);
      suggest(matches);
  },
  renderItem: function (item, search){

      search = search.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
      var re = new RegExp("(" + search.split(' ').join('|') + ")", "gi");


      return`<div class="item autocomplete-suggestion">
      <img src="https://www.edarabia.com/wp-content/uploads/2015/11/7-ways-to-become-the-person-everyone-respects.jpg"/>
      <div class="details">
        <p class="text-medium">${item}</p>
        <p class="text-small">teacher</p>
      </div>
      </div>
      `;
  },
  onSelect: function(e, term, item){
    console.log(e);
     alert("Item mouse click ");
  }
});





