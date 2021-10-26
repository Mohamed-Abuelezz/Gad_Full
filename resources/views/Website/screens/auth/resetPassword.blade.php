<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('Website.global widgets.metaOfHeader')

  <!--Css Packages-->
  <link rel="stylesheet" href="{{ URL::asset('website_assets/packages/bootstrap-5.0.1-dist/css/bootstrap.min.css') }}"> <!--All Screen Css-->
  <link rel="stylesheet" href="{{ URL::asset('website_assets/packages/offside-master/dist/offside.css') }}"><!--All Screen Css-->
  <link rel="stylesheet" href="{{ URL::asset('website_assets/packages/animate-css-animate.css-e8c4fab/animate.min.css') }}  " /><!--All Screen Css-->
  <!--All Screen Css-->
  <link href="../packages/jquery-fab-button-master/css/jquery-fab-button.min.css" rel="stylesheet">
  <link rel="stylesheet" href=" {{ URL::asset('website_assets/css/utilis.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('website_assets/css/globalElements.css') }}">


    <!--Css Screen-->
    <link rel="stylesheet" href="{{ URL::asset('website_assets/css/forgetpassword.css') }}">


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
    <a id="back-to-top" href="#"
        class="btn btn-light btn-lg back-to-top  animate__animated animate__bounce animate__infinite" role="button"
        style="color: white;background-color: var(--primary);z-index: 999;"><i class="fas fa-chevron-up"></i></a>



    <!-- NavBar Section----------------------------------------------------------->

    @include('Website.global widgets.globalNavBar')



    <!-- End NavBar Section----------------------------------------------------------->


    <div class="page-content parent">



        <div class="content-us">

            <div class="text-headerBG" style="text-align: center">
                {{ Config::get('app.locale') == 'ar' ? 'تعيين كلمة السر' : 'Reset Password' }}

            </div>


            <form action="{{ url('/reset-password') }}" method="POST">
                @csrf


                <div class="profile-details ">

                    <div class="all-inputs">

                      <input type="hidden"   name="token" value="{{$token}}" />


                      



                        <div class="wow animate__zoomInDown">
                            <div class="form" style="">
                                <input type="email" id="email"  name="email" value="{{ old('email') }}" class="form__input {{ $errors->has('email') ? 'is-invalid' : ''}}" autocomplete="off"
                                    placeholder=" " />
                                <label for="email" class="form__label is-invalid">
                                    {{ Config::get('app.locale') == 'ar' ? 'البريد الاليكتروني' : 'Email' }}
                                </label>


                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>


                        <div class="wow animate__zoomInDown">
                            <div class="form" style="">
                                <input type="password" id="password" name="password" value="{{ old('password') }}" class="form__input {{ $errors->has('password') ? 'is-invalid' : ''}}"
                                    autocomplete="off" placeholder=" " />
                                <label for="password"
                                    class="form__label is-invalid">{{ Config::get('app.locale') == 'ar' ? 'كلمة المرور الجديده' : ' New Password' }}
                                </label>
                                <div id="validationServer05Feedback" class="form-text" style="font-size: 8px;">
                                    {{ Config::get('app.locale') == 'ar' ? 'الرقم السري يجب ان يكون 8 احرف علي الاقل.' : 'Your password must be 8 characters at least.' }}
                                </div>

                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>


                        <div class="wow animate__zoomInDown">
                            <div class="form" style="">
                                <input type="password" name="password_confirmation" id="password_confirmation" 
                                    class="form__input {{ $errors->has('password_confirmation') ? 'is-invalid' : ''}}" value="{{ old('password_confirmation') }}" autocomplete="off" placeholder=" " />
                                <label for="password_confirmation" class="form__label is-invalid">
                                    {{ Config::get('app.locale') == 'ar' ? 'تأكيد كلمة المرور' : 'Confirm Password' }}</label>
                                    @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>


                        <input  type="submit" class="btn send-btn input-div wow  animate__zoomInDown"
                        value="{{Config::get('app.locale') == 'ar' ? 'التأكيد' : 'Submit' }}" style="margin-top: 30px;" />



                    </div>






                </div>
            </form>









        </div>








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
        var globalUsageElement = {
            'Toast': true,
            'Offside': true,
            'Splash': true,
            'AvatarCover': false,
            'Wow': true,
            'authNav': false
        };
    </script>

<script src=" {{ URL::asset('website_assets/packages/jquery/jquery.js') }}"></script> <!--All Screen JS-->
<script src=" {{ URL::asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script> <!--All Screen JS-->
<script src="{{ URL::asset('website_assets/packages/offside-master/dist/offside.min.js') }}"></script> <!--All Screen JS-->
<script src=" {{ URL::asset('website_assets/packages/WOW-master/dist/wow.min.js') }}"></script> <!--All Screen JS-->
<script src=" {{ URL::asset('website_assets/packages/jquery-loading-master/dist/jquery.loading.min.js') }}"></script>




<script src=" {{ URL::asset('website_assets/js/utilis.js') }}"></script> <!--All Screen JS-->
<script src="{{ URL::asset('website_assets/js/globalElements.js') }}"></script> <!--All Screen JS-->
  <script src="{{ URL::asset('website_assets/js/forgetspassword.js') }}"></script>





</body>

</html>
