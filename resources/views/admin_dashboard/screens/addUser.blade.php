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
        <link href="{{ asset('admin_assets/css/styles.css') }}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body  class="sb-nav-fixed">
    @include('admin_dashboard.custome_widgets.custome_top_nav')

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
            @include('admin_dashboard.custome_widgets.custome_nav')

            </div>
            <div id="layoutSidenav_content" >
                <main>
                    
  

                        <div class="card mb-4" style="margin:100px;padding:20px">
                           


  <form action="{{$isEdit == true ? URL::to('admin/add_user/edit') : URL::to('admin/add_user')}} " method="POST" enctype="multipart/form-data">
  @csrf

  <input type="hidden" name="user_id" value="{{$isEdit == true ? $user->id : null}}" />



    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"  name="name" value="{{$isEdit == true ? $user->name : null}}">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">البريد الاليكتروني</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" name="email" value="{{$isEdit == true ? $user->email : null}}">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>

  @if($isEdit === false)
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >كلمة المرور</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="exampleInputPassword1">
    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

  </div>
  @endif

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الصوره الشخصيه</label>
    <input type="file" class="form-control @error('image') is-invalid @enderror" id="exampleInputEmail1" name="image" value="{{$isEdit == true ? $user->image : null}}">
    @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  
  </div>
  
  <select name="countries[]" class="selectpicker" id="myselect">
  @foreach ($countries as $country)
  <option value="{{$country->id}}">{{$country->name_ar}}</option>
  @endforeach

</select>

<br>
<br>
<br>


  @if($isEdit === false)
  <input type="submit" class="btn btn-primary"/>
@else
<input type="submit" class="btn btn-primary" name="edit" value="تعديل"/>

  @endif


</form>








                                    
                
                    </div>
                </main>

            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('admin_assets/js/scripts.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('admin_assets/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
