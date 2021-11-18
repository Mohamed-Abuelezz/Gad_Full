var country_id = advancedSearchVals['country_id'] != null ?  advancedSearchVals['country_id']   : null;
var profileType_id = advancedSearchVals['profileType_id'] != null ?  advancedSearchVals['profileType_id']   : null;
var field_id = advancedSearchVals['field_id'] != null ?  advancedSearchVals['field_id']   : null;
var specialties_id = advancedSearchVals['specialties_id'] != null ?  advancedSearchVals['specialties_id']   : null;

//iNITS fUNCTIONS WHEN OPEN

getInitFields();
getInitSpecialest();


/**** Profile Results Tap */

const tabs = document.querySelectorAll('.tab');

tabs.forEach(tab => {
    tab.addEventListener('click', event => {
        console.log(event.currentTarget); // show what element was clicked in the console
        console.log(event.currentTarget.dataset); // get .dataset Object key from HTML element 

        // Remove 'active' class style from previously selected tab
        document.querySelector('.tab.active') ?.classList.remove('active'); // optional chaining

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
var map;
const uluru = {
    lat: 30.033333,
    lng: 31.233334
};
var listLocations = [];

function initMap() {
    // The location of Uluru
    profiles_all.forEach((item) => {

        listLocations.push({
            lat: item['lat'],
            lng: item['lng'],
            img: url + '/storage/images/users_images/' + item['user']['image']
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
        var markers = new google.maps.Marker({
            position: listLocations[i],
            map: map,
            draggable: false,
            animation: google.maps.Animation.DROP,

            icon: {
                url: url + '/website_assets/assets/icons/Map-Marker-Ball-Azure-icon.png',
                scaledSize: new google.maps.Size(50, 50)

            }
        });

        marker.push(markers);


        google.maps.event.addListener(markers, 'click', (function (markers, o) {
            // var rates = [];
            // profiles_all[i]['profile_rates'].forEach((item) => {
            //     rates.push(item['rate']);
            // });
           // const avg = rates.reduce((a, c) => a + c, 5) / 5;

          //  console.log(avg);

            var stars = '';

            for (var s = 1; s <= 5; s++) {
                //profiles_all[i]['profileRates'].

                if (s < profiles_all[i]['myAvg']) {

                    stars += `<span class="fas fa-star checked"></span>`;

                    //    console.log('checked');

                } else {

                    stars += `<span class="fas fa-star "></span>`;
                    //  console.log('unchecked');

                }
            }

            console.log(stars);

            var infoContent = `
      <div class="mapInfoClick" style="">
      <img class="animate__animated animate__backInDown" src="${url+'/storage/images/users_images/'+ profiles_all[i]['user']['image']}" alt="">
      <p class="animate__animated animate__lightSpeedInRight" style="font-weight:bold">${profiles_all[i]['display_name']}</p>
      <p class="animate__animated animate__lightSpeedInRight">${ lang === 'ar' ? profiles_all[i]['profiles_type']['name_ar'] : profiles_all[i]['profiles_type']['name_en']}</p>
      <div class="stars  animate__animated animate__lightSpeedInLeft"> ` +


                stars

                +
                `  
          
      </div>
      <a class="btn-outline" href="#" style="margin:15px auto">${lang == 'ar' ? 'المزيد' : 'More'}</a>
    </div>
    
    `;
            return function () {
                infowindow.setContent(infoContent);

                infowindow.open(map, markers);

            }
        })(markers, i));
    }



}


function updateMarkers() {

    for (i = 0; i < marker.length; i++) {
        marker[i].setMap(null);
    }
    listLocations = [];
    profiles_all.forEach((item) => {

        listLocations.push({
            lat: item['lat'],
            lng: item['lng'],
            img: url + '/storage/images/users_images/' + item['user']['image']
        })

    });
    var infowindow = new google.maps.InfoWindow();

    for (i = 0; i < listLocations.length; i++) {

        // The marker, positioned at Uluru
        var markers = new google.maps.Marker({
            position: listLocations[i],
            map: map,
            draggable: false,
            animation: google.maps.Animation.DROP,

            icon: {
                url: url + '/website_assets/assets/icons/Map-Marker-Ball-Azure-icon.png',
                scaledSize: new google.maps.Size(50, 50)

            }
        });

        marker.push(markers);


        google.maps.event.addListener(markers, 'click', (function (markers, o) {
            // var rates = [];
            // profiles_all[i]['profile_rates'].forEach((item) => {
            //     console.log(item['rate']);
            //     rates.push(item['rate']);
            // });
            // const avg = rates.reduce((a, c) => a + c, 5) / 5;

     //       console.log(avg);

            var stars = '';

            for (var s = 1; s <= 5; s++) {
                //profiles_all[i]['profileRates'].

                if (s < profiles_all[i]['myAvg']) {

                    stars += `<span class="fas fa-star checked"></span>`;

                    //    console.log('checked');

                } else {

                    stars += `<span class="fas fa-star "></span>`;
                    //  console.log('unchecked');

                }
            }

            console.log(stars);

            var infoContent = `
  <div class="mapInfoClick" style="">
  <img class="animate__animated animate__backInDown" src="${url+'/storage/images/users_images/'+ profiles_all[i]['user']['image']}" alt="">
  <p class="animate__animated animate__lightSpeedInRight" style="font-weight:bold">${profiles_all[i]['display_name']}</p>
  <p class="animate__animated animate__lightSpeedInRight">${ lang === 'ar' ? profiles_all[i]['profiles_type']['name_ar'] : profiles_all[i]['profiles_type']['name_en']}</p>
  <div class="stars  animate__animated animate__lightSpeedInLeft"> ` +


                stars

                +
                `  
      
  </div>
  <a class="btn-outline" href="#" style="margin:15px auto">${lang == 'ar' ? 'المزيد' : 'More'}</a>
</div>

`;
            return function () {
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

    onStop: function (loading) {
        loading.overlay.fadeOut(3000);
    },
    message: 'ok',
    //theme: 'dark'
    overlay: $("#myLoading"),
    stoppable: false,
    start: false
});
//$('input[name="search"]').loading('false');


$('input[name="search"]').autoComplete({
    minChars: 1,
    menuClass: 'suggestItems',
    showNoSuggestionNotice: true,
    noSuggestionNotice: '<h1 style="color:red">No Items</h1>',
    source: function (term, suggest) {


        $('.loadBox').loading('start');


        var choices = [];
        term = term.toLowerCase();
        var matches = [];
        ////////////////////////////////////////

        var request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url + "/search",
            type: "POST",
            data: {
                key: term
            },
            dataType: "json"
        });

        request.done(function (msg) {
            console.log(msg['data']);
            //alert(msg);

            msg['data'].forEach((item) => {

                choices.push({
                    display_name: item['display_name'],
                    profiles_type: lang == 'ar' ? item['profiles_type']['name_ar'] : item['profiles_type']['name_en'],
                    img: url + '/storage/images/users_images/' + item['user']['image'],
                    country: lang == 'ar' ? item['user']['country']['name_ar'] : item['user']['country']['name_en']
                })

            });

            for (i = 0; i < choices.length; i++)
                if (~choices[i]['display_name'].toLowerCase().indexOf(term)) matches.push(choices[i]);

            $('.loadBox').loading('stop');

            suggest(matches);

        });

        request.fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus + jqXHR);

            $('.loadBox').loading('stop');
            //  suggest(matches);

        });




        /////////////////////////////////////////

    },
    renderItem: function (item, search) {

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
    onSelect: function (e, term, item) {
        console.log(e);
        alert("Item mouse click ");
    }
});

/////////////////////////////////////////////////




//$('#ProfileType').loading('start',);


$(".country-btn").click(function () {

    $('#spec').remove();
    field_id = null;
    specialties_id = null;


    country_id = $(this).data('id');

    initNewLoading('ProfileFields');
    initNewLoading('specialties');


    $('#ProfileFields').loading('start');
    $('#specialties').loading('start');


    var request = $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: url + "/getFields",
        type: "GET",
        data: {
            'profileType_id': profileType_id,
            'country_id': country_id,
            'key': 'country'
        },
        dataType: "json",
        cache: false
    });

    request.done(function (msg) {
        console.log(msg);
        const element = document.getElementById("ProfileFields");
        console.log(element);

        if (element != null) {

            var btns = '';

            msg['data'].forEach(function (item) {

                btns += lang == 'ar' ?

                    `<li><button class="dropdown-item ProfileFields-btn" data-id="${item['id']}" type="button">${item['name_ar']} [${item['country']['name_ar']}]</button></li>` :
                    ` <li><button class="dropdown-item ProfileFields-btn" data-id="${item['id']}" type="button">${item['name_en']} [${item['country']['name_en']}]</button></li>`;

            });

            $("#btns-menu").html(btns);
            $("#ProfileFields").html(lang == 'ar' ? 'المجال' : 'Fields');
            // DropDown 
            $(".dropdown-menu li").click(function () {
                $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
                $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
            });

            handleFieldClick();

            $('#ProfileFields').loading('stop');
            $('#specialties').loading('stop');





        }

    });

    request.fail(function (jqXHR, textStatus) {
        console.log(jqXHR);

        showAlert(jqXHR['statusText'], 'error');



    });



});

$(".profileType-btn").click(function () {
    $('#spec').remove();
    field_id = null;
    specialties_id= null;

    profileType_id = $(this).data('id');
    initNewLoading('ProfileFields');


    $('#ProfileFields').loading('start');


    var request = $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: url + "/getFields",
        type: "GET",
        data: {
            'profileType_id': profileType_id,
            'country_id': country_id,
            'key': 'profileType'
        },
        dataType: "json",
        cache: false
    });

    request.done(function (msg) {
        console.log(msg);
        const element = document.getElementById("ProfileFields");
        console.log(element);

        if (element == null) {
            var btns = '';

            msg['data'].forEach(function (item) {

                btns += lang == 'ar' ?

                    `<li><button class="dropdown-item ProfileFields-btn" data-id="${item['id']}" type="button">${item['name_ar']} [${item['country']['name_ar']}]</button></li>` :
                    ` <li><button class="dropdown-item ProfileFields-btn" data-id="${item['id']}" type="button">${item['name_en']} [${item['country']['name_en']}]</button></li>`;

            });



            var new_element = `  
 <div class="dropdown">
<button class="btn btn-outline  dropdown-toggle ProfileFields" type="button" id="ProfileFields" data-bs-toggle="dropdown" aria-expanded="false">
${ lang == 'ar' ? 'المجال'   : 'Fields' }
  
</button>
<ul class="dropdown-menu " id="btns-menu" style="z-index: 9999;" aria-labelledby="ProfileFields">
      


${btns}

</ul>
</div>
`;


            $("#search-drops").append(new_element);

            // DropDown 
            $(".dropdown-menu li").click(function () {
                $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
                $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
            });


            handleFieldClick();


        } else {
console.log('start ooookkkk Fileds >>>>');
            var btns = '';

            msg['data'].forEach(function (item) {

                btns += lang == 'ar' ?

                    `<li><button class="dropdown-item ProfileFields-btn" data-id="${item['id']}" type="button">${item['name_ar']} [${item['country']['name_ar']}]</button></li>` :
                    ` <li><button class="dropdown-item ProfileFields-btn" data-id="${item['id']}" type="button">${item['name_en']} [${item['country']['name_en']}]</button></li>`;

            });

            $("#btns-menu").html(btns);
            $("#ProfileFields").html(lang == 'ar' ? 'المجال' : 'Fields');
            // DropDown 
            $(".dropdown-menu li").click(function () {
                $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
                $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
            });
            ////////////////////////////////////////////////
            handleFieldClick()
            ///////////////////////////////////////////////
            $('#ProfileFields').loading('stop');








        }



    });

    request.fail(function (jqXHR, textStatus) {
        console.log(jqXHR);

        showAlert(jqXHR['statusText'], 'error');



    });







});



$("#advSearch-btn").click(function () {
    // var country_id;
    // var profileType_id;
    // var field_id;
    // var specialties_id;

    initNewLoading('advSearch-btn');
    initNewLoading('map');
 //   initNewLoading('two');
    $('#advSearch-btn').loading('start');
    $('#map').loading('start');
  //  $('#two').loading('start');

    console.log('field id is >>>.'+field_id);

    var request = $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: url + "/advancedSearch",
        type: "POST",
        data: {
            'country_id': country_id,
            'profileType_id': profileType_id,
            'field_id': field_id,
            'specialties_id': specialties_id,
        },
        cache:false,
        dataType: "json"
    });

    request.done(function (msg) {
        console.log(msg);
         profiles_all = msg['data']['profiles_all'];
         console.log(profiles_all);
        updateMarkers();
       $('#advSearch-btn').loading('stop');
       $('#map').loading('stop');
      // $('#two').loading('stop');

      $('#two').html(msg['data']['views'])






    
    
    });

    request.fail(function (jqXHR, textStatus) {
       console.log(jqXHR['responseJSON']['message']);
       showAlert(jqXHR['statusText'], 'error');

        $('.loadBox').loading('stop');


    });




});


//////////////////////////////////////////////////////
$(".order-btn").click(function () { 

console.log($(this).data('key'));

initNewLoading('OrderBy-drop');
$('#OrderBy-drop').loading('start');

var lat = null;
var lng = null;

if($(this).data('key') === 'nRating'){
    console.log('ok right');
if (navigator.geolocation) {
   navigator.geolocation.getCurrentPosition(function(position){

    lat = position.coords.latitude;
    lng = position.coords.longitude;
    console.log(lat);
    console.log(lng);

    var request = $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: url + "/orderBy",
        type: "POST",
        data: {
            'country_id': country_id,
            'profileType_id': profileType_id,
            'field_id': field_id,
            'specialties_id': specialties_id,
    
            'lat':lat,
            'lng':lng,
            'key':'nRating' 
        },
        cache:false,
        dataType: "json"
    });
    
    request.done(function (msg) {
    
        console.log(msg);
      $('#two').html(msg['data']['views'])
    
      $('#OrderBy-drop').loading('stop');
    
    
    
    
    });
    
    request.fail(function (jqXHR, textStatus) {
       console.log(jqXHR['responseJSON']['message']);
       showAlert(jqXHR['statusText'], 'error');
    
        $('#OrderBy-drop').loading('stop');
    
    
    });
    
   });
 //   console.log(lat);


  } else {
   // x.innerHTML = "Geolocation is not supported by this browser.";
   showAlert("Geolocation is not supported by this browser.", 'error');

  }

}else{
var request = $.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: url + "/orderBy",
    type: "POST",
    data: {
        'country_id': country_id,
        'profileType_id': profileType_id,
        'field_id': field_id,
        'specialties_id': specialties_id,

        'key':$(this).data('key') 
    },
    cache:false,
    dataType: "json"
});

request.done(function (msg) {
//     console.log(msg);
//      profiles_all = msg['data']['profiles_all'];
//      console.log(profiles_all);
//     updateMarkers();
//    $('#advSearch-btn').loading('stop');
//    $('#map').loading('stop');
//   // $('#two').loading('stop');

  $('#two').html(msg['data']['views'])




  $('#OrderBy-drop').loading('stop');




});

request.fail(function (jqXHR, textStatus) {
   console.log(jqXHR['responseJSON']['message']);
   showAlert(jqXHR['statusText'], 'error');

    $('#OrderBy-drop').loading('stop');


});

}








});

/*

Helpers Methods

*/


function initNewLoading($idElement) {

    var loadElement_id = (Math.random() + 1).toString(36).substring(7);


    var element = `<div id='${loadElement_id}' style="display:none;">

  <div class="load-wrapp">
    <div class="load-9">
      <div class="spinner">
        <div class="bubble-1"></div>
        <div class="bubble-2"></div>
      </div>
    </div>
  </div>
</div>`;

    $(document.body).append(element);

        $('#' + $idElement).loading({

            onStop: function (loading) {
                loading.overlay.fadeOut(3000);
            },
            //message:'ok',
            //theme: 'dark'
            overlay: $("#" + loadElement_id) ,
            stoppable: false,
            start: false
        });
    


    return $idElement;
}


function showAlert($msg, $type) {

    $(".toast-body").text($msg);
    $(".toast-body").addClass($type == 'error' ? "red" : 'green');

    var toastElList = [].slice.call(document.querySelectorAll('.toast'))
    var toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl, {})
    });
    var myToastEl = document.getElementById('myToastEl');
    var myToast = bootstrap.Toast.getInstance(myToastEl); // Returns a Bootstrap toast instance
    myToast.show();


}







function handleFieldClick() {
    $(".ProfileFields-btn").click(function () {
        console.log('field is click');
        initNewLoading('Specialties');
        $('#Specialties').loading('start');

        console.log('ooookkkkkk mohamed 11111');
        field_id = $(this).data('id');
        console.log(field_id);

        var request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url + "/getSpecials",
            type: "GET",
            data: {
                'field_id': field_id,
                'key': 'specials'
            },
            dataType: "json",
            cache: false
        });

        request.done(function (msg) {
            console.log(msg);
            const element = document.getElementById("Specialties");

            if (element == null) {
                var btns = '';

                msg['data'].forEach(function (item) {

                    btns += lang == 'ar' ?

                        `<li><button class="dropdown-item specialties-btn" data-id="${item['id']}" type="button">${item['name_ar']} </button></li>` :
                        ` <li><button class="dropdown-item specialties-btn" data-id="${item['id']}" type="button">${item['name_en']} </button></li>`;

                });




                var new_element = `  
<div class="dropdown" id='spec'>
<button class="btn btn-outline  dropdown-toggle specialties" type="button" id="Specialties" data-bs-toggle="dropdown" aria-expanded="false">
${lang == 'ar' ? 'التخصص'   : 'Specialties' }

</button>
<ul class="dropdown-menu " id="btns-menu2" style="z-index: 9999;" aria-labelledby="Specialties">



${btns}

</ul>
</div>
`;


                $("#search-drops").append(new_element);


                // DropDown 
                $(".dropdown-menu li").click(function () {
                    $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
                    $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
                });

                $(".specialties-btn").click(function () {
                    console.log('ooookkkkkk mohamed');
                    specialties_id = $(this).data('id');
                });



            } else {

                var btns = '';

                msg['data'].forEach(function (item) {

                    btns += lang == 'ar' ?

                        `<li><button class="dropdown-item specialties-btn" data-id="${item['id']}" type="button">${item['name_ar']} </button></li>` :
                        ` <li><button class="dropdown-item specialties-btn" data-id="${item['id']}" type="button">${item['name_en']} </button></li>`;

                });

                $("#btns-menu2").html(btns);
                $("#Specialties").html(lang == 'ar' ? 'التخصص' : 'Specialties');
                // DropDown 
                $(".dropdown-menu li").click(function () {
                    $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
                    $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
                });

                // DropDown 
                $(".dropdown-menu li").click(function () {
                    $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
                    $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
                });

                $(".specialties-btn").click(function () {
                    console.log('ooookkkkkk mohamed');
                    specialties_id = $(this).data('id');
                });


                $('#Specialties').loading('stop');


            }

        });

        request.fail(function (jqXHR, textStatus) {
            console.log(jqXHR);

            showAlert(jqXHR['statusText'], 'error');



        });








    });

}





function getInitFields(){

    if(advancedSearchVals['profileType_id'] != null){
        // field_id = null;
        // specialties_id= null;
    
        profileType_id =advancedSearchVals['profileType_id'];
        country_id = advancedSearchVals['country_id'];
     //   initNewLoading('ProfileFields');
    
    
        $('#ProfileFields').loading('start');
    
    
        var request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url + "/getFields",
            type: "GET",
            data: {
                'profileType_id': profileType_id,
                'country_id': country_id,
                'key':country_id != null ? 'country' : 'profileType'
            },
            dataType: "json",
            cache: false
        });
    
        request.done(function (msg) {
            console.log(msg);
            const element = document.getElementById("ProfileFields");
            console.log(element);
    
            if (element == null) {
                var btns = '';
    
                msg['data'].forEach(function (item) {
    
                    btns += lang == 'ar' ?
    
                        `<li><button class="dropdown-item ProfileFields-btn" data-id="${item['id']}" type="button">${item['name_ar']} [${item['country']['name_ar']}]</button></li>` :
                        ` <li><button class="dropdown-item ProfileFields-btn" data-id="${item['id']}" type="button">${item['name_en']} [${item['country']['name_en']}]</button></li>`;
    
                });
    
    //const advancedFieldVal= msg['data'].find(object => object.id == advancedSearchVals['field_id'])['name_ar'];
    //console.log(advancedFieldVal);
                var new_element = `  
     <div class="dropdown">
    <button class="btn btn-outline  dropdown-toggle ProfileFields" type="button" id="ProfileFields" data-bs-toggle="dropdown" aria-expanded="false">
    ${ advancedSearchVals['field_id'] != null  ? lang == 'ar' ? msg['data'].find(object => object.id == advancedSearchVals['field_id'])['name_ar'] : msg['data'].find(object => object.id == advancedSearchVals['field_id'])['name_en']  :   lang == 'ar' ? 'المجال'   : 'Fields' } [${ advancedSearchVals['field_id'] != null  ? lang == 'ar' ? msg['data'].find(object => object.id == advancedSearchVals['field_id'])['country']['name_ar'] : msg['data'].find(object => object.id == advancedSearchVals['field_id'])['country']['name_en'] : '' }]
      
    </button>
    <ul class="dropdown-menu " id="btns-menu" style="z-index: 9999;" aria-labelledby="ProfileFields">
          
    
    
    ${btns}
    
    </ul>
    </div>
    `;
    
    console.log(msg['data'].find(object => object.id == advancedSearchVals['field_id']));
    console.log(msg['data'].find(object => object.id == 1));
    
                $("#search-drops").append(new_element);
    
                // DropDown 
                $(".dropdown-menu li").click(function () {
                    $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
                    $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
                });
    
    
                handleFieldClick();
    
    
            } 
    
    
        
    
    
    
    
    
            
    
    
    
        });
    
        request.fail(function (jqXHR, textStatus) {
            console.log(jqXHR);
    
            showAlert(jqXHR['statusText'], 'error');
    
    
    
        });
    
    }
    
    
    
    
    
    }

    function getInitSpecialest(){

        if(advancedSearchVals['specialties_id'] != null || advancedSearchVals['field_id'] != null){

           // field_id = $(this).data('id');
            console.log('>>>>>> '+advancedSearchVals['field_id']);
    
            var request = $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url + "/getSpecials",
                type: "GET",
                data: {
                    'field_id': advancedSearchVals['field_id'],
                    'key': 'specials'
                },
                dataType: "json",
                cache: false
            });
    
            request.done(function (msg) {
                console.log(msg);
                const element = document.getElementById("Specialties");
    
                    var btns = '';
    
                    msg['data'].forEach(function (item) {
    
                        btns += lang == 'ar' ?
    
                            `<li><button class="dropdown-item specialties-btn" data-id="${item['id']}" type="button">${item['name_ar']} </button></li>` :
                            ` <li><button class="dropdown-item specialties-btn" data-id="${item['id']}" type="button">${item['name_en']} </button></li>`;
    
                    });
    
    
    
    
                    var new_element = `  
    <div class="dropdown" id='spec'>
    <button class="btn btn-outline  dropdown-toggle specialties" type="button" id="Specialties" data-bs-toggle="dropdown" aria-expanded="false">

    ${ advancedSearchVals['specialties_id'] != null  ? lang == 'ar' ? msg['data'].find(object => object.id == advancedSearchVals['specialties_id'])['name_ar'] : msg['data'].find(object => object.id == advancedSearchVals['specialties_id'])['name_en']  :   lang == 'ar' ? 'التخصص'   : 'Specialties' } 
    
    </button>
    <ul class="dropdown-menu " id="btns-menu2" style="z-index: 9999;" aria-labelledby="Specialties">
    
    
    
    ${btns}
    
    </ul>
    </div>
    `;
    
    
                    $("#search-drops").append(new_element);
    
    
                    // DropDown 
                    $(".dropdown-menu li").click(function () {
                        $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
                        $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
                    });
    
                    $(".specialties-btn").click(function () {
                        console.log('ooookkkkkk mohamed');
                        specialties_id = $(this).data('id');
                    });
    
    
                });
    


    request.fail(function (jqXHR, textStatus) {
            console.log(jqXHR);

            showAlert(jqXHR['statusText'], 'error');



        }); 

        
        }
        
        
        
        
        
        }