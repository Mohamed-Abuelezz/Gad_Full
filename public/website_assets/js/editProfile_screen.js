var locale = document.getElementsByTagName("html")[0].getAttribute("lang");

/////////////////////////////////// EditForm
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
  
  
  
        // The marker, positioned at Uluru
     marker = new google.maps.Marker({
      position: {lat: profiles['lat'],lng: profiles['lng']},
      map: map,
      icon: {
        url:'https://freepngimg.com/thumb/web_design/24914-1-pushpin.png',
        scaledSize: new google.maps.Size(50, 50)
  
      }
    });
    
    gmarkers.push(marker);



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

 //////////////////////////////////////////////////////////

 //$('#parentArticals > p').hide();
var clickFirstTime = false;

$(".educationsStage_checkbox").click(function(e) {

  var stage_id=  $(this).attr('value');
  var stage_title=  $(this).attr('data-title');

console.log(stage_title);

  if($(this).is(":checked")){

  $.ajax({
    url: domain+"/getArticalsOfStage",
    type: "GET",
    data: {"stage_id" :  $(this).attr('value')} ,
    cache: false,
    success: function (response) {
console.log(response);





  response.forEach(function(item) {


        
        var content = `
        <div class="lables is-invalid " aria-describedby="validationServerUsernameFeedback"  data-stageid="`+stage_id+`"  required>
          <div class="form-check myCheckBox">
            <input class="form-check-input " name="articals[]" type="checkbox"  value="${item['id']}" id="scientificArtical_${item['id']}">
            <label class="form-check-label" for="scientificArtical_${item['id']}">
            ${locale == 'ar' ?  item['title_ar'] :  item['title_en']} : [${stage_title} ]
            </label>
          </div>
        `;
        // do something with `item`

        $('#scientificArticalDiv').append(content); 







    });
    
    

    console.log(response);
   
    console.log($("#scientificArticalDiv").children().length);

    if($("#scientificArticalDiv").children().length == 0){
     
      $('#parentArticals p').hide();
    
    
    }else{
      $('#parentArticals p').show();
    
    }


    },
    error: function(jqXHR, textStatus, errorThrown) {

       console.log(textStatus, errorThrown,jqXHR,);

    }
});


  }else{


   console.log("pefore remove stageid is >>>> "+$(this).attr('value'));

   $(`div[data-stageid=`+$(this).attr('value')+`]`).remove() ;


   console.log($("#scientificArticalDiv").children().length);

   if($("#scientificArticalDiv").children().length == 0){
    
     $('#parentArticals p').hide();
   
   
   }else{
     $('#parentArticals p').show();
   
   }


  }



});

 
  