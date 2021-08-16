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

<div class="sectionNavBar wrapContent" >

    <div class="container-fluid">
        <div class="row justify-content-between">
            
            <div class="col rightsidemenu">
                <div class="menus">
                    <ul>
                
                        <li><a href="#" class="s6"> عربي <i class="fas fa-globe-americas"></i> </a></li>
                        <li><a href="../index.html" class="s6">Home</a></li>
                
                    </ul>
                </div>
                
                        </div>
                     
                        <div class="col rightsidemenumobile">
                    
                            <div class="mobile-meun">
                        
                                <div class="menu-button">
                                  <div class="menu-button-line"></div>
                                  <div class="menu-button-line"></div>
                                  <div class="menu-button-line"></div>
                                </div>
                              
                          </div>
                        
                        
                        
                        </div>
            <div class="col leftside" >
                <img class="logo" src="../assets/icons/logo.png"/>
            </div>
          
            
        </div>
      
    </div>
    
    
    
    
    </div>
    
      <div class="menu"> <!--Mobile Menus -->
            <div class="menu-branding"></div>
            <ul class="menu-nav">
                <ul>
                    <li><a href="./screens/login-screen.html" class="s4">SignIn/SignUp</a></li>
                    <li><a href="#" class="s4"> عربي <i class="fas fa-globe-americas"></i> </a></li>
    
                </ul>
            </ul>
    </div>
    
    <!-- End NavBar Section --------------------------------------->    




    <div class="form-wrap">
      <div class="tabs">
        <h3 class="signup-tab"><a class="active" href="#signup-tab-content">Sign Up</a></h3>
        <h3 class="login-tab"><a href="#login-tab-content">Login</a></h3>
      </div><!--.tabs-->
  
      <div class="tabs-content">
        <div id="signup-tab-content" class="active">
          <form class="signup-form" action="{{URL::to('/register')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div id="profile-container">
              <image id="profileImage" src="{{asset('storage/users_images/defaultImage.png') }}" />
           </div>
           
           <br>
           <input id="imageUpload" type="file"  name="image" placeholder="Photo">
           @error('image')
           <div class="alert alert-danger">{{ $message }}</div>
       @enderror
            <input type="email" class="input" id="user_email" name="email" autocomplete="off" placeholder="email">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            <input type="text" class="input" id="user_name" name="name" autocomplete="off" placeholder="name">
            @error('name')
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
            <input type="password" class="input" id="user_pass" name="password" autocomplete="off" placeholder="Password">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
          
          
            <input type="submit" class="button" value="Sign Up">
          </form><!--.login-form-->
          <div class="help-text">
            <p>By signing up, you agree to our</p>
            <p><a href="#">Terms of service</a></p>
          </div><!--.help-text-->
        </div><!--.signup-tab-content-->
  
        <div id="login-tab-content">
          <form class="login-form" action="" method="post">

            <input type="text" class="input" id="user_login" autocomplete="off" placeholder="Email or Username">
            <input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
            <input type="checkbox" class="checkbox" id="remember_me">
            <label for="remember_me">Remember me</label>
  
            <input type="submit" class="button" value="Login">
          </form><!--.login-form-->
          <div class="help-text">
            <p><a href="#">Forget your password?</a></p>
          </div><!--.help-text-->
        </div><!--.login-tab-content-->
      </div><!--.tabs-content-->
    </div><!--.form-wrap-->










    <!-- packages js -->
    <script src="{{ asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('website_assets/packages/jquery/jquery.js') }}"></script>

    <!-- my js -->
        <script src="{{ asset('website_assets/js/GLOBAL_ELEMENTS.js') }}"></script>
        <script src="{{ asset('website_assets/js/login-screen.js') }}"></script>
        <script src="{{ asset('website_assets/js/Custome_Components.js') }}"></script>




</body>
</html>



  