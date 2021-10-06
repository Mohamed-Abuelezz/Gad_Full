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


                    <form class="row g-3" action="{{ url('admin/addSubject') }}" method="post">
                        @csrf
                        <div class="col-auto">
                            <input type="text" class="form-control  {{ $errors->has('name_ar') ? 'is-invalid' : '' }}"
                                id="inputPassword2" placeholder="الاسم بالعربي" name='name_ar'
                                value="{{ old('name_ar') }}">

                            @error('name_ar')
                                <div class="invalid-feedback ">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control  {{ $errors->has('name_en') ? 'is-invalid' : '' }}"
                                id="inputPassword2" placeholder="الاسم بالانجليزي" name='name_en'
                                value="{{ old('name_en') }}">

                            @error('name_en')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <div class="col-auto specialties">

                            <div class="dropdown {{ $errors->has('specialties') ? 'is-invalid' : '' }}">
                                <button class="btn btn-secondary dropdown-toggle " type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ (old('specialties') == null ? 'التخصص' : $specialties->where('id', old('specialties'))[0]->name_ar) }}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    @foreach ($specialties as $item)
                                        <li><a class="dropdown-item" href="#"
                                                data-id="{{ $item->id }}">{{ $item->name_ar }}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                            @error('specialties')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <input type="hidden" class=" " name="specialties"
                                value="{{  old('specialties') }}">

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
                                        <th> التخصص </th>
                                        <th>التحكم</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($subjects as $subject)
                                        <tr>
                                            <td>{{ $subject->id }}</td>
                                            <td>{{ $subject->name_ar }}</td>
                                            <td>{{ $subject->specialties->name_ar }}</td>
                                            <td>
                                                <a class="btn btn-danger"
                                                    href="{{ url('admin/deleteSubject/' . $subject->id) }}"
                                                    role="button">حذف</a>
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

        @if (session()->has('success'))

            @include('Admin.global_Views.toast')

        @endif


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ URL::asset('admin_assets/js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('admin_assets/js/datatables-simple-demo.js') }}"></script>


    <script>




$(function(){

$(".specialties .dropdown-menu li a").click(function(){

  $(".specialties .dropdown .btn:first-child").text($(this).text());
  $(".specialties .dropdown .btn:first-child").val($(this).text());

  $(".specialties input[name=specialties]").val($(this).attr("data-id"));

});

});





    </script>

</body>

</html>