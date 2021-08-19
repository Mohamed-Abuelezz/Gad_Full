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
                <img class="logo" src="{{ asset('website_assets/assets/icons/logo.png') }}"/>
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














    <!-- packages js -->
    <script src="{{ asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('website_assets/packages/jquery/jquery.js') }}"></script>

    <!-- my js -->
        <script src="{{ asset('website_assets/js/GLOBAL_ELEMENTS.js') }}"></script>
        <script src="{{ asset('website_assets/js/login-screen.js') }}"></script>
        <script src="{{ asset('website_assets/js/Custome_Components.js') }}"></script>




</body>
</html>



  