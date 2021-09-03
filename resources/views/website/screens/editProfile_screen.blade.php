<!doctype html>
<html lang="{{ config('app.locale') }}">
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

<form action="{{URL::to('/editProfile')}}" method="POST" enctype="multipart/form-data">

@csrf

    <div class="formEditProfile wrapContent">


<ul>
    <li>

        <div id="profile-container">
            
        <image id="profileImage" src="{{asset('storage/CoverProfiles/'.$profiles->cover_image) }}" />
     </div>
     <input id="imageUpload" type="file" 
            name="profile_photo" placeholder="Photo"  capture>
     </li>

     <li style="text-align: center;">{{ Config::get('app.locale') == 'ar' ?  'اختيار صورة الغلاف'  : 'Select  Cover'  }}</li>


</ul>

<ul>


    <li>
        
      <div class="myTextField">

        <div>
            <div class="field-container">
              <input class="field-input" id="inputid" name="display_name" value="{{$profiles->display_name}}" type="text" placeholder=" " autocomplete="off" >
              <label class="field-placeholder" for="inputName">{{ Config::get('app.locale') == 'ar' ?  'اسم البروفايل' : 'Name Of Profile' }}</label>
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
            <textarea id="textarea-1" class="js-character-count" maxlength="100" name="bio"  aria-describedby="textarea-info-1" autocomplete="off"  placeholder="{{ Config::get('app.locale') == 'ar' ? 'اضف نبذه شخصية' : 'Add Your Bio' }}">{{$profiles->person_bio}}</textarea>
            <p id="textarea-info-1" class="field-text field-text--character-count js-field-text" aria-live="polite" > {{ Config::get('app.locale') == 'ar' ? '100 حرف كحد أقصى' : '100 maximum characters' }} </p>
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
            <textarea id="textarea-1" class="js-character-count" name="moreDetails"  autocomplete="off"  maxlength="400" aria-describedby="textarea-info-1" placeholder="{{ Config::get('app.locale') == 'ar' ? 'اضف تفاصيل اكثر عن مجالك' : 'Add more details about your field' }}">{{$profiles->education_bio}}</textarea>
            <p id="textarea-info-1" class="field-text field-text--character-count js-field-text" aria-live="polite" >{{ Config::get('app.locale') == 'ar' ? '400 حرف كحد أقصى' : '400 maximum characters' }}</p>
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
              <input class="field-input" id="inputid" autocomplete="off"  name="number" value="{{$profiles->mobile_number}}" type="number"  placeholder=" ">
              <label class="field-placeholder" for="inputName">{{ Config::get('app.locale') == 'ar' ?  'رقم الهاتف' : 'Phone Number'  }}</label>
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
          <input class="field-input" id="inputid" autocomplete="off"  name="address" value="{{$profiles->address}}" type="text"  placeholder=" ">
          <label class="field-placeholder" for="inputName">{{ Config::get('app.locale') == 'ar' ?  'عنوانك' : 'Your Address' }}</label>
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
        
        <label  class="form-label">{{ Config::get('app.locale') == 'ar' ? 'تحديد موقعك علي الخريطه' : 'Select Your Location On Map'  }}</label>
        <input type="hidden" id="input_lat" value="{{$profiles->lat}}" name="profile_lat">
        <input type="hidden" id="input_lng" value="{{$profiles->lng}}" name="profile_lng">
        
        <div class="wrapContent" id="map"></div>
    
    
        @error('profile_lat')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

    
    
    </div>

  

</li>
<br>



<li>
  <div class=" ">
      <label for="exampleFormControlTextarea1" class="form-label">{{ Config::get('app.locale') == 'ar' ? 'نوع الصفحة الشخصية' : 'Perofile kind' }}</label> 

@foreach($subscribersType as $subscriberType)

<div class="form-check myRadioButton">
  <input class="form-check-input" type="radio"  name="subscriberType" value='{{$subscriberType->id}}' id="subscriberType_{{$subscriberType->id}}" {{$profiles->subscriber_type_id == $subscriberType->id ? 'checked' : ''}}>
  <label class="form-check-label" for="subscriberType_{{$subscriberType->id}}">
    {{ Config::get('app.locale') == 'ar' ?  $subscriberType->title_ar : $subscriberType->title_en }}
  </label>
</div>

@endforeach

@error('subscriberType')
<div class="alert alert-danger">{{ $message }}</div>
@enderror


        
  </div>

</li>
<br>
<li>
    <div class="educationalStages_checksBoxs">

        <p > {{ Config::get('app.locale') == 'ar' ? 'المراحل العلمية' : ' Educational Stages' }}</p>
<div class="lables">

@foreach ($educationsStages as $educationsStage)

<div class="form-check myCheckBox">
  <input class="form-check-input educationsStage_checkbox" type="checkbox" data-title="{{ Config::get('app.locale') == 'ar' ?  $educationsStage->title_ar : $educationsStage->title_en }}" name="educationsStage[]" value="{{$educationsStage->id}}" 
  
  @foreach ($ProfileEducationStages as $item)
      @if ($educationsStage->id == $item->Education_Stages_id)
          checked
      @endif
  @endforeach
  
  >
  <label class="form-check-label" for="educationsStage">
    {{ Config::get('app.locale') == 'ar' ?  $educationsStage->title_ar : $educationsStage->title_en }}
  </label>
</div>

@endforeach


@error('educationsStage')
<div class="alert alert-danger">{{ $message }}</div>
@enderror





</div>
       
          


    </div>
   
</li>
<br>


<li>
    <div class="checkboxs has-validation" id="parentArticals"  >

      <p style="width: 100%"> {{ Config::get('app.locale') == 'ar' ? 'المواد الدراسية' : 'Subjects' }} </p>

        <div class="artical_checkbox specializedMaterials_checksBoxs" id="scientificArticalDiv">
      
      
      
          @foreach ($profileScientificArticles as $item)
              
          <div class="lables is-invalid " aria-describedby="validationServerUsernameFeedback"  data-stageid="{{$item->scientificArticles->educationsStages->id}}"   required>
            <div class="form-check myCheckBox">
              <input class="form-check-input " name="articals[]" type="checkbox"  value="{{$item->scientificArticles->id}}"  id="scientificArtical_{{$item->scientificArticles->id}}" checked>
              <label class="form-check-label" for="scientificArtical_${item['id']}">
                {{Config::get('app.locale') == 'ar' ? $item->scientificArticles->title_ar : $item->scientificArticles->title_en   }} : [{{Config::get('app.locale') == 'ar' ? $item->scientificArticles->educationsStages->title_ar : $item->scientificArticles->educationsStages->title_en  }}]
              </label>
            </div>



          @endforeach



        </div>
       
        
        @error('articals')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        

    </div>
    
</li>

 


<br>

<li>
    <div class="btnEdit">

      <input  class="btn" type="submit" value="{{ Config::get('app.locale') == 'ar' ? 'تعديل ملف تعريف' : 'Edit Profile' }}">

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
    <script src="{{asset('website_assets/js/editProfile_screen.js') }}"></script>

    <script>
      var domain =   "{!! url('/')  !!}";
     
      var profiles = {!! json_encode($profiles) !!};
      var profileScientificArticles = {!! json_encode($profileScientificArticles) !!};
   
console.log(profileScientificArticles);


     </script>

     
  </body>
</html>