<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Packages CSS -->
    <link href="{{ asset('website_assets/packages/bootstrap-5.0.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/packages/fontawesome-free-5.15.3-web/css/all.min.css') }}" rel="stylesheet">


    <!-- My CSS -->
    <link href="{{asset('website_assets/css/GLOBAL_Configs.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/css/GLOBAL_ELEMENTS.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/css/Custome_Components.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/css/profile_Screen.css') }}" rel="stylesheet">


    <title>GAD</title>
  </head>

  <body dir="{{ App::isLocale('en') ?  'ltr':'rtl' }}" lang="{{Config::get('app.locale') == 'ar' ?   'ar'   :  "en" }}" class="body">
      

<div class="page">

    <div class="alert alert-danger  alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      
<!-- Start NavBar Section --------------------------------------->


@if (Auth::guest())

@include('website.custome_widgets.custome_nav_outside')

@else

@include('website.custome_widgets.custome_nav_Inside')

@endif



<!-- End NavBar Section --------------------------------------->

<!-- Start Image-Profile Section --------------------------------------->
<div class="sectionImageAndBio">
    <div class="image-profile" style="background-image:url('{{asset('storage/CoverProfiles/'.$profile->cover_image) }}')">


        <img src="{{asset('storage/users_images/'.$profile->user->image) }}" alt="image person" >
        
        </div>
<div class="bio wrapContent s5">

{{$profile->person_bio}}
</div>        
</div>

<!-- End Image-Profile Section --------------------------------------->

<!-- Start Details Section --------------------------------------->
<div class="sectionDetails wrapContent">

    <div class="details-container ">

        <nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">

                        <div class="nav nav-tabs " id="nav-tab" role="tablist">
                            <button class="nav-link s7 active" id="nav-profileDetails-tab" data-bs-toggle="tab" data-bs-target="#nav-profileDetails" type="button" role="tab" aria-controls="nav-profileDetails" aria-selected="true">{{Config::get('app.locale') == 'ar' ? 'البيانات' : 'Profile Details' }}</button>
                            <button class="nav-link s7" id="nav-moreDetails-tab" data-bs-toggle="tab" data-bs-target="#nav-moreDetails" type="button" role="tab" aria-controls="nav-moreDetails" aria-selected="false">{{Config::get('app.locale') == 'ar' ? 'تفاصيل اكثر' : 'More Details' }}</button>
                            <button class="nav-link s7" id="nav-specialization-tab" data-bs-toggle="tab" data-bs-target="#nav-specialization" type="button" role="tab" aria-controls="nav-specialization" aria-selected="false">{{Config::get('app.locale') == 'ar' ?  'التخصصات' : 'Specialization' }}</button>
                          </div>
                    </div>
                    <div class="col">
                        <div class="views-country s7">
                            <ul>
                                <li><i class="fas fa-heart" style="color: white;"></i></li>
                                <li> {{$countFavouritesProfile}}</li>
                            </ul>
                            <ul>
                                <li><i class="fas fa-eye" style="color: white;"></i></li>
                                <li>2568</li>
                            </ul>
                            <ul>
                                <li><i class="fas fa-flag" style="color: white;"></i></li>
                                <li>{{Config::get('app.locale') == 'ar' ?  $profile->user->countries->name_ar : $profile->user->countries->name_en }}</li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
     
            
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-profileDetails" role="tabpanel" aria-labelledby="nav-profileDetails-tab">

                <div class="profileDetails">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-12 col-md-6">

               <p class="s5"><i class="fas fa-signature" style="color: white;"> &emsp;  Sherif Abu El-Ezz</i></p>                 
               <p class="s5"><i class="fas fa-briefcase" style="color: white;">  &emsp;   Teacher</i></p>                 
               <p class="s5"><i class="fas fa-map-marked-alt" style="color: white;">  &emsp;  19 Dubai Sharka</i></p>                 
               <p class="s5"><i class="fas fa-mobile-alt" style="color: white;">  &emsp;  01063898262</i></p>                 
               <p class="s5"><i class="fas fa-at" style="color: white;">  &emsp;  medo@example.com</i></p>                 

                            </div>

                            <div class="col-12 col-md-6">
                                <div class="ratingBox">
    
                                    <div class="stars s6">
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>  &emsp;
                                        12.5665
                                    </div>

                                    <div class="stars s6">
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star"></span>  &emsp;
                                        12.5665
                                    </div>
                                    <div class="stars s6">
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>  &emsp;
                                        12.5665
                                    </div>
                                    <div class="stars s6">
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star "></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>  &emsp;
                                        12.5665
                                    </div>
                                    <div class="stars s6">
                                        <span class="fas fa-star checked"></span>
                                        <span class="fas fa-star "></span>
                                        <span class="fas fa-star "></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>  &emsp;
                                        12.5665
                                    </div>
<br>
<br>
                                    <div class="total-rates">
                                  Average Rate Is :      3.4  <span class="fas fa-star "style="color: var(--thirdColor);"></span>
                                    </div>


                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="nav-moreDetails" role="tabpanel" aria-labelledby="nav-moreDetails-tab">


                  
                    <div class="moreDetails" style="padding: 50px;">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                    </div>
                                        






            </div>
            <div class="tab-pane fade" id="nav-specialization" role="tabpanel" aria-labelledby="nav-specialization-tab">


                <div class="specialization">
                    <section>
                        <h1 class="s5" style="font-family: myFontsBold;"> <i class="fas fa-school" style="color: white;"></i> Educational Stages</h1>
                    
                        <ol>
                            <li>Primary</li>
                            <li>Secondry</li>
                            <li>collage</li>
                        </ol>
                    </section>
                    <section>
                        <h1 class="s5" style="font-family: myFontsBold;"> <i class="fas fa-user-graduate" style="color: white;"></i> Specialized materials</h1>
                    
                        <ol>
                            <li>Arabic </li>
                            <li>Frensh</li>
                            <li>English</li>
                        </ol>
                    </section>
                                        
                </div>






            </div>
          </div>
    
    </div>



</div>


<!-- End Details Section --------------------------------------->

<!-- Start Comments Section --------------------------------------->


<div class="sectionComments wrapContent">

    <div class="detailBox ">
        <div class="titleBox">
          <label class="s4">Comments</label>
        </div>
        <div class="commentBox">
            
            <p class="taskDescription s5">Rate Profile :-</p>
            <div class="stars s5">
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star "></span>
                <span class="fas fa-star "></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>  &emsp;
            
            </div>
        </div>
        <div class="actionBox">
            <ul class="commentList">
                <li>
                    <div class="commenterImage">
                      <img src="http://lorempixel.com/50/50/people/6" />
                    </div>
                    <div class="commentText">
                        <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
    
                    </div>
                </li>
                <li>
                    <div class="commenterImage">
                      <img src="http://lorempixel.com/50/50/people/7" />
                    </div>
                    <div class="commentText">
                        <p class="">Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span class="date sub-text">on March 5th, 2014</span>
    
                    </div>
                </li>
                <li>
                    <div class="commenterImage">
                      <img src="http://lorempixel.com/50/50/people/9" />
                    </div>
                    <div class="commentText">
                        <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
    
                    </div>
                </li>
            </ul>
            <form class="form-inline" role="form">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Your comments" />
                </div>
                <div class="form-group">
                    <button class="btn btn-default s5">Add Comment</button>
                </div>
            </form>
        </div>
    </div>




</div>






<!-- End Comments Section --------------------------------------->



<!-- End Details Section --------------------------------------->



<!-- Start Footer Section --------------------------------------->

<div class="sectionFooter">

    <div class="container-fluid wrapContent">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="title s5">Payments Methods</div>
                <ul>
                    <li><img src="../assets/icons/master-card-icon-13.jpg"/></li>
                    <li><img src="../assets/icons/master-card-icon-13.jpg"/></li>
                    <li><img src="../assets/icons/master-card-icon-13.jpg"/></li>
                    <li><img src="../assets/icons/master-card-icon-13.jpg"/></li>
                </ul>
                <br>
                <br>
                <div class="title">Socials</div>
                <ul>
                    <li><img src="../assets/icons/fc0061da43b239899945b1e886faa80a.jpg"/></li>
                    <li><img src="../assets/icons/fc0061da43b239899945b1e886faa80a.jpg"/></li>
                    <li><img src="../assets/icons/fc0061da43b239899945b1e886faa80a.jpg"/></li>
                    <li><img src="../assets/icons/fc0061da43b239899945b1e886faa80a.jpg"/></li>
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



<!-- Start FloatButton Section --------------------------------------->


  
  
  <div id="circularMenu1" class="circular-menu circular-menu-left active">
  
    <a class="floating-btn" onclick="document.getElementById('circularMenu1').classList.toggle('active');">
      <i class="fa fa-bars"></i>
    </a>
  
    <menu class="items-wrapper">
      <a href="#" class="menu-item fas fa-share-alt"></a>
      <a href="#" class="menu-item fas fa-heart"></a>
      <a href="#" class="menu-item fab fa-whatsapp"></a>
      <a href="#" class="menu-item fas fa-envelope-open-text"></a>

    </menu>
  
  </div>

<!-- End FloatButton Section --------------------------------------->







</div>




    <!-- packages js -->
    <script src="{{asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('website_assets/packages/jquery/jquery.js') }}"></script>
    <script src="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>



    <!-- my js -->
    <script src="{{asset('website_assets/js/GLOBAL_Configs.js') }}"></script>
    <script src="{{asset('website_assets/js/GLOBAL_ELEMENTS.js') }}"></script>
    <script src="{{asset('website_assets/js/profile_Screen.js') }}"></script>


  </body>
</html>