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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <style>


    </style>



</head>

<body class="sb-nav-fixed">
    @include('Admin.global_Views.topNavbar') 


    <div id="layoutSidenav">
        @include('Admin.global_Views.sideNav') 

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Tables</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>


                    <form class="row g-3" action="{{   url('admin/addCountry') }}" method="post">
                        @csrf
                        <div class="col-auto">
                            <input type="text" class="form-control  {{$errors->has('name_ar') ? 'is-invalid' :  '' }}" id="inputPassword2" placeholder="الاسم بالعربي" name='name_ar' value="{{ old('name_ar')}}">
                           
                            @error('name_ar')
                            <div class="invalid-feedback ">
                             {{ $message }}
                           </div>
                               @enderror  
                        </div>
                          <div class="col-auto">
                            <input type="text" class="form-control  {{$errors->has('name_en') ? 'is-invalid' :  '' }}" id="inputPassword2" placeholder="الاسم بالانجليزي" name='name_en' value="{{ old('name_en')}}">
                           
                            @error('name_en')
                            <div class="invalid-feedback">
                             {{ $message }}
                           </div>
                               @enderror  

                        </div>
                        <div class="col-auto">
                          <button type="submit" class="btn btn-primary mb-3">اضافة</button>
                        </div>
                      </form>
                             



                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                           البلاد
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>الاسم</th>
                                        <th>التحكم</th>
                                    </tr>
                                </thead>
                           
                                <tbody>
                                  
                                 @foreach ($countries as $country)
                                 <tr>
                                    <td>{{$country->id}}</td>
                                    <td>{{$country->name_ar}}</td>
                                    <td>
                                        <a class="btn btn-danger" href="{{url('admin/deleteCountry/'.$country->id)}}" role="button">حذف</a>
                                    </td>
                                  
                                </tr>
                                 @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            @include('Admin.global_Views.footer') 

        </div>

        @if(session()->has('success'))

        @include('Admin.global_Views.toast') 
        
                @endif


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ URL::asset('admin_assets/js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('admin_assets/js/datatables-simple-demo.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/js/global/global.js') }}"></script>

    
<script>



</script>

</body>

</html>
