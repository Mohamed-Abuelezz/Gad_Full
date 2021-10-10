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
</head>

<body class="sb-nav-fixed">
    @include('Admin.global_Views.topNavbar') 


    <div id="layoutSidenav">
        @include('Admin.global_Views.sideNav') 

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">اجمالي زيارات الموقع</div>
                                <div class="card-footer d-flex align-items-center justify-content-center" style="font-size: 30px">
                                    {{$websiteViews_count}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                               <div class="card bg-primary text-white mb-4">
                                <div class="card-body">عدد المستخدمين</div>
                                <div class="card-footer d-flex align-items-center justify-content-center" style="font-size: 30px">
                                    {{$user_count}}
                                </div>
                            </div>
                        </div>
                       
                       
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">عدد البروفايلز</div>
                                    <div class="card-footer d-flex align-items-center justify-content-center" style="font-size: 30px">
                                    {{$profiles_count}}
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">عدد المشتركين</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    معدل زيارات الموقع
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>

                                    معدل الاشتراكات
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
            @include('Admin.global_Views.footer') 

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ URL::asset('admin_assets/js/scripts.js') }}"></script>

<script>    
    var websiteViewsChart = {!! json_encode($websiteViewsChart->toArray()) !!};
    console.log(websiteViewsChart);
</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('admin_assets/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/assets/demo/chart-bar-demo.js') }}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('admin_assets/js/datatables-simple-demo.js') }}"></script>
</body>

</html>
