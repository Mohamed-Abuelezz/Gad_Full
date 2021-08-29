$('.float').click(function() {
    $(this).toggleClass('open');
  });



// Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: 30.033333, lng: 31.233334 };

  
  const listLocations = [];


    listLocations.push(
{lat: profiles['lat'],lng:profiles['lng'],name:profiles['display_name'],},

    );



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




//or for example
var options = {
  max_value: 5,
  step_size: 1,
  initial_value: 0,
  ajax_method: 'POST',
  url: domain+'/profile/addRate',
  additional_data: {
  '_token':$('meta[name="csrf-token"]').attr('content'),
  'user_id':  user_id,
  'profile_id': profiles['id'],
  },

}
if(user_id != 1000000000000){
$(".rating").rate(options);
}

var toastElList = [].slice.call(document.querySelectorAll('.toast'))
var toastList = toastElList.map(function (toastEl) {
  return new bootstrap.Toast(toastEl, {
    autohide : true,
    delay : 2000
  })
})

var myToastEl = document.getElementById('myToastEl')
var myToast = bootstrap.Toast.getInstance(myToastEl) // Returns a Bootstrap toast instance

$(".rating").on("updateSuccess", function(ev, data){
  console.log("This is a custom success event");
  console.log(data);
  myToast.show()

});

$(".rating").on("updateError", function(ev, jxhr, msg, err){
  console.log("This is a custom error event");
  console.log(jxhr)
});


