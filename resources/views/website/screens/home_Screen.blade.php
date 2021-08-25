<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta data-for-external-file="@json(['profiles' => '{{$profiles}}'])">


    <!-- Packages CSS -->
    <link href="{{ asset('website_assets/packages/bootstrap-5.0.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }} rel="stylesheet">
    <link href="{{asset('website_assets/packages/fontawesome-free-5.15.3-web/css/all.min.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/packages/jQuery-autoComplete-master/jquery.auto-complete.css') }}" rel="stylesheet">


    <!-- My CSS -->
    <link href="{{asset('website_assets/css/GLOBAL_Configs.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/css/GLOBAL_ELEMENTS.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/css/Custome_Components.css') }}" rel="stylesheet">
        <link href="{{asset('website_assets/css/home_Screen.css') }}" rel="stylesheet">


    <title>GAD</title>
  </head>

  <body dir="ltr" lang="en" class="body">
      

<div class="page">


<!-- Start NavBar Section --------------------------------------->


@include('website.custome_widgets.custome_nav_Inside')




<!-- End NavBar Section --------------------------------------->

<!-- Start Search Section --------------------------------------->

<div class="sectionSearch wrapContent">

    <div class="sectionSearchBar">
        <ul>
            <li class="title s4"><p>Advanced Search</p> </li>
            <li>
                <div class="dropdown myDropDown country-drop">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                     Country
                    </button>
                    <ul class="dropdown-menu country-ul" aria-labelledby="dropdownMenuButton1">

                        @foreach ($countries as $countrie)
                       
                        <li><a class="dropdown-item" href="#" data-id="{{$countrie->id}}" >{{$countrie->name_en}}</a></li>

                          @endforeach


                    </ul>
                  </div>
                  
            </li>  
            <li>
                <div class="dropdown myDropDown profileKind-drop">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Profile Kind 
                    </button>
                    <ul class="dropdown-menu profile-ul" aria-labelledby="dropdownMenuButton1">
                        @foreach ($subscribersType as $subscriberType)
                       
                        <li><a class="dropdown-item" href="#" data-id="{{$subscriberType->id}}" >{{$subscriberType->title_en}}</a></li>

                          @endforeach

                    </ul>
                  </div>
                  
            </li>  
             <li>
                <div class="dropdown myDropDown Educationstages-drop">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Education Stages 
                    </button>
                    <ul class="dropdown-menu stages_ul" aria-labelledby="dropdownMenuButton1">

                        @foreach ($educationsStages as $educationStage)
                       
                        <li><a class="dropdown-item" href="#" data-id="{{$educationStage->id}}" >{{$educationStage->title_en}}</a></li>

                          @endforeach

                    </ul>
                </div>
                  
            </li>
            <li>
                <div class="dropdown myDropDown   scientificArticle-drop">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Scientific Article
                    </button>
                    <ul class="dropdown-menu artical_ul" aria-labelledby="dropdownMenuButton1">
                       @foreach ($scientificArticles as $scientificArticle)
                       
                        <li><a class="dropdown-item" href="#" data-id="{{$scientificArticle->id}}" >{{$scientificArticle->title_en}}  [{{$scientificArticle->educationsStages->title_en}}] </a></li>

                          @endforeach
                    </ul>
                  </div>
                  
            </li>
        
        </ul>
    </div>


</div>


<!-- End Search Section --------------------------------------->


<!-- Start TabBar Section --------------------------------------->

<div class="sectionTaps">

    <ul class="nav mb-3" id="pills-tab" role="tablist">
        <li class="" role="presentation">
            <a href="#" class="activeSelect active"  id="pills-map-tab" data-bs-toggle="tab" data-bs-target="#pills-map" type="button" role="tab" aria-controls="pills-map" aria-selected="true"><i class="fas fa-map-marked-alt"></i>  Map  </a>
        </li>
        <li><i class="fas fa-atom" style="color: white;padding: 10px;"></i></li>
        <li class="" role="presentation">
            <a href="#" id="pills-cards-tab" data-bs-toggle="tab" data-bs-target="#pills-cards" type="button" role="tab" aria-controls="pills-cards" aria-selected="false"><i class="fas fa-address-card"></i>  Cards  </a>
        </li>
      </ul>







</div>



<!-- End TabBar Section --------------------------------------->




<!-- Start CardsAndMap Section --------------------------------------->


<div class="sectionTeachers ">
    <div class="search-arrange wrapContent" >
        <ul>
            <li>
                <div class="dropdown myDropDown " id="orderBy">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Order-By <i class="fas fa-sort"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">Teacher</a></li>
                      <li><a class="dropdown-item" href="#">Center</a></li>
                      <li><a class="dropdown-item" href="#">Courses</a></li>
                    </ul>
                  </div>

        
            </li>
            <li><input class="input-textfield s7" type="text" id="search" placeholder="Search By Names...">
            </li>
        </ul>
    </div>

    <div class="tab-content"  id="pills-tabContent">
    <div class="teacher-cards tab-pane fade" id="pills-cards" role="tabpanel" aria-labelledby="pills-cards-tab">



<div class="cards-container wrapContent">

    <div class="container-fluid">
        <div class="row justify-content-around">

   
@if ($profilesOffersSubscribers->isEmpty())
    
<div class="conentEmpety" style="height: 100vh;position:relative;">

    <div style=
    "position:absolute;
    left:50%;
    font-size: 20px;
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);"
    >List Is Empety 😭</div>

</div>


@else
    


            @foreach ($profilesOffersSubscribers as $profilesOffersSubscriber)
                       

            <div class="col-lg-4 col-12">
                <div class='square'>
                    <div class="card-headerr">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-6">
                                    <img src="{{asset('storage/users_images/'.$profilesOffersSubscriber->profiles->user->image) }}"/>
                                </div>
                             
                                <div class="col-6">
                                    <p class="s6">{{$profilesOffersSubscriber->profiles->display_name}}</p>
                                    <span class="s6">{{$profilesOffersSubscriber->profiles->subscribersType->title_en}}</span>

                                    <div class="stars">

                                      @php

                                      @endphp
         

                        @for ($i = 0; $i < 5; $i++)

                       @if ($i < $profilesOffersSubscriber->profiles->profileRates->avg('rate'))

                        <span class="fas fa-star checked"></span>

                        @else

                        <span class="fas fa-star"></span>

                       @endif

                          @endfor
                                     {{count($profilesOffersSubscriber->profiles->profileRates)}}
                                        
                                    </div>
                                   
                                </div>
                                
                            </div>
                        </div>

                    
                    </div>
                    <hr style="margin-bottom: 0">

                                <div class="card-contentt">


                                    <ul class="nav nav-tabs" id="myTab" role="tablist" style="display: flex;justify-content: space-between">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="home-tab_{{$loop->index}}" data-bs-toggle="tab" data-bs-target="#home_{{$loop->index}}" type="button" role="tab" aria-controls="home_{{$loop->index}}" aria-selected="true">Biography</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="profile-tab_{{$loop->index}}" data-bs-toggle="tab" data-bs-target="#profile_{{$loop->index}}" type="button" role="tab" aria-controls="profile_{{$loop->index}}" aria-selected="false"> Stages</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="contact-tab_{{$loop->index}}" data-bs-toggle="tab" data-bs-target="#contact_{{$loop->index}}" type="button" role="tab" aria-controls="contact_{{$loop->index}}" aria-selected="false"> Articles</button>
                                        </li>
                                      </ul>
                                      <div class="tab-content" id="myTabContent" style="padding: 15px;text-align: center">
                                        <div class="tab-pane fade show active" id="home_{{$loop->index}}" role="tabpanel" aria-labelledby="home-tab_{{$loop->index}}">{{substr($profilesOffersSubscriber->profiles->person_bio, 0, 175) . '...'}}</div>
                                        <div class="tab-pane fade" id="profile_{{$loop->index}}" role="tabpanel" aria-labelledby="profile-tab_{{$loop->index}}">
                                      
                                            <div class="container">

                                                <div class="row">
                                                    @foreach ($profilesOffersSubscriber->profiles->profileEducationStages as $profileEducationStage)

                                                    @if ($loop->index < 4)
                                            
                                                    <div class="col-6" style="padding: 4px;font-size: 10px;font-weight: bold">

                                                        {{$profileEducationStage->educationsStages->title_en}}

                                             

                                            </div>
                                         
                                
                                            @else
                                ...
                                            @break
                                            @endif  
                                
                                              @endforeach        
                                            </div>
                                        </div>



                                        </div>
                                        <div class="tab-pane fade" style="overflow-wrap: break-word" id="contact_{{$loop->index}}" role="tabpanel" aria-labelledby="contact-tab_{{$loop->index}}">
                                    
                                            <div class="container">

                                                <div class="row">
                                            @foreach ($profilesOffersSubscriber->profiles->profileScientificArticles as $scientificArticle)

                                            @if ($loop->index < 6)
                                            
                                                    <div class="col-6" style="padding: 4px;font-size: 10px;font-weight: bold">

                                                        {{$scientificArticle->scientificArticles->title_en}} 

                                             

                                            </div>
                                         
                                
                                            @else
                                ...
                                            @break
                                            @endif  
                                
                                              @endforeach        
                                            </div>
                                    
                                        </div>

                                    
                                        </div>
                                      </div>
                                      




                                </div>

                    <div class="more">
                        <a href="./profile_Screen.html" class="btn more-btn" >More</a>
                    </div>
                                    </div>

                  
            </div>   



              @endforeach


              @endif



                </div>

                  
            </div>  
            
           

        </div>

       



        <nav aria-label="Page navigation example"style="width: 150px;;margin: auto;" >
    
            {{ $profilesOffersSubscribers->links() }}


          </nav>
    
    </div>



    <div class="teacher-map   tab-pane fade show active" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab"> 
        
    
        <div class="wrapContent" id="map"></div>
    
    
    
    
    
    </div>
</div>

      


</div>



<!-- Start Footer Section --------------------------------------->

<div class="sectionFooter">

    <div class="container-fluid wrapContent">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="title s5">Payments Methods</div>
                <ul>
                    <li><img src="https://www.csregypt.com/wp-content/uploads/2021/04/mastercard-1.png"/></li>
                    <li><img src="https://www.csregypt.com/wp-content/uploads/2021/04/mastercard-1.png"/></li>
                    <li><img src="https://www.csregypt.com/wp-content/uploads/2021/04/mastercard-1.png"/></li>
                    <li><img src="https://www.csregypt.com/wp-content/uploads/2021/04/mastercard-1.png"/></li>
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



</div>




    <!-- packages js -->
    <script src="{{asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('website_assets/packages/jquery/jquery.js') }}"></script>
    <script src="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
    <script src="{{asset('website_assets/packages/jQuery-autoComplete-master/jquery.auto-complete.min.js') }}"></script>
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhwUPb_bGJzGj0Wnj89dcnU5NZQhGx9jY&callback=initMap&libraries=&v=weekly"
    async
  ></script>







    <!-- my js -->
<script>
 var domain =   "{!! url('/')  !!}";

var profiles = 
   [
    @foreach ($profilesOffersSubscribers_all as $profilesOffersSubscriber)
    
   // json_encode($profilesOffersSubscriber)
{!! json_encode($profilesOffersSubscriber->profiles) !!},
    @endforeach
    ];

var profiles_images =[
    @foreach ($profilesOffersSubscribers_all as $profilesOffersSubscriber)

    "{{asset('storage/users_images/'.$profilesOffersSubscriber->profiles->user->image)}}" , 

    @endforeach

] 

var profiles_avg = 
   [
    @foreach ($profilesOffersSubscribers_all as $profilesOffersSubscriber)
    
{!! $profilesOffersSubscriber->profiles->profileRates->avg('rate') !!},
    @endforeach
    ];


console.log(profiles_avg);

</script>




    <script src="{{asset('website_assets/js/GLOBAL_Configs.js') }}"></script>
    <script src="{{asset('website_assets/js/GLOBAL_ELEMENTS.js') }}"></script>
    <script src="{{asset('website_assets/js/Custome_Components.js') }}"></script>
    <script src="{{asset('website_assets/js/home_Screen.js') }}"></script>


  </body>
</html>