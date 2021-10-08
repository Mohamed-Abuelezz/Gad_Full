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


                    <form class="row g-3" action="{{ url('admin/websiteConfigs') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-auto">
                            <input type="text"
                                class="form-control  {{ $errors->has('website_name_ar') ? 'is-invalid' : '' }}"
                                id="inputPassword2" placeholder="الاسم الموقع بالعربي" name='website_name_ar'
                                value="{{ old('website_name_ar') }}">

                            @error('website_name_ar')
                                <div class="invalid-feedback ">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-auto">
                            <input type="text"
                                class="form-control  {{ $errors->has('website_name_en') ? 'is-invalid' : '' }}"
                                id="inputPassword2" placeholder="الاسم الموقع بالانجليزية" name='website_name_en'
                                value="{{ old('website_name_en') }}">

                            @error('website_name_en')
                                <div class="invalid-feedback ">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-auto">
                            <input class="form-control {{ $errors->has('website_logo') ? 'is-invalid' : '' }} "
                                type="file" id="formFile" value="لوجو الموقع" name="website_logo">
                            @error('website_logo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>







                        <div class="col-auto">
                            <input type="text"
                                class="form-control  {{ $errors->has('charset') ? 'is-invalid' : '' }}"
                                id="inputPassword2" placeholder="charset" name='charset' value="{{ old('charset') }}">

                            @error('charset')
                                <div class="invalid-feedback ">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-auto">
                            <input type="text" class="form-control  {{ $errors->has('author') ? 'is-invalid' : '' }}"
                                id="inputPassword2" placeholder="author" name='author' value="{{ old('author') }}">

                            @error('author')
                                <div class="invalid-feedback ">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-auto">
                            <input type="text"
                                class="form-control  {{ $errors->has('description_ar') ? 'is-invalid' : '' }}"
                                id="inputPassword2" placeholder="description_ar_meta" name='description_ar'
                                value="{{ old('description_ar') }}">

                            @error('description_ar')
                                <div class="invalid-feedback ">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-auto">
                            <input type="text"
                                class="form-control  {{ $errors->has('description_en') ? 'is-invalid' : '' }}"
                                id="inputPassword2" placeholder="description_en_meta" name='description_en'
                                value="{{ old('description_en') }}">

                            @error('description_en')
                                <div class="invalid-feedback ">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-auto">
                            <input type="text"
                                class="form-control  {{ $errors->has('keywords') ? 'is-invalid' : '' }}"
                                id="inputPassword2" placeholder="keywords" name='keywords'
                                value="{{ old('keywords') }}">

                            @error('keywords')
                                <div class="invalid-feedback ">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-auto">
                            <input type="text"
                                class="form-control  {{ $errors->has('ourMessage_title_ar') ? 'is-invalid' : '' }}"
                                id="inputPassword2" placeholder=" عنوان رسالتنا بالعربي" name='ourMessage_title_ar'
                                value="{{ old('ourMessage_title_ar') }}">

                            @error('ourMessage_title_ar')
                                <div class="invalid-feedback ">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-auto">
                            <input type="text"
                                class="form-control  {{ $errors->has('ourMessage_title_en') ? 'is-invalid' : '' }}"
                                id="inputPassword2" placeholder="عنوان رسالتنا بالانجليزية " name='ourMessage_title_en'
                                value="{{ old('ourMessage_title_en') }}">
                            @error('ourMessage_title_en')
                                <div class="invalid-feedback ">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-auto">
                            <input type="text"
                                class="form-control  {{ $errors->has('ourMessage_desc_ar') ? 'is-invalid' : '' }}"
                                id="inputPassword2" placeholder="تفاصيل رسالتنا بالعربي" name='ourMessage_desc_ar'
                                value="{{ old('ourMessage_desc_ar') }}">

                            @error('ourMessage_desc_ar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-auto">
                            <input type="text"
                                class="form-control  {{ $errors->has('ourMessage_desc_en') ? 'is-invalid' : '' }}"
                                id="inputPassword2" placeholder="تفاصيل رسالتنا بالانجليزية" name='ourMessage_desc_en'
                                value="{{ old('ourMessage_desc_en') }}">

                            @error('ourMessage_desc_en')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3"> تعديل \ اضافة</button>
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
                                        <th>اسم الموقع</th>
                                        <th>اللوجو</th>
                                        <th>meta_Charset</th>
                                        <th>meta_author</th>
                                        <th>meta_description</th>
                                        <th>meta_keywords</th>
                                        <th>ourMessage_title</th>
                                        <th>ourMessage_desc</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($websiteConfigs as $websiteConfig)
                                        <tr>
                                            <td>{{ $websiteConfig->id }}</td>
                                            <td>{{ $websiteConfig->website_name_ar }}</td>
                                            <td>

                                                <a href="{{ asset('storage/images/website_images/'.$websiteConfig->website_logo) }}" target="_blank" class="preview" style="z-index: 9999" title=" Sherif Nabil Abo.elezz ">
                                                    <img class="profile-image "
                                                    src="{{ asset('storage/images/website_images/'.$websiteConfig->website_logo) }}" width="100%" height="100"/>
                                                  </a>
                                            
                                            </td>
                                            <td>{{ $websiteConfig->charset }}</td>
                                            <td>{{ $websiteConfig->author }}</td>
                                            <td>{{ $websiteConfig->description_ar }}</td>
                                            <td>{{ $websiteConfig->keywords }}</td>
                                            <td>{{ $websiteConfig->ourMessage_title_ar }}</td>
                                            <td>{{ $websiteConfig->ourMessage_desc_ar }}</td>


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
    <script src="{{ URL::asset('admin_assets/js/global/global.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/js/global/jQuery-Plugin-For-Image-Hover-Preview-With-Caption-Support-imagepreview/imagepreview.min.js') }}"></script>


    <script>

    $('.preview').anarchytip();


    </script>

</body>

</html>
