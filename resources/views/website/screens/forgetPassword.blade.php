<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
    <link href="{{ asset('website_assets/css/GLOBAL_Configs.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@300&display=swap" rel="stylesheet">
    <link href="{{ asset('website_assets/css/GLOBAL_ELEMENTS.css') }}" rel="stylesheet">
    <link href="{{ asset('website_assets/packages/bootstrap-5.0.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- My CSS -->
        <link href="{{ asset('website_assets/css/GLOBAL_Configs.css') }}" rel="stylesheet">
        <link href="{{ asset('website_assets/css/Custome_Components.css') }}" rel="stylesheet">

        <link href="{{ asset('website_assets/css/login-screen.css') }}" rel="stylesheet">
</head>

<body dir="{{ App::isLocale('en') ?  'ltr':'rtl' }}" lang="{{Config::get('app.locale') == 'ar' ?   'ar'   :  "en" }}" class="body">
    
<!-- Start NavBar Section --------------------------------------->

@include('website.custome_widgets.custome_nav_outside')
    
<!-- End NavBar Section --------------------------------------->    




<div class="content" style="height: 100vh;padding:50px;text-align:center;">

    <form action="{{URL::to('/forgot-password')}}" method="post">

@csrf

        <div class="mb-3" style="width: 400px; margin: auto">
          <label for="exampleInputEmail1" class="form-label">{{Config::get('app.locale') == 'ar' ?  'البريد الاليكتروني'  :  'Email Address'}}</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          <div id="emailHelp" class="form-text">{{Config::get('app.locale') == 'ar' ?  'يرجي متابعة البريد الاليكتروني الخاص بك بعد ارسال البريد الاليكتروني الخاص بك'  :  'Please follow up on your e-mail after sending your e-mail'}}</div>
        </div>
        
        <button type="submit" class="btn btn-primary"> {{Config::get('app.locale') == 'ar' ?  'ارسال'  :  'Send'}}</button>
      </form>
      

  

</div>

@if (\Session::has('status'))


<div class="myToast " style="position: fixed;bottom:30px;right:30px">
    <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" id="myToast" >
        <div class="toast-header">
          <strong class="me-auto"></strong>
          <small class="text-muted"> {{Config::get('app.locale') == 'ar' ?  '1 ثانيه'  :  '1 second'}}</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" style="color: green">

            {{Config::get('app.locale') == 'ar' ?  'تم الارسال يرجي متابعة البريد الاليكتروني الخاص بك للتأكيد'  :  'Sent, please follow your email to confirm'}}

        </div>
    
</div>
</div>

@endif









<!-- Start Footer Section --------------------------------------->

@include('website.custome_widgets.footer')

<!-- End Footer Section --------------------------------------->













    <!-- packages js -->
    <script src="{{ asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('website_assets/packages/jquery/jquery.js') }}"></script>

    <!-- my js -->
        <script src="{{ asset('website_assets/js/GLOBAL_ELEMENTS.js') }}"></script>
        <script src="{{ asset('website_assets/js/login-screen.js') }}"></script>
        <script src="{{ asset('website_assets/js/Custome_Components.js') }}"></script>



<script>


var toastElList = [].slice.call(document.querySelectorAll('.toast'));
var toastList = toastElList.map(function (toastEl) {
  return new bootstrap.Toast(toastEl, {
    animation : true,
    autohide : true,
    delay : 6000,
  })
});



</script>





</body>
</html>



  