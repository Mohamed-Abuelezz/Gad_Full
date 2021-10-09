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
    <link href="{{ URL::asset('admin_assets/js/global/bootstrap-select-1.13.14/dist/css/bootstrap-select.min.css') }}"
        rel="stylesheet" />
    <link href="{{ URL::asset('admin_assets/css/global/global.css') }}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>


    <style>
        #map {
            width: 100%;
            height: 250px;
            border: 1px solid var(--primary);
        }

    </style>

</head>

<body class="sb-nav-fixed">
    @include('Admin.global_Views.topNavbar')


    <div id="layoutSidenav">
        @include('Admin.global_Views.sideNav')

        <div id="layoutSidenav_content">
            <main>

                <div class="page" style="height: auto;z-index: 9999;">


                    <form
                        action="{{ $profiles != null ? url('admin/addorEditProfile/' . $profiles->id) : url('admin/addorEditProfile') }}"
                        method="post" enctype="multipart/form-data">

                        @csrf


                        <div class="mb-3">
                            <label for="formFile" class="form-label">Profile Cover</label>
                            <input class="form-control {{ $errors->has('image_cover') ? 'is-invalid' : '' }} "
                                type="file" id="formFile" name="image_cover" value="{{ old('image_cover') }}">
                            @error('image_cover')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <input type="text"
                                class="form-control {{ $errors->has('display_name') ? 'is-invalid' : '' }} "
                                id="exampleFormControlInput1" placeholder="اسم البروفايل" name="display_name"
                                value="{{ $profiles != null ? $profiles->display_name : old('display_name') }}">
                            @error('display_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        @if ($profiles == null)

                            <div class="mb-3">

                                <select class="selectpicker" data-live-search="true"
                                    title="اختيار اليوزر صاحب البروفايل ..." name="user_id">

                                    @foreach ($users as $user)

                                        <option data-tokens="{{ $user->name }}" value="{{ $user->id }}">
                                            {{ $user->name }}</option>

                                    @endforeach

                                </select>
                                @error('user_id')
                                    <div id="validationServer04Feedback" class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        @endif



                        <div class="mb-3">

                            <select class="selectpicker" data-live-search="true" title="اختيار نوع البروفايل ..."
                                name="profiles_type_id">

                                @foreach ($profiles_Type as $profile_Type)
                                    @if ($profiles != null && $profile_Type->id == $profiles->profiles_type_id)

                                        <option data-tokens="{{ $profile_Type->name_ar }}"
                                            value="{{ $profile_Type->id }}" selected>{{ $profile_Type->name_ar }}
                                        </option>

                                    @else
                                        <option data-tokens="{{ $profile_Type->name_ar }}"
                                            value="{{ $profile_Type->id }}">{{ $profile_Type->name_ar }}</option>

                                    @endif

                                @endforeach

                            </select>
                            @error('profiles_type_id')
                                <div id="validationServer04Feedback" class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }} "
                                id="exampleFormControlInput1" placeholder="الايميل" name="email"
                                value="{{ $profiles != null ? $profiles->email : old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }} "
                                id="exampleFormControlInput1" placeholder="رقم الهاتف" name="phone"
                                value="{{ $profiles != null ? $profiles->phone : old('phone') }}">
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">

                            <div style="color: var(--primary);font-weight: bold;">Select Location</div>
                            <input type="hidden" id="input_lat" name="lat" value="20.256565656" />
                            <input type="hidden" id="input_lng" name="lng" value="20.256565656" />

                            <div class="wrapContent" id="map" style="display: block"></div>


                            @error('lat')
                                <div id="validationServer04Feedback" class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>




                        <div class="mb-3">
                            <input type="text" class="form-control {{ $errors->has('bio') ? 'is-invalid' : '' }} "
                                id="exampleFormControlInput1" placeholder="bio" name="bio"
                                value="{{ $profiles != null ? $profiles->bio : old('bio') }}">
                            @error('bio')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <input type="text"
                                class="form-control {{ $errors->has('more_information') ? 'is-invalid' : '' }} "
                                id="exampleFormControlInput1" placeholder="معلومات اكثر" name="more_information"
                                value="{{ $profiles != null ? $profiles->more_information : old('more_information') }}">
                            @error('more_information')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="d-grid gap-2 col-6 mx-auto">
                            <input class="btn btn-primary" type="submit"
                                value="{{ $profiles != null ? 'Edit Profile' : 'Add Profile' }}" />
                        </div>

                    </form>


                </div>




                @if (session()->has('success'))

                    @include('Admin.global_Views.toast')

                @endif





            </main>
            @include('Admin.global_Views.footer')

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhwUPb_bGJzGj0Wnj89dcnU5NZQhGx9jY&callback=initMap&libraries=&v=weekly"
        async></script>
    <!-- Latest compiled and minified JavaScript -->


    <script src="{{ URL::asset('admin_assets/js/scripts.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/js/global/global.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/js/global/bootstrap-select-1.13.14/dist/js/bootstrap-select.min.js') }}">
    </script>

    <script>
        // To style all selects

        $(function() {
            $('select').selectpicker();

            $(".dropdown-menu li a").click(function() {

                $(".dropdown .btn:first-child").text($(this).text());
                $("input[name=country]").val($(this).attr("data-id"));
                console.log($(this).attr("data-id"));
            });

        });


        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            const uluru = {
                lat: 30.033333,
                lng: 31.233334
            };

            var gmarkers = [];



            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 4,
                center: uluru,
            });


            google.maps.event.addListener(map, 'click', function(event) {

                $("#input_lat").val(event.latLng.lat());
                $("#input_lng").val(event.latLng.lng());




                removeMarkers();

                placeMarker(event.latLng);


            });

            function placeMarker(location) {
                var marker = new google.maps.Marker({
                    position: location,
                    map: map,
                    icon: {
                        url: 'https://www.clipartmax.com/png/full/338-3388064_computer-icons-marker-pen-location-map-highlighter-location-marker-icon-png.png',
                        scaledSize: new google.maps.Size(40, 40)

                    }

                });
                // Push your newly created marker into the array:
                gmarkers.push(marker);

            }

            function removeMarkers() {
                for (i = 0; i < gmarkers.length; i++) {
                    gmarkers[i].setMap(null);
                }
            }


        }
    </script>
</body>

</html>
