<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | OshnoGroup</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/public/admin/assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="/public/admin/assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/public/admin/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="/public/admin/assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="/public/admin/assets/css/vendor/cryptocurrency-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/public/admin/assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="/public/admin/assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/public/admin/assets/css/style.css">
    @yield('styles')

</head>

<body>

    <div class="main-wrapper">


        <!-- Header Section Start -->
        <div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">

                    <!-- Header Logo (Header Left) Start -->
                    <div class="header-logo col-auto">
                        <a href="/">
                            <img src="/public/admin/images/logo.png" alt="">
                        </a>
                    </div><!-- Header Logo (Header Left) End -->

                    <!-- Header Right Start -->
                    <div class="header-right flex-grow-1 col-auto">
                        <div class="row justify-content-between align-items-center">

                            <!-- Side Header Toggle & Search Start -->
                            <div class="col-auto">
                                <div class="row align-items-center">

                                    <!--Side Header Toggle-->
                                    <div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                                    <!--Header Search-->
                                   <!--  <div class="col-auto">

                                        <div class="header-search">

                                            <button class="header-search-open d-block d-xl-none"><i class="zmdi zmdi-search"></i></button>

                                            <div class="header-search-form">
                                                <form action="#">
                                                    <input type="text" placeholder="Search Here">
                                                    <button><i class="zmdi zmdi-search"></i></button>
                                                </form>
                                                <button class="header-search-close d-block d-xl-none"><i class="zmdi zmdi-close"></i></button>
                                            </div>

                                        </div>
                                    </div> -->

                                </div>
                            </div><!-- Side Header Toggle & Search End -->

                            <!-- Header Notifications Area Start -->
                            <div class="col-auto">

                                <ul class="header-notification-area">

                                    <!--User-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#">
                                            <span class="user">
                                        <span class="avatar">
                                            <img src="/public/admin/images/user.svg" alt="">
                                            <span class="status"></span>
                                            </span>
                                            <span class="name">Admin</span>
                                            </span>
                                        </a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-user">
                                            
                                            <div class="body">
                                            
                                            <ul>
                                                    <li>
                                                    <form id="logout" action="{{ route('logout') }}" method="post">
                                                      @csrf
                                                      <a href="javascript:document.getElementById('logout').submit()" ><i class="zmdi zmdi-lock-open"></i>Выход</a>
                                                      </form>
                                                    </li>
                                              </ul>
                                               
                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div><!-- Header Notifications Area End -->

                        </div>
                    </div><!-- Header Right End -->

                </div>
            </div>
        </div><!-- Header Section End -->
        <!-- Side Header Start -->
        <div class="side-header show">
            <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
            <!-- Side Header Inner Start -->
            <div class="side-header-inner custom-scroll">

                <nav class="side-header-menu" id="side-header-menu">
                    <ul>
                        <li><a href="/admin/slide"> <span>Слайд шоу</span></a></li>
                        <li><a href="/admin/product-internet"> <span>Интернет</span></a></li>
                        <li><a href="/admin/product-iptv"> <span>IP телеведения</span></a></li>
                        <li><a href="/admin/product-device"> <span>Устройства</span></a></li>
                        <li><a href="/admin/news"> <span>Новости</span></a></li>
                        <li><a href="/admin/vacancies"> <span>Вакансии</span></a></li>
                        <li><a href="/admin/domains"> <span>Домены</span></a></li>
                        <li><a href="/admin/hostings"> <span>Хостинги</span></a></li>
                        <li><a href="/admin/properties"> <span>Настройки</span></a></li>
                    </ul>
                </nav>

            </div><!-- Side Header Inner End -->
        </div><!-- Side Header End -->

       @yield('content')

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2021 &copy; </p>
                </div>

            </div>
        </div><!-- Footer Section End -->

    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="/public/admin/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="/public/admin/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="/public/admin/assets/js/vendor/popper.min.js"></script>
    <script src="/public/admin/assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="/public/admin/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/public/admin/assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="/public/admin/assets/js/main.js"></script>

    @yield('scripts')


</body>
</html>