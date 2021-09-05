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

  <body dir= "{{ App::isLocale('en') ?  'ltr':'rtl' }}"  lang="{{Config::get('app.locale') == 'ar' ?   'ar'   :  "en" }}" class="body">
    <div class="page">

<!-- Start NavBar Section --------------------------------------->

@include('website.custome_widgets.custome_nav_outside')


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

<div class="sectionOurOffers" >
    <div class="title s2">Availble Offers</div>

    <div class="owl-carousel wrapContent" style="margin-bottom: 15px">
       


        @foreach ($offers as $offer)




<div class="item"> 
  <div class="image"><img src="{{asset('storage/offers/'.$offer->image)}}" alt=""></div>
  <div class="price s4">{{ Config::get('app.locale') == 'ar' ?   $offer->price_ar :  $offer->price_en }}</div>
  <div class="desc s6">{{ Config::get('app.locale') == 'ar' ?   $offer->desc_ar :  $offer->desc_en }}</div>
  <a href="{{URL::to('offersubmit/'.$offer->id)}}" class="btn" >{{ Config::get('app.locale') == 'ar' ?   'شراء' : 'Buy'}}</a>
</div>  




    
@endforeach


       
        
        

      </div>
      
</div>


<!-- End OurMessage Section --------------------------------------->

<!-- Start Footer Section --------------------------------------->

@include('website.custome_widgets.footer')

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