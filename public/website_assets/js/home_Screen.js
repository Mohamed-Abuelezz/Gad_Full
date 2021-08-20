 
 // Requstesd Section
 $(".dropdown-menu li a").click(function(){
 // $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
  $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
  console.log($(this).text())
});


 
 
 
 /// Teachers Section /////////////////////////////////////////////////////////////

 //search

 $('#search').autoComplete({

  minChars: 1,
  source: function(term, suggest){
    term = term.toLowerCase();
  var suggestions = [];

  profiles.forEach(function(profile,i){



    if (~(profile['display_name']).toLowerCase().indexOf(term)) suggestions.push({'profile':profile,'image':profiles_images[i]});
    suggest(suggestions);
  });

   
},
renderItem: function (item, search){

    return '<div class="autocomplete-suggestion" data-idprofile="'+item['profile']['id']+'" style="padding:8px;"><img src="'+item['image']+' "width=20 height=20 style="margin-right:8px;"> '+item['profile']['display_name']+'</div>';
},
onSelect: function(e, term, item){
  console.log(item.data('idprofile'))
   // alert(item.data('idProfile'));
}

 });






// Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: 30.033333, lng: 31.233334 };

  
  const listLocations = [];

  profiles.forEach(function(item) {
// console.log(item['display_name']);
    listLocations.push(
{lat: item['lat'],lng:item['lng'],name:item['display_name'],},

    );


});

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

var rates = '';

for($o = 0; $o < 5; $o++){
  if ($o < profiles_avg[i]){
    rates += '<span class="fas fa-star checked"></span>'
  }else{
    rates += '<span class="fas fa-star"></span>'
  }

}
    var infoContent=`<div class="mapInfoClick" style="margin-left:30px">
    <img src="${profiles_images[i]}" alt="">
    <p>${listLocations[i]['name'].toString()}</p>
    <div class="stars">
       ${rates}
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







