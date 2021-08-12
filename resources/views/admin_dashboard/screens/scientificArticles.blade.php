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

<form action="{{URL::to('admin/add_scientificArticles')}}" method="POST" enctype="multipart/form-data">
  @csrf

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> الاسم باللغه العربيه </label>
    <input type="text" class="form-control @error('title_ar') is-invalid @enderror" id="exampleInputEmail1"  name="title_ar" >
    @error('title_ar')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<br>


<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم باللغه الانجليزيه</label>
    <input type="text" class="form-control @error('title_en') is-invalid @enderror" id="exampleInputEmail1"  name="title_en">
    @error('title_en')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<br>

<select name="educationsStages[]" class="selectpicker" id="myselect">
  @foreach ($educationsStages as $educationsStage)
  <option value="{{$educationsStage->id}}">{{$educationsStage->title_ar}}</option>
  @endforeach

</select>


<br>
<br>



<input type="submit" class="btn btn-primary"/>




</form>




</div>




  

                        <div class="card mb-4" style="">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                المواد العلمية
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>اسم المادة العلمية</th>
                                            <th>المرحلة التعليميه</th>
                                        </tr>
                                    </thead>

                                    <tbody>

  @foreach ($scientificArticles as $scientificArticle)
                                         <tr>
                                          <td>{{$scientificArticle->id}}</td>
                                            <td>{{$scientificArticle->title_ar}}</td>
                                            <td>{{$scientificArticle->educationsStages->title_ar}}</td>
                                            <td><a href="{{URL::to('admin/scientificArticles/delete_scientificArticles')}}?scientificArticles_id={{$scientificArticle->id}}" class="btn btn-danger" >Delete</a></td>
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
