    <!-- Side Nav Menu -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header" style="text-align: center;">
          <h5 id="offcanvasRightLabel">{{ Config::get('app.locale') == 'ar' ? $meta->website_name_ar : $meta->website_name_ar }}</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul>
            <li class="sideMenuItem"><a href="#"><img
                  src="{{ asset('storage/images/users_images/'.Auth::user()->image) }}"
                  style="width: 100px;height: 100px;border-radius: 50%;" /></a></li>
            <li class="sideMenuItem">{{Auth::user()->name}}</li>
            <li class="sideMenuItem"><a href="#">{{ Config::get('app.locale') == 'ar' ?  'الصفحة الشخصية':'Profile'  }}</a></li>
            <li class="sideMenuItem"><a href="#">{{ Config::get('app.locale') == 'ar' ?  'تعديل الصفحة الشخصية':'Edit Profile'  }}</a></li>
            <hr style="border-width: 2px;">
    
            <li class="sideMenuItem"><a href="#">{{ Config::get('app.locale') == 'ar' ? 'اعدادات الحساب' : 'Account Settings' }}</a></li>
            <li class="sideMenuItem"><a href="#">{{ __('Website.contactus') }}</a></li>
            <li class="sideMenuItem"><a href="{{ url('logout') }}">{{ Config::get('app.locale') == 'ar' ? 'تسجبل الخروج' : 'Logout'}}</a></li>
          </ul>
        </div>
      </div>
    
    
    
    
    
    
      <div class="section-navbar parent d-none d-lg-flex">
    
    
        <div class="nav-items">
    
          <ul>
            <li><a href="#" class="text-small"><img src="{{ URL::asset('website_assets/assets/icons/logo.png') }}"
                  class="logo animate__animated animate__pulse  animate__infinite" alt="logo"></a>
            </li>
            <li>
    
    
              <div class="menu-container">
                <button class="menu-button"><img src="{{ asset('storage/images/users_images/'.Auth::user()->image) }}">
    
                </button>
    
                <i class="fas fa-sort-down" style="position: absolute;left: 28px;top: 20px;;z-index: 999;"></i>
                <div class="menu-dropdown">
    
    
                  <div class="content">
                    <ul>
    
                      <li>Profile</li>
                      <li>Edit Profile</li>
                      <hr style="border-width: 2px;">
                      <li>Account Settings</li>
                      <li ><a href="{{ url('authentication') }}">{{ Config::get('app.locale') == 'ar' ? 'تسجبل الخروج' : 'Logout'}}</a></li>
                    </ul>
                  </div>
                </div>
              </div>
    
    
            </li>
            <li><a href="#" class="text-small ">|</a></li>
            <li><a href="#" class="text-small ">Home</a></li>
            <li><a href="#" class="text-small">Contact Us</a></li>
            <li><a href="#" class="text-small">Terms And Conditions</a></li>
          </ul>
    
        </div>
    
        <div>
          <a href="#" class="text-small">عربي <i class="fas fa-globe" aria-hidden="true"></i> </a>
        </div>
    
    
      </div>
    
      <!--
          Mobile Menu Toggle
      -->
    
    
      <div class="section-navbar-small parent  d-lg-none" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
        <div class="logo">
          <a href="#" class="text-small "><img src="../assets/icons/logo.png"
              class="logo animate__animated animate__heartBeat animate__infinite" alt="logo"></a>
        </div>
        <nav class="side-nav">
          <div id="my-button " class="hamburger">
            <span class="bar"></span>
          </div>
        </nav>
    
    
    
    
      </div>
    