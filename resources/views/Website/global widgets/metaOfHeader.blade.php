  <!-- Required meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="{{$meta->charset}}">
  <meta name="author" content="{{$meta->auther}}">
  <meta name="keywords" content="{{$meta->keywords}}">
  <meta name="description" content="{{  Config::get('app.locale') == 'ar' ? $meta->description_ar : $meta->description_en}}">

  <link rel="icon" href=" {{ asset('storage/images/website_images/'.$meta->website_logo) }}">

  <title>{{ Config::get('app.locale') == 'ar' ? $meta->website_name_ar : $meta->website_name_ar }}</title>
