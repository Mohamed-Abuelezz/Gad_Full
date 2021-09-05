<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Packages CSS -->
    <link href="{{ asset('website_assets/packages/bootstrap-5.0.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/packages/fontawesome-free-5.15.3-web/css/all.min.css') }}" rel="stylesheet">


    <!-- My CSS -->
    <link href="{{asset('website_assets/css/GLOBAL_Configs.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/css/GLOBAL_ELEMENTS.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/css/Custome_Components.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/css/offers_screen.css') }}" rel="stylesheet">


    <title>GAD</title>
  </head>

  <body  dir="{{ App::isLocale('en') ?  'ltr':'rtl' }}" lang="{{Config::get('app.locale') == 'ar' ?   'ar'   :  "en" }}" class="">
      

<div class="page">



<!-- Start NavBar Section --------------------------------------->

@include('website.custome_widgets.custome_nav_Inside')



<!-- End NavBar Section --------------------------------------->
        
    

<div class="sectionOurOffers">
    <div class="title s2"> {{Config::get('app.locale') == 'ar' ?  'العروض المتاحة'  : 'Availble Offers' }}</div>

    <div class="owl-carousel wrapContent">


@foreach ($offers as $offer)

@if ($offer->isFree == false)

<div class="item"> 
  <div class="image"><img src="{{asset('storage/offers/'.$offer->image)}}" alt=""></div>
  <div class="price s4">{{ Config::get('app.locale') == 'ar' ?   $offer->price_ar :  $offer->price_en }}</div>
  <div class="desc s6">{{ Config::get('app.locale') == 'ar' ?   $offer->desc_ar :  $offer->desc_en }}</div>
  <a href="{{URL::to('offersubmit/'.$offer->id)}}" class="btn" >{{ Config::get('app.locale') == 'ar' ?   'شراء' : 'Buy'}}</a>
</div>  
    
@else

@if ($isSubscribeForFree == null)
<div class="item"> 
  <div class="image"><img src="{{asset('storage/offers/'.$offer->image)}}" alt=""></div>
  <div class="price s4">{{ Config::get('app.locale') == 'ar' ?   $offer->price_ar :  $offer->price_en }}</div>
  <div class="desc s6">{{ Config::get('app.locale') == 'ar' ?   $offer->desc_ar :  $offer->desc_en }}</div>
  <a href="{{URL::to('offersubmit/'.$offer->id)}}" class="btn" >{{ Config::get('app.locale') == 'ar' ?   'شراء' : 'Buy'}}</a>
</div>  

@endif

@endif


    
@endforeach
 

    </div>
      
</div>



@if (\Session::has('needSubscribe'))

<div class="myToast " style="position: fixed;bottom:30px;right:30px;z-index: 999;">
    <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" id="myToast" >
        <div class="toast-header">
          <strong class="me-auto"></strong>
          <small class="text-muted"> {{Config::get('app.locale') == 'ar' ?  '1 ثانيه'  :  '1 second'}}</small>
        </div>
        <div class="toast-body" style="color: red;font-weight: bold">

            {{Config::get('app.locale') == 'ar' ?  'يرجي تجديد الاشتراك الخاص بك لعرض الصفحة الشخصية الخاصة بك مرة اخري '  :  'Please renew your subscription to view your profile again . '}}

        </div>
    
</div>
</div>

@endif




<!-- Start Footer Section --------------------------------------->

@include('website.custome_widgets.footer')

<!-- End Footer Section --------------------------------------->



</div>




    <!-- packages js -->
    <script src="{{asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('website_assets/packages/jquery/jquery.js') }}"></script>
    <script src="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>

    <!-- my js -->
    <script src="{{asset('website_assets/js/GLOBAL_Configs.js') }}"></script>
    <script src="{{asset('website_assets/js/GLOBAL_ELEMENTS.js') }}"></script>
    <script src="{{asset('website_assets/js/offers_screen.js') }}"></script>


  </body>
</html>