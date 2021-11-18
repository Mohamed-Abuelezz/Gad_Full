<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  @include('Website.global widgets.metaOfHeader')

  <!--Css Packages-->
  <link rel="stylesheet"
  href="{{ URL::asset('website_assets/packages/bootstrap-5.0.1-dist/css/bootstrap.min.css') }}">
<!--All Screen Css-->
<link rel="stylesheet" href="{{ URL::asset('website_assets/packages/offside-master/dist/offside.css') }}">
<!--All Screen Css-->
<link rel="stylesheet"
  href="{{ URL::asset('website_assets/packages/animate-css-animate.css-e8c4fab/animate.min.css') }}  " />
<!--All Screen Css-->

<!--All Screen Css-->
  <link href="{{ URL::asset('website_assets/packages/jquery-fab-button-master/css/jquery-fab-button.min.css') }} " rel="stylesheet">

    <!--Css Screen-->
    <link rel="stylesheet" href=" {{ URL::asset('website_assets/css/utilis.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('website_assets/css/globalElements.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('website_assets/css/profile.css') }}">

</head>

<body dir="{{ Config::get('app.locale') == 'ar' ? 'rtl' : 'ltr' }}" lang="{{ Config::get('app.locale') }}">

  <!-- Splash Screen-->

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

    @include('Website.global widgets.authNavBar')

  <!-- End NavBar Section----------------------------------------------------------->


  <div class="page-content">

    <!-- Section Header --------------------------------------------->
    <div class="section-header">

      <div class="images">
        <div class="profile-cover" style="background-image: url('https://wallpapercave.com/wp/p3HjAFU.jpg');"></div>
        <a href="https://img.freepik.com/free-photo/portrait-beautiful-young-woman-standing-grey-wall_231208-10760.jpg?size=626&ext=jpg"
          class="preview" title=" Sherif Nabil Abo.elezz ">
          <img class="profile-image "
            src="https://img.freepik.com/free-photo/portrait-beautiful-young-woman-standing-grey-wall_231208-10760.jpg?size=626&ext=jpg" />
        </a>

      </div>

      <div class="profileDetails">
        <div class="name text-medium">Sherif Abu.elezz</div>
        <div class="bio">Am Sherif Abu.elezz okay Am Sherif Abu.elezz okay Am Sherif Abu.elezz okay Am Sherif Abu.elezz
          okay Am Sherif Abu.elezz okay Am Sherif Abu.elezz okay </div>
      </div>


    </div>

    <!--End Section Header --------------------------------------------->

    <!--Section Details  --------------------------------------------->

    <div class="section-details parent">

      <div class="content">




        <div class="taps">
          <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profileDetails-tab" type="button" data-bs-toggle="tab"
                data-bs-target="#profileDetails" role="tab" aria-controls="profileDetails" aria-selected="true">Profile
                Details</button>
            </li>

            <li class="nav-item" role="presentation">
              <button class="nav-link" id="moreInformation-tab" type="button" data-bs-toggle="tab"
                data-bs-target="#moreInformation" role="tab" aria-controls="moreInformation" aria-selected="false">More
                Information</button>
            </li>

            <li class="nav-item" role="presentation">
              <button class="nav-link" id="location-tab" type="button" data-bs-toggle="tab" data-bs-target="#location"
                role="tab" aria-controls="location" aria-selected="false">Location</button>
            </li>

            <li class="nav-item" role="presentation">
              <button class="nav-link" id="education-stages-tab" type="button" data-bs-toggle="tab"
                data-bs-target="#educationStages" role="tab" aria-controls="educationStages"
                aria-selected="false">Stages And Subjects</button>
            </li>



          </ul>
        </div>







        <div class="details tab-content" id="nav-tabContent">
          <div class="utils">
            <div class="views"><i class="far fa-grin-hearts"></i> 50.5063</div>
            <div class="rates"><i class="fas fa-eye"></i> 50.5063</div>
            <div class="rates"><i class="fas fa-flag"></i> Egypt</div>
          </div>

          <div class="tab-pane fade show active" id="profileDetails" role="tabpanel"
            aria-labelledby="profileDetails-tab">

            <div class="details">

              <ul class="info">
                <li><i class="fas fa-user-alt"></i> Sherif Nabil Abo.elezz </li>
                <li><i class="fas fa-briefcase"></i>Teacher</li>
                <li><i class="fas fa-at"></i>Sherif@gmail.com</li>
                <li><i class="fas fa-phone-square-alt"></i>+201063898262</li>
                <li><i class="fas fa-map-marked-alt"></i>19 Gado Street</li>
              </ul>

              <div class="rates">
                <div class="">
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="total">50.6225</i>
                </div>
                <div class="">
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star"></i>
                  <i class="total">50.6225</i>

                </div>
                <div class="">
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="total">50.6225</i>

                </div>
                <div class="">
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="total">50.6225</i>

                </div>
                <div class="">
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="total">50.6225</i>

                </div>

                <div class="total-rates">
                  Avg 3.0 <i class="fa fa-star checked"></i>
                </div>

              </div>

            </div>






          </div>

          <div class="tab-pane fade" id="moreInformation" role="tabpanel" aria-labelledby="moreInformation-tab">

            <div class="information">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
              scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
              of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
              like Aldus PageMaker including versions of Lorem Ipsum.

            </div>



          </div>



          <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">

            <div class="profile_location">
              <div class="wrapContent" id="map"></div>
            </div>

          </div>

          <div class="tab-pane fade" id="educationStages" role="tabpanel" aria-labelledby="education-stages-tab">

            <div class="stgs-subj">



              <table class="table">
                <thead class="">

                  <tr>

                    <th style="color:var(--third)">
                      المحاسبة المميكنة
                    </th>


                  </tr>

                </thead>
                <tbody>

                  <tr>

                    <td class="sbj">
                      <ul>
                        <li>اللغة العربيه</li>



                      </ul>
                    </td>







                  </tr>



                </tbody>
              </table>

            </div>


          </div>


        </div>









      </div>





    </div>
    <!--End Section Details --------------------------------------------->


    <!--Start Section Comments --------------------------------------------->

    <div class="section-comments parent ">

      <div class="content-comments wow animate__flipInX">

        <div class=" ">
          <div class="container">
            <div class="row justify-content-center mb-4">
              <div class="col-lg-12">
                <h5>2 Comments</h5>
              </div>
            </div>
            <div class="row justify-content-center mb-4">
              <div class="col-lg-12">
                <div class="comments">


                  <div class="comment d-flex mb-4">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm rounded-circle">
                        <img class="avatar-img" src="https://uifaces.co/our-content/donated/AW-rdWlG.jpg" alt="">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-2 ms-sm-3">

                      <div class="comment-meta  align-items-baseline">

                        <h6 class="me-2">Jordan Singer <span style="color: grey;">2d</span> </h6>
                        <p style="width: 100%;color: var(--secondry);font-size: 12px;">medo@gmail.com</p>
                        <button class="btn-outline" style="color: red;font-size: 15px;">Report</button>

                      </div>

                      <div class="comment-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non minima ipsum at amet doloremque
                        qui magni, placeat deserunt pariatur itaque laudantium impedit aliquam eligendi repellendus
                        excepturi quibusdam nobis esse accusantium.
                      </div>


                    </div>
                  </div>





                </div>
              </div>
            </div>
            <div class="comment-form ">
              <div class="">
                <div class="avatar avatar-sm rounded-circle">
                  <img class="avatar-img"
                    src="https://images.pexels.com/photos/91227/pexels-photo-91227.jpeg?auto=compress&cs=tinysrgb&crop=faces&fit=crop&h=200&w=200"
                    alt="">
                </div>
              </div>
              <div class=" ms-2 ms-sm-3 addcomment-form">
                <form style="">
                  <textarea class="form-control py-0 px-1 border-0" rows="1" placeholder="Start writing..."
                    style="resize: none;"></textarea>
                  <a href="#" class="btn-outline">Send</a>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>




    </div>
    <!--End Section Comments --------------------------------------------->








  </div>
  <!-- Float Actions Buttons-->

  <div id="circularMenu1" class="circular-menu circular-menu-left active " style="z-index: 999;">

    <a class="floating-btn" onclick="document.getElementById('circularMenu1').classList.toggle('active');">
      <i class="fa fa-bars"></i>
    </a>

    <menu class="items-wrapper">
      <a href="#" class="menu-item fa fa-home"></a>
      <a href="#" class="menu-item fa fa-user"></a>
      <a href="#" class="menu-item fa fa-pie-chart"></a>
      <a href="#" class="menu-item fa fa-cog"></a>
    </menu>

  </div>


  <!-- Footer Section----------------------------------------------------------->


     @include('Website.global widgets.footer')







     <!--End----------------------------------------------------------------------------->
 
     @if (session()->has('success') || session()->has('error'))
 
         @include('Website.global widgets.toast')
 
     @endif
 
 
 
 
 
     <!---------------------------------------------------------------------------------------->
 


  <!---------------------------------------------------------------------------------------->
  <script>
    var globalUsageElement = {
      'Toast': false,
      'Offside': true,
      'Splash': true,
      'AvatarCover': true,
      'Wow': true,
      'authNav': true
    };
  </script>

    <!--Js Packages-->
    <script src=" {{ URL::asset('website_assets/packages/jquery/jquery.js') }}"></script>
    <!--All Screen JS-->
    <script src=" {{ URL::asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--All Screen JS-->
    <script src="{{ URL::asset('website_assets/packages/offside-master/dist/offside.min.js') }}"></script>
    <!--All Screen JS-->
    <script src=" {{ URL::asset('website_assets/packages/WOW-master/dist/wow.min.js') }}"></script>
    <!--All Screen JS-->
    <script src="{{ URL::asset('website_assets/packages/jQuery-autoComplete-master/jquery.auto-complete.min.js') }}">
  </script>

<script src="{{ URL::asset('website_assets/packages/jQuery-Plugin-For-Image-Hover-Preview-With-Caption-Support-imagepreview/imagepreview.min.js') }}">
  </script>

  <script src=" {{ URL::asset('website_assets/packages/jquery-loading-master/dist/jquery.loading.min.js') }}"></script>

  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhwUPb_bGJzGj0Wnj89dcnU5NZQhGx9jY&callback=initMap&libraries=&v=weekly"
    async></script>


  <!--Js Screen-->
  <script src=" {{ URL::asset('website_assets/js/utilis.js') }}"></script>
    <!--All Screen JS-->
    <script src="{{ URL::asset('website_assets/js/globalElements.js') }}"></script>
    <!--All Screen JS-->
    <script src="{{ URL::asset('website_assets/js/profile.js') }}"></script>




</body>

</html>