    <!-- NavBar Section----------------------------------------------------------->

<!-- Side Nav Menu -->

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" >
    <div class="offcanvas-header" style="text-align: center;">
      <h5 id="offcanvasRightLabel" >GAD</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul>
        <li class="sideMenuItem"><a href="#">{{ __('Website.home') }}</a></li>
        <li class="sideMenuItem"><a href="#">{{ __('Website.contactus') }}</a></li>
        <li class="sideMenuItem"><a href="{{ url('authentication') }}">{{ __('Website.login-register') }}</a></li>
<hr>
<li>
  <div>
    <a href="#" class="text-small">{{ __('Website.lang') }} <i class="fas fa-globe" aria-hidden="true"></i> </a>
  </div>
</li>

      </ul>
    </div>
  </div>
  
  
  
  
  
  
      <div class="section-navbar parent d-none d-lg-flex">
  
  
        <div class="nav-items">
  
          <ul>
            <li><a href="#" class="text-small"><img src="{{ URL::asset('website_assets/assets/icons/logo.png') }}"
                  class="logo animate__animated animate__pulse  animate__infinite" alt="logo"></a>
            </li>
            <li ><a href="{{ url('/') }}" class="text-small ">{{ __('Website.home') }}</a></li>
            <li><a href="#" class="text-small">{{ __('Website.contactus') }}</a></li>
            <li><a href="{{ url('authentication') }}" class="text-small">{{ __('Website.login-register') }}</a></li>

          </ul>
  
        </div>
  
        <div>
          <a href="{{ Config::get('app.locale') == 'ar' ? url('setlocale/en') : url('setlocale/ar') }}" class="text-small">{{ __('Website.lang') }} <i class="fas fa-globe" aria-hidden="true"></i> </a>
        </div>
  
  
      </div>
  
      <!--
        Mobile Menu Toggle
    -->
  
  
      <div class="section-navbar-small parent  d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
        <div class="logo">
          <a href="#" class="text-small"><img src="{{ URL::asset('website_assets/assets/icons/logo.png') }}"
              class="logo animate__animated animate__heartBeat animate__infinite" alt="logo"></a>
        </div>
        <nav class="side-nav">
          <div id="my-button " class="hamburger">
            <span class="bar"></span>
          </div>
        </nav>
  
  
  
  
      </div>
  



    <!-- End NavBar Section----------------------------------------------------------->
