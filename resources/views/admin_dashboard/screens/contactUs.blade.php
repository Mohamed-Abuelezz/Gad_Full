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
                    



                        <div class="card mb-4" style="">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                تواصل معنا
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>user_id</th>
                                            <th>الاسم</th>
                                            <th>الايميل</th>
                                            <th>رقم الهاتف</th>
                                            <th>الرسالة</th>
                                        </tr>
                                    </thead>

                                    <tbody>

  @foreach ($contactsUs as $contactUs)
                                         <tr>
                                          <td>{{$contactUs->id}}</td>
                                            <td>{{$contactUs->user_id}}</td>
                                            <td>{{$contactUs->name}}</td>
                                            <td>{{$contactUs->email}}</td>
                                            <td>{{$contactUs->phone}}</td>
                                            <td>{{$contactUs->message}}</td>
                                            <td><a href="{{URL::to('admin/contactUs/delete_contactUs')}}?contactUs_id={{$contactUs->id}}" class="btn btn-danger" >Delete</a></td>
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
