<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ URL::asset('admin_assets/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('admin_assets/css/global/global.css') }}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    @include('Admin.global_Views.topNavbar') 


    <div id="layoutSidenav">
        @include('Admin.global_Views.sideNav') 

        <div id="layoutSidenav_content">
            <main>

<div class="page">


<form action="{{  $user != null ? url('admin/addorEditUser/'.$user->id) : url('admin/addorEditUser')}}" method="post" enctype="multipart/form-data">

  @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">UserName</label>
        <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' :  '' }} " id="exampleFormControlInput1" placeholder="medo" name="name" value="{{ $user !=null ?  $user->name :    old('name') }}">
  
  @error('name')
   <div class="invalid-feedback">
    {{ $message }}
  </div>
      @enderror
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' :  '' }} " id="exampleFormControlInput1" placeholder="name@example.com" name="email" value="{{  $user !=null ?  $user->email :    old('email') }}">
        @error('email')
        <div class="invalid-feedback">
         {{ $message }}
       </div>
     
           @enderror
     
      </div>
      @if ($user == null)
      <div class="mb-3">
        <label for="formFile" class="form-label">User Image</label>
        <input class="form-control {{$errors->has('image') ? 'is-invalid' :  '' }} " type="file" id="formFile" name="image" value="{{ old('image')}}">
        @error('image')
        <div class="invalid-feedback">
         {{ $message }}
       </div>
           @enderror
      </div>
@endif
      <div class="mb-3">

      <div class="dropdown {{$errors->has('country') ? 'is-invalid' :  '' }}">
        <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton1"  data-bs-toggle="dropdown" aria-expanded="false">
          {{  $user != null ?    $countries->where('id', $user->country_id)[0]->name_ar  : (old('country') == null ? 'Country' : $countries->where('id', old('country'))[0]->name_ar) }}
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          @foreach ($countries as $item)
          <li><a class="dropdown-item" href="#" data-id="{{$item->id}}">{{$item->name_ar}}</a></li>
          @endforeach
        </ul>
      </div>

      @error('country')
      <div class="invalid-feedback">
       {{ $message }}
     </div>
         @enderror
      <input type="hidden" class=" " name="country" value="{{ $user != null ? $user->country_id  :  old('country')}}">

    </div>
            @if ($user == null)
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Password</label>
              <input type="password" class="form-control {{$errors->has('password') ? 'is-invalid' :  '' }}" id="exampleFormControlInput1" placeholder="Azx2345...." name="password">
              @error('password')
              <div class="invalid-feedback">
               {{ $message }}
             </div>
                 @enderror
            </div>
            @endif


      <div class="d-grid gap-2 col-6 mx-auto">
        <input class="btn btn-primary" type="submit" value="{{ $user != null ? 'Edit User' : 'Add User'}}"/>
      </div>
      
    </form>


</div>

              

                  
@if(session()->has('success'))

@include('Admin.global_Views.toast') 

        @endif




                
            </main>
            @include('Admin.global_Views.footer') 

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ URL::asset('admin_assets/js/scripts.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/js/global/global.js') }}"></script>

    <script>
      $(function(){

$(".dropdown-menu li a").click(function(){

  $(".dropdown .btn:first-child").text($(this).text());
  $("input[name=country]").val($(this).attr("data-id"));
   console.log($(this).attr("data-id"));
});

});
      </script>
</body>

</html>
