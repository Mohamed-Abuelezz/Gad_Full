<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>

        <!-- Packages CSS -->
        <link href="{{ asset('website_assets/packages/bootstrap-5.0.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{asset('website_assets/packages/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
        <link href="{{asset('website_assets/packages/fontawesome-free-5.15.3-web/css/all.min.css') }}" rel="stylesheet">
        
    
        <!-- My CSS -->
        <link href="{{asset('website_assets/css/GLOBAL_Configs.css') }}" rel="stylesheet">
        <link href="{{asset('website_assets/css/GLOBAL_ELEMENTS.css') }}" rel="stylesheet">
        <link href="{{asset('website_assets/css/Custome_Components.css') }}" rel="stylesheet">
        <link href="{{asset('website_assets/css/myAccount_screen.css') }}" rel="stylesheet">


</head>

<body dir="{{ App::isLocale('en') ?  'ltr':'rtl' }}" lang="{{Config::get('app.locale') == 'ar' ?   'ar'   :  "en" }}" class="body">
    
<!-- Start NavBar Section --------------------------------------->

@include('website.custome_widgets.custome_nav_Inside')


    <!-- End NavBar Section --------------------------------------->    

    <form action="{{URL::to('/myaccount')}}" method="POST" enctype="multipart/form-data">
        @csrf 
        <div class="wrapContent contentMyAccount" style="height: 100vh">

    <div class="imageUser" style="margin-bottom: 20px;">


        <div id="profile-container" class=" position-relative" >
    
    
    
            <image id="profileImage" src="{{asset('storage/users_images/'.$user->image) }}" />
         </div>
         <input id="imageUpload" type="file" 
                name="image" placeholder="Photo"  capture>
                <span>{{Config::get('app.locale') == 'ar' ? 'تغيير الصورة الشخصية' : 'Change Image'}}</span>
            
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
      
    
    </div>



    <div class="myTextField">

        <div>
            <div class="field-container">
              <input class="field-input" id="inputid" name="name" type="text" value="{{$user->name}}" placeholder=" ">
              <label class="field-placeholder" for="inputName">{{Config::get('app.locale') == 'ar' ? 'الاسم' : 'Name'}}</label>
            </div>
          </div>
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

    </div>
    
    <div class="myTextField">

        <div>
            <div class="field-container">
              <input class="field-input" id="inputid" name="email" type="text" value="{{$user->email}}" placeholder=" "> 
              <label class="field-placeholder" for="inputName">{{Config::get('app.locale') == 'ar' ? 'البريد الاليكتروني' : 'Email'}}</label>
            </div>
          </div>
          @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>

    <div class="btnSave">

        <input type="submit" value="{{Config::get('app.locale') == 'ar' ? 'حفظ' : 'Save'}}" class="btn"/>

    </div>
<br>


   
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

            {{Config::get('app.locale') == 'ar' ?  'تم التعديل بنجاح .'  :  'Edited successfully . '}}

        </div>
    
</div>
</div>

@endif





<!-- Start Footer Section --------------------------------------->

@include('website.custome_widgets.footer')

<!-- End Footer Section --------------------------------------->






    <!-- packages js -->
    <script src="{{asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('website_assets/packages/jquery/jquery.js') }}"></script>

    <!-- my js -->
    <script src="{{asset('website_assets/js/GLOBAL_Configs.js') }}"></script>
    <script src="{{asset('website_assets/js/GLOBAL_ELEMENTS.js') }}"></script>
    <script src="{{asset('website_assets/js/myAccount_screen.js') }}"></script>


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



  