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
                    
<div style="width:80%;margin:auto;padding-top:40px">

<form action="{{URL::to('admin/add_country')}}" method="POST" enctype="multipart/form-data">
  @csrf

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> الاسم باللغه العربيه </label>
    <input type="text" class="form-control @error('name_ar') is-invalid @enderror" id="exampleInputEmail1"  name="name_ar" >
    @error('name_ar')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<br>


<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم باللغه الانجليزيه</label>
    <input type="text" class="form-control @error('name_en') is-invalid @enderror" id="exampleInputEmail1"  name="name_en">
    @error('name_en')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<br>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">latitude</label>
    <input type="text" class="form-control @error('lat') is-invalid @enderror" id="exampleInputEmail1"  name="lat" >
    @error('lat')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<br>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">longitude</label>
    <input type="text" class="form-control @error('lng') is-invalid @enderror" id="exampleInputEmail1"  name="lng" >
    @error('lng')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror


<br>



<input type="submit" class="btn btn-primary"/>




</form>




</div>




  

                        <div class="card mb-4" style="">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                البللدان
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>اسم الدولة</th>
                                            <th>lat</th>
                                            <th>lng</th>

                                        </tr>
                                    </thead>

                                    <tbody>

  @foreach ($countries as $country)
                                         <tr>
                                          <td>{{$country->id}}</td>
                                            <td>{{$country->name_ar}}</td>
                                            <td>{{$country->lat}}</td>
                                            <td>{{$country->lng}}</td>
                                            <td><a href="{{URL::to('admin/countries/delete_country')}}?country_id={{$country->id}}" class="btn btn-danger" >Delete</a></td>
                                        </tr>

@endforeach
                                    
                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <br>

            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('admin_assets/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('admin_assets/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
