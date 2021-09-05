<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAD</title>
    <link href="{{ asset('website_assets/css/GLOBAL_Configs.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@300&display=swap" rel="stylesheet">
    <link href="{{ asset('website_assets/css/GLOBAL_ELEMENTS.css') }}" rel="stylesheet">
    <link href="{{ asset('website_assets/packages/bootstrap-5.0.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('website_assets/packages/fontawesome-free-5.15.3-web/css/all.min.css') }}" rel="stylesheet">

        <!-- My CSS -->
        <link href="{{ asset('website_assets/css/GLOBAL_Configs.css') }}" rel="stylesheet">
        <link href="{{ asset('website_assets/css/Custome_Components.css') }}" rel="stylesheet">
        <link href="{{asset('website_assets/css/GLOBAL_ELEMENTS.css') }}" rel="stylesheet">

        <link href="{{ asset('website_assets/css/termsAndConditions_screen.css') }}" rel="stylesheet">
</head>

<body dir="{{ App::isLocale('en') ?  'ltr':'rtl' }}" lang="{{Config::get('app.locale') == 'ar' ?   'ar'   :  "en" }}" class="body">
    
<!-- Start NavBar Section --------------------------------------->

@if (Auth::guest())

@include('website.custome_widgets.custome_nav_outside')

@else

@include('website.custome_widgets.custome_nav_Inside')

@endif
    
<!-- End NavBar Section --------------------------------------->    


<div class="page">

<div class="content" style="height: 100vh;">

    <main class="wrap">
        <section class="container">
          <div class="container__heading">
            <h2>{{Config::get('app.locale') == 'ar' ? 'الشروط والاحكام':'Terms & Conditions' }}</h2>
          </div>
          <div class="container__content" >
            <p style="font-weight: bold"> {{Config::get('app.locale') == 'ar' ? 
            'اذا قمت بالتسجيل في الموقع سوف تطبق عليك بعض الشروط والاحكام والتي تضمن استخدام امن للموقع وحماية حقوق مالك الموقع والمستخدم علي حد سواء ويرجي عدم التسجيل في الموقع اذا تم رفض او عدم الموافقه علي اي بند في الشروط التالية
            ':
            'If you register on the site, some terms and conditions will apply to you, which guarantee a safe use of the site and protect the rights of the site owner and user alike. Please do not register on the site if any item in the following conditions is rejected or not not agree to any of the following terms .' }} </p>
          
          <p > {{Config::get('app.locale') == 'ar' ? 
'الموقع غير مسئول عن فقدان اي متعلقات مالية لاي سبب كان .
'
:

'The site is not responsible for the loss of any financial belongings for any reason.' }} </p>
       
       <p > {{Config::get('app.locale') == 'ar' ? 
        'غير مسموح بنشر اي شي خارج نطاق التدريس واذا تم ذلك سوف يتم حذف الاكونت الخاص بك واتخاذ الاجراءات القانونيه اذا لزم الامر
        '
        :
        
        'It is not allowed to publish anything outside the scope of teaching and if this is done, your account will be deleted and legal action will be taken if necessary.'
        
        }} </p>
        
       
        <p > {{Config::get('app.locale') == 'ar' ? 
            'عند حصول اي مشكلة او التبليغ عن اي شيئ يرجي التواصل مع ادارة الموقع من خلال قسم التواصل معنا 
            '
            :
            
            'When there is any problem or report anything, please contact the site administration through the Contact Us section.'
            
            }} </p>
    

    <p > {{Config::get('app.locale') == 'ar' ? 
        'عند عملية دفع الاشتراك يرجي الانتظار لمدة يومين كحد اقصي واذا لم يتجدد الاشتراك بشكل سليم يرجي التواصل مع دارة الموقع من خلال قسم تواصل معنا 
        '
        :
        
        'When paying the subscription, please wait for a maximum of two days. If the subscription is not renewed properly, please contact the site administration through the Contact Us section..'
        
        }} </p>


<p > {{Config::get('app.locale') == 'ar' ? 
    'يمكنك استخدام التواصل معنا لتجديد الاشتراك ايضا في حالة عدم المقدرة في التعامل مع وسائل الدفع المتاحة
    '
    :
    
    'You can use contact us to renew the subscription also in case you are unable to deal with the available payment methods.'    
    }} </p>

<p > {{Config::get('app.locale') == 'ar' ? 
' عند الانتهاء من المدة الخاصة بالاشتراك الخاص بك سوف يتم حجب صفحتك الشخصية عند الاخرين ولكن سوف تظل متاحة في المفضله لديهم لحين تجديد الاشتراك مرة اخري   
 '
    :
    
    ' At the end of your subscription period, your personal page will be blocked from others, but it will remain available in their favorites until the subscription is renewed again.'    
    }} </p>


        </div>

        </section>
      </main>  

</div>



</div>







<!-- Start Footer Section --------------------------------------->

@include('website.custome_widgets.footer')

<!-- End Footer Section --------------------------------------->













    <!-- packages js -->
    <script src="{{ asset('website_assets/packages/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('website_assets/packages/jquery/jquery.js') }}"></script>

    <!-- my js -->
        <script src="{{ asset('website_assets/js/GLOBAL_ELEMENTS.js') }}"></script>
        <script src="{{ asset('website_assets/js/Custome_Components.js') }}"></script>



<script>


var toastElList = [].slice.call(document.querySelectorAll('.toast'));
var toastList = toastElList.map(function (toastEl) {
  return new bootstrap.Toast(toastEl, {
    animation : true,
    autohide : true,
    delay : 15000,
  })
});



</script>





</body>
</html>



  