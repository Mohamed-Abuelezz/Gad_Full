<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Packages CSS -->
    <link href="{{ asset('website_assets/packages/bootstrap-5.0.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/packages/fontawesome-free-5.15.3-web/css/all.min.css') }}" rel="stylesheet">


    <!-- My CSS -->
    <link href="{{asset('website_assets/css/GLOBAL_Configs.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/css/GLOBAL_ELEMENTS.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/css/Custome_Components.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/css/contactUs_screen.css') }}" rel="stylesheet">


    <title>GAD</title>
  </head>

  <body  dir= "{{ App::isLocale('en') ?  'ltr':'rtl' }}"  lang="{{Config::get('app.locale') == 'ar' ?   'ar'   :  "en" }}" class="body">
      

<div class="page">



<!-- Start NavBar Section --------------------------------------->

@if (Auth::guest())

@include('website.custome_widgets.custome_nav_outside')

@else

@include('website.custome_widgets.custome_nav_Inside')

@endif

<!-- End NavBar Section --------------------------------------->
<form action="{{URL::to('/contactus')}}" method="POST" enctype="multipart/form-data">
        @csrf
    
<div class="container">
	<div class="row">
			<h1>{{Config::get('app.locale') == 'ar' ?  'تواصل معنا' : 'contact us'}}</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">{{Config::get('app.locale') == 'ar' ?  'حابين نسمع مشكلتك في اي وقت !' : ' We`d love to hear from you!'}}</h4>
	</div>
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" name='name' autocomplete="off"/>
					<label>{{Config::get('app.locale') == 'ar' ? 'الاسم' : 'Name'}} </label> 
				</div>
             
      
			</div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" name='email'  autocomplete="off"/>
					<label>{{Config::get('app.locale') == 'ar' ? 'البريد الاليكتروني' : 'Email'}}</label> 
				</div>
             
      
			</div>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="number" name='phone'  autocomplete="off"/>
					<label>{{Config::get('app.locale') == 'ar' ? 'رقم الهاتف' : 'Phone Number'}} </label> 
				</div>
             
      
			</div>
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea name='message'  autocomplete="off"></textarea>
					<label>{{Config::get('app.locale') == 'ar' ? 'الرسالة' : 'Message'}} </label>
				</div>
      
			</div>
            @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

			<div class="col-xs-12">
				<input type="submit" class="btn" value="{{Config::get('app.locale') == 'ar' ? 'ارسال ' : 'Send'}}"/>
			</div>
	</div>
</div>

</form>




@if (\Session::has('success'))

<div class="myToast " style="position: fixed;bottom:30px;right:30px">
    <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" id="myToast" >
        <div class="toast-header">
          <strong class="me-auto"></strong>
          <small class="text-muted"> {{Config::get('app.locale') == 'ar' ?  '1 ثانيه'  :  '1 second'}}</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" style="color: green">

            {{Config::get('app.locale') == 'ar' ?  'تم ارسال رسالتك بنجاح وسيتم التواصل معك في اقرب فرصة'  :  'Your message has been sent successfully and we will contact you as soon as possible .'}}

        </div>
    
</div>
</div>

@endif





<!-- Start Footer Section --------------------------------------->

@include('website.custome_widgets.footer')

<!-- End Footer Section --------------------------------------->




</div>




    <!-- packages js -->
    <script src="{{asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('website_assets/packages/jquery/jquery.js') }}"></script>
    <script src="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
    <script src="{{asset('website_assets/packages/jQuery-autoComplete-master/jquery.auto-complete.min.js') }}"></script>

    <!-- my js -->
    <script src="{{asset('website_assets/js/GLOBAL_Configs.js') }}"></script>
    <script src="{{asset('website_assets/js/GLOBAL_ELEMENTS.js') }}"></script>
    <script src="{{asset('website_assets/js/Custome_Components.js') }}"></script>
    <script src="{{asset('website_assets/js/contactUs_screen.js') }}"></script>

    <script>


        var toastElList = [].slice.call(document.querySelectorAll('.toast'));
        var toastList = toastElList.map(function (toastEl) {
          return new bootstrap.Toast(toastEl, {
            animation : true,
            autohide : true,
            delay : 15000,
          })
        });
        
        
        
        </script>
        
        




  </body>
</html>