<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('Website.global widgets.metaOfHeader')

  <!--Css Packages-->
  <link rel="stylesheet" href="{{ URL::asset('website_assets/packages/bootstrap-5.0.1-dist/css/bootstrap.min.css') }}"> <!--All Screen Css-->
  <link rel="stylesheet" href="{{ URL::asset('website_assets/packages/offside-master/dist/offside.css') }}"><!--All Screen Css-->
  <link rel="stylesheet" href="{{ URL::asset('website_assets/packages/animate-css-animate.css-e8c4fab/animate.min.css') }}  " /><!--All Screen Css-->
  <!--All Screen Css-->
  <link href="../packages/jquery-fab-button-master/css/jquery-fab-button.min.css" rel="stylesheet">
  <link rel="stylesheet" href=" {{ URL::asset('website_assets/css/utilis.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('website_assets/css/globalElements.css') }}">


  <!--Css Screen-->
  <link rel="stylesheet" href="{{ URL::asset('website_assets/css/forgetpassword.css') }}">


</head>

<body dir="ltr">


  <div id="splash">

    <div class="loader">
      <div class="inner one"></div>
      <div class="inner two"></div>
      <div class="inner three"></div>
    </div>

  </div>







  <!-- Float Scroll top btn-->
  <a id="back-to-top" href="#"
    class="btn btn-light btn-lg back-to-top  animate__animated animate__bounce animate__infinite" role="button"
    style="color: white;background-color: var(--primary);z-index: 999;"><i class="fas fa-chevron-up"></i></a>



    <!-- NavBar Section----------------------------------------------------------->

    @include('Website.global widgets.globalNavBar')




    <!-- End NavBar Section----------------------------------------------------------->


  <div class="page-content parent">



    <div class="content-us">

      <div class="text-headerBG" style="text-align: center;color: green">
<br>
<br>
{{ Config::get('app.locale') == 'ar' ? 'يرجى تأكيد حسابك أولاً ، تحقق من صندوق الرسائل الخاص بك.' : 'Please verify your account first, Check your messages inbox . ' }}
<br>
<br>
<br>
<a class="btn" href="{{ url('/email/verification-notification') }}">{{ Config::get('app.locale') == 'ar' ? 'ارسال مجددا' : 'Send again' }} </a>

    </div>


  









    </div>








  </div>


  </div>


    <!-- Footer Section----------------------------------------------------------->

    @include('Website.global widgets.footer')







    <!--End----------------------------------------------------------------------------->

    @if(session()->has('success') || session()->has('error'))

    @include('Website.global widgets.toast')
    
            @endif
    

    <!---------------------------------------------------------------------------------------->


  <!---------------------------------------------------------------------------------------->
  <script>
    var globalUsageElement = {
      'Toast': false,
      'Offside': true,
      'Splash': true,
      'AvatarCover': false,
      'Wow': true,
      'authNav': true
    };
  </script>

  <!--Js Packages-->
  <script src=" {{ URL::asset('website_assets/packages/jquery/jquery.js') }}"></script> <!--All Screen JS-->
  <script src=" {{ URL::asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script> <!--All Screen JS-->
  <script src="{{ URL::asset('website_assets/packages/offside-master/dist/offside.min.js') }}"></script> <!--All Screen JS-->
  <script src=" {{ URL::asset('website_assets/packages/WOW-master/dist/wow.min.js') }}"></script> <!--All Screen JS-->
  <script src=" {{ URL::asset('website_assets/packages/jquery-loading-master/dist/jquery.loading.min.js') }}"></script>




  <script src=" {{ URL::asset('website_assets/js/utilis.js') }}"></script> <!--All Screen JS-->
  <script src="{{ URL::asset('website_assets/js/globalElements.js') }}"></script> <!--All Screen JS-->
  <!--All Screen JS-->
  <script src="{{ URL::asset('website_assets/js/forgetspassword.js') }}"></script>





</body>

</html>