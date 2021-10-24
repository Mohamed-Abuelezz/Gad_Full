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
    <link href="../packages/jquery-fab-button-master/css/jquery-fab-button.min.css" rel="stylesheet">
    <link rel="stylesheet" href=" {{ URL::asset('website_assets/css/utilis.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('website_assets/css/globalElements.css') }}">

    <!--Css Screen-->
    <link rel="stylesheet" href="{{ URL::asset('website_assets/css/login.css') }}">

</head>

<body dir="{{ Config::get('app.locale') == 'ar' ? 'rtl' : 'ltr' }}" lang="{{ Config::get('app.locale') }}">

    <!-- Splash 
  <div id="splash">

    <div class="loader">
      <div class="inner one"></div>
      <div class="inner two"></div>
      <div class="inner three"></div>
    </div>

  </div>

-->


    <!-- Float Scroll top btn-->
    <a id="back-to-top" href="#"
        class="btn btn-light btn-lg back-to-top  animate__animated animate__bounce animate__infinite" role="button"
        style="color: white;background-color: var(--primary);z-index: 999;"><i class="fas fa-chevron-up"></i></a>



    <!-- NavBar Section----------------------------------------------------------->

    @include('Website.global widgets.globalNavBar')




    <!-- End NavBar Section----------------------------------------------------------->


    <div class="page-content parent">

        <!--Taps-->

        <ul class="taps">
            <li>
                <button class="tab active"
                    data-content="#one">{{ Config::get('app.locale') == 'ar' ? 'الدخول' : 'Login' }} <i
                        class="fas fa-map"></i></button>
            </li>
            <li>
                <button class="tab"
                    data-content="#two">{{ Config::get('app.locale') == 'ar' ? 'حساب جديد' : 'Register' }} <i
                        class="fas fa-address-card"></i></button>
            </li>
        </ul>



        <!-- Login Tap-->

        <div class="tabsContents">




            <div id="one" class="content show">

                <form action="">
                    <div class="profile-details ">

                        <div class="all-inputs">



                            <div class="form" style="">

                                <input type="email" id="email" class="form__input" autocomplete="off" placeholder=" "
                                    aria-describedby="validationServer05Feedback" />

                                <label for="email" class="form__label is-invalid">
                                    {{ Config::get('app.locale') == 'ar' ? 'البريد الاليكتروني' : 'Email' }}
                                </label>



                                <div id="validationServer05Feedback" class="invalid-feedback" style="font-size: 8px;">
                                    Please provide a valid zip.
                                </div>


                            </div>



                            <div class="form" style="">
                                <input type="password" id="password" class="form__input" autocomplete="off"
                                    placeholder=" " />
                                <label for="password" class="form__label">
                                    {{ Config::get('app.locale') == 'ar' ? 'الرقم السري' : 'Password' }} </label>
                            </div>



                            <input href="#" class="btn input-div wow  animate__zoomInDown"
                                value="{{ Config::get('app.locale') == 'ar' ? 'الدخول' : 'login' }}" style="" />


                        </div>






                    </div>
                </form>

            </div>
            <!-- Register Tap-->
            <div id="two" class="content cardsTab">


                <form action="{{ url('authentication') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="profile-details ">

                        <div class="all-inputs">

                            <div class="  input-div  wow animate__zoomInDown">
                                <div id="profile-container" style="text-align: center;position: relative;margin: auto;">
                                    <image id="profileImage"
                                        src="{{ asset('storage/images/users_images/default.png') }}" />
                                    <img src="{{ URL::asset('website_assets/assets/icons/icon-touch.png ') }}"
                                        style="width: 20px;height: 20px;position: absolute;top: 100px;right: 10px;"
                                        class="  animate__animated  animate__bounceOut animate__infinite">

                                </div>

                                <input id="imageUpload" type="file" accept="image/*" name="image"
                                   >

                            </div>




                            <div class="styled-input input-div  wow animate__zoomInDown">

                                <div class="form" style="">
                                    <input type="text" id="username"
                                        class="form__input {{ $errors->has('name') ? 'is-invalid' : '' }} "
                                        autocomplete="off" name='name' placeholder=" " value="{{ old('name') }}"
                                         />
                                    <label for="username" class="form__label">
                                        {{ Config::get('app.locale') == 'ar' ? 'اسم المستخدم' : 'Username' }}
                                    </label>
                                    @error('name')
                                        <div  class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>

                            </div>

                            <div class=" wow animate__zoomInDown">


                                <div class="form" style="">
                                    <input type="text" id="email"
                                        class="form__input {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                        autocomplete="off" name='email' placeholder=" " value="{{ old('email') }}" />
                                    <label for="email" class="form__label">
                                        {{ Config::get('app.locale') == 'ar' ? 'البريد الاليكتروني' : 'Email' }}
                                    </label>
                                    @error('email')
                                        <div  class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>


                            <div class="wow animate__zoomInDown">

                                <div class="dropdown " style="margin: auto;">
                                    <button class="btn  dropdown-toggle " name='country'
                                        style="display: block;margin:0px auto" type="button" id="dropdownMenu2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        {{  old('country') != null ?  (Config::get('app.locale') == 'ar' ?  $countries->where('id', old('country'))->first()->name_ar :  $countries->where('id', old('country'))->first()->name_en)   : (Config::get('app.locale') == 'ar' ? 'البلد' : 'Country') }}
                                    </button>
                                    <ul class="dropdown-menu" style="z-index: 9999;" aria-labelledby="dropdownMenu2">
                                        @foreach ($countries as $country)
                                            <li data-id="{{ $country->id }}"><button class="dropdown-item"
                                                    type="button">{{ Config::get('app.locale') == 'ar' ? $country->name_ar : $country->name_en }}</button>
                                            </li>
                                        @endforeach
                                        <input type="hidden" id="country" name='country' value=" {{old('country')}}"/>

                                    </ul>

                                    @error('country')

                                        <div class="invalid-feedback" style="display: block;text-align: center">
                                            {{ $message }}
                                        </div>

                                    @enderror

                                </div>

                            </div>







                            <div class="  wow animate__zoomInDown">
                                <div class="form" style="">
                                    <input type="password" id="password" class="form__input {{ $errors->has('password') ? 'is-invalid' : '' }} " autocomplete="off"
                                        name='password' placeholder=" " value="{{ old('password') }}"/>
                                    <label for="password" class="form__label">
                                        {{ Config::get('app.locale') == 'ar' ? 'الرقم السري' : 'Password' }} </label>
                                    <div class="form-text" style="font-size: 8px;">
                                        {{ Config::get('app.locale') == 'ar' ? 'الرقم السري يجب ان يكون 8 احرف علي الاقل.' : 'Your password must be 8 characters at least.' }}
                                    </div>
                                    @error('password')
                                    <div  class="invalid-feedback">
                                      {{ $message }}
                                   </div>
                                       @enderror



                                </div>


                            </div>

                            <div class="  wow animate__zoomInDown">
                                <div class="form" style="">
                                    <input type="password" id="confirmPassword" class="form__input {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                                        autocomplete="off" name='password_confirmation' value="{{ old('password_confirmation')}}" placeholder=" " />
                                    <label for="confirmPassword" class="form__label">
                                        {{ Config::get('app.locale') == 'ar' ? 'تأكيد الرقم السر' : 'Confirm Password' }}
                                    </label>
                                    @error('password_confirmation')
                                    <div  class="invalid-feedback">
                                      {{ $message }}
                                   </div>
                                       @enderror
                                </div>


                            </div>


                            <input href="#" type="submit" class="btn input-div wow  animate__zoomInDown"
                                value="{{ Config::get('app.locale') == 'ar' ? 'التسجيل' : 'SignUp' }}" style="" />


                        </div>






                    </div>
                </form>









            </div>





        </div>



    </div>


    </div>


    <!-- Footer Section----------------------------------------------------------->

    @include('Website.global widgets.footer')







    <!--End----------------------------------------------------------------------------->

    @if(session()->has('success'))

    @include('Website.global widgets.toast')
    
            @endif
    

    <!---------------------------------------------------------------------------------------->
    <script>
        var globalUsageElement = {
            'Toast': true,
            'Offside': true,
            'Splash': false,
            'AvatarCover': true,
            'Wow': true,
            'authNav': false
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
    <!--All Screen JS-->
    <!--All Screen JS-->
    <script src=" {{ URL::asset('website_assets/packages/jquery-loading-master/dist/jquery.loading.min.js') }}"></script>



    <script src=" {{ URL::asset('website_assets/js/utilis.js') }}"></script>
    <!--All Screen JS-->
    <script src="{{ URL::asset('website_assets/js/globalElements.js') }}"></script>
    <!--All Screen JS-->
    <script src="{{ URL::asset('website_assets/js/login.js') }}"></script>





</body>

</html>
