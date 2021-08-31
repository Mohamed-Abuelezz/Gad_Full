<!doctype html>
<html lang="{{ config('app.locale') }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

@if (Auth::id() == $profilesOffersSubscribers->profiles->user->id)
<div class="alert alert-info" role="alert">
    <strong>{{Config::get('app.locale') == 'ar' ?   ' : يتبقي علي نهاية الاشتراك'   :  "It remains until the end of the subscription : " }}</strong> <p id="demo"></p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

  </div>
@endif


      
<!-- Start NavBar Section --------------------------------------->


@if (Auth::guest())

@include('website.custome_widgets.custome_nav_outside')

@else

@include('website.custome_widgets.custome_nav_Inside')

@endif



<!-- End NavBar Section --------------------------------------->

<!-- Start Image-Profile Section --------------------------------------->
<div class="sectionImageAndBio">
    <div class="image-profile" style="background-image:url('{{asset('storage/CoverProfiles/'.$profilesOffersSubscribers->profiles->cover_image) }}')">


        <img src="{{asset('storage/users_images/'.$profilesOffersSubscribers->profiles->user->image) }}" alt="image person" >
        
        </div>
<div class="bio wrapContent s5">

{{$profilesOffersSubscribers->profiles->person_bio}}
</div>        
</div>

<!-- End Image-Profile Section --------------------------------------->

<!-- Start Details Section --------------------------------------->
<div class="sectionDetails wrapContent">

    <div class="details-container ">

        <nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">

                        <div class="nav nav-tabs " id="nav-tab" role="tablist">
                            <button class="nav-link s7 active" id="nav-profileDetails-tab" data-bs-toggle="tab" data-bs-target="#nav-profileDetails" type="button" role="tab" aria-controls="nav-profileDetails" aria-selected="true">{{Config::get('app.locale') == 'ar' ? 'البيانات' : 'Profile Details' }}</button>
                            <button class="nav-link s7" id="nav-moreDetails-tab" data-bs-toggle="tab" data-bs-target="#nav-moreDetails" type="button" role="tab" aria-controls="nav-moreDetails" aria-selected="false">{{Config::get('app.locale') == 'ar' ? 'تفاصيل اكثر' : 'More Details' }}</button>
                            <button class="nav-link s7" id="nav-specialization-tab" data-bs-toggle="tab" data-bs-target="#nav-specialization" type="button" role="tab" aria-controls="nav-specialization" aria-selected="false">{{Config::get('app.locale') == 'ar' ?  'التخصصات' : 'Specialization' }}</button>
                            <button class="nav-link s7" id="nav-location-tab" data-bs-toggle="tab" data-bs-target="#nav-location" type="button" role="tab" aria-controls="nav-location" aria-selected="false">{{Config::get('app.locale') == 'ar' ?  'الموقع' : 'Location' }}</button>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 mt-3 mt-md-0" >
                        <div class="views-country s7">
                            <ul>
                                <li><i class="fas fa-heart" style="color: white;"></i></li>
                                <li> {{$countFavouritesProfile}}</li>
                            </ul>
                            <ul>
                                <li><i class="fas fa-eye" style="color: white;"></i></li>
                                <li>{{$countViewsProfile}}</li>
                            </ul>
                            <ul>
                                <li><i class="fas fa-flag" style="color: white;"></i></li>
                                <li>{{Config::get('app.locale') == 'ar' ?  $profilesOffersSubscribers->profiles->user->countries->name_ar : $profilesOffersSubscribers->profiles->user->countries->name_en }}</li>
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
@if (Config::get('app.locale') == 'ar')
<p class="s5"> <i class="fas fa-signature" style="color: white;"> </i> &emsp; {{$profilesOffersSubscribers->profiles->display_name}} </p>                 
<p class="s5"><i class="fas fa-briefcase" style="color: white;"> </i> &emsp;   {{$profilesOffersSubscribers->profiles->subscribersType->title_ar}} </p>                 
<p class="s5"><i class="fas fa-map-marked-alt" style="color: white;">  </i>&emsp;  {{$profilesOffersSubscribers->profiles->address}} </p>                 
<p class="s5"><i class="fas fa-mobile-alt" style="color: white;"> </i> &emsp;   {{$profilesOffersSubscribers->profiles->mobile_number}}</p>                 
<p class="s5"><i class="fas fa-at" style="color: white;"> </i>&emsp;   {{$profilesOffersSubscribers->profiles->user->email}}</p>                 

@else
    
<p class="s5"><i class="fas fa-signature" style="color: white;"> &emsp;  {{$profilesOffersSubscribers->profiles->display_name}}</i></p>                 
<p class="s5"><i class="fas fa-briefcase" style="color: white;">  &emsp;   {{$profilesOffersSubscribers->profiles->subscribersType->title_en}}</i></p>                 
<p class="s5"><i class="fas fa-map-marked-alt" style="color: white;">  &emsp; {{$profilesOffersSubscribers->profiles->address}}</i></p>                 
<p class="s5"><i class="fas fa-mobile-alt" style="color: white;">  &emsp;  {{$profilesOffersSubscribers->profiles->mobile_number}}</i></p>                 
<p class="s5"><i class="fas fa-at" style="color: white;">  &emsp;  {{$profilesOffersSubscribers->profiles->user->email}}</i></p>                 



@endif


                            </div>

                            <div class="col-12 col-md-6">
                                <div class="ratingBox">
    
                                    <div class="stars s6">

                                        @for ($i = 0; $i < 5; $i++)

                                        @if ($i < 5)
                 
                                         <span class="fas fa-star checked"></span>
                 
                                         @else
                 
                                         <span class="fas fa-star"></span>
                 
                                        @endif
                 
                                           @endfor
                 
                                      &emsp;
                                        {{ $RatesProfile['fiveStar_rates_count']}}
                                    </div>

                                    <div class="stars s6">
                                        @for ($i = 0; $i < 5; $i++)

                                        @if ( $i < 4 )
                 
                                         <span class="fas fa-star checked"></span>
                 
                                         @else
                 
                                         <span class="fas fa-star"></span>
                 
                                        @endif
                 
                                           @endfor
                 
                                      &emsp;
                                        {{ $RatesProfile['fourStar_rates_count']}}
                                    </div>
                                    <div class="stars s6">
                                        @for ($i = 0; $i < 5; $i++)

                                        @if ( $i < 3)
                 
                                         <span class="fas fa-star checked"></span>
                 
                                         @else
                 
                                         <span class="fas fa-star"></span>
                 
                                        @endif
                 
                                           @endfor
                 
                                      &emsp;
                                        {{ $RatesProfile['threeStar_rates_count']}}
                                    </div>
                                    <div class="stars s6">
                                        @for ($i = 0; $i < 5; $i++)

                                        @if ( $i < 2)
                 
                                         <span class="fas fa-star checked"></span>
                 
                                         @else
                 
                                         <span class="fas fa-star"></span>
                 
                                        @endif
                 
                                           @endfor
                 
                                      &emsp;
                                        {{ $RatesProfile['twoStar_rates_count']}}
                                    </div>
                                    <div class="stars s6">
                                        @for ($i = 0; $i < 5; $i++)

                                        @if ( $i < 1)
                 
                                         <span class="fas fa-star checked"></span>
                 
                                         @else
                 
                                         <span class="fas fa-star"></span>
                 
                                        @endif
                 
                                           @endfor
                 
                                      &emsp;
                                        {{ $RatesProfile['oneStar_rates_count']}}
                                    </div>
<br>
<br>
                                    <div class="total-rates">
                                        @if (Config::get('app.locale') == 'ar')
                                            
                                        متوسط التقييمات : {{ $RatesProfile['totalStarsRates_avg']}} <span class="fas fa-star "style="color: var(--thirdColor);"></span>

                                        @else
                                              Average Rate  :      {{ $RatesProfile['totalStarsRates_avg']}}  <span class="fas fa-star "style="color: var(--thirdColor);"></span>

                                        @endif
                                    </div>


                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="nav-moreDetails" role="tabpanel" aria-labelledby="nav-moreDetails-tab">


                  
                    <div class="moreDetails" style="text-align: center;padding: 10px">
{{$profilesOffersSubscribers->profiles->education_bio}}
                    </div>
                                        






            </div>
            <div class="tab-pane fade" id="nav-specialization" role="tabpanel" aria-labelledby="nav-specialization-tab">


                <div class="specialization">
                    <section>
                        <h1 class="s5" style="font-family: myFontsBold;"> <i class="fas fa-school" style="color: white;"></i>  {{Config::get('app.locale') == 'ar' ? 'المراحل التعليمية' : 'Educational Stages'}}</h1>
                    
                        <ol>
                            @foreach ($profilesOffersSubscribers->profiles->profileEducationStages as $profileEducationStage)
                           
                            <li>                  
                                 {{Config::get('app.locale') == 'ar' ?  $profileEducationStage->educationsStages->title_ar  : $profileEducationStage->educationsStages->title_en}}
                            </li>

                            @endforeach
                        </ol>
                    </section>
                    <section>
                        <h1 class="s5" style="font-family: myFontsBold;"> <i class="fas fa-user-graduate" style="color: white;"></i>  {{Config::get('app.locale') == 'ar' ? 'المواد العلمية' : 'Specialized materials'}}</h1>
                    
                        <ol>

                            @foreach ($profilesOffersSubscribers->profiles->profileScientificArticles as $scientificArticle)

                            <li>   
                                  {{Config::get('app.locale') == 'ar' ? $scientificArticle->scientificArticles->title_ar  :  $scientificArticle->scientificArticles->title_en}} [{{Config::get('app.locale') == 'ar' ? $scientificArticle->scientificArticles->educationsStages->title_ar  :  $scientificArticle->scientificArticles->educationsStages->title_en}}]
                            </li>

                            

                            @endforeach



                        </ol>
                    </section>
                                        
                </div>






            </div>



            <div class="tab-pane fade" id="nav-location" role="tabpanel" aria-labelledby="nav-location-tab">

                <div class="wrapContent" id="map" style="width: 100% ; height:200px;margin:5px">

                    

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
          <label class="s4"> {{Config::get('app.locale') == 'ar' ? 'التعليقات' : 'Comments' }}</label>
        </div>
        <div class="commentBox">
            
                <div class="rating" data-rate-value='5' style="font-size: 30px" ></div>
                    </div>
        <div class="actionBox">
            <ul class="commentList">

@foreach ($profilesOffersSubscribers->profiles->commentsProfiles->reverse() as $comment)
    
<li>
    <div class="commenterImage">
      <img src=" {{asset('storage/users_images/'.$comment->user->image) }}" />
    </div>
    <div class="commentText">
        <p style="color: var(--secondryColor);font-weight:bold">{{$comment->user->name}}</p>
        <p class="">{{$comment->comment}}</p> <span class="date sub-text">{{ Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</span> 

    </div>
</li>



@endforeach


            </ul>
            <form class="form-inline" role="form" action="{{URL::to('/profile/addComment')}}" method="post">
            @csrf
            <input class="form-control" type="hidden" placeholder="Your comments" name='user_id' value="{{ Auth::id() }}" style="width: 0"/>
            <input class="form-control" type="hidden" placeholder="Your comments" name='profile_id' style="width: 0" value="{{$profilesOffersSubscribers->profiles->id}}"/>

                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Your comments" name='comment'/>
                </div>
                <div class="form-group">
                    <button class="btn btn-default s5"  type="submit">{{Config::get('app.locale') == 'en' ?  ' Comment'  :  ' تعليق'}}</button>
                </div>
            </form>
        </div>
    </div>




</div>






<!-- End Comments Section --------------------------------------->



<!-- End Details Section --------------------------------------->



<!-- Start Footer Section --------------------------------------->

@include('website.custome_widgets.footer')


<!-- End Footer Section --------------------------------------->



<!-- Start FloatButton Section --------------------------------------->


  
  
  <div id="circularMenu1" class="circular-menu circular-menu-left active">
  
    <a class="floating-btn" onclick="document.getElementById('circularMenu1').classList.toggle('active');">
      <i class="fa fa-bars"></i>
    </a>

    <input type="hidden" id="copyTarget" value="{{Request::url()}}">

    <menu class="items-wrapper">
      <a href="#" class="menu-item fas fa-share-alt" id="shareProfile" ></a>
      <a href="#" class="menu-item fas fa-heart" id="favouriteProfile"></a>
      <a href="#" class="menu-item fab fa-whatsapp" id="whatsupProfile"></a>
      <a href="#" class="menu-item fas fa-envelope-open-text"></a>

    </menu>
  
  </div>

<!-- End FloatButton Section --------------------------------------->







</div>

<div class="myToast_success" style="position: fixed;bottom:20px;right:20px">

    <div class="toast" id='myToastEl_success' role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <strong class="me-auto">{{Config::get('app.locale') == 'ar' ? 'تم بنجاح': 'Success'}}</strong>
          <small>1 s</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" style="color: green" id="toast_body">
            {{Config::get('app.locale') == 'ar' ? 'تم ارسال التقييم الخاص بك بنجاح': 'Your rate has been sent successfully'}}
         
        </div>
      </div>

      
</div>
<div class="myToast_error" style="position: fixed;bottom:20px;right:20px">

    <div class="toast" id='myToastEl_error' role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <strong class="me-auto">{{Config::get('app.locale') == 'ar' ? 'تم بنجاح': 'Success'}}</strong>
          <small>1 s</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" style="color: red">
            {{Config::get('app.locale') == 'ar' ? 'يرجي تسجيل الدخول اولا !': 'You have to login first !'}}
         
        </div>
      </div>

      
</div>

<div class="myToast_time" style="position: fixed;bottom:20px;right:20px">

    <div class="toast" id='myToastEl_error' role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <strong class="me-auto">{{Config::get('app.locale') == 'ar' ? 'تم بنجاح': 'Success'}}</strong>
          <small>1 s</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" style="color: red">
            {{Config::get('app.locale') == 'ar' ? 'يرجي تسجيل الدخول اولا !': 'You have to login first !'}}
         
        </div>
      </div>

      
</div>


    <!-- packages js -->
    <script src="{{asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('website_assets/packages/jquery/jquery.js') }}"></script>
    <script src="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhwUPb_bGJzGj0Wnj89dcnU5NZQhGx9jY&callback=initMap&libraries=&v=weekly"
    async
  ></script>

  <script src="{{asset('website_assets/packages/auxiliary-rater-80dd707/rater.min.js') }}"></script>


    <!-- my js -->
    <script>
        var profile_url = "{!! Request::url() !!}";
        var domain =   "{!! url('/')  !!}";
        var user_id = {!! Auth::id() != null ? Auth::id() : 1000000000000 !!};

        var profiles = {!! $profilesOffersSubscribers->profiles !!};

        console.log(user_id);

        console.log(profiles);


        </script>




<script>
    // Set the date we're counting down to
    var countDownDate = new Date("{!! $profilesOffersSubscribers->finished_at !!}").getTime();
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now = new Date().getTime();
        
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
        
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // Output the result in an element with id="demo"
      document.getElementById("demo").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED : Please renew your subscription until it becomes available to everyone again";
      }
    }, 1000);
    </script>
    






    <script src="{{asset('website_assets/js/GLOBAL_Configs.js') }}"></script>
    <script src="{{asset('website_assets/js/GLOBAL_ELEMENTS.js') }}"></script>
    <script src="{{asset('website_assets/js/profile_Screen.js') }}"></script>




  </body>
</html>