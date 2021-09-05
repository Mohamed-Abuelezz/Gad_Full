<!-- Start Footer Section --------------------------------------->

<div class="sectionFooter">

    <div class="container-fluid wrapContent">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="title s5">{{Config::get('app.locale') == 'ar' ? 'وسائل الدفع'  : 'Payments Methods' }} </div>
                <ul>
                    <li><img src="{{ asset('website_assets/assets/images/vodafone.png') }}"/></li>
                    <li><img src="{{ asset('website_assets/assets/images/fawry.png') }}"/></li>
                </ul>
                <br>
                <br>
                <div class="title">{{Config::get('app.locale') == 'ar' ? 'التواصل الاجتماعي'  : 'Socials'}}</div>
                <ul>
                    <li><img src="https://www.csregypt.com/wp-content/uploads/2021/04/mastercard-1.png"/></li>
                    <li><img src="https://www.csregypt.com/wp-content/uploads/2021/04/mastercard-1.png"/></li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <div class="links">
<ul>
    <li><a href="{{URL::to('contactus')}}">{{ __('website_screens/homescreen.contact_us') }} </a></li>
    <li><a href="{{URL::to('terms')}}" >{{Config::get('app.locale') == 'ar' ? 'الشروط والاحكام'  : 'Terms And Conditions'}}</a></li>
</ul>
                </div>
            </div>
        </div>
    </div>



</div>

<!-- End Footer Section --------------------------------------->