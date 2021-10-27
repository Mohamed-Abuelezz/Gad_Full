<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GAD</title>

  <!--Css Packages-->
  <link rel="stylesheet" href="{{ URL::asset('website_assets/packages/bootstrap-5.0.1-dist/css/bootstrap.min.css') }}"> <!--All Screen Css-->
  <link rel="stylesheet" href="{{ URL::asset('website_assets/packages/offside-master/dist/offside.css') }}"><!--All Screen Css-->
  <link rel="stylesheet" href="{{ URL::asset('website_assets/packages/animate-css-animate.css-e8c4fab/animate.min.css') }}  " /><!--All Screen Css-->


  <!--Css Screen-->
  <link rel="stylesheet" href=" {{ URL::asset('website_assets/css/utilis.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('website_assets/css/globalElements.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('website_assets/css/home.css') }}">
</head>

<body dir="{{ Config::get('app.locale') == 'ar' ? 'rtl' : 'ltr' }}" lang="{{ Config::get('app.locale') }}">

  <div id="splash">

    <div class="loader">
      <div class="inner one"></div>
      <div class="inner two"></div>
      <div class="inner three"></div>
    </div>

  </div>


<!-- Float Scroll top btn-->
<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top  animate__animated animate__bounce animate__infinite" role="button" style="color: white;background-color: var(--primary);z-index: 999;"><i class="fas fa-chevron-up"></i></a>
<!-- Side Nav Menu -->

<!-- NavBar Section----------------------------------------------------------->

@include('Website.global widgets.authNavBar')


<!-- End NavBar Section----------------------------------------------------------->


    <div class="page-content parent">


  <!-- Advanced Search Section -->

        
  <div class="section-advancedSearch">

<div class="title text-headerBG" style="color: white;margin-bottom: 10px;"> Advanced Search </div>

<div class="search-drops">

    <div class="dropdown">
        <button class="btn  btn-outline dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
          Country
        </button>
        <ul class="dropdown-menu" style="z-index: 9999;" aria-labelledby="dropdownMenu2">
          <li><button class="dropdown-item" type="button">Action</button></li>
          <li><button class="dropdown-item" type="button">Another action</button></li>
          <li><button class="dropdown-item" type="button">Something else here</button></li>
        </ul>
      </div>

      <div class="dropdown">
        <button class="btn btn-outline dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
          Profile Type
        </button>
        <ul class="dropdown-menu" style="z-index: 9999;" aria-labelledby="dropdownMenu2">
          <li><button class="dropdown-item" type="button">Action</button></li>
          <li><button class="dropdown-item" type="button">Another action</button></li>
          <li><button class="dropdown-item" type="button">Something else here</button></li>
        </ul>
      </div>

      <div class="dropdown">
        <button class="btn btn-outline  dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
          Specialties
        </button>
        <ul class="dropdown-menu" style="z-index: 9999;" aria-labelledby="dropdownMenu2">
          <li><button class="dropdown-item" type="button">Action</button></li>
          <li><button class="dropdown-item" type="button">Another action</button></li>
          <li><button class="dropdown-item" type="button">Something else here</button></li>
        </ul>
      </div>

      <div class="dropdown">
        <button class="btn btn-outline dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            Subjects
        </button>
        <ul class="dropdown-menu" style="z-index: 9999;" aria-labelledby="dropdownMenu2">
          <li><button class="dropdown-item" type="button">Action</button></li>
          <li><button class="dropdown-item" type="button">Another action</button></li>
          <li><button class="dropdown-item" type="button">Something else here</button></li>
        </ul>
      </div>

</div>

<br>
<a href="#" class="btn-outline" style="font-weight: 200;">Search &emsp;<i class="fas fa-search"></i></a>


  </div>







<!--- End Advanced Search Section--->

<!-- Section Profiles Results  -->

      <!-- Search And Orders Profiles -->

      <div class="search-bar">


        <div class="orderBy">
          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                Order By
            </button>
            <ul class="dropdown-menu" style="z-index: 9999;" aria-labelledby="dropdownMenu2">
              <li><button class="dropdown-item" type="button">Action</button></li>
              <li><button class="dropdown-item" type="button">Another action</button></li>
              <li><button class="dropdown-item" type="button">The Nearset</button></li>
            </ul>
          </div>
        </div>
  
        <div class="fieldSearch">

          <div class="form" style="width: 100%">
            <input type="text" id="confirmPassword" name="search"  class="form__input" autocomplete="off"  placeholder=" "/>
            <label for="confirmPassword" class="form__label"> Search By Name</label>
          </div>

        </div>
  
  
        </div>
  <!-- Tabs nav -->
  <div class="sectionProfilesResults">
    <ul class="taps">
      <li>
        <button class="tab active" data-content="#one">MAP <i class="fas fa-map"></i></button>
      </li>
      <li>
        <button class="tab" data-content="#two">Cards <i class="fas fa-address-card"></i></button>
      </li>
    </ul>
    


    <!-- Tabs content -->
    <div id="one" class="content mapTab show">       
       <div class="wrapContent" id="map"></div> 
      </div>


    <div id="two" class="content cardsTab">



      <div class="row  justify-content-around">
      
        <div class="col-12 col-md-5 col-lg-4">
          <div class="container wow animate__jackInTheBox">
            <div class="cover-photo">
              <img  src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.15752-9/239767875_250990213558541_4885779344105767793_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=ae9488&_nc_ohc=Y8yaBhJEaP4AX9FAAUU&_nc_ht=scontent-cdg2-1.xx&oh=6d6e4390f3e311b461ceea451078fbde&oe=6167877A" class="profile animate__animated animate__pulse animate__infinite">
            </div>
            <div class="profile-name text-medium" style="color: white;">Mr.Sherif Abu.elezz</div>
            <div class="profile-rate" style="color: white;">
              <div class="stars">
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            </div>
            <div>                55564            </div>
            </div>
            <p class="about text-small" style="color: white;">  Am a teacher and and working in campridge Am a teacher and and working in campridg ...</p>
            <a class="btn-outline"  href="./profile.html" style="width: 80%;">More</a>
            <div>
              <i class="fas fa-share-alt"></i>
              <i class="fab fa-whatsapp"></i>
              <i class="fas fa-heart"></i>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-5 col-lg-4">
          <div class="container wow animate__jackInTheBox">
            <div class="cover-photo">
              <img  src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.15752-9/239767875_250990213558541_4885779344105767793_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=ae9488&_nc_ohc=Y8yaBhJEaP4AX9FAAUU&_nc_ht=scontent-cdg2-1.xx&oh=6d6e4390f3e311b461ceea451078fbde&oe=6167877A" class="profile animate__animated animate__pulse animate__infinite">
            </div>
            <div class="profile-name text-medium" style="color: white;">Mr.Sherif Abu.elezz</div>
            <div class="profile-rate" style="color: white;">
              <div class="stars">
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            <div>                55564            </div>
                
            </div>
            </div>
            <p class="about text-small" style="color: white;">  Am a teacher and and working in campridge Am a teacher and and working in campridg ...</p>
            <button class="btn-outline">More</button>
            <div>
              <i class="fas fa-share-alt"></i>
              <i class="fab fa-whatsapp"></i>
              <i class="fas fa-heart"></i>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-5 col-lg-4">
          <div class="container wow animate__jackInTheBox">
            <div class="cover-photo">
              <img  src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.15752-9/239767875_250990213558541_4885779344105767793_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=ae9488&_nc_ohc=Y8yaBhJEaP4AX9FAAUU&_nc_ht=scontent-cdg2-1.xx&oh=6d6e4390f3e311b461ceea451078fbde&oe=6167877A" class="profile animate__animated animate__pulse animate__infinite">
            </div>
            <div class="profile-name text-medium" style="color: white;">Mr.Sherif Abu.elezz</div>
            <div class="profile-rate" style="color: white;">
              <div class="stars">
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            <div>                55564            </div>
                
            </div>
            </div>
            <p class="about text-small" style="color: white;">  Am a teacher and and working in campridge Am a teacher and and working in campridg ...</p>
            <button class="btn-outline">More</button>
            <div>
              <i class="fas fa-share-alt"></i>
              <i class="fab fa-whatsapp"></i>
              <i class="fas fa-heart"></i>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-5 col-lg-4">
          <div class="container wow animate__jackInTheBox">
            <div class="cover-photo">
              <img  src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.15752-9/239767875_250990213558541_4885779344105767793_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=ae9488&_nc_ohc=Y8yaBhJEaP4AX9FAAUU&_nc_ht=scontent-cdg2-1.xx&oh=6d6e4390f3e311b461ceea451078fbde&oe=6167877A" class="profile animate__animated animate__pulse animate__infinite">
            </div>
            <div class="profile-name text-medium" style="color: white;">Mr.Sherif Abu.elezz</div>
            <div class="profile-rate" style="color: white;">
              <div class="stars">
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            <div>                55564            </div>
                
            </div>
            </div>
            <p class="about text-small" style="color: white;">  Am a teacher and and working in campridge Am a teacher and and working in campridg ...</p>
            <button class="btn-outline">More</button>
            <div>
              <i class="fas fa-share-alt"></i>
              <i class="fab fa-whatsapp"></i>
              <i class="fas fa-heart"></i>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-5 col-lg-4">
          <div class="container wow animate__jackInTheBox">
            <div class="cover-photo">
              <img  src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.15752-9/239767875_250990213558541_4885779344105767793_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=ae9488&_nc_ohc=Y8yaBhJEaP4AX9FAAUU&_nc_ht=scontent-cdg2-1.xx&oh=6d6e4390f3e311b461ceea451078fbde&oe=6167877A" class="profile animate__animated animate__pulse animate__infinite">
            </div>
            <div class="profile-name text-medium" style="color: white;">Mr.Sherif Abu.elezz</div>
            <div class="profile-rate" style="color: white;">
              <div class="stars">
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            <div>                55564            </div>
                
            </div>
            </div>
            <p class="about text-small" style="color: white;">  Am a teacher and and working in campridge Am a teacher and and working in campridg ...</p>
            <button class="btn-outline">More</button>
            <div>
              <i class="fas fa-share-alt"></i>
              <i class="fab fa-whatsapp"></i>
              <i class="fas fa-heart"></i>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-5 col-lg-4">
          <div class="container wow animate__jackInTheBox">
            <div class="cover-photo">
              <img  src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.15752-9/239767875_250990213558541_4885779344105767793_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=ae9488&_nc_ohc=Y8yaBhJEaP4AX9FAAUU&_nc_ht=scontent-cdg2-1.xx&oh=6d6e4390f3e311b461ceea451078fbde&oe=6167877A" class="profile animate__animated animate__pulse animate__infinite">
            </div>
            <div class="profile-name text-medium" style="color: white;">Mr.Sherif Abu.elezz</div>
            <div class="profile-rate" style="color: white;">
              <div class="stars">
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            <div>                55564            </div>
                
            </div>
            </div>
            <p class="about text-small" style="color: white;">  Am a teacher and and working in campridge Am a teacher and and working in campridg ...</p>
            <button class="btn-outline">More</button>
            <div>
              <i class="fas fa-share-alt"></i>
              <i class="fab fa-whatsapp"></i>
              <i class="fas fa-heart"></i>
            </div>
          </div>
        </div>


        <div class="col-12 col-md-5 col-lg-4">
          <div class="container wow animate__jackInTheBox">
            <div class="cover-photo">
              <img  src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.15752-9/239767875_250990213558541_4885779344105767793_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=ae9488&_nc_ohc=Y8yaBhJEaP4AX9FAAUU&_nc_ht=scontent-cdg2-1.xx&oh=6d6e4390f3e311b461ceea451078fbde&oe=6167877A" class="profile animate__animated animate__pulse animate__infinite">
            </div>
            <div class="profile-name text-medium" style="color: white;">Mr.Sherif Abu.elezz</div>
            <div class="profile-rate" style="color: white;">
              <div class="stars">
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            <div>                55564            </div>
                
            </div>
            </div>
            <p class="about text-small" style="color: white;">  Am a teacher and and working in campridge Am a teacher and and working in campridg ...</p>
            <button class="btn-outline">More</button>
            <div>
              <i class="fas fa-share-alt"></i>
              <i class="fab fa-whatsapp"></i>
              <i class="fas fa-heart"></i>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-5 col-lg-4">
          <div class="container wow animate__jackInTheBox">
            <div class="cover-photo">
              <img  src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.15752-9/239767875_250990213558541_4885779344105767793_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=ae9488&_nc_ohc=Y8yaBhJEaP4AX9FAAUU&_nc_ht=scontent-cdg2-1.xx&oh=6d6e4390f3e311b461ceea451078fbde&oe=6167877A" class="profile animate__animated animate__pulse animate__infinite">
            </div>
            <div class="profile-name text-medium" style="color: white;">Mr.Sherif Abu.elezz</div>
            <div class="profile-rate" style="color: white;">
              <div class="stars">
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            <div>                55564            </div>
                
            </div>
            </div>
            <p class="about text-small" style="color: white;">  Am a teacher and and working in campridge Am a teacher and and working in campridg ...</p>
            <button class="btn-outline">More</button>
            <div>
              <i class="fas fa-share-alt"></i>
              <i class="fab fa-whatsapp"></i>
              <i class="fas fa-heart"></i>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-5 col-lg-4">
          <div class="container wow animate__jackInTheBox">
            <div class="cover-photo">
              <img  src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.15752-9/239767875_250990213558541_4885779344105767793_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=ae9488&_nc_ohc=Y8yaBhJEaP4AX9FAAUU&_nc_ht=scontent-cdg2-1.xx&oh=6d6e4390f3e311b461ceea451078fbde&oe=6167877A" class="profile animate__animated animate__pulse animate__infinite">
            </div>
            <div class="profile-name text-medium" style="color: white;">Mr.Sherif Abu.elezz</div>
            <div class="profile-rate" style="color: white;">
              <div class="stars">
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            <div>                55564            </div>
                
            </div>
            </div>
            <p class="about text-small" style="color: white;">  Am a teacher and and working in campridge Am a teacher and and working in campridg ...</p>
            <button class="btn-outline">More</button>
            <div>
              <i class="fas fa-share-alt"></i>
              <i class="fab fa-whatsapp"></i>
              <i class="fas fa-heart"></i>
            </div>
          </div>
        </div>


    </div>
<br>
<br>
    <nav aria-label="Page navigation example">
      <ul class="pagination" style="width: 200px;margin: auto;color: var(--primary);" >
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>

</div>




<!-- End Profiles Results  -->


    </div>
  </div>



    <!-- Footer Section----------------------------------------------------------->

    @include('Website.global widgets.footer')







    <!--End----------------------------------------------------------------------------->

    @if(session()->has('success') || session()->has('error'))

    @include('Website.global widgets.toast')
    
            @endif
    



  <!---------------------------------------------------------------------------------------->
  <script>
    var globalUsageElement = {'Toast':false,'Offside':true,'Splash':true,'AvatarCover':true,'Wow':true,'authNav':true};
  </script>

  <!--Js Packages-->
  <script src=" {{ URL::asset('website_assets/packages/jquery/jquery.js') }}"></script> <!--All Screen JS-->
  <script src=" {{ URL::asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script> <!--All Screen JS-->
  <script src="{{ URL::asset('website_assets/packages/offside-master/dist/offside.min.js') }}"></script> <!--All Screen JS-->
  <script src=" {{ URL::asset('website_assets/packages/WOW-master/dist/wow.min.js') }}"></script> <!--All Screen JS-->
  <script src="{{ URL::asset('website_assets/packages/jQuery-autoComplete-master/jquery.auto-complete.min.js') }}"></script> <!--All Screen JS-->
  <!--All Screen JS-->
  <script src=" {{ URL::asset('website_assets/packages/jquery-loading-master/dist/jquery.loading.min.js') }}"></script>

  <script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhwUPb_bGJzGj0Wnj89dcnU5NZQhGx9jY&callback=initMap&libraries=&v=weekly"
  async
></script>

  <!--Js Screen-->
  <script src=" {{ URL::asset('website_assets/js/utilis.js') }}"></script> <!--All Screen JS-->
  <script src="{{ URL::asset('website_assets/js/globalElements.js') }}"></script> <!--All Screen JS-->
  <script src="{{ URL::asset('website_assets/js/home.js') }}"></script>





</body>
</html>