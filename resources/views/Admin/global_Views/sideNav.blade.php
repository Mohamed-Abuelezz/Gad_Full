<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ url('admin/') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    لوحة التحكم
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                    data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    المستخدمين
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('admin/users') }}">عرض المستخدمين</a>
                        <a class="nav-link" href="{{ url('admin/addorEditUser')}}">اضافة مستخدم</a>
                    </nav>
                </div>
                <!-- --------------------------------------------------->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                    aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    محتوي الموقع
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                    data-bs-parent="#sidenavAccordion">

                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                    <!-------------------------------------------------------------->

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                            aria-controls="pagesCollapseAuth">
                            البروفايلز
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ url('admin/profiles') }}">عرض البروفايلز</a>
                                <a class="nav-link" href="{{ url('admin/addorEditProfile') }}">اضافة بروفايل</a>
                            </nav>
                        </div>
                     <!-------------------------------------------------------------->

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseAuth2" aria-expanded="false"
                            aria-controls="pagesCollapseAuth2">
                            بيانات الموقع
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth2" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ url('admin/countries') }}">البلاد</a>
                                <a class="nav-link" href="{{ url('admin/profileTypes') }}">نوع البروفايل</a>
                                <a class="nav-link" href="{{ url('admin/specialties') }}">تخصص البروفايل</a>
                                <a class="nav-link" href="{{ url('admin/subjects') }}">المواد العلمية</a>
                                <a class="nav-link" href="{{ url('admin/packages') }}"> الباقات</a>
                            </nav>
                        </div>

                     <!-------------------------------------------------------------->

                     <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                     data-bs-target="#pagesCollapseAuth3" aria-expanded="false"
                     aria-controls="pagesCollapseAuth3">
                     طلبات الاشتراك والتواصل
                     <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                 </a>
                 <div class="collapse" id="pagesCollapseAuth3" aria-labelledby="headingOne"
                     data-bs-parent="#sidenavAccordionPages">
                     <nav class="sb-sidenav-menu-nested nav">
                         <a class="nav-link" href="{{ url('admin/countries') }}">طلبات الاشتراك</a>
                         <a class="nav-link" href="{{ url('admin/contactUs') }}">تواصل معنا</a>
                     </nav>
                 </div>

                     <!-------------------------------------------------------------->

                     <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                     data-bs-target="#pagesCollapseAuth4" aria-expanded="false"
                     aria-controls="pagesCollapseAuth4">
                     الابلاغات
                     <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                 </a>
                 <div class="collapse" id="pagesCollapseAuth4" aria-labelledby="headingOne"
                     data-bs-parent="#sidenavAccordionPages">
                     <nav class="sb-sidenav-menu-nested nav">
                         <a class="nav-link" href="{{ url('admin/profileReports') }}">ابلاغات البروفايلز</a>
                         <a class="nav-link" href="{{ url('admin/commentsReports') }}">ابلاغات الكومنتات</a>
                     </nav>
                 </div>




                    </nav>

                </div>

                <!-- ------------------------------------------------>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                اعدادات الموقع
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne"
                data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ url('admin/websiteConfigs') }}">الاعدادات الرئيسية</a>
                    <a class="nav-link" href="{{ url('admin/slider')}}">Slider</a>
                    <a class="nav-link" href="{{ url('admin/availbalePayments')}}">طرق الدفع المتاحة</a>
                </nav>
            </div>

                <!-- ------------------------------------------------>


            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
            data-bs-target="#pagesCollapseAuth3" aria-expanded="false"
            aria-controls="pagesCollapseAuth3">
           الادمن
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="pagesCollapseAuth3" aria-labelledby="headingOne"
            data-bs-parent="#sidenavAccordionPages">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{ url('admin/admins') }}">الادمنز</a>
            </nav>
        </div>




            </div>
        </div>

    </nav>
</div>