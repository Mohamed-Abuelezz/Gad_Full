<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
    <link href="{{ asset('website_assets/css/GLOBAL_Configs.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@300&display=swap" rel="stylesheet">
    <link href="{{ asset('website_assets/css/GLOBAL_ELEMENTS.css') }}" rel="stylesheet">
    <link href="{{ asset('website_assets/packages/bootstrap-5.0.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- My CSS -->
        <link href="{{ asset('website_assets/css/GLOBAL_Configs.css') }}" rel="stylesheet">
        <link href="{{ asset('website_assets/css/Custome_Components.css') }}" rel="stylesheet">

        <link href="{{ asset('website_assets/css/login-screen.css') }}" rel="stylesheet">
</head>

<body >
    
<!-- Start NavBar Section --------------------------------------->

<div class="sectionNavBar wrapContent" >

    <div class="container-fluid">
        <div class="row justify-content-between">
            
            <div class="col rightsidemenu">
                <div class="menus">
                    <ul>
                
                        <li><a href="#" class="s6"> عربي <i class="fas fa-globe-americas"></i> </a></li>
                        <li><a href="../index.html" class="s6">Home</a></li>
                
                    </ul>
                </div>
                
                        </div>
                     
                        <div class="col rightsidemenumobile">
                    
                            <div class="mobile-meun">
                        
                                <div class="menu-button">
                                  <div class="menu-button-line"></div>
                                  <div class="menu-button-line"></div>
                                  <div class="menu-button-line"></div>
                                </div>
                              
                          </div>
                        
                        
                        
                        </div>
            <div class="col leftside" >
                <img class="logo" src="{{ asset('website_assets/assets/icons/logo.png') }}"/>
            </div>
          
            
        </div>
      
    </div>
    
    
    
    
    </div>
    
      <div class="menu"> <!--Mobile Menus -->
            <div class="menu-branding"></div>
            <ul class="menu-nav">
                <ul>
                    <li><a href="./screens/login-screen.html" class="s4">SignIn/SignUp</a></li>
                    <li><a href="#" class="s4"> عربي <i class="fas fa-globe-americas"></i> </a></li>
    
                </ul>
            </ul>
    </div>
    
<!-- End NavBar Section --------------------------------------->    




<div class="content" style="height: 100vh;padding:50px;text-align:center;">


    <form action="{{URL::to('/reset-password')}}" method="post">
    @csrf


         <input type="hidden" name="token" value="{{$token}}">



        <div class="mb-3" style="width: 400px; margin: auto">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        </div>
        <div class="mb-3" style="width: 400px; margin: auto">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
          </div>
          <div class="mb-3" style="width: 400px; margin: auto">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
            @error('password_confirmation')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      



</div>



@if($errors->any())
<div class="myToast " style="position: fixed;bottom:30px;right:30px">
  <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" id="myToast" >
      <div class="toast-header">
        <strong class="me-auto"></strong>
        <small class="text-muted">1 second</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body" style="color: red">

        @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
    
      
      </div>
  
</div>
</div>
@endif


<!-- End Footer Section --------------------------------------->

<div class="myToast" style="position: fixed;bottom:30px;right:30px">
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="myToast" >
        <div class="toast-header">
          <strong class="me-auto"></strong>
          <small class="text-muted">1 second</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" style="color: green">

            تم ارسال رسالة التاكيد مره اخري

        </div>
    
</div>
</div>

    <!-- packages js -->
    <script src="{{ asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('website_assets/packages/jquery/jquery.js') }}"></script>

    <!-- my js -->
        <script src="{{ asset('website_assets/js/GLOBAL_ELEMENTS.js') }}"></script>
        <script src="{{ asset('website_assets/js/login-screen.js') }}"></script>
        <script src="{{ asset('website_assets/js/Custome_Components.js') }}"></script>



<script>
//     $(document).ready(function () {
//         $("#btnSend").click(function () {
//             $.ajax({
//                 url: "{{URL::to('/email/verification-notification')}}",
//                 type: 'POST',
//                 data: { "_token": "{{ csrf_token() }}",},
//                 success: function (result) {

//                   $("#myToast").addClass("show");

               
//                 },
//                 error: function (request, status, error) {
//         console.log("There was an error: ", request.responseText);
//     }
//             });
//         });
//     });




//     var toastElList = [].slice.call(document.querySelectorAll('.toast'));
// var toastList = toastElList.map(function (toastEl) {
//   return new bootstrap.Toast(toastEl, {
//     animation : true,
//     autohide : true,
//     delay : 6000,
//   })
// });













</script>






</body>
</html>



  