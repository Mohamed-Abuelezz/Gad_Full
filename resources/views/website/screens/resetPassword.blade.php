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

<body >
    
<!-- Start NavBar Section --------------------------------------->

@include('website.custome_widgets.custome_nav_outside')

<!-- End NavBar Section --------------------------------------->    




<div class="content" style="height: 100vh;padding:50px;text-align:center;">


    <form action="{{URL::to('/reset-password')}}" method="post">
    @csrf


         <input type="hidden" name="token" value="{{$token}}">



        <div class="mb-3" style="width: 400px; margin: auto">
          <label for="exampleInputEmail1" class="form-label">{{Config::get('app.locale') == 'ar' ?  'البريد الاليكتروني'  :  'Email Address'}}</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="{{Config::get('app.locale') == 'ar' ?  'البريد الاليكتروني'  :  'Email'}}">
          @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        </div>
        <div class="mb-3" style="width: 400px; margin: auto">
            <label for="exampleInputPassword1" class="form-label">{{Config::get('app.locale') == 'ar' ?  'الرقم السري'  :  'Password'}}</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
          </div>
          <div class="mb-3" style="width: 400px; margin: auto">
            <label for="exampleInputPassword1" class="form-label">{{Config::get('app.locale') == 'ar' ?  'تأكيد الرقم السري'  :  'Confirm Password'}}</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
            @error('password_confirmation')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
          </div>
        
        <button type="submit" class="btn btn-primary">{{Config::get('app.locale') == 'ar' ?  'تأكيد'  :  'Submit'}}</button>
      </form>
      



</div>



@if($errors->any())
<div class="myToast " style="position: fixed;bottom:30px;right:30px">
  <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" id="myToast" >
      <div class="toast-header">
        <strong class="me-auto"></strong>
        <small class="text-muted">1 second</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body" style="color: red">

        @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
    
      
      </div>
  
</div>
</div>
@endif


<!-- End Footer Section --------------------------------------->

<div class="myToast" style="position: fixed;bottom:30px;right:30px">
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="myToast" >
        <div class="toast-header">
          <strong class="me-auto"></strong>
          <small class="text-muted">{{Config::get('app.locale') == 'ar' ?  '1 ثانيه'  :  '1 second'}}</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" style="color: green">

          {{Config::get('app.locale') == 'ar' ?  'تم الارسال يرجي متابعة البريد الاليكتروني الخاص بك للتأكيد'  :  'Sent, please follow your email to confirm'}}

        </div>
    
</div>
</div>

    <!-- packages js -->
    <script src="{{ asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('website_assets/packages/jquery/jquery.js') }}"></script>

    <!-- my js -->
        <script src="{{ asset('website_assets/js/GLOBAL_ELEMENTS.js') }}"></script>
        <script src="{{ asset('website_assets/js/login-screen.js') }}"></script>
        <script src="{{ asset('website_assets/js/Custome_Components.js') }}"></script>



<script>





</script>






</body>
</html>



  