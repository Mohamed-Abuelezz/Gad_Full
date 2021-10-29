<!doctype html>
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
    <link rel="stylesheet"
        href="{{ URL::asset('website_assets/packages/fontawesome-free-5.15.3-web/css/all.min.css') }}  ">
    <!--All Screen Css-->

    <link rel="stylesheet" href=" {{ URL::asset('website_assets/packages/slick-master/slick/slick.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset('website_assets/packages/slick-master/slick/slick-theme.css') }}">


    <!--Css Screen-->
    <link rel="stylesheet" href=" {{ URL::asset('website_assets/css/utilis.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('website_assets/css/globalElements.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('website_assets/css/index.css') }}">


</head>

<body  lang="{{ Config::get('app.locale') }}">

    <!-- Splash Screen-->

    <div id="splash">

        <div class="loader">
            <div class="inner one"></div>
            <div class="inner two"></div>
            <div class="inner three"></div>
        </div>

    </div>





    <div class="body-content">


        <!-- NavBar Section----------------------------------------------------------->

        @include('Website.global widgets.globalNavBar')


        <!-- End NavBar Section----------------------------------------------------------->





        <!-- Slider Section----------------------------------------------------------->

        <div class="section-slider" >


            <div class="slider">

                @foreach ($websiteconfigs_sliders as $item)
                    <div class="item">
                        <div class="content "
                            style="background-image: url('{{ asset('storage/images/website_images/' . $item->image) }}');">

                            <div class="info">
                                <div class=" " style="font-size: 25px">
                                    {{ Config::get('app.locale') == 'ar' ? $item->desc_ar : $item->desc_en }} </div>
                                <a class="btn-outline btn-slider"
                                    href="#">{{ Config::get('app.locale') == 'ar' ? 'ابدأ الان' : 'Start Now' }}</a>
                            </div>

                        </div>
                    </div>
                @endforeach



            </div>



        </div>






        <!--End Slider Section----------------------------------------------------------->

        <!-- OurMessage Section----------------------------------------------------------->

        <div class="section-ourmessage ">


            <div class="content parent "
                style="background-image: url('{{ URL::asset('website_assets/assets/images/ourmessage.jpg') }}')">

                <div class="items ">
                    <section class="title text-headerBG wow animate__jackInTheBox animate__delay-1s"
                        style="font-size: 40px;">
                        {{ Config::get('app.locale') == 'ar' ? $meta->ourMessage_title_ar : $meta->ourMessage_title_en }}
                    </section>
                    <div class="desc text-medium wow animate__bounceInUp animate__delay-2s">
                        {{ Config::get('app.locale') == 'ar' ? $meta->ourMessage_desc_ar : $meta->ourMessage_desc_en }}
                    </div>

                </div>


            </div>









        </div>

        <!--End Message Section----------------------------------------------------------->


        <!-- OurRates Section----------------------------------------------------------->

        <div class="section-peopleRates">


            <section class="background-2">
                <section class="quotes-carousel-container">
                    <section class="quotes-carousel fade-up" id="quotes-carousel">

                        <div class="quote previous">
                            <div class="quote-person"
                                style="background-image: url('{{ URL::asset('website_assets/assets/images/224036278_410232203739446_6176775493692164250_n.jpg') }}');"
                                alt="Liz Myers"></div>
                            <div class="quote-text-container">
                                <span class="quote-text">I'm really enjoying 😍 <a
                                        href="https://twitter.com/donovanh">@Sherif</a>. Couldn't recommend it more
                                    highly. Just right in every way!</span>
                                <span class="quotee"><a
                                        href="https://twitter.com/LizMyers/status/585907961601601536">More</a></span>
                            </div>
                        </div>


                        <div class="quote current">
                            <div class="quote-person"
                                style="background-image: url('{{ URL::asset('website_assets/assets/images/224036278_410232203739446_6176775493692164250_n.jpg') }}');"
                                alt="Liz Myers"></div>
                            <div class="quote-text-container">
                                <span class="quote-text">I'm really enjoying 😍 <a
                                        href="https://twitter.com/donovanh">@Sherif</a>. Couldn't recommend it more
                                    highly. Just right in every way!</span>
                                <span class="quotee"><a
                                        href="https://twitter.com/LizMyers/status/585907961601601536">More</a></span>
                            </div>
                        </div>

                        <div class="quote next">
                            <div class="quote-person"
                                style="background-image: url('{{ URL::asset('website_assets/assets/images/224036278_410232203739446_6176775493692164250_n.jpg') }}');"
                                alt="Liz Myers"></div>
                            <div class="quote-text-container">
                                <span class="quote-text">I'm really enjoying 😍 <a
                                        href="https://twitter.com/donovanh">@Sherif</a>. Couldn't recommend it more
                                    highly. Just right in every way!</span>
                                <span class="quotee"><a
                                        href="https://twitter.com/LizMyers/status/585907961601601536">More</a></span>
                            </div>
                        </div>




                    </section>
                </section>
            </section>





        </div>




        <!--End OurRates Section----------------------------------------------------------->



        <!-- Footer Section----------------------------------------------------------->

        @include('Website.global widgets.footer')







        <!--End----------------------------------------------------------------------------->



        <!------------------------------------- -->












    </div>









    <!---------------------------------------------------------------------------------------->
    <script>
        var globalUsageElement = {
            'Toast': false,
            'Offside': true,
            'Splash': true,
            'AvatarCover': true,
            'Wow': true,
            'authNav': false
        };

        var lang = document.getElementsByTagName("html")[0].getAttribute("lang");

        console.log(lang);
    </script>


    <!--Js Packages-->
    <script src=" {{ URL::asset('website_assets/packages/jquery/jquery.js') }}"></script>
    <!--All Screen JS-->
    <script src=" {{ URL::asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--All Screen JS-->
    <script src="{{ URL::asset('website_assets/packages/slick-master/slick/slick.min.js') }}"></script>
    <script src="{{ URL::asset('website_assets/packages/slick-master/slick-animation-master/slick-animation.min.js') }}">
    </script>
    <script src="{{ URL::asset('website_assets/packages/offside-master/dist/offside.min.js') }}"></script>
    <!--All Screen JS-->
    <script src=" {{ URL::asset('website_assets/packages/WOW-master/dist/wow.min.js') }}"></script>
    <!--All Screen JS-->
    <!--All Screen JS-->
    <script src=" {{ URL::asset('website_assets/packages/jquery-loading-master/dist/jquery.loading.min.js') }}"></script>

    <!--Js Screen-->
    <script src=" {{ URL::asset('website_assets/js/utilis.js') }}"></script>
    <!--All Screen JS-->
    <script src="{{ URL::asset('website_assets/js/globalElements.js') }}"></script>
    <!--All Screen JS-->
    <script src="{{ URL::asset('website_assets/js/index.js') }}"></script>



</body>

</html>
