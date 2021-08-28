<!-- Start NavBar Section --------------------------------------->

<div class="sectionNavBar wrapContent" >

    <div class="container-fluid">
        <div class="row justify-content-between">
            
            <div class="col rightsidemenu">
                <div class="menus">
                    <ul>
                
                        <li><a href="{{ Config::get('app.locale') == 'ar' ?  URL::to('language/en') :  URL::to('language/ar')}}" class="s6">{{Config::get('app.locale') == 'ar' ?   'English'   :  "عربي" }} <i class="fas fa-globe-americas"></i> </a></li>
                        <li><a href="{{URL::to('/')}}" class="s6">{{Config::get('app.locale') == 'ar' ?   'الرئيسية'   :  "Home" }}</a></li>
                        <li><a href="{{URL::to('login')}}" class="s6">{{ __('website_screens/index.signInOrRegister') }}</a></li>
                    </ul>
                </div>
                
                        </div>
                     
                        <div class="col rightsidemenumobile">
                    
                            <div class="mobile-meun">
                        
                                <div class="menu-button">
                                  <div class="menu-button-line"></div>
                                  <div class="menu-button-line"></div>
                                  <div class="menu-button-line"></div>
                                </div>
                              
                          </div>
                        
                        
                        
                        </div>
            <div class="col leftside"  >


                <img class="logo" src="{{ asset('website_assets/assets/icons/logo.png') }}"/>
            </div>
          
            
        </div>
      
    </div>
    
    
    
    
    </div>
    
      <div class="menu"> <!--Mobile Menus -->
            <div class="menu-branding"></div>
            <ul class="menu-nav">
                <ul>
                    <li><a href="{{URL::to('/')}}" class="s4">{{Config::get('app.locale') == 'ar' ?   'الرئيسية'   :  "Home" }}</a></li>
                    <li><a href="{{URL::to('login')}}" class="s4">{{ __('website_screens/index.signInOrRegister') }}</a></li>
                    <li><a href="{{ Config::get('app.locale') == 'ar' ?  URL::to('language/en') :  URL::to('language/ar')}}" class="s4"> {{Config::get('app.locale') == 'ar' ?   'English'   :  "عربي" }}  <i class="fas fa-globe-americas"></i> </a></li>
    
                </ul>
            </ul>
    </div>
    
    <!-- End NavBar Section ---------------------------------------> 