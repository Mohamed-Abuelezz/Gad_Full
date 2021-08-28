<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>

    <!-- Packages CSS -->
    <link href="{{ asset('website_assets/packages/bootstrap-5.0.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('website_assets/packages/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website_assets/packages/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website_assets/packages/fontawesome-free-5.15.3-web/css/all.min.css') }}" rel="stylesheet">


    <!-- My CSS -->
    <link href="{{ asset('website_assets/css/GLOBAL_Configs.css') }}" rel="stylesheet">
    <link href="{{ asset('website_assets/css/GLOBAL_ELEMENTS.css') }}" rel="stylesheet">
    <link href="{{ asset('website_assets/css/Custome_Components.css') }}" rel="stylesheet">
        <link href="{{ asset('website_assets/css/login-screen.css') }}" rel="stylesheet">
        
</head>

<body >
    
  <div class="page">

  
  @include('website.custome_widgets.custome_nav_outside')

<br>


    <div class="form-wrap">
      <div class="tabs">
        <h3 class="signup-tab" style="font-size: 20px"><a class="active" href="#signup-tab-content">{{Config::get('app.locale') == 'ar' ?  'حساب جديد' : 'Sign Up'}}</a></h3>
        <h3 class="login-tab" style="font-size: 20px"><a href="#login-tab-content">{{Config::get('app.locale') == 'ar' ? 'تسجيل دخول' : 'Login'}}</a></h3>
      </div><!--.tabs-->
  
      <div class="tabs-content">
        <div id="signup-tab-content" class="active">
          <form class="signup-form" action="{{URL::to('/register')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div id="profile-container" style="position: relative">
              <image id="profileImage" src="{{asset('storage/users_images/defaultImage.png') }}" />
              <i class="fa fa-camera" aria-hidden="true" style="position: absolute;right:10px;top:80px;"></i>

           </div>
           
           <br>
           <input id="imageUpload" type="file"  name="image" placeholder="Photo">
           @error('image')
           <div class="alert alert-danger">{{ $message }}</div>
       @enderror
            <input type="email" class="input" id="user_email" name="email_register" autocomplete="off" placeholder="{{Config::get('app.locale') == 'ar' ?  'البريد الاليكتروني'  :  'Email address'}}">
            @error('email_register')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            <input type="text" class="input" id="user_name" name="name_register" autocomplete="off" placeholder="{{Config::get('app.locale') == 'ar' ?  'الاسم'  :  'Name'}}">
            @error('name_register')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

<div class="countries">

  <select name="countries[]" class="selectpicker" id="myselect">
    @foreach ($countries as $country)
    <option value="{{$country->id}}">{{$country->name_ar}}</option>
    @endforeach
  </select>
  
</div>


<br>
            <input type="password" class="input" id="user_pass" name="password_register" autocomplete="off" placeholder="{{Config::get('app.locale') == 'ar' ?  'الرقم السري'  :  'Password'}}">
            @error('password_register')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
          
          
            <input type="submit" class="button" value="{{Config::get('app.locale') == 'ar' ?  'التسجيل'  :  'Sign Up'}}" style="background-color: var(--primaryColor)">
          </form><!--.login-form-->
          <div class="help-text">
            <p>{{Config::get('app.locale') == 'ar' ?  'بالتسجيل ، فإنك توافق على'  :  'By signing up, you agree to our'}}</p>
            <p><a href="#">{{Config::get('app.locale') == 'ar' ?  'شروط الخدمة'  :  'Terms of service'}}</a></p>
          </div><!--.help-text-->
        </div><!--.signup-tab-content-->
  




        <div id="login-tab-content">
          <form class="login-form" action="{{URL::to('/login')}}" method="post">
@csrf
            <input type="text" class="input" id="user_login" name='email' autocomplete="off" placeholder="{{Config::get('app.locale') == 'ar' ?  'البريد الاليكتروني'  :  'Email'}}">
            <input type="password" class="input" id="user_pass" name='password' autocomplete="off" placeholder="{{Config::get('app.locale') == 'ar' ?  'الرقم السري'  :  'Password'}}">
       <!--     <input type="checkbox" class="checkbox" id="remember_me">
            <label for="remember_me">Remember me</label> -->
  
            <input type="submit" class="button" value="{{Config::get('app.locale') == 'ar' ?  'الدخول'  :  'Login'}}" style="background-color: var(--primaryColor)"> 
          </form><!--.login-form-->
          <div class="help-text">
            <p><a href="{{URL::to('/forgot-password')}}">{{Config::get('app.locale') == 'ar' ?  'نسيت كلمة المرور؟'  :  'Forget your password?'}}</a></p>
          </div><!--.help-text-->
        </div><!--.login-tab-content-->





      </div><!--.tabs-content-->
    </div><!--.form-wrap-->



    @if($errors->any())
    @if($errors->has('message'))  )
    <div class="myToast " style="position: fixed;bottom:30px;right:30px">
      <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" id="myToast" >
          <div class="toast-header">
            <strong class="me-auto"></strong>
            <small class="text-muted">{{Config::get('app.locale') == 'ar' ?  '1 ثانيه'  :  '1 second'}}</small>
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
  @endif


</div>


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
  })
});










        </script>



</body>
</html>



  