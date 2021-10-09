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


                    <form class="row g-3" action="{{   url('admin/addSlider') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-auto">
                            <input type="text" class="form-control  {{$errors->has('title_ar') ? 'is-invalid' :  '' }}" id="inputPassword2" placeholder="العنوان بالعربي" name='title_ar' value="{{ old('title_ar')}}">
                           
                            @error('title_ar')
                            <div class="invalid-feedback ">
                             {{ $message }}
                           </div>
                               @enderror  
                        </div>

                        <div class="col-auto">
                            <input type="text" class="form-control  {{$errors->has('title_en') ? 'is-invalid' :  '' }}" id="inputPassword2" placeholder="العنوان بالانجليزية" name='title_en' value="{{ old('title_en')}}">
                           
                            @error('title_en')
                            <div class="invalid-feedback ">
                             {{ $message }}
                           </div>
                               @enderror  
                        </div>


                          <div class="col-auto">
                            <input type="text" class="form-control  {{$errors->has('desc_ar') ? 'is-invalid' :  '' }}" id="inputPassword2" placeholder="الشرح بالعربي" name='desc_ar' value="{{ old('desc_ar')}}">
                           
                            @error('desc_ar')
                            <div class="invalid-feedback">
                             {{ $message }}
                           </div>
                               @enderror  

                        </div>


                        <div class="col-auto">
                            <input type="text" class="form-control  {{$errors->has('desc_en') ? 'is-invalid' :  '' }}" id="inputPassword2" placeholder="الشرح بالانجليزية" name='desc_en' value="{{ old('desc_en')}}">
                           
                            @error('desc_en')
                            <div class="invalid-feedback">
                             {{ $message }}
                           </div>
                               @enderror  

                        </div>



                        <div class="col-auto">
                            <input class="form-control {{$errors->has('image') ? 'is-invalid' :  '' }} " type="file" id="formFile" name="image" value="{{ old('image')}}">
                            @error('image')
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
                                        <th>العنوان</th>
                                        <th>الشرح</th>
                                        <th>الصورة</th>
                                        <th>التحكم</th>
                                    </tr>
                                </thead>
                           
                                <tbody>
                                  
                                 @foreach ($websiteconfigs_sliders as $websiteconfigs_slider)
                                 <tr>
                                    <td>{{$websiteconfigs_slider->id}}</td>
                                    <td>{{$websiteconfigs_slider->title_ar}}</td>
                                    <td>{{$websiteconfigs_slider->desc_ar}}</td>
                                    <td>
                                        <a href="{{ asset('storage/images/website_images/'.$websiteconfigs_slider->image) }}" target="_blank" class="preview" style="z-index: 9999" title="websiteconfigs_slider">
                                            <img class="profile-image "
                                            src="{{ asset('storage/images/website_images/'.$websiteconfigs_slider->image) }}" width="100%" height="100"/>
                                        </a>

                                    </td>
                                  <td>
                                    <a class="btn btn-danger" href="{{url('admin/deleteSlider/'.$websiteconfigs_slider->id)}}" role="button">حذف</a>

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

    $('.preview').anarchytip();


</script>

</body>

</html>
