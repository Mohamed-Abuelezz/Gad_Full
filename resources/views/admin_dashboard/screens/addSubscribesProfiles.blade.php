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
                    
  

                        <div class="card mb-4" style="margin:100px;padding:20px;overflow:hidden">
                           


  <form action="{{URL::to('admin/add_subscribe')}} " method="post" enctype="multipart/form-data">
  @csrf

  <div class="mb-3">

        <label for="exampleDataList" class="form-label"> البروفايل</label>
        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="ابحث عن البروفايل ..." name="profile_id">

                <datalist id="datalistOptions">
                @foreach ($profiles as $profile)

                <option value="{{$profile->id}}">{{$profile->display_name}}</option>

                @endforeach

                </datalist>
                @error('profile_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                </div>


                <label for="exampleDataList" class="form-label"> مدة الاشتراك </label>

                <select name="configs_offers_id[]" class="selectpicker" id="myselect">
                    @foreach ($configsOffers as $configsOffer)
                    <option value="{{$configsOffer->id}}">{{$configsOffer->take_long}} : {{$configsOffer->price_ar}}</option>
                    @endforeach
           </select>




<br>
<br>


            



            <input type="submit" class="btn btn-primary" value="اضافة"/>







  </div>



  </div>
  







</form>








                                    
                
                    </div>
                </main>

            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('admin_assets/js/scripts.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('admin_assets/js/datatables-simple-demo.js') }}"></script>
        <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhwUPb_bGJzGj0Wnj89dcnU5NZQhGx9jY&callback=initMap&libraries=&v=weekly"
    async
  ></script>





    </body>
</html>
