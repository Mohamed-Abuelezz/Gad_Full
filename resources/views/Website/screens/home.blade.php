<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('Website.global widgets.metaOfHeader')


    <!--Css Packages-->
    <link rel="stylesheet"
        href="{{ URL::asset('website_assets/packages/bootstrap-5.0.1-dist/css/bootstrap.min.css') }}">
    <!--All Screen Css-->
    <link rel="stylesheet" href="{{ URL::asset('website_assets/packages/offside-master/dist/offside.css') }}">
    <!--All Screen Css-->
    <link rel="stylesheet"
        href="{{ URL::asset('website_assets/packages/animate-css-animate.css-e8c4fab/animate.min.css') }}  " />
    <!--All Screen Css-->


    <!--Css Screen-->
    <link rel="stylesheet" href=" {{ URL::asset('website_assets/css/utilis.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('website_assets/css/globalElements.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('website_assets/css/home.css') }}">
</head>

<body dir="{{ Config::get('app.locale') == 'ar' ? 'rtl' : 'ltr' }}" lang="{{ Config::get('app.locale') }}">

  <div id="splash">

    <div class="loader">
      <div class="inner one"></div>
      <div class="inner two"></div>
      <div class="inner three"></div>
    </div>

  </div>



    <div id='myLoading'>

        <div class="load-wrapp">
            <div class="load-9">
                <div class="spinner">
                    <div class="bubble-1"></div>
                    <div class="bubble-2"></div>
                </div>
            </div>
        </div>
    </div>



    <!-- Float Scroll top btn-->
    <a id="back-to-top" href="#"
        class="btn btn-light btn-lg back-to-top  animate__animated animate__bounce animate__infinite" role="button"
        style="color: white;background-color: var(--primary);z-index: 999;"><i class="fas fa-chevron-up"></i></a>
    <!-- Side Nav Menu -->

    <!-- NavBar Section----------------------------------------------------------->

    @include('Website.global widgets.authNavBar')


    <!-- End NavBar Section----------------------------------------------------------->


    <div class="page-content parent">


        <!-- Advanced Search Section -->


        <div class="section-advancedSearch">

            <div class="title text-headerBG" style="color: white;margin-bottom: 10px;"> Advanced Search </div>

            <div class="search-drops" id="search-drops">

                <div class="dropdown">
                    <button class="btn  btn-outline dropdown-toggle" type="button" id="dropdownMenu2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $country_id != null ? (Config::get('app.locale') == 'ar' ?  $countries->where('id', '=', $country_id)->first()['name_ar'] : $countries->where('id', '=', $country_id)->first()['name_en'] )  :  (Config::get('app.locale') == 'ar' ? 'الدولة' : 'Country') }}

                    </button>
                    <ul class="dropdown-menu" style="z-index: 9999;" aria-labelledby="dropdownMenu2">

                        @foreach ($countries as $item)



                            <li><button id="" class="dropdown-item country-btn" data-id="{{ $item->id }}"
                                    type="button">  {{ Config::get('app.locale') == 'ar' ? $item->name_ar : $item->name_en }}</button>
                            </li>


                        @endforeach

                    </ul>
                </div>

                <div class="dropdown">
                    <button class="btn btn-outline dropdown-toggle" type="button" id="ProfileType"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{  $profileType_id != null ? (Config::get('app.locale') == 'ar' ?  $profiles_Type->where('id', '=', $profileType_id)->first()['name_ar'] : $profiles_Type->where('id', '=', $profileType_id)->first()['name_en'] )  : (Config::get('app.locale') == 'ar' ? 'نوع الصفحة الشخصية' : 'Profiles Type') }}

                    </button>
                    <ul class="dropdown-menu" style="z-index: 9999;" aria-labelledby="ProfileType">
                        @foreach ($profiles_Type as $item)



                            <li><button class="dropdown-item profileType-btn" data-id="{{ $item->id }}"
                                    type="button">{{ Config::get('app.locale') == 'ar' ? $item->name_ar : $item->name_en }}</button>
                            </li>


                        @endforeach
                    </ul>
                </div>

                <!--
      <div class="dropdown">
        <button class="btn btn-outline  dropdown-toggle ProfileFields" type="button" id="ProfileFields" data-bs-toggle="dropdown" aria-expanded="false">
          {{ Config::get('app.locale') == 'ar' ? 'المجالات' : 'Fields' }}   
          
        </button>
        <ul class="dropdown-menu" style="z-index: 9999;" aria-labelledby="ProfileFields">
          @foreach ($fields as $item)
              


          <li><button class="dropdown-item specialties-btn" data-id="{{ $item->id }}" type="button">{{ Config::get('app.locale') == 'ar' ? $item->name_ar : $item->name_en }} [{{ Config::get('app.locale') == 'ar' ? $item->country->name_ar : $item->country->name_en }}]</button></li>


          @endforeach
        </ul>
      </div>
    -->
                <!--
      <div class="dropdown">
        <button class="btn btn-outline dropdown-toggle" type="button" id="specialties" data-bs-toggle="dropdown" aria-expanded="false">
          {{ Config::get('app.locale') == 'ar' ? 'التخصصات' : 'Specialties' }}   
        </button>
        <ul class="dropdown-menu" style="z-index: 9999;" aria-labelledby="specialties">
          @foreach ($specialties as $item)
              


          <li><button class="dropdown-item subjects-btn" data-id="{{ $item->id }}" type="button">{{ Config::get('app.locale') == 'ar' ? $item->name_ar : $item->name_en }} [{{ Config::get('app.locale') == 'ar' ? $item->fields->country->name_ar : $item->fields->country->name_en }}]</button></li>


          @endforeach        </ul>
      </div>
   
    -->


            </div>

            <br>
            <a href="#" class="btn-outline " id="advSearch-btn" style="font-weight: 200;">
                {{ Config::get('app.locale') == 'ar' ? 'بحث' : 'Search' }} &emsp;<i class="fas fa-search"></i></a>


        </div>







        <!--- End Advanced Search Section--->

        <!-- Section Profiles Results  -->

        <!-- Search And Orders Profiles -->

        <div class="search-bar">


            <div class="orderBy">
                <div class="dropdown"  id="OrderBy-drop">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown"
                        aria-expanded="false">
                     {{Config::get('app.locale') == 'ar' ?   'الترتيب بواسطة' :  'Order By' }}
                    </button>
                    <ul class="dropdown-menu" style="z-index: 9999;" aria-labelledby="dropdownMenu2">
                        <li><button class="dropdown-item order-btn" data-key="hRating" type="button"> {{Config::get('app.locale') == 'ar' ?   'الاعلي تقييم' :  'highest rating' }}</button></li>
                        <li><button class="dropdown-item order-btn" data-key="lRating" type="button"> {{Config::get('app.locale') == 'ar' ?   'الاقل تقييم' :  'lowest rated' }}</button></li>
                        <li><button class="dropdown-item order-btn" data-key="nRating" type="button"> {{Config::get('app.locale') == 'ar' ?   'الاقرب من موقعك' :  'the nearset' }}</button></li>
                    </ul>
                </div>
            </div>

            <div class="fieldSearch">


                <div class="form" style="width: 100%">
                    <input type="text" id="confirmPassword" name="search" class="form__input" autocomplete="off"
                        placeholder=" " />
                    <label for="confirmPassword" class="form__label"> Search By Name</label>

                    <div class="loadBox" style=""></div>

                </div>

            </div>


        </div>
        <!-- Tabs nav -->
        <div class="sectionProfilesResults">
            <ul class="taps">
                <li>
                    <button class="tab active" data-content="#one">MAP <i class="fas fa-map"></i></button>
                </li>
                <li>
                    <button class="tab" data-content="#two">Cards <i
                            class="fas fa-address-card"></i></button>
                </li>
            </ul>



            <!-- Tabs content -->
            <div id="one" class="content mapTab show">
                <div class="wrapContent" id="map"></div>
            </div>


            <div id="two" class="content cardsTab">


                @include('Website.custome Screens.homeCards')

          
           


            </div>




            <!-- End Profiles Results  -->


        </div>
    </div>



    <!-- Footer Section----------------------------------------------------------->

    @include('Website.global widgets.footer')







    <!--End----------------------------------------------------------------------------->

    @if (session()->has('success') || session()->has('error'))

        @include('Website.global widgets.toast')

    @endif





    <!---------------------------------------------------------------------------------------->
    <script>
        var globalUsageElement = {
            'Toast': true,
            'Offside': true,
            'Splash': true,
            'AvatarCover': true,
            'Wow': true,
            'authNav': true
        };

        var url = {!! json_encode(Request::root()) !!};
        var lang = document.getElementsByTagName("body")[0].getAttribute("lang");


        console.log(lang);

        var profiles_all = {!! json_encode($profiles_all, JSON_HEX_TAG) !!};
        console.log(profiles_all);


        var advancedSearchVals={
'country_id': {!! json_encode($country_id,JSON_HEX_TAG) !!},
'profileType_id': {!! json_encode($profileType_id,JSON_HEX_TAG) !!},
'field_id': {!! json_encode($field_id,JSON_HEX_TAG) !!},
'specialties_id': {!! json_encode($specialties_id, JSON_HEX_TAG) !!},
        };
        console.log(advancedSearchVals);








    </script>

    <!--Js Packages-->
    <script src=" {{ URL::asset('website_assets/packages/jquery/jquery.js') }}"></script>
    <!--All Screen JS-->
    <script src=" {{ URL::asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--All Screen JS-->
    <script src="{{ URL::asset('website_assets/packages/offside-master/dist/offside.min.js') }}"></script>
    <!--All Screen JS-->
    <script src=" {{ URL::asset('website_assets/packages/WOW-master/dist/wow.min.js') }}"></script>
    <!--All Screen JS-->
    <script src="{{ URL::asset('website_assets/packages/jQuery-autoComplete-master/jquery.auto-complete.min.js') }}">
    </script>
    <!--All Screen JS-->
    <!--All Screen JS-->
    <script src=" {{ URL::asset('website_assets/packages/jquery-loading-master/dist/jquery.loading.min.js') }}"></script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANkqJZZHe2AVsUpY6mJ8G8qHKil5VznUs&callback=initMap&libraries=&v=weekly"
        async></script>

    <!--Js Screen-->
    <script src=" {{ URL::asset('website_assets/js/utilis.js') }}"></script>
    <!--All Screen JS-->
    <script src="{{ URL::asset('website_assets/js/globalElements.js') }}"></script>
    <!--All Screen JS-->
    <script src="{{ URL::asset('website_assets/js/home.js') }}"></script>





</body>

</html>
