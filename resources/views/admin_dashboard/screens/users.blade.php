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

        <div id="layoutSidenav" >
        <div id="layoutSidenav_nav">
            @include('admin_dashboard.custome_widgets.custome_nav')

            </div>
            <div id="layoutSidenav_content">
                <main>
                    
  

                        <div class="card mb-4" style="width:80vw;">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                المستخدمين
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Country</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>

                                    <tbody>

  @foreach ($users as $user)
                                         <tr>
                                          <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->countries->name_ar}}</td>
                                            <td><img src="{{asset('storage/users_images/'.$user->image) }}" width="50" height="50 "/></td>
                                            <td><a type="button" class="btn btn-info" href="{{URL::to('admin/add_user')}}?user_id={{$user->id}}">Edit</a></td>
                                            <td><a type="button " class="btn btn-danger" href="{{URL::to('admin/users/delete_user')}}?user_id={{$user->id}}">Delete</a></td>
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