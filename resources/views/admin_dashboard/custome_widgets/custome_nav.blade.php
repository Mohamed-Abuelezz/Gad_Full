<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">اساس</div>
                <a class="nav-link" href="{{URL::to('admin/')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    الاحصائيات
                </a>

                <div class="sb-sidenav-menu-heading">الصفحات</div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    المستخدمين 
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseUsers" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{URL::to('admin/users')}}">عرض المستخدمين</a>
                        <a class="nav-link" href="{{URL::to('admin/add_user')}}">اضافة مستخدم</a>
                    </nav>
                </div>


                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProfiles" aria-expanded="false" aria-controls="collapseProfiles">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    الصفحات الشخصيه 
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseProfiles" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{URL::to('admin/profiles')}}">عرض الصفحات الشخصيه</a>
                        <a class="nav-link" href="{{URL::to('admin/add_profile')}}">اضافة صفحة شخصيه</a>
                    </nav>
                </div>
     

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSubscribes" aria-expanded="false" aria-controls="collapseSubscribes">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    المشتركين 
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseSubscribes" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{URL::to('admin/subscribes')}}">عرض المشتركين</a>
                        <a class="nav-link" href="{{URL::to('admin/add_subscribe')}}">اضافة مشترك</a>
                    </nav>
                </div>
                
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    اعدادات الموقع 
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
           
           


                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseSlider" aria-expanded="false" aria-controls="pagesCollapseSlider">
                            نواة المشروع
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseSlider" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{URL::to('admin/countries')}}">البلدان</a>
                                <a class="nav-link" href="{{URL::to('admin/educationStages')}}">المراحل التعليميه</a>
                                <a class="nav-link" href="{{URL::to('admin/scientificArticles')}}">المواد العلميه</a>
                                <a class="nav-link" href="{{URL::to('admin/subscribersType')}}">نوع الصفحة الشخصيه</a>
                                <a class="nav-link" href="{{URL::to('admin/configsOffers')}}">العروض</a>
                            </nav>
                        </div>

                 </div>









    </nav>
</div>