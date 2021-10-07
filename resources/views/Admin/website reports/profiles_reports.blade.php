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

                             
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                           ابلاغات البروفايلز
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>اسم المبلغ</th>
                                        <th>اسم البروفايل المبلغ عنه</th>
                                        <th>التحكم</th>
                                    </tr>
                                </thead>
                           
                                <tbody>
                                  
                                 @foreach ($profileReports as $profileReport)
                                 <tr>
                                    <td>{{$profileReport->id}}</td>
                                    <td>{{$profileReport->user->name}}</td>
                                    <td>{{$profileReport->profile->display_name}}</td>
                                    <td>
                                        <a class="btn btn-danger" href="{{url('admin/deleteProfileReport/'.$profileReport->id)}}" role="button">حذف البلاغ </a>
                                        <a class="btn btn-danger" href="{{url('admin/deleteUser_Reporter/'.$profileReport->user->id)}}" role="button">حذف صاحب البلاغ</a>
                                        <a class="btn btn-danger" href="{{url('admin/deleteProfile_Reporter/'.$profileReport->profile->id)}}" role="button">حذف  بروفايل المبلغ عنه </a>

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
