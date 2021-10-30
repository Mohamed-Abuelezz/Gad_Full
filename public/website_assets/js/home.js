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
var marker = [];
var map ;
const uluru = { lat: 30.033333, lng: 31.233334 };
var listLocations =[];

function initMap() {
    // The location of Uluru
    profiles_all.forEach((item)=>{

      listLocations.push({
        lat:item['lat'],
        lng:item['lng'],
        img: url + '/storage/images/users_images/'  + item['user']['image']
      })

    });
  
  
  console.log(listLocations);
    // The map, centered at Uluru
    map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: uluru,
    });
    var infowindow = new google.maps.InfoWindow();
  
    var i;
  
    for (i = 0; i < listLocations.length; i++) {
  
        // The marker, positioned at Uluru
 var   markers = new google.maps.Marker({
      position: listLocations[i],
      map: map,
      draggable: false,
      animation: google.maps.Animation.DROP,
  
      icon: {
        url:url+'/website_assets/assets/icons/Map-Marker-Ball-Azure-icon.png',
        scaledSize: new google.maps.Size(50, 50)
  
      }
    });
  
    marker.push(markers);

  
    google.maps.event.addListener(markers, 'click', (function(markers, o) {
      var rates=[];
      profiles_all[i]['profile_rates'].forEach((item)=>{
        rates.push(item['rate']);
      });
      const avg = rates.reduce((a,c) => a + c, 5) / 5;

     console.log(avg);

     var stars = '';

      for (var s = 1;  s <= 5; s++){
        //profiles_all[i]['profileRates'].

        if (s < avg){

          stars +=`<span class="fas fa-star checked"></span>`;

      //    console.log('checked');

        }else{
          
          stars +=`<span class="fas fa-star "></span>`;
        //  console.log('unchecked');

        }
      }

      console.log(stars);

      var infoContent=`
      <div class="mapInfoClick" style="">
      <img class="animate__animated animate__backInDown" src="${url+'/storage/images/users_images/'+ profiles_all[i]['user']['image']}" alt="">
      <p class="animate__animated animate__lightSpeedInRight" style="font-weight:bold">${profiles_all[i]['display_name']}</p>
      <p class="animate__animated animate__lightSpeedInRight">${ lang === 'ar' ? profiles_all[i]['profiles_type']['name_ar'] : profiles_all[i]['profiles_type']['name_en']}</p>
      <div class="stars  animate__animated animate__lightSpeedInLeft"> ` +
  

      stars
   
       +`  
          
      </div>
      <a class="btn-outline" href="#" style="margin:15px auto">${lang == 'ar' ? 'المزيد' : 'More'}</a>
    </div>
    
    `;
      return function() {
        infowindow.setContent(infoContent);

        infowindow.open(map, markers);

      }
    })(markers, i));
    }



}  


function updateMarkers(){
  for(i=0; i<marker.length; i++){
    marker[i].setMap(null);
  }
  listLocations=[];
  profiles_all.forEach((item)=>{

    listLocations.push({
      lat:item['lat'],
      lng:item['lng'],
      img: url + '/storage/images/users_images/'  + item['user']['image']
    })

  });
  var infowindow = new google.maps.InfoWindow();

  for (i = 0; i < listLocations.length; i++) {
  
    // The marker, positioned at Uluru
var   markers = new google.maps.Marker({
  position: listLocations[i],
  map: map,
  draggable: false,
  animation: google.maps.Animation.DROP,

  icon: {
    url:url+'/website_assets/assets/icons/Map-Marker-Ball-Azure-icon.png',
    scaledSize: new google.maps.Size(50, 50)

  }
});

marker.push(markers);


google.maps.event.addListener(markers, 'click', (function(markers, o) {
  var rates=[];
  profiles_all[i]['profile_rates'].forEach((item)=>{
    console.log(item['rate']);
    rates.push(item['rate']);
  });
  const avg = rates.reduce((a,c) => a + c, 5) / 5;

 console.log(avg);

 var stars = '';

  for (var s = 1;  s <= 5; s++){
    //profiles_all[i]['profileRates'].

    if (s < avg){

      stars +=`<span class="fas fa-star checked"></span>`;

  //    console.log('checked');

    }else{
      
      stars +=`<span class="fas fa-star "></span>`;
    //  console.log('unchecked');

    }
  }

  console.log(stars);

  var infoContent=`
  <div class="mapInfoClick" style="">
  <img class="animate__animated animate__backInDown" src="${url+'/storage/images/users_images/'+ profiles_all[i]['user']['image']}" alt="">
  <p class="animate__animated animate__lightSpeedInRight" style="font-weight:bold">${profiles_all[i]['display_name']}</p>
  <p class="animate__animated animate__lightSpeedInRight">${ lang === 'ar' ? profiles_all[i]['profiles_type']['name_ar'] : profiles_all[i]['profiles_type']['name_en']}</p>
  <div class="stars  animate__animated animate__lightSpeedInLeft"> ` +


  stars

   +`  
      
  </div>
  <a class="btn-outline" href="#" style="margin:15px auto">${lang == 'ar' ? 'المزيد' : 'More'}</a>
</div>

`;
  return function() {
    infowindow.setContent(infoContent);

    infowindow.open(map, markers);

  }
})(markers, i));
}





}

// setInterval(function() {

//   //$('body').loading('stop');
//   updateMarkers()
//   },5000);
/////////////////////////////////////////////////

$('.loadBox').loading({

  onStop: function(loading) {
    loading.overlay.fadeOut(3000);
  },
message:'ok',
//theme: 'dark'
overlay: $("#myLoading"),
stoppable:false,
start:false
});
//$('input[name="search"]').loading('false');


$('input[name="search"]').autoComplete({
  minChars: 1,
  menuClass:'suggestItems',
  showNoSuggestionNotice:true,
  noSuggestionNotice:'<h1 style="color:red">No Items</h1>',
  source: function(term, suggest){


   $('.loadBox').loading('start');


    var choices =[];
      term = term.toLowerCase();
      var matches = [];
////////////////////////////////////////

var request = $.ajax({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  url: url+"/search",
  type: "POST",
  data: {key : term},
  dataType: "json"
});

request.done(function(msg) {
console.log(msg['data']);
//alert(msg);

msg['data'].forEach((item)=>{

      choices.push({
        display_name:item['display_name'],
        profiles_type:lang == 'ar' ? item['profiles_type']['name_ar'] : item['profiles_type']['name_en'],
        img: url + '/storage/images/users_images/'  + item['user']['image'],
        country:lang == 'ar' ?  item['user']['country']['name_ar'] :  item['user']['country']['name_en']
      })

    });

      for (i=0; i<choices.length; i++)
          if (~choices[i]['display_name'].toLowerCase().indexOf(term)) matches.push(choices[i]);

          $('.loadBox').loading('stop');

            suggest(matches);

});

request.fail(function(jqXHR, textStatus) {
  alert( "Request failed: " + textStatus + jqXHR );

    $('.loadBox').loading('stop');
  //  suggest(matches);

});




/////////////////////////////////////////

  },
  renderItem: function (item, search){

      search = search.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
      var re = new RegExp("(" + search.split(' ').join('|') + ")", "gi");


      return `<div class="item autocomplete-suggestion">
      <img src="${item['img']}"/>
      <div class="details">
        <p class="text-medium">${item['display_name']}</p>
        <p class="text-small">${item['profiles_type']}</p>
        <p class="text-small" style='font-size:10px'>${item['country']}</p>
      </div>
      </div>
      `;
  },
  onSelect: function(e, term, item){
    console.log(e);
     alert("Item mouse click ");
  }
});

/////////////////////////////////////////////////
var country_id;
var profileType_id;
var specialties_id;
var subjects_id;


$('#ProfileType').loading({
  onStart: function(event,loadingObj) { 
 // event.stopPropagation();

   },

  onStop: function(loading) {
    loading.overlay.fadeOut(0);
   loading.event
   console.log(loading.event);
  },
overlay: $("#myLoading"),
message:'ok',
start:false
});




$(".country-btn").click(function(){
  country_id = $(this).data('id');

  $('#ProfileType').loading('start',);

  
  var request = $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: url+"/getOthersDepends",
    type: "GET",
    data: {'key' : 'country'},
    dataType: "json"
  });
  
  request.done(function(msg) {
  console.log(msg['data']);
  
  $('#ProfileType').loading('stop',);
  
  });
  
  request.fail(function(jqXHR, textStatus) {
    alert( "Request failed: " + textStatus + jqXHR );
  
    $('#ProfileType').loading('stop',);
  
  });



});

$(".profileType-btn").click(function(){
  profileType_id = $(this).data('id');
});

$(".specialties-btn").click(function(){

  specialties_id = $(this).data('id');
});

$(".subjects-btn").click(function(){

  subjects_id = $(this).data('id');
});


$("#advSearch-btn").click(function(){


  var request = $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: url+"/search",
    type: "POST",
    data: {key : term},
    dataType: "json"
  });
  
  request.done(function(msg) {
  console.log(msg['data']);
  //alert(msg);
  
  msg['data'].forEach((item)=>{
  
        choices.push({
          display_name:item['display_name'],
          profiles_type:lang == 'ar' ? item['profiles_type']['name_ar'] : item['profiles_type']['name_en'],
          img: url + '/storage/images/users_images/'  + item['user']['image'],
          country:lang == 'ar' ?  item['user']['country']['name_ar'] :  item['user']['country']['name_en']
        })
  
      });
  
        for (i=0; i<choices.length; i++)
            if (~choices[i]['display_name'].toLowerCase().indexOf(term)) matches.push(choices[i]);
  
            $('.loadBox').loading('stop');
  
              suggest(matches);
  
  });
  
  request.fail(function(jqXHR, textStatus) {
    alert( "Request failed: " + textStatus + jqXHR );
  
      $('.loadBox').loading('stop');
    //  suggest(matches);
  
  });
  



});
