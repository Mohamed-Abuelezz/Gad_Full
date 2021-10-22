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

<body dir="ltr" >

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

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" >
  <div class="offcanvas-header" style="text-align: center;">
    <h5 id="offcanvasRightLabel" >GAD</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul>
      <li class="sideMenuItem"><a href="#"><img src="https://st3.depositphotos.com/1037987/15097/i/600/depositphotos_150975580-stock-photo-portrait-of-businesswoman-in-office.jpg" style="width: 100px;height: 100px;border-radius: 50%;"/></a></li>
      <li class="sideMenuItem">Mohamed Abo.elezz</li>
      <li class="sideMenuItem"><a href="./profile.html">Profile</a></li>
      <li class="sideMenuItem"><a href="#">Edit Profile</a></li>
      <hr style="border-width: 2px;">

      <li class="sideMenuItem"><a href="#">Account Settings</a></li>
      <li class="sideMenuItem"><a href="#">Contact Us</a></li>
      <li class="sideMenuItem"><a href="#">Logout</a></li>
    </ul>
  </div>
</div>






    <div class="section-navbar parent d-none d-lg-flex">


      <div class="nav-items">

        <ul>
          <li><a href="#" class="text-small"><img src="../assets/icons/logo.png"
                class="logo animate__animated animate__pulse  animate__infinite" alt="logo"></a>
          </li>
          <li >


            <div class="menu-container">
              <button class="menu-button"><img src="http://i.pravatar.cc/50">
                
              </button>
          
       <i class="fas fa-sort-down" style="position: absolute;left: 28px;top: 20px;;z-index: 999;"></i>
              <div class="menu-dropdown">
               
                
                <div class="content">
                  <ul>

                    <li><a href="#" style="color: black;font-size: 15px;"> Profile</a>  </li>
                    <li><a href="./AddProfile.html" style="color: black;font-size: 15px;">Edit Profile</a>  </li>
                   <hr style="border-width: 2px;">
                    <li>Account Settings</li>
                    <li>Logout</li>
                  </ul>
                </div>
              </div>
            </div>


          </li>
          <li ><a href="#" class="text-small ">|</a></li>
          <li ><a href="#" class="text-small ">Home</a></li>
          <li><a href="#" class="text-small">Contact Us</a></li>
          <li><a href="#" class="text-small">Terms And Conditions</a></li>
        </ul>

      </div>

      <div>
        <a href="#" class="text-small">عربي <i class="fas fa-globe" aria-hidden="true"></i> </a>
      </div>


    </div>

    <!--
      Mobile Menu Toggle
  -->


    <div class="section-navbar-small parent  d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
      <div class="logo">
        <a href="#" class="text-small"><img src="../assets/icons/logo.png"
            class="logo animate__animated animate__heartBeat animate__infinite" alt="logo"></a>
      </div>
      <nav class="side-nav">
        <div id="my-button " class="hamburger">
          <span class="bar"></span>
        </div>
      </nav>




    </div>
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

    <div class="section-footer parent">

      <div class="links text-medium">
        <ul>
          <li class="wow animate__lightSpeedInLeft"><a href="#">Contact Us</a></li>
          <li class="wow animate__lightSpeedInLeft"><a href="#">Most Question</a></li>
          <li class="wow animate__lightSpeedInLeft"><a href="#">Our Terms And Conditions</a></li>
        </ul>
      </div>


      <div class="others">

        <div class="social text-larg">
          <p>Socials Methods</p>
          <ul class="wow animate__lightSpeedInRight">
            <li><a href="#"><img
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOAAAADhCAMAAADmr0l2AAAAkFBMVEX////mAAD74uL51NT++Pj1sbH4zMz86Oj50dHuenr98PDzpKT2vLz+8/P//Pz+9vb0qqrwiYnynJzxkZHvfX3rVVXymJjoMDD3xcX62dnsX1/oKSn4x8f1trbuc3PwjIzpPT3qSUntbW3sZWXrU1PpNzfnExPnHBzqR0fnDQ3oMTHpOTnqSEjnGhrrW1vvg4N0eCbMAAAKJ0lEQVR4nNVdZ2PqOgyFUMJu2aMtNAE66H338v//3WsSdpZ1JFv0fC5OTmNLsmal4ggPDW9R8/3Xue/XPK/x4Oq5ttFo1qet7ayaxu570houa23tN4Tx1Oys/mQQS+Fr3K89ar8tEV5/9WnC7YzZeNnQfmtDNOobGrcTPlbdnvbbl6H59gKyOyAYetoc8tEc88gd8Dm9S47e206EXoz3zpM2nxvUAzl2CTa+NqczvL00uxi7zn0oD38iyurrX2s/7fT7neF+te3oq45ulpGC4HMzWjZTfLyp7k7tEtV5Nmat+iJrNy5G0fKBHsU5U+fF5Aav2cr9oXNaPVw4JpZgwRecq2We5eKtrv7w2f1Z7K257PbN3MUX/1J/PXDILcKQy66Wv3bjOfMnXXfsKjWebHmeFy0+yvtZ6GyftjjsdsPCG0Ptb8Fvh07o+Rx6YeHHK/h8Cd4dfETO59uUyPvH/0qX6Fim5zFOX6vs398wWWVr1V3VYdAr9S4tDFeyaNlky28TrMudZ+Zne2SJXqNIwBUiNLiiU2TX1so9ao7S+yiRnDFqtDUtODVKBHg+piarG8mXS5j800hAXYFbI8/1I31hWaX/iN4clmbrfwFLtwT59cCL3z9DnfWGrS7Gj3xADjD8fFQBc8KXED8Pe3xgHDcC+VWrMxF1AfJ7M34Aw+n4ImC3gfzM7SnwAQk+2Qyxx88IYU2ea4fLEJMvG8ITXln8fnYpi18beqaR7XIE23EcMPg9fCBPJHmHuB/wB1uc4DfyPJqXFrFhbrFG+UFRFZrXhCVCTwAviEi8dkcMsgsF3kxtpiv0kSdRkwhk+FHPRQzIQKTygy/RKZBD3j3kKeSspVX5moYIqI9G7Au6H0GMX7U6pj0ZOfwF8ZQcyMjQA0jqFzkbgCSD5FguCAfkCVge0UVyRzDCH/MHb+mrPwP8KgIh8EsY/4+BnYPZ9LL8jLUhcoWA0lpFZUyET7PnhvSVMTcsK9KYCSM/SZ2+7h7iV1mKEzRRxQ/0Vb8xfsJaIsZ7+VOB9BA0rsxN1chCv+yhgI1dumYepvL8qtUyJxTdRRKi/Kx8wbKQBSBh8MIHC2ewWiZn6Otx0h56XVbKTTYKdxT9VMwY/GIsplIZp0cUONUBFSGR6diYihqlBapiQF4M9tjdYCFTkZAg92YI3JIEs//rYls11/Knf0CSk74UTeCalomcTwicQFF+P/DSmbAIciQfXYTCNkwBRZGvmC1Iycvs5Pn9wBcQqZnxGLoRU7dCkJXyd0SWOUP/x1niV6m02ft0lV60SV7Ewgk8AbCJr5G+VNBztSzy+7FumCcxZSLTlbytrM0jeIUZKf8T/WBbrw/nXRdvAwnkHUHJpADBCq7dXHxN86XPcFEThiaxxbheimyG2lHyt6D/38+4NkjJP3dThMJheBUtoe8FV3VEdPV8wmUqInmHSqVqlgNX+Zd7lFwCb9OKuQGWDly98jbQwzwum6TAhul5CbJKDRzyQy7iCc4lpiH1p45k6AFomO1kTNL/RY7LokH38Ml/SE9pdMsPjnUfE6/IcirjOmkXXYzgMfBs1HnpErZ8FfnAErsPten0wiH3ZfuY2X04hHRryDk/VBkm1hr5rgsl/TCB2aTJrZfsjXGrBQ94Rwgmnhlyav2rBkEo5yQW93R3k063PoRgHGeiCygVflj+eiRlyBcud3fBK0CX+8iFT77sOrdjDkDKcCJbhlz9b9vjmwd6fDYR+GSPKFSFIQBEFUbeUfKPVLREBXnTOFBIL5BQa60IxLdfEH+MWrc6JFiB+APU+g8jh/AJuEtq8YO8Tx6Q8qdGsAK0I1oAySN6BIGGPXPAcaxHEGj50qW75D70CAJxijoQCtcjCHiAO/eWXVEIoFRmCBxcPYJA0dH0VxEEOiONfhVBwNweAd0AFAcoIATpHlXFRu0IQfoXVGwMTe82PwUuWS570QoQpAsZFcd2AvK7/rwsXdETS/J1CXYAUw0vN1MgWEccxmr8AEXfRa4gaoNZAFNtjnhy1PQEYGw3kTuW7U7JuQA6XHlIWq1UyRkZQMloGwraaBEEohNY7zst1y/QJqwCefzd58kkoL9plEgCjEtykHGfBWCzReIC6U2nQxCQh1H3DiSVL3/Yh00ARld0mJBiNrD9CBNAOVP0JaD6Eg1+aCMfqEeqxh5F8u/jHyIENTItAC2YlLqGCEP3UVAkOpi0QELSM1wWThyA7NDEfQTlC/91ThDR14lNiXVidp1MAvUoO/wWIhg4Jojk4h1NSqxa1rGmQF7xeDPHWg+5TTqEmgcc61fAcQtOXTPQG55+DfULZzZhpwHaZOdbHdiOx+G9F3q/c1okWs/tzJzBWsydA5mAxziGK4sUahl91bwKbcTjSFVgM5Euo2BoJbCbanqwQPIyEg1XkTrZpNgU8WshD497dhDuBes/r+O0eLNW605gdOTG9YuhctS+ukd6fkcIbtbBe3rLTejKBDrU59YKYfSMsOpDhHsepoZqMaaXWowXwj1W0+Kd08zMWi0MPtMnXekPq8IIlpQF3k0mq8coqxutFYaMVvFZe4rXed7CLuW8UOaCsDUTQzzBi9PPKftlGJoiguRMzgqz03/O4EXeoLxqKDn+l9WDO29oAXvQmlyqLK+ncW7nYeYnFFP5Pd6LDHIX5k+4mEi0bebO0ypwFYVshgL6gjvLp6iImiOajwh5N0SwN84FCpdHR15fYY+LU4EmzcWRS2zoZwqg1m8LTJoqu4DDU9lvMKR/xYbIbIbSiInEQ2IMaGfRB8o7M1DezEdu5mF1a3zHaAyx+E8aBnVHMu3mD1jNy7eqNyS3BcuFiaWBBQLyMekU9NHzli3MrZsNswlQ7CbeaQTjvn9jqDaa9YHU+IUTDI3hUPq5R8yCyWa93kwCaIJxOUwbwUhvUlcwH1HGN5dUQNBLvDbsSiBll/3Vfls6aP36xIc7Wge1QYMFXWEXZHeJhalkNgHcs9kOGpdAIlysYIVjZE7pKcXvETSG42lTkB8jawlwb4ZfIkoZ/mYrUzqlwUrrhJp6ugUzNHn36pCd0yk7M14cAtGQu2YoEu25410qVH8D1f64gFhigJWh1XwIFt/cpcYXnepxf1bbTjiP894s70A84//hru6HVlKp70ghWspvvBtRczs8UQyeVJCLhdBmwc0deIQtdz3D0/Nl8GF9plU71OTnpKcbK0+OhZ2jWqkeL7MURn4OmjgEMxWMEbht+ymVT2MM522W2iJZX6bIS3G1igXSfAHCWqvrri+X4FKAZ8Weu5VX63cMVXoRmlZ1xkptPMkFPGtut5Fao88bPHQsJC380Rp/lI2m8D1joH300nhcip3GtdpopxI81QVyMdfz8gcp4nE+ZpzH2ZtOU0EiGvU1kAT6Mu7ei9A0QXs+Mj+Su83QVxtXxUHb7+8nhS0Xvzdv9ZpEOZAqep7f7U9H4/XmOcZmtR8N692m5+Kr/Q9Qya/cMubPGQAAAABJRU5ErkJggg=="
                  alt=""></a></li>
            <li><a href="#"><img
                  src="data:image/png;base64,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"
                  alt=""></a></li>
            <li><a href="#"><img
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOAAAADhCAMAAADmr0l2AAAAkFBMVEX////mAAD74uL51NT++Pj1sbH4zMz86Oj50dHuenr98PDzpKT2vLz+8/P//Pz+9vb0qqrwiYnynJzxkZHvfX3rVVXymJjoMDD3xcX62dnsX1/oKSn4x8f1trbuc3PwjIzpPT3qSUntbW3sZWXrU1PpNzfnExPnHBzqR0fnDQ3oMTHpOTnqSEjnGhrrW1vvg4N0eCbMAAAKJ0lEQVR4nNVdZ2PqOgyFUMJu2aMtNAE66H338v//3WsSdpZ1JFv0fC5OTmNLsmal4ggPDW9R8/3Xue/XPK/x4Oq5ttFo1qet7ayaxu570houa23tN4Tx1Oys/mQQS+Fr3K89ar8tEV5/9WnC7YzZeNnQfmtDNOobGrcTPlbdnvbbl6H59gKyOyAYetoc8tEc88gd8Dm9S47e206EXoz3zpM2nxvUAzl2CTa+NqczvL00uxi7zn0oD38iyurrX2s/7fT7neF+te3oq45ulpGC4HMzWjZTfLyp7k7tEtV5Nmat+iJrNy5G0fKBHsU5U+fF5Aav2cr9oXNaPVw4JpZgwRecq2We5eKtrv7w2f1Z7K257PbN3MUX/1J/PXDILcKQy66Wv3bjOfMnXXfsKjWebHmeFy0+yvtZ6GyftjjsdsPCG0Ptb8Fvh07o+Rx6YeHHK/h8Cd4dfETO59uUyPvH/0qX6Fim5zFOX6vs398wWWVr1V3VYdAr9S4tDFeyaNlky28TrMudZ+Zne2SJXqNIwBUiNLiiU2TX1so9ao7S+yiRnDFqtDUtODVKBHg+piarG8mXS5j800hAXYFbI8/1I31hWaX/iN4clmbrfwFLtwT59cCL3z9DnfWGrS7Gj3xADjD8fFQBc8KXED8Pe3xgHDcC+VWrMxF1AfJ7M34Aw+n4ImC3gfzM7SnwAQk+2Qyxx88IYU2ea4fLEJMvG8ITXln8fnYpi18beqaR7XIE23EcMPg9fCBPJHmHuB/wB1uc4DfyPJqXFrFhbrFG+UFRFZrXhCVCTwAviEi8dkcMsgsF3kxtpiv0kSdRkwhk+FHPRQzIQKTygy/RKZBD3j3kKeSspVX5moYIqI9G7Au6H0GMX7U6pj0ZOfwF8ZQcyMjQA0jqFzkbgCSD5FguCAfkCVge0UVyRzDCH/MHb+mrPwP8KgIh8EsY/4+BnYPZ9LL8jLUhcoWA0lpFZUyET7PnhvSVMTcsK9KYCSM/SZ2+7h7iV1mKEzRRxQ/0Vb8xfsJaIsZ7+VOB9BA0rsxN1chCv+yhgI1dumYepvL8qtUyJxTdRRKi/Kx8wbKQBSBh8MIHC2ewWiZn6Otx0h56XVbKTTYKdxT9VMwY/GIsplIZp0cUONUBFSGR6diYihqlBapiQF4M9tjdYCFTkZAg92YI3JIEs//rYls11/Knf0CSk74UTeCalomcTwicQFF+P/DSmbAIciQfXYTCNkwBRZGvmC1Iycvs5Pn9wBcQqZnxGLoRU7dCkJXyd0SWOUP/x1niV6m02ft0lV60SV7Ewgk8AbCJr5G+VNBztSzy+7FumCcxZSLTlbytrM0jeIUZKf8T/WBbrw/nXRdvAwnkHUHJpADBCq7dXHxN86XPcFEThiaxxbheimyG2lHyt6D/38+4NkjJP3dThMJheBUtoe8FV3VEdPV8wmUqInmHSqVqlgNX+Zd7lFwCb9OKuQGWDly98jbQwzwum6TAhul5CbJKDRzyQy7iCc4lpiH1p45k6AFomO1kTNL/RY7LokH38Ml/SE9pdMsPjnUfE6/IcirjOmkXXYzgMfBs1HnpErZ8FfnAErsPten0wiH3ZfuY2X04hHRryDk/VBkm1hr5rgsl/TCB2aTJrZfsjXGrBQ94Rwgmnhlyav2rBkEo5yQW93R3k063PoRgHGeiCygVflj+eiRlyBcud3fBK0CX+8iFT77sOrdjDkDKcCJbhlz9b9vjmwd6fDYR+GSPKFSFIQBEFUbeUfKPVLREBXnTOFBIL5BQa60IxLdfEH+MWrc6JFiB+APU+g8jh/AJuEtq8YO8Tx6Q8qdGsAK0I1oAySN6BIGGPXPAcaxHEGj50qW75D70CAJxijoQCtcjCHiAO/eWXVEIoFRmCBxcPYJA0dH0VxEEOiONfhVBwNweAd0AFAcoIATpHlXFRu0IQfoXVGwMTe82PwUuWS570QoQpAsZFcd2AvK7/rwsXdETS/J1CXYAUw0vN1MgWEccxmr8AEXfRa4gaoNZAFNtjnhy1PQEYGw3kTuW7U7JuQA6XHlIWq1UyRkZQMloGwraaBEEohNY7zst1y/QJqwCefzd58kkoL9plEgCjEtykHGfBWCzReIC6U2nQxCQh1H3DiSVL3/Yh00ARld0mJBiNrD9CBNAOVP0JaD6Eg1+aCMfqEeqxh5F8u/jHyIENTItAC2YlLqGCEP3UVAkOpi0QELSM1wWThyA7NDEfQTlC/91ThDR14lNiXVidp1MAvUoO/wWIhg4Jojk4h1NSqxa1rGmQF7xeDPHWg+5TTqEmgcc61fAcQtOXTPQG55+DfULZzZhpwHaZOdbHdiOx+G9F3q/c1okWs/tzJzBWsydA5mAxziGK4sUahl91bwKbcTjSFVgM5Euo2BoJbCbanqwQPIyEg1XkTrZpNgU8WshD497dhDuBes/r+O0eLNW605gdOTG9YuhctS+ukd6fkcIbtbBe3rLTejKBDrU59YKYfSMsOpDhHsepoZqMaaXWowXwj1W0+Kd08zMWi0MPtMnXekPq8IIlpQF3k0mq8coqxutFYaMVvFZe4rXed7CLuW8UOaCsDUTQzzBi9PPKftlGJoiguRMzgqz03/O4EXeoLxqKDn+l9WDO29oAXvQmlyqLK+ncW7nYeYnFFP5Pd6LDHIX5k+4mEi0bebO0ypwFYVshgL6gjvLp6iImiOajwh5N0SwN84FCpdHR15fYY+LU4EmzcWRS2zoZwqg1m8LTJoqu4DDU9lvMKR/xYbIbIbSiInEQ2IMaGfRB8o7M1DezEdu5mF1a3zHaAyx+E8aBnVHMu3mD1jNy7eqNyS3BcuFiaWBBQLyMekU9NHzli3MrZsNswlQ7CbeaQTjvn9jqDaa9YHU+IUTDI3hUPq5R8yCyWa93kwCaIJxOUwbwUhvUlcwH1HGN5dUQNBLvDbsSiBll/3Vfls6aP36xIc7Wge1QYMFXWEXZHeJhalkNgHcs9kOGpdAIlysYIVjZE7pKcXvETSG42lTkB8jawlwb4ZfIkoZ/mYrUzqlwUrrhJp6ugUzNHn36pCd0yk7M14cAtGQu2YoEu25410qVH8D1f64gFhigJWh1XwIFt/cpcYXnepxf1bbTjiP894s70A84//hru6HVlKp70ghWspvvBtRczs8UQyeVJCLhdBmwc0deIQtdz3D0/Nl8GF9plU71OTnpKcbK0+OhZ2jWqkeL7MURn4OmjgEMxWMEbht+ymVT2MM522W2iJZX6bIS3G1igXSfAHCWqvrri+X4FKAZ8Weu5VX63cMVXoRmlZ1xkptPMkFPGtut5Fao88bPHQsJC380Rp/lI2m8D1joH300nhcip3GtdpopxI81QVyMdfz8gcp4nE+ZpzH2ZtOU0EiGvU1kAT6Mu7ei9A0QXs+Mj+Su83QVxtXxUHb7+8nhS0Xvzdv9ZpEOZAqep7f7U9H4/XmOcZmtR8N692m5+Kr/Q9Qya/cMubPGQAAAABJRU5ErkJggg=="
                  alt=""></a></li>
          </ul>
        </div>

        <div class="payments text-larg">
          <p class="" data-wow-duration="10s" data-wow-delay="15s">Payments Methods</p>
          <ul class="wow animate__lightSpeedInRight">
            <li><a href="#"><img
                  src="data:image/png;base64,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"
                  alt=""></a></li>
            <li><a href="#"><img
                  src="data:image/png;base64,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"
                  alt=""></a></li>
            <li><a href="#"><img
                  src="data:image/png;base64,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"
                  alt=""></a></li>
          </ul>
        </div>




      </div>




    </div>






  <!--End----------------------------------------------------------------------------->


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