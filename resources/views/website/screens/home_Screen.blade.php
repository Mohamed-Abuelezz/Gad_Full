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

  <body dir="{{ App::isLocale('en') ?  'ltr':'rtl' }}" lang="{{Config::get('app.locale') == 'ar' ?   'ar'   :  "en" }}" class="body">
      

<div class="page">


<!-- Start NavBar Section --------------------------------------->


@include('website.custome_widgets.custome_nav_Inside')




<!-- End NavBar Section --------------------------------------->

<!-- Start Search Section --------------------------------------->

<div class="sectionSearch wrapContent">

    <div class="sectionSearchBar">
        <ul>
            <li class="title s4"><p>{{ __('website_screens/homescreen.advanced_search') }}</p> </li>
            <li>
                <div class="dropdown myDropDown country-drop">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('website_screens/homescreen.country_search') }}
                    </button>
                    <ul class="dropdown-menu country-ul" aria-labelledby="dropdownMenuButton1">

                        @foreach ($countries as $countrie)
                       
                        <li><a class="dropdown-item" href="#" data-id="{{$countrie->id}}" >{{ Config::get('app.locale') == 'ar' ?    $countrie->name_ar   :  $countrie->name_en}}</a></li>

                          @endforeach


                    </ul>
                  </div>
                  
            </li>  
            <li>
                <div class="dropdown myDropDown profileKind-drop">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('website_screens/homescreen.kindprofile_search') }}  
                    </button>
                    <ul class="dropdown-menu profile-ul" aria-labelledby="dropdownMenuButton1">
                        @foreach ($subscribersType as $subscriberType)
                       
                        <li><a class="dropdown-item" href="#" data-id="{{$subscriberType->id}}" >{{Config::get('app.locale') == 'ar' ? $subscriberType->title_ar :  $subscriberType->title_en}}</a></li>

                          @endforeach

                    </ul>
                  </div>
                  
            </li>  
             <li>
                <div class="dropdown myDropDown Educationstages-drop">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('website_screens/homescreen.edustages_search') }}  
                    </button>
                    <ul class="dropdown-menu stages_ul" aria-labelledby="dropdownMenuButton1">

                        @foreach ($educationsStages as $educationStage)
                       
                        <li><a class="dropdown-item" href="#" data-id="{{$educationStage->id}}" >{{ Config::get('app.locale') == 'ar' ?   $educationStage->title_ar  :  $educationStage->title_en}}</a></li>

                          @endforeach

                    </ul>
                </div>
                  
            </li>
            <li>
                <div class="dropdown myDropDown   scientificArticle-drop">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
           {{ __('website_screens/homescreen.articals_search') }}  
                    </button>
                    <ul class="dropdown-menu artical_ul" aria-labelledby="dropdownMenuButton1">
                       @foreach ($scientificArticles as $scientificArticle)
                       
                        <li><a class="dropdown-item" href="#" data-id="{{$scientificArticle->id}}" >{{Config::get('app.locale') == 'ar' ?   $scientificArticle->title_ar  :  $scientificArticle->title_en}}  [{{ Config::get('app.locale') == 'ar' ?  $scientificArticle->educationsStages->title_ar  : $scientificArticle->educationsStages->title_en}}] </a></li>

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
            <a href="#" class="activeSelect active"  id="pills-map-tab" data-bs-toggle="tab" data-bs-target="#pills-map" type="button" role="tab" aria-controls="pills-map" aria-selected="true"><i class="fas fa-map-marked-alt"></i> {{ __('website_screens/homescreen.map') }} </a>
        </li>
        <li><i class="fas fa-atom" style="color: white;padding: 10px;"></i></li>
        <li class="" role="presentation">
            <a href="#" id="pills-cards-tab" data-bs-toggle="tab" data-bs-target="#pills-cards" type="button" role="tab" aria-controls="pills-cards" aria-selected="false"><i class="fas fa-address-card"></i>  {{ __('website_screens/homescreen.cards') }}  </a>
        </li>
      </ul>







</div>



<!-- End TabBar Section --------------------------------------->




<!-- Start CardsAndMap Section --------------------------------------->


<div class="sectionTeachers ">
  

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
    >{{ __('website_screens/homescreen.noData') }}  😭</div>

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
                                    <span class="s6">{{Config::get('app.locale') == 'ar' ?  $profilesOffersSubscriber->profiles->subscribersType->title_ar  : $profilesOffersSubscriber->profiles->subscribersType->title_en}}</span>

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
                                          <button class="nav-link active" id="home-tab_{{$loop->index}}" data-bs-toggle="tab" data-bs-target="#home_{{$loop->index}}" type="button" role="tab" aria-controls="home_{{$loop->index}}" aria-selected="true">{{ __('website_screens/homescreen.biography') }}</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="profile-tab_{{$loop->index}}" data-bs-toggle="tab" data-bs-target="#profile_{{$loop->index}}" type="button" role="tab" aria-controls="profile_{{$loop->index}}" aria-selected="false">{{ __('website_screens/homescreen.stages') }}</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="contact-tab_{{$loop->index}}" data-bs-toggle="tab" data-bs-target="#contact_{{$loop->index}}" type="button" role="tab" aria-controls="contact_{{$loop->index}}" aria-selected="false">{{ __('website_screens/homescreen.articles') }}</button>
                                        </li>
                                      </ul>
                                      <div class="tab-content" id="myTabContent" style="padding: 15px;text-align: center">
                                        <div class="tab-pane fade show active" id="home_{{$loop->index}}" role="tabpanel" aria-labelledby="home-tab_{{$loop->index}}" style="padding: 0px;  word-wrap: break-word;text-align:center">{{substr($profilesOffersSubscriber->profiles->person_bio, 0, 200) . '...'}}</div>
                                        <div class="tab-pane fade" id="profile_{{$loop->index}}" role="tabpanel" aria-labelledby="profile-tab_{{$loop->index}}">
                                      
                                            <div class="container">

                                                <div class="row">
                                                    @foreach ($profilesOffersSubscriber->profiles->profileEducationStages as $profileEducationStage)

                                                    @if ($loop->index < 4)
                                            
                                                    <div class="col-6" style="padding: 4px;font-size: 10px;font-weight: bold">

                                                        {{Config::get('app.locale') == 'ar' ?  $profileEducationStage->educationsStages->title_ar  : $profileEducationStage->educationsStages->title_en}}

                                             

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

                                                        {{Config::get('app.locale') == 'ar' ? $scientificArticle->scientificArticles->title_ar  :  $scientificArticle->scientificArticles->title_en}} 

                                             

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
                        <a href="{{URL::to('profile/'.$profilesOffersSubscriber->profiles->id)}}" class="btn more-btn" >{{Config::get('app.locale') == 'ar' ?  'المزيد' :"More"}}</a>
                    </div>
                                    </div>

                  
            </div>   



              @endforeach


              @endif



                </div>

                <nav aria-label="Page navigation example"style="width: 150px;margin: auto;" >
    
                    {{ $profilesOffersSubscribers->links() }}
        
        
                  </nav>
                  
            </div>  
            
           

        </div>

       




    
    </div>



    <div class="teacher-map   tab-pane fade show active" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab"> 
        
    
        <div class="wrapContent" id="map"></div>
    
    
    
    
    
    </div>
</div>

      


</div>



<!-- Start Footer Section --------------------------------------->

@include('website.custome_widgets.footer')

<!-- End Footer Section --------------------------------------->



</div>




    <!-- packages js -->
    <script src="{{asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('website_assets/packages/jquery/jquery.js') }}"></script>
    <script src="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
    <script src="{{asset('website_assets/packages/jQuery-autoComplete-master/jquery.auto-complete.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhwUPb_bGJzGj0Wnj89dcnU5NZQhGx9jY&callback=initMap&libraries=&v=weekly"
    async
  ></script>







    <!-- my js -->
<script>
 var domain =   "{!! url('/')  !!}";
var lang = "{!! App::currentLocale()  !!}";

console.log('current Language is >>> '+lang);

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