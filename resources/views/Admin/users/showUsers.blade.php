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
#preview {
  position: absolute;
  border: 1px solid #ccc;
  background: var(--primary);
  padding: 5px;
  font-weight: bolder;
  display: none;
  color: #fff;
}
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
                           المستخدمين
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>الاسم</th>
                                        <th>البريد الاليكتروني</th>
                                        <th>الصورة</th>
                                        <th>البلد</th>
                                        <th>تاريخ الانشاء</th>
                                        <th>التحكم</th>
                                    </tr>
                                </thead>
                           
                                <tbody>
                                  
                                 @foreach ($users as $user)
                                 <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <a href="{{ asset('storage/images/users_images/'.$user->image) }}" target="_blank" class="preview" style="z-index: 9999" title=" Sherif Nabil Abo.elezz ">
                                            <img class="profile-image "
                                            src="{{ asset('storage/images/users_images/'.$user->image) }}" width="100%" height="100"/>
                                          </a>
                                    </td>
                                    <td>{{$user->country->name_ar}}</td>
                                    <td>{{ $user->created_at  }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{url('admin/addorEditUser/'.$user->id)}}" role="button">تعديل</a>
                                        <a class="btn btn-danger" href="{{url('admin/deleteUser/'.$user->id)}}" role="button">حذف</a>
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
    <script src="{{ URL::asset('admin_assets/js/global/jQuery-Plugin-For-Image-Hover-Preview-With-Caption-Support-imagepreview/imagepreview.min.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/js/global/global.js') }}"></script>

    
<script>
    $('.preview').anarchytip();
</script>

</body>

</html>
