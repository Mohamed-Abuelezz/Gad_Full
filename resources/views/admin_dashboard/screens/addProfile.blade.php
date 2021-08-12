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


        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">GAD Dashboard</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
      
            <!-- Navbar-->
            <ul class="navbar-nav  ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>






        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
            @include('admin_dashboard.custome_widgets.custome_nav')

            </div>
            <div id="layoutSidenav_content" >
                <main>
                    
  

                        <div class="card mb-4" style="margin:100px;padding:20px;overflow:hidden">
                           


  <form action="{{URL::to('admin/add_profile')}} " method="post" enctype="multipart/form-data">
  @csrf

  <div class="mb-3">

        <label for="exampleDataList" class="form-label"> المستخدم</label>
        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="ابحث عن المستخدم ..." name="user_id">

                <datalist id="datalistOptions">
                @foreach ($users as $user)

                <option value="{{$user->id}}">{{$user->name}}</option>

                @endforeach

                </datalist>
                @error('user_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                </div>




            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">اسم البروفايل</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"  name="profile_name" >
            @error('profile_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

           <label for="formFile" class="form-label">صورة الكافر</label>
           <input class="form-control" type="file" id="formFile" name="profile_cover">
           @error('profile_cover')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         
            <br>


            <select name="subscriber_type_id[]" class="selectpicker" id="myselect">
                    @foreach ($subscribersType as $subscriberType)
                    <option value="{{$subscriberType->id}}">{{$subscriberType->title_ar}}</option>
                    @endforeach
           </select>


           <br>
           <br>


<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">العنوان</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"  name="profile_address" >
            @error('profile_address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>


<div class="teacher-map   tab-pane fade show active" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab"> 
<label  class="form-label"></label>

<input type="hidden" id="input_lat" name="profile_lat">
<input type="hidden" id="input_lng" name="profile_lng">

        <div class="wrapContent" id="map" style="width:100%;height:400px"></div>
    
    </div>
    @error('profile_lat')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

<br>




    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">رقم الهاتف</label>
            <input type="number" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"  name="profile_number" >
            @error('profile_number')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>


            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">النبذه الشخصيه</label>
            <textarea  type="texrarea" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"  name="profile_person_bio" row="5"></textarea>
            @error('profile_person_bio')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>


            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">النبذه التعليمية</label>
            <textarea  type="texrarea" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"  name="profile_education_bio" row="5"></textarea>
            @error('profile_education_bio')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>



            <input type="submit" class="btn btn-primary" value="اضافة"/>







  </div>



  </div>
  







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
        <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhwUPb_bGJzGj0Wnj89dcnU5NZQhGx9jY&callback=initMap&libraries=&v=weekly"
    async
  ></script>





    </body>
</html>
