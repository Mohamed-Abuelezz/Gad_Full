 
 // Requstesd Section
 $country_id='';
 $profileKind_id=''; 
 $educationStages_id=''; 
 $scientificArticle_id=''; 
 
 var isFilter = false
 /*
 Changes Divs
 */
 function changesDrops($isCountry,$isStage,$classDiv ,$classChangeTitle,$classChangeDiv,$responseKey,$searchParam) {


  $( '.'+$classDiv+" li a").click(function(){
  
  
    $.ajax({
      url: domain+"/home/dropFilters",
      type: "get",
      data: { [$searchParam] : $(this).attr("data-id") } ,
      success: function (response) {
  console.log(response);
  
  jQuery($classChangeDiv+' ul').html('');
  
  var content= ` 
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
${  $classChangeTitle}
  </button>
  
  <ul class="dropdown-menu ${$isStage  ? 'artical_ul' : 'stages_ul'}" aria-labelledby="dropdownMenuButton1">
  
  ${response[$responseKey]}
  
  </ul>
  
  `;


  
  $($classChangeDiv).html(content);

  
  if($isCountry){

    var content= ` 
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
   ${lang == 'ar'? 'المواد العلمية' : 'Scientific Article'}
    </button>
    
    <ul class="dropdown-menu artical_ul" aria-labelledby="dropdownMenuButton1">
    
    ${response['scientificArticles']}
    
    </ul>
    
    `;
  
    $('.scientificArticle-drop').html(content);
    //doRequest();


//////////////////////////////////////////////////////

$(".profile-ul li a").parents(".dropdown").find('.btn').html(lang == 'ar' ? 'نوع الصفحة الشخصية' :'Profile type');


  }

  changesDrops(false,true,'stages_ul' , lang == 'ar'? 'المواد العلمية' : 'Scientific Article' ,'.scientificArticle-drop','scientificArticles','educationstages_id');

  
  reClickEvent();
  doRequest();
      },
      error: function(jqXHR, textStatus, errorThrown) {
         console.log(textStatus, errorThrown);
      }
  });
  
  
  });
  

 }
 doRequest();

 changesDrops(true,false,'country-ul' , lang == 'ar' ?   'المراحل التعليمية' : 'Education Stages' ,'.Educationstages-drop','educationsStages','country_id');
 changesDrops(false,true,'stages_ul' , lang == 'ar' ? 'المواد العلمية'  : 'Scientific Article' ,'.scientificArticle-drop','scientificArticles','educationstages_id');


/*
Send Requests
*/

function doRequest(){

  
  $(".country-ul li a").click(function(){

    $country_id =  $(this).attr("data-id")
    $profileKind_id=''; 
    $educationStages_id=''; 
    $scientificArticle_id=''; 

    sendFilterRequest($country_id,$profileKind_id,$educationStages_id,$scientificArticle_id); 

  });

  $(".profile-ul li a").click(function(){

    $profileKind_id =  $(this).attr("data-id")


    sendFilterRequest($country_id,$profileKind_id,$educationStages_id,$scientificArticle_id);  
  });

  $(".stages_ul li a").click(function(){

    $educationStages_id =  $(this).attr("data-id");
   $scientificArticle_id=''; 


    sendFilterRequest($country_id,$profileKind_id,$educationStages_id,$scientificArticle_id);  
  });

  $(".artical_ul li a").click(function(){
    $scientificArticle_id =  $(this).attr("data-id")
    sendFilterRequest($country_id,$profileKind_id,$educationStages_id,$scientificArticle_id);  
  });


}

 
function sendFilterRequest($country_id,$profileKind_id,$educationStages_id,$scientificArticle_id){
  $.ajax({
    url: domain+"/home/searchFilters",
    type: "get",
    content:'html',
    data: {'country_id':$country_id,'profileKind_id':$profileKind_id,'educationStages_id':$educationStages_id,'scientificArticle_id':$scientificArticle_id} ,
    success: function (response) {

      $('.teacher-cards').html('');

      $('.teacher-cards').html(response['html']);

    console.log(response);

    profiles = response['map'];

     profiles_avg = response['map_avg'];


    $.getScript("https://maps.googleapis.com/maps/api/js?key=AIzaSyBhwUPb_bGJzGj0Wnj89dcnU5NZQhGx9jY&callback=initMap&libraries=&v=weekly", function(data, textStatus, jqxhr) {
    console.log(data); //data returned
    console.log(textStatus); //success
    console.log(jqxhr.status); //200
    console.log('Load was performed.');
    });

    isFilter = true;
},
    error: function(jqXHR, textStatus, errorThrown) {
      console.log(JSON.stringify(jqXHR));
       console.log(textStatus, errorThrown);
    }
});

}


 
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
{lat: item['lat'],lng:item['lng'],name:item['display_name'],id:item['id']},

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
    <a class="btn" href="${domain+'/profile/'+listLocations[i]['id']}">More</a>
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







