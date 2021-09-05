<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Packages CSS -->
    <link href="{{ asset('website_assets/packages/bootstrap-5.0.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }} rel="stylesheet">
    <link href="{{asset('website_assets/packages/fontawesome-free-5.15.3-web/css/all.min.css') }}" rel="stylesheet">


    <!-- My CSS -->
    <link href="{{asset('website_assets/css/GLOBAL_Configs.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/css/GLOBAL_ELEMENTS.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/css/Custome_Components.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/css/favouritesProfile_screen.css') }}" rel="stylesheet">


    <title>GAD</title>
  </head>

  <body dir="{{ App::isLocale('en') ?  'ltr':'rtl' }}" lang="{{Config::get('app.locale') == 'ar' ?   'ar'   :  "en" }}" class="body">
      

<div class="page">



<!-- Start NavBar Section --------------------------------------->
@include('website.custome_widgets.custome_nav_inside')

<!-- End NavBar Section --------------------------------------->
        
    

<div class="favouriteContent wrapContent" style="height: auto">

  @if ($favouritesProfiles->isEmpty())

  <div class="conentEmpety" style="height: 100vh;position:relative;">

    <div style=
    "position:absolute;
    left:50%;
    font-size: 20px;
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    color: red;
    width: 200px;
    "
    >{{ __('website_screens/homescreen.noData') }}  😭</div>

</div>
      
  @else

  @foreach ($favouritesProfiles as $favouritesProfile)
      
  <div class="person-card">
    <img class="person-img"  src="{{asset('storage/users_images/'.$favouritesProfile->profile->user->image) }}"  alt="image" />
    <div class="person-info">
      <div class="details-title">
        <span>{{$favouritesProfile->profile->display_name}}</span><br/>
        <small>{{Config::get('app.locale') == 'ar' ?  $favouritesProfile->profile->subscribersType->title_ar  : $favouritesProfile->profile->subscribersType->title_en}}</small>
      </div>
      <div class="details-body" style="margin-top: 15px">
        {{substr($favouritesProfile->profile->person_bio, 0, 200) . '...'}}
      </div>
      <div style="text-align: center">   
         <a href="{{URL::to('profile/'.$favouritesProfile->profile->id)}}" class="btn">{{Config::get('app.locale') == 'ar' ?  'المزيد' :"More"}}</a>
      </div>

      <div style="text-align: center">      
          <a href="{{URL::to('favouriteprofiles/remove/'.$favouritesProfile->profile->id)}}" style="color: red">{{Config::get('app.locale') == 'ar' ?  'حذف' :"Remove"}}</a>
      </div>




    </div>
  </div>

      
  @endforeach


  @endif


      



</div>









<!-- Start Footer Section --------------------------------------->

@include('website.custome_widgets.footer')


<!-- End Footer Section --------------------------------------->



</div>




    <!-- packages js -->
    <script src="{{asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('website_assets/packages/jquery/jquery.js') }}"></script>
    <script src="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
    <script src="{{asset('website_assets/packages/jQuery-autoComplete-master/jquery.auto-complete.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhwUPb_bGJzGj0Wnj89dcnU5NZQhGx9jY&callback=initMap&libraries=&v=weekly"
    async
  ></script>

    <!-- my js -->
    <script src="{{asset('website_assets/js/GLOBAL_Configs.js') }}"></script>
    <script src="{{asset('website_assets/js/GLOBAL_ELEMENTS.js') }}"></script>
    <script src="{{asset('website_assets/js/Custome_Components.js') }}"></script>
    <script src="{{asset('website_assets/js/favouritesProfile_screen.js') }}"></script>



  </body>
</html>