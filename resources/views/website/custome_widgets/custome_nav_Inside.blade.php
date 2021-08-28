<div class="sectionNavBar wrapContent" >

    <div class="container-fluid">
        <div class="row justify-content-between">
            
            <div class="col rightsidemenu">
                <div class="menus">
                    <ul>
                        <li style="padding: 0;">
    
                            <a type="button" class="s6 position-relative avatar"  data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" >
                                <img style="width: 40px;height: 40px;border-radius: 50px;" src="https://cdn2.iconfinder.com/data/icons/flatfaces-everyday-people-square/128/beard_male_man_face_avatar-512.png" /> <span class="position-absolute bottom-0 end-0  translate-bottom badge rounded-pill " style="background-color:  var(--secondryColor);">
                           
                              <i class="fas fa-caret-down"></i> 
                              </span>               
                            
                            </a>
                        
                            <div id="customPopover" style="display: none;">
    
                                <ul>
                                    @if ($isHaveProfile == true)
                                    <li><a href="#" >{{ __('website_screens/homescreen.show_profile') }}</a></li>
                                    <li><a href="./editProfile_screen.html">{{ __('website_screens/homescreen.edit_profile') }}</a></li>
                                
                                    @else

                                    <li><a href="#" >{{ __('website_screens/homescreen.create_profile') }}</a></li>

                                    @endif
    
    <hr style="border-top: 3px dotted white;"/>
    
    <li><a href="#">{{ __('website_screens/homescreen.my_account') }}</a></li>
    <li><a href="{{URL::to('/logout')}}">{{ __('website_screens/homescreen.sign_out') }}</a></li>
    
                                </ul>
    
    
                            </div>
                            
        
                        
                        </li>
                        
                        <li>|</li>
                        
                        <li><a href="#" class="s6">{{ __('website_screens/homescreen.home') }}</a></li>
                        <li><a href="" class="s6">{{ __('website_screens/homescreen.contact_us') }} </a></li>
                        <li><a href="#" class="s6">{{ __('website_screens/homescreen.terms_and_conditions') }}</a></li>
                         <li><a href="{{ Config::get('app.locale') == 'ar' ?  URL::to('language/en') :  URL::to('language/ar')}}" class="s6">{{Config::get('app.locale') == 'ar' ?   'English'   :  "عربي" }} <i class="fas fa-globe-americas"></i> </a></li>
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
            <div class="col leftside" >
                <img class="logo" src="{{ asset('website_assets/assets/icons/logo.png') }}"/>
            </div>
          
            
        </div>
      
    </div>
    
    
    
    
    </div>
    
      <div class="menu" > <!--Mobile Menus -->
            <ul class="menu-nav">
                <ul>
                    <li><a href="#" class="s4">{{ __('website_screens/homescreen.home') }} </a></li>
                    <li><a href="#" class="s4">{{ __('website_screens/homescreen.contact_us') }}</a></li>
                    <li><a href="#" class="s4">{{ __('website_screens/homescreen.terms_and_conditions') }}</a></li>
                    <hr style="border-top: 3px dotted white;"/>

                    @if ($isHaveProfile == true)
                    <li><a href="" class="s4">{{ __('website_screens/homescreen.show_profile') }}</a></li>
                    <li><a href="./profile_Screen.html" class="s4">{{ __('website_screens/homescreen.edit_profile') }}</a></li>
                    @else

                    <li><a href="" class="s4">{{ __('website_screens/homescreen.create_profile') }}</a></li>

                    @endif

                    <li><a href="#" class="s4">{{ __('website_screens/homescreen.my_account') }}</a></li>
                    <li><a href="../screens/login-screen.html" class="s4">{{ __('website_screens/homescreen.sign_out') }}</a></li>
    
                </ul>
            </ul>
    </div>
    