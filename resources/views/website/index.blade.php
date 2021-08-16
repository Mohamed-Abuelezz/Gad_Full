<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Packages CSS -->
    <link href="{{ asset('website_assets/packages/bootstrap-5.0.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('website_assets/packages/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website_assets/packages/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website_assets/packages/fontawesome-free-5.15.3-web/css/all.min.css') }}" rel="stylesheet">


    <!-- My CSS -->
    <link href="{{ asset('website_assets/css/GLOBAL_Configs.css') }}" rel="stylesheet">
    <link href="{{ asset('website_assets/css/GLOBAL_ELEMENTS.css') }}" rel="stylesheet">
    <link href="{{ asset('website_assets/css/Custome_Components.css') }}" rel="stylesheet">
    <link href="{{ asset('website_assets/index.css') }}" rel="stylesheet">


    <title>GAD</title>
  </head>

  <body dir="{{Config::get('app.locale') == 'ar' ?   'rtl'   :  "ltr" }}" lang="{{Config::get('app.locale') == 'ar' ?   'ar'   :  "en" }}" class="body">
    <div class="page">

<!-- Start NavBar Section --------------------------------------->

<div class="sectionNavBar wrapContent" >

<div class="container-fluid">
    <div class="row justify-content-between">
        
        <div class="col rightsidemenu">
            <div class="menus">
                <ul>
            
                    <li><a href="#" class="s6"> عربي <i class="fas fa-globe-americas"></i> </a></li>
                    <li><a href="{{URL::to('login')}}" class="s6">{{ __('website_screens/index.signInOrRegister') }}
                    </a></li>
            
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
                <li><a href="./screens/login-screen.html" class="s4">{{ __('website_screens/index.signInOrRegister') }}</a></li>
                <li><a href="#" class="s4">{{Config::get('app.locale') == 'ar' ?   "English"  : "عربي"}} <i class="fas fa-globe-americas"></i> </a></li>

            </ul>
        </ul>
</div>

<!-- End NavBar Section --------------------------------------->

<!-- Start Slider Section --------------------------------------->

<div class="sectionSlider" >

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">


        <div class="carousel-inner">


            @foreach ($configsSlider as $configSlider)

          
            <div class="carousel-item {{ $loop->index == 0 ?  'active' : '' }}">
        
                <div class="container-fluid">
                    <div class="row justify-content-between ">
                        <div class="col-12 col-md-6">
                            <div class="slidercontent">
                                <div class="title s1"> {{Config::get('app.locale') == 'ar' ?   $configSlider->title_ar   :  $configSlider->title_en }}</div>
                                <div class="content s5">{{Config::get('app.locale') == 'ar' ?   $configSlider->descrption_ar   :  $configSlider->descrption_en }}</div>
                                <a href="#" class="btn">Start Now</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="img">
                                <img src="{{asset('storage/siteImages/'.$configSlider->image) }}" />
            
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
          
            @endforeach

        
        </div>


    </div>






    <div class="controls">
        <div class="prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev"><i class="fas fa-angle-left"></i></div>
        <div class="next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next"><i class="fas fa-angle-right"></i></div>
    </div>





</div>

<!-- End Slider Section --------------------------------------->

<!-- Start OurMessage Section --------------------------------------->


<div class="sectionOurmessage">

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6">

            <div class="desc">
                <div class="title s3">{{Config::get('app.locale') == 'ar' ?   'رسالتنا'   :  "Our Message" }}</div>
                <div class="content">
                    {{ __('website_screens/index.ourMessage') }}
                </div>
            </div>
         
        </div>
        <div class="col-12 col-md-6">
            <div class="image">
                <img src="{{ asset('website_assets/assets/images/5498791.jpg') }}"/>
            </div>
            
        </div>
    </div>
</div>



</div>

<!-- End OurMessage Section --------------------------------------->

<!-- Start OurOffers Section --------------------------------------->

<div class="sectionOurOffers">
    <div class="title s2">Availble Offers</div>

    <div class="owl-carousel wrapContent">
        <div class="item active"> 
            <div class="image"><img src="{{ asset('website_assets/assets/images/5498791.jpg') }}" alt=""></div>
            <div class="price s4">free / 1 month</div>
            <div class="desc s6">it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</div>
            <a href="#" class="btn" >buy</a>
        </div>  
         <div class="item active"> 
            <div class="image"><img src="{{ asset('website_assets/assets/images/5498791.jpg') }}" alt=""></div>
            <div class="price s4">10$ / 1 month</div>
            <div class="desc s6">it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</div>
            <a href="#" class="btn" >buy</a>
        </div>
        <div class="item active"> 
            <div class="image"><img src="{{ asset('website_assets/assets/images/5498791.jpg') }}" alt=""></div>
            <div class="price s4">20$ / 1 month</div>
            <div class="desc s6">it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</div>
            <a href="#" class="btn" >buy</a>
        </div>
        <div class="item active"> 
            <div class="image"><img src="{{ asset('website_assets/assets/images/5498791.jpg') }}" alt=""></div>
            <div class="price s4">30$ / 1 month</div>
            <div class="desc s6">it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</div>
            <a href="#" class="btn" >buy</a>
        </div>
        <div class="item active"> 
            <div class="image"><img src="{{ asset('website_assets/assets/images/5498791.jpg') }}" alt=""></div>
            <div class="price s4">40$ / 1 month</div>
            <div class="desc s6">it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</div>
            <a href="#" class="btn" >buy</a>
        </div>
        <div class="item active"> 
            <div class="image"><img src="{{ asset('website_assets/assets/images/5498791.jpg') }}" alt=""></div>
            <div class="price s4">50$ / 1 month</div>
            <div class="desc s6">it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</div>
            <a href="#" class="btn" >buy</a>
        </div>
        <div class="item active"> 
            <div class="image"><img src="{{ asset('website_assets/assets/images/5498791.jpg') }}" alt=""></div>
            <div class="price s4">60$ / 1 month</div>
            <div class="desc s6">it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</div>
            <a href="#" class="btn" >buy</a>
        </div>
        <div class="item active"> 
            <div class="image"><img src="{{ asset('website_assets/assets/images/5498791.jpg') }}" alt=""></div>
            <div class="price s4">70$ / 1 month</div>
            <div class="desc s6">it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</div>
            <a href="#" class="btn" >buy</a>
        </div>
      </div>
      
</div>


<!-- End OurMessage Section --------------------------------------->

<!-- Start Footer Section --------------------------------------->

<div class="sectionFooter">

    <div class="container-fluid wrapContent">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="title s5">Payments Methods</div>
                <ul>
                    <li><img src="{{ asset('website_assets/assets/icons/master-card-icon-13.jpg') }}"/></li>
                </ul>
                <br>
                <br>
                <div class="title">Socials</div>
                <ul>
                    <li><img src="{{ asset('website_assets/assets/icons/fc0061da43b239899945b1e886faa80a.jpg') }}"/></li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <div class="links">
<ul>
    <li><a href="#">Support Us</a></li>
    <li><a href="#">Contact Us</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Terms And Conditions</a></li>
</ul>
                </div>
            </div>
        </div>
    </div>



</div>

<!-- End Footer Section --------------------------------------->
    </div>
    <!-- packages js -->
    <script src=" {{ asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website_assets/packages/jquery/jquery.js') }}"></script>
    <script src="{{ asset('website_assets/packages/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
    
    <!-- my js -->
    <script src="{{ asset('website_assets/js/GLOBAL_Configs.js') }}"></script>
    <script src="{{ asset('website_assets/js/GLOBAL_ELEMENTS.js') }}"></script>
    <script src="{{ asset('website_assets/index.js') }}"></script>


  </body>
</html>