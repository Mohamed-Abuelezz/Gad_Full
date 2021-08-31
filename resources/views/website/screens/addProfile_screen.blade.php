<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Packages CSS -->
    <link href="{{ asset('website_assets/packages/bootstrap-5.0.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/packages/fontawesome-free-5.15.3-web/css/all.min.css') }}" rel="stylesheet">


    <!-- My CSS -->
    <link href="{{asset('website_assets/css/GLOBAL_Configs.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/css/GLOBAL_ELEMENTS.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/css/Custome_Components.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/css/editProfile_screen.css') }}" rel="stylesheet">



    <title>GAD</title>
  </head>

  <body  dir= "{{ App::isLocale('en') ?  'ltr':'rtl' }}"  lang="{{Config::get('app.locale') == 'ar' ?   'ar'   :  "en" }}" class="body">
      

<div class="page">



<!-- Start NavBar Section --------------------------------------->
@if (Auth::guest())

@include('website.custome_widgets.custome_nav_outside')

@else

@include('website.custome_widgets.custome_nav_Inside')

@endif
    
    <!-- End NavBar Section --------------------------------------->
        
    
    <!-- Start Form Section --------------------------------------->

<form action="{{URL::to('/addProfile')}}" method="POST" enctype="multipart/form-data">

@csrf

    <div class="formEditProfile wrapContent">


<ul>
    <li>

        <div id="profile-container">
            
        <image id="profileImage" src="http://lorempixel.com/100/100" />
     </div>
     <input id="imageUpload" type="file" 
            name="profile_photo" placeholder="Photo"  capture>
     </li>

     <li style="text-align: center;">Select  Cover</li>


</ul>

<ul>


    <li>
        
      <div class="myTextField">

        <div>
            <div class="field-container">
              <input class="field-input" id="inputid" name="display_name" type="text" placeholder=" ">
              <label class="field-placeholder" for="inputName">Name Of Profile</label>
            </div>
          </div>
          @error('display_name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>

    </li>
<br>
    <li>
   
      <div class="myTextArea">
        <div class="js-form" style="width: 100%;">
          <fieldset>
            <textarea id="textarea-1" class="js-character-count" maxlength="100" name="bio" aria-describedby="textarea-info-1" placeholder="Describe yourself here..."></textarea>
            <p id="textarea-info-1" class="field-text field-text--character-count js-field-text" aria-live="polite" >100 maximum characters</p>
          </fieldset>
        </div>
        @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    

          
    </li>
    <br>
    <li>
   
      <div class="myTextArea">
        <div class="js-form" style="width: 100%;">
          <fieldset>
            <textarea id="textarea-1" class="js-character-count" name="moreDetails" maxlength="255" aria-describedby="textarea-info-1" placeholder="Describe More About Ur Field..."></textarea>
            <p id="textarea-info-1" class="field-text field-text--character-count js-field-text" aria-live="polite" >255 maximum characters</p>
          </fieldset>
        </div>
        @error('moreDetails')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>
    

          
    </li>
    <br>
    <li>
      <div class="myTextField">
    
        <div>
            <div class="field-container">
              <input class="field-input" id="inputid" name="number" type="number"  placeholder=" ">
              <label class="field-placeholder" for="inputName">Phone Number</label>
            </div>
          </div>
          @error('number')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>
    
    </li>
    
    <br>


<li>
  <div class="myTextField">

    <div>
        <div class="field-container">
          <input class="field-input" id="inputid" name="address" type="text"  placeholder=" ">
          <label class="field-placeholder" for="inputName">Your Address</label>
        </div>
      </div>
      @error('address')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror

</div>

</li>
<br>

<li>
    
    <div class="teacher-map   tab-pane fade show active" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab"> 
        
        <label  class="form-label">Select Your Location On Map</label>
        <input type="hidden" id="input_lat" name="profile_lat">
        <input type="hidden" id="input_lng" name="profile_lng">
        
        <div class="wrapContent" id="map"></div>
    
    
        @error('profile_lat')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

    
    
    </div>

  

</li>
<br>



<li>
  <div class=" ">
      <label for="exampleFormControlTextarea1" class="form-label">Kind Person</label> 

@foreach ($subscribersType as $subscriberType)

<div class="form-check myRadioButton">
  <input class="form-check-input" type="radio" name="subscriberType" value='{{$subscriberType->id}}' id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    {{ Config::get('app.locale') == 'ar' ?  $subscriberType->title_ar : $subscriberType->title_en }}
  </label>
</div>

@endforeach



        
  </div>

</li>
<br>
<li>
    <div class="educationalStages_checksBoxs">

        <p > Educational Stages</p>
<div class="lables">

@foreach ($educationsStages as $educationsStage)

<div class="form-check myCheckBox">
  <input class="form-check-input educationsStage_checkbox" type="checkbox" name="educationsStage[]" value="{{$educationsStage->id}}" >
  <label class="form-check-label" for="educationsStage">
    {{ Config::get('app.locale') == 'ar' ?  $educationsStage->title_ar : $educationsStage->title_en }}
  </label>
</div>

@endforeach


  




</div>
       
          


    </div>
   
</li>
<br>


<li>
    <div class="specializedMaterials_checksBoxs checkboxs has-validation" >
        <p> Specialized materials </p>

       
        <div class="lables is-invalid" aria-describedby=" validationServerUsernameFeedback" required>
          <div class="form-check myCheckBox">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
  
          <div class="form-check myCheckBox">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
  
          <div class="form-check myCheckBox">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
          <div class="form-check myCheckBox">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
  
          <div class="form-check myCheckBox">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
  
          <div class="form-check myCheckBox">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
          <div class="form-check myCheckBox">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
  
          <div class="form-check myCheckBox">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
  
          <div class="form-check myCheckBox">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
          <div class="form-check myCheckBox">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
  
          <div class="form-check myCheckBox">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
  
          <div class="form-check myCheckBox">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
          <div class="form-check myCheckBox">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
  
          <div class="form-check myCheckBox">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
  
          <div class="form-check myCheckBox">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>

          <div class="form-check myCheckBox">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
  
          <div class="form-check myCheckBox">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
  
          <div class="form-check myCheckBox">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
        </div>
        

    

    </div>
    
</li>

 


<br>

<li>
    <div class="btnEdit">

        <input  class="btn" type="submit">

    </div>
</li>
</ul>




    </div>
  </form>

    <!-- End Form Section --------------------------------------->










<!-- Start Footer Section --------------------------------------->

@include('website.custome_widgets.footer')

<!-- End Footer Section --------------------------------------->



</div>




    <!-- packages js -->
    <script src="{{asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('website_assets/packages/jquery/jquery.js') }}"></script>
    <script src="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhwUPb_bGJzGj0Wnj89dcnU5NZQhGx9jY&callback=initMap&libraries=&v=weekly"
    async
  ></script>

    <!-- my js -->
    <script src="{{asset('website_assets/js/GLOBAL_Configs.js') }}"></script>
    <script src="{{asset('website_assets/js/GLOBAL_ELEMENTS.js') }}"></script>
    <script src="{{asset('website_assets/js/Custome_Components.js') }}"></script>
    <script src="{{asset('website_assets/js/addProfile_screen.js') }}"></script>

    <script>
      var domain =   "{!! url('/')  !!}";
     
     </script>

     
  </body>
</html>