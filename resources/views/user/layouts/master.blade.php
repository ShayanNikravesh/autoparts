<!DOCTYPE html>
<html dir="rtl" lang="fa">
<!--Head::start-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Auto Parts Store</title>

    <!--    Bootstrap 5 RTL-->
    <link rel="stylesheet" href="{{asset('user_assets/css/vendors/bootstrap/bootstrap.rtl.css')}}">
    <!--    Fontawesome 5-->
    <link rel="stylesheet" href="{{asset('user_assets/css/vendors/fontawesome/fontawesome.min.css')}}">
    <!--    SwiperJs Styles-->
    <link rel="stylesheet" href="{{asset('user_assets/css/vendors/swiper/swiper-bundle.min.css')}}">
    <!--    Main Styles-->
    <link rel="stylesheet" href="{{asset('user_assets/css/style.css')}}">
</head>
<!--Head::end-->

<!--Body::start-->
<body>

<!--Loader:start-->
<div class="loader mt-5">
    <div class="custom-navbar">
        <!--Navbar Mobile In Loader:start-->
        <div class="top-navbar">
            <!--        Top Mobile Navbar In Mobile :start-->
            <div class="top-mobile-navbar py-1 border-bottom-gray-150">
                <!--        Container:start-->
                <div class="container d-flex justify-content-between align-items-center">
                    <!--        Top Mobile Navbar Right:start-->
                    <div class="top-mobile-navbar-right d-flex justify-content-between align-items-center">
                        <!--            Humber Btn:start-->
                        <!--begin::Svg Icon-->
                        <svg class="blur-up" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="24px"
                             height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
                                <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                      fill="#000000" opacity="0.3"/>
                            </g>
                        </svg><!--end::Svg Icon-->

                        <!--            Humber Btn:end-->
                    </div>
                    <!--        Top Mobile Navbar Right:end-->

                    <!--        Top Mobile Navbar Middle:start-->
                    <div class="top-mobile-navbar-middle d-flex justify-content-between align-items-center">
                        <!--            Logo:start-->
                        <a href="javascript:void(0)" class="navbar-brand">
                            <img src="{{asset('user_assets/img/logo.png')}}" alt="لوگو" class="blur-up">
                        </a>
                        <!--            Logo:end-->
                    </div>
                    <!--        Top Mobile Navbar Middle:end-->

                    <!--        Top Mobile Navbar Left:start-->
                    <div class="top-mobile-navbar-left">
                        <!--begin::Svg Icon-->
                        <svg class="blur-up" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="24px"
                             height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                <path d="M12,16 C12.5522847,16 13,16.4477153 13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 C11,16.4477153 11.4477153,16 12,16 Z M10.591,14.868 L10.591,13.209 L11.851,13.209 C13.447,13.209 14.602,11.991 14.602,10.395 C14.602,8.799 13.447,7.581 11.851,7.581 C10.234,7.581 9.121,8.799 9.121,10.395 L7.336,10.395 C7.336,7.875 9.31,5.922 11.851,5.922 C14.392,5.922 16.387,7.875 16.387,10.395 C16.387,12.915 14.392,14.868 11.851,14.868 L10.591,14.868 Z"
                                      fill="#000000"/>
                            </g>
                        </svg><!--end::Svg Icon-->
                    </div>
                    <!--        Top Mobile Navbar Left:end-->
                </div>
                <!--        Container:end-->
            </div>
            <!--        Top Mobile Navbar In Mobile:end-->
        </div>
        <div class="main-navbar pt-1">
            <!--        Main Mobile Navbar:start-->
            <div class="main-mobile-navbar py-2">
                <!--        Container:start-->
                <div class="container d-flex justify-content-between align-items-center">
                    <!--            Main Mobile Navbar Right:start-->
                    <div class="main-mobile-navbar-right">
                        <!--            Search Form:start-->
                        <form action="javascript:void(0)" class="position-relative">
                            <input class="form-control border-0 fs-6 fw-normal bg-gray-150 border-radius-xl py-2"
                                   type="search" placeholder="جستجو">
                            <button class="btn position-absolute" type="submit">
                                <i class="fab fa-sistrix gray-500 fw-md fs-5 blur-up"></i>
                            </button>
                        </form>
                        <!--            Search Form:end-->
                    </div>
                    <!--            Main Mobile Navbar Right:end-->

                    <!--            Main Mobile Navbar Left:start-->
                    <div class="main-mobile-navbar-left">
                        <!--            Login and Register:start-->
                        
                        <!--            Login and Register:end-->

                        <!--            Shopping Cart Button:start-->
                        
                        <!--            Shopping Cart Button:end-->
                    </div>
                    <!--            Main Mobile Navbar Left:end-->
                </div>
                <!--        Container:end-->
            </div>
            <!--        Main Mobile Navbar:end-->
        </div>
        <!--Navbar Mobile In Loader:end-->

        <!--Top Navbar In Loader::start-->
        <div class="top-navbar navbar-expand-lg navbar-light py-2">
            <!--        Container:start-->
            <div class="container d-flex justify-content-between align-items-center">
                <!--        Top Navbar Right:start-->
                <div class="top-nav-right d-flex justify-content-between align-items-center">
                    <!--Logo:start-->
                    <a href="javascript:void(0)" class="navbar-brand">
                        <img src="{{asset('user_assets/img/logo/Logo.png')}}" alt="لوگو" class="blur-up">
                    </a>
                    <!--Logo:end-->

                    <!--Search Form:start-->
                    <form action="javascript:void(0)" class="position-relative">
                        <input class="form-control border-0 fs-6 fw-normal border-radius-xl bg-gray-150"
                               type="search" placeholder="جستجو">
                        <button class="btn position-absolute" type="submit">
                            <i class="fab fa-sistrix fw-md fs-5 gray-500 blur-up"></i>
                        </button>
                    </form>
                    <!--Search Form:end-->
                </div>
                <!--        Top Navbar Right:end-->

                <!--        Top Navbar Left:start-->
                
                <!--        Top Navbar Left:end-->
            </div>
            <!--        Container:end-->
        </div>
        <!--Top Navbar In Loader::end-->

        <!--Navbar In Loader::start-->
        <nav class="main-navbar navbar navbar-expand-lg navbar-light bg-light custom-box-shadow-s-1-bottom py-1">
            <!--    Container:start-->
            <div class="container d-flex justify-content-between align-items-center">
                <!--Navbar Right:start-->
                <div class="navbar-right">
                    <!--Navbar Wrapper:start-->
                    <ul class="navbar-nav mb-2 mb-lg-0 d-flex justify-content-between align-items-center position-relative">
                        <!--Navbar Item:start-->
                        <li class="nav-item d-flex justify-content-between align-items-center position-relative">
                            <!--begin::Svg Icon-->
                            <svg class="blur-up" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="24px"
                                 height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
                                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                          fill="#000000" opacity="0.3"/>
                                </g>
                            </svg><!--end::Svg Icon-->
                            <a class="mx-2 py-2" href="javascript:void(0)">دسته بندی کالاها</a>
                            <!--            Navbar Item:start-->
                            <span class="horizontal-line mx-1 me-2"></span>
                            <!--            Navbar Item:end-->
                        </li>
                        <!--Navbar Item:end-->
                    </ul>
                    <!--Navbar Wrapper:end-->
                </div>
                <!--Navbar Right:end-->

                <!--Navbar Left:start-->
                <div class="navbar-left">
                    <!--Navbar Item:start-->
                    <!--Navbar Item:end-->
                </div>
                <!--Navbar Left:end-->
            </div>
            <!--    Container:end-->
        </nav>
        <!--Navbar In Loader::end-->
    </div>

    <!--    Header In Loader:start-->
    <header class="header"></header>
    <!--    Header In Loader:end-->

    <!--    Banners In Loader:start don't change if you only the back-end programmer-->
    <div class="banners-loader mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-4">
                    <div class="contain-banners p-5">
                        <div>
                            <h4></h4>
                            <h3></h3>
                            <h6></h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-4">
                    <div class="contain-banners p-5">
                        <div>
                            <h4></h4>
                            <h3></h3>
                            <h6></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    Banners In Loader:end don't change if you only the back-end programmer-->


</div>
<!--Loader:end-->

<!--Navbar:start-->
<div class="custom-navbar" id="customNavbar">
    <!--        Ads Banner:start-->
    <a href="" class="ads-banner" title="">
        <img src="{{asset('user_assets/img/ads-banner.jpg')}}" alt="" class="img-fluid object-cover">
    </a>
    <!--        Ads Banner:end-->

    <!--Top Navbar::start-->
    <div class="top-navbar navbar-expand-lg navbar-light py-2">
        <!--Container:start-->
        <div class="container d-flex justify-content-between align-items-center">
            <!--Top Navbar Right:start-->
            <div class="top-nav-right d-flex justify-content-between align-items-center">
                <!--Logo:start-->
                <a href="index.html" class="navbar-brand" title="">
                    <img class="border-radius-circle" src="{{asset('user_assets/img/logo/Logo.png')}}" style="width :45px" alt="لوگو">
                </a>
                <!--Logo:end-->
                
                <!--Search Form:start-->
                <div class="main-search position-relative">
                    <form action="search.html" class="position-relative">
                        <input class="form-control border-0 border-radius-xl bg-gray-150 fs-7"
                               type="search" placeholder="جستجو" id="mainSearchInput" autocomplete="off">
                        <button class="btn position-absolute" type="submit">
                            <i class="fab fa-sistrix fw-md fs-5 gray-500"></i>
                        </button>
                    </form>
                    <div class="search-results custom-box-shadow-s-2">
                        <span class="py-2 px-3 d-block fs-7">نتایج جست و جو :</span>

                        <!--Search Item:start-->
                        <div class="search-result-item position-relative border-bottom p-3">
                            <i class="fab fa-sistrix fw-md fs-5 gray-500 d-inline-block"></i>
                            <div class="d-inline-block ms-2">
                                <span class="d-inline-block fw-bold ms-1">سلفون </span>
                                <span class="d-block">در دسته <strong>زیبایی و سلامت</strong></span>
                            </div>
                            <!--Search Link:start-->
                            <a href="search.html" class="stretched-link"></a>
                            <!--Search Link:end-->
                        </div>
                        <!--Search Item:end-->

                        <!--See All Results:start-->
                        <div class="search-result-item position-relative border-bottom p-3">
                            <div class="d-flex justify-content-between align-items-center ms-2 text-center">
                                <span class="d-inline-block fw-bold ms-1">مشاهده همه نتایج </span>
                                <i class="fa fa-arrow-left"></i>
                            </div>
                            <!--                            Search Link:start-->
                            <a href="search.html" class="stretched-link"></a>
                            <!--                            Search Link:end-->
                        </div>
                        <!--See All Results:end-->
                    </div>
                </div>
                <!--Search Form:end-->
            </div>
            <!--Top Navbar Right:end-->

            <!--Top Navbar Left:start-->
            <div class="top-nav-left d-flex justify-content-between align-items-center">

            </div>
            <!--Top Navbar Left:end-->
        </div>
        <!--Container:end-->

        <!-- Top Mobile Navbar In Mobile :start-->
        <div class="top-mobile-navbar border-bottom-gray-150" id="topMobileNavbar">
            <!--        Container:start-->
            <div class="container d-flex justify-content-between align-items-center">
                <!--        Top Mobile Navbar Right:start-->
                <div class="top-mobile-navbar-right d-flex justify-content-between align-items-center">
                    <!--            Humber Btn:start-->
                    <a href="javascript:void(0)" class="navbar-brand openNavbarBtn">
                        <!--begin::Svg Icon-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="24px"
                             height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
                                <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                      fill="#000000" opacity="0.3"/>
                            </g>
                        </svg><!--end::Svg Icon-->
                    </a>
                    <!--            Humber Btn:end-->

                    <!--                Navbar Items:start-->
                    <div class="navbar-items-mobile">
                        <!--                    Navbar Items Mobile Header:start-->
                        <div class="navbar-items-mobile-header d-flex justify-content-between align-items-center border-bottom-gray-300 p-3">
                            <!--                    Navbar Items Mobile Title:start-->
                            <div class="navbar-items-mobile-title">
                                <h5 class="fw-bold">منوی فروشگاه</h5>
                            </div>
                            <!--                    Navbar Items Mobile Title:end-->

                            <!--                    Navbar Items Mobile Close Button:start-->
                            <div class="navbar-items-mobile-close-btn">
                                <i class="fa fa-times fs-5"></i>
                            </div>
                            <!--                    Navbar Items Mobile Close Button:end-->
                        </div>
                        <!--                    Navbar Items Mobile Header:end-->

                        <!--Navbar Items Mobile Body:start-->
                        <div class="navbar-items-mobile-body p-3">
                            <ul class="navbar-parent">
                                {{-- <li class="fs-6">دسته بندی کالاها</li> --}}
                                <li class="border-bottom-gray-150 px-2 py-3">
                                    <a href="" class="fs-6 fw-bold d-block showSubMenu">
                                        <!--begin::Svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                                            <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
                                        </svg>
                                        <!--end::Svg Icon-->
                                        دسته بندی کالاها
                                        <i class="fa fa-angle-left float-end"></i>
                                    </a>

                                    <!--Navbar Items Child:start-->
                                    <ul class="first-child-parent p-3">
                                        <li class="fs-5 border-bottom-gray-300 pb-2 fw-bold text-center">
                                            چراغ
                                        </li>
                                        <li class="py-3"><a href="javascript:void(0)" class="fs-6 backToProductCategories"><i class="fa fa-arrow-right me-2"></i>بازگشت</a></li>
                                        <li class="border-bottom-gray-150 px-2 py-3">
                                            <a href="javascript:;" class="fs-6 fw-bold d-block" title="">
                                                موتور
                                                <i class="fa fa-angle-left float-end"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--Navbar Items Child:end-->

                                </li>
                                <li class="border-bottom-gray-150 px-2 py-3">
                                    <a href="" class="fs-6 fw-bold d-block showSubMenu">
                                        <!--begin::Svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
                                            <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0"/>
                                            <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1m0 5.586 7 7L13.586 9l-7-7H2z"/>
                                        </svg>
                                        <!--end::Svg Icon-->
                                        برندها  
                                        <i class="fa fa-angle-left float-end"></i>
                                    </a>

                                    <!--Navbar Items Child:start-->
                                    <ul class="first-child-parent p-3">
                                        <li class="fs-5 border-bottom-gray-300 pb-2 fw-bold text-center">
                                            برندها
                                        </li>
                                        <li class="py-3"><a href="javascript:void(0)" class="fs-6 backToProductCategories"><i class="fa fa-arrow-right me-2"></i>بازگشت</a></li>
                                        <li class="border-bottom-gray-150 px-2 py-3">
                                            <a href="javascript:;" class="fs-6 fw-bold d-block" title="">
                                            کیا
                                            </a>
                                        </li>
                                    </ul>
                                    <!--Navbar Items Child:end-->

                                </li>
                                <li class="border-bottom-gray-150 px-2 py-3">
                                    <a href="" class="fs-6 fw-bold d-block showSubMenu">
                                        <!--begin::Svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                        </svg>
                                        <!--end::Svg Icon-->
                                        درباره ما 
                                    </a>
                                </li>
                                <li class="border-bottom-gray-150 px-2 py-3">
                                    <a href="" class="fs-6 fw-bold d-block showSubMenu">
                                        <!--begin::Svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94"/>
                                        </svg>
                                        <!--end::Svg Icon-->
                                        راهنمای خرید 
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--Navbar Items Mobile Body:end-->

                    </div>
                    <!--                Navbar Items:end-->
                </div>
                <!--        Top Mobile Navbar Right:end-->

                <!--Top Mobile Navbar Middle:start-->
                <div class="top-mobile-navbar-middle d-flex justify-content-between align-items-center">
                    <!--Logo:start-->
                    {{-- <a href="index.html" class="navbar-brand pb-2" title="">
                        <img src="{{asset('user_assets/img/logo/Logo2.png')}}" alt="لوگو">
                    </a> --}}
                    <!--Logo:end-->
                </div>
                <!--Top Mobile Navbar Middle:end-->

                <!--Top Mobile Navbar Left:start-->
                <div class="top-mobile-navbar-left">
                    {{-- <a href="faq.html" title="">
                        <!--begin::Svg Icon-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                             height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                <path d="M12,16 C12.5522847,16 13,16.4477153 13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 C11,16.4477153 11.4477153,16 12,16 Z M10.591,14.868 L10.591,13.209 L11.851,13.209 C13.447,13.209 14.602,11.991 14.602,10.395 C14.602,8.799 13.447,7.581 11.851,7.581 C10.234,7.581 9.121,8.799 9.121,10.395 L7.336,10.395 C7.336,7.875 9.31,5.922 11.851,5.922 C14.392,5.922 16.387,7.875 16.387,10.395 C16.387,12.915 14.392,14.868 11.851,14.868 L10.591,14.868 Z"
                                      fill="#000000"/>
                            </g>
                        </svg><!--end::Svg Icon-->
                    </a> --}}
                    <a href="index.html" class="navbar-brand pb-2" title="">
                        <img class="border-radius-circle" src="{{asset('user_assets/img/logo/Logo.png')}}" style="width :45px" alt="لوگو">
                    </a>
                </div>
                <!--Top Mobile Navbar Left:end-->
            </div>
            <!--        Container:end-->
        </div>
        <!--Top Mobile Navbar In Mobile:end-->
    </div>
    <!--Top Navbar::end-->

    <!--Main Navbar::start-->
    <nav class="main-navbar navbar navbar-expand-lg navbar-light bg-light custom-box-shadow-s-1-bottom py-1 w-100" id="mainNavbar">
        <!--Container:start-->
        <div class="container d-flex justify-content-between align-items-center">
            <!--        Navbar Right:start-->
            <div class="navbar-right">
                <!--        Navbar Wrapper:start-->
                <ul class="navbar-nav mb-2 mb-lg-0 d-flex justify-content-between align-items-center position-relative">
                    <!--Navbar Item:start-->
                    <li class="nav-item d-flex justify-content-between align-items-center position-relative">
                        <a class="mx-2 py-2" href="" title="">
                            <!--begin::Svg Icon-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="24px"
                                 height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
                                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                          fill="#000000" opacity="0.3"/>
                                </g>
                            </svg><!--end::Svg Icon-->
                            دسته بندی کالاها
                        </a>

                        <!--Navbar Child Wrapper:start-->
                        <ul class="position-absolute nav-item-submenu bg-white custom-box-shadow-s-2 border-radius-2xl">
                            <!--Navbar Item Child:start-->
                            <li class="nav-item-submenu-child">
                                <a href="single-product.html" class="fw-bold" title="">
                                    چراغ
                                    <i class="fa fa-angle-left float-end"></i>
                                </a>
                                <!--Navbar Item Sub Child Wrapper:start-->
                                <ul class="position-absolute top-0 bg-white custom-box-shadow-s-2 border-radius-2xl">
                                    <!--Navbar Item Sub Child:start-->
                                    <li>
                                        <a href="single-product.html" title="">
                                            موتور 
                                        </a>
                                    </li>
                                    <!--Navbar Item Sub Child:end-->
                                </ul>
                                <!--Navbar Item Sub Child Wrapper:end-->
                            </li>
                            <!--Navbar Item Child:end-->
                        </ul>
                        <!--Navbar Child Wrapper:end-->
                        <!--Navbar Item:start-->
                        <span class="horizontal-line mx-1 me-2"></span>
                        <!--Navbar Item:end-->
                    </li>
                    <!--Navbar Item:end-->
                    <!--Navbar Item:start-->
                    <li class="nav-item d-flex justify-content-between align-items-center position-relative">
                        <a class="mx-2 py-2" href="" title="">
                            <!--begin::Svg Icon-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
                                <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0"/>
                                <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1m0 5.586 7 7L13.586 9l-7-7H2z"/>
                            </svg>
                            <!--end::Svg Icon-->
                            برندها 
                        </a>

                        <!--Navbar Child Wrapper:start-->
                        <ul class="position-absolute nav-item-submenu bg-white custom-box-shadow-s-2 border-radius-2xl">
                            <!--Navbar Item Child:start-->
                            <li class="nav-item-submenu-child">
                                <a href="single-product.html" class="fw-bold" title="">
                                    کیا
                                </a>
                            </li>
                            <!--Navbar Item Child:end-->
                        </ul>
                        <!--Navbar Child Wrapper:end-->
                        <!--Navbar Item:start-->
                        <span class="horizontal-line mx-1 me-2"></span>
                        <!--Navbar Item:end-->
                    </li>
                    <!--Navbar Item:end-->
                    <!--Navbar Item:start-->
                    <li class="nav-item d-flex justify-content-between align-items-center position-relative">
                        <a class="mx-2 py-2" href="" title="">
                            <!--begin::Svg Icon-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                                <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1z"/>
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1"/>
                            </svg>
                            <!--end::Svg Icon-->
                            مقالات
                        </a>
                        <!--Navbar Item:start-->
                        <span class="horizontal-line mx-1 me-2"></span>
                        <!--Navbar Item:end-->
                    </li>
                    <!--Navbar Item:end-->
                    <!--Navbar Item:start-->
                    <li class="nav-item d-flex justify-content-between align-items-center position-relative">
                        <a class="mx-2 py-2" href="" title="">
                            <!--begin::Svg Icon-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                            </svg>
                            <!--end::Svg Icon-->
                            درباره ما
                        </a>
                        <!--Navbar Item:start-->
                        <span class="horizontal-line mx-1 me-2"></span>
                        <!--Navbar Item:end-->
                    </li>
                    <!--Navbar Item:end-->
                    <li class="nav-item d-flex justify-content-between align-items-center position-relative">
                        <a class="mx-2 py-2" href="" title="">
                            <!--begin::Svg Icon-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94"/>
                            </svg>
                            <!--end::Svg Icon-->
                            راهنمای خرید
                        </a>
                    </li>
                    <!--Navbar Item:end-->
                </ul>
                <!--        Navbar Wrapper:end-->
            </div>
            <!--        Navbar Right:end-->

            <!--        Navbar Left:start-->
            <div class="navbar-left">
                <!--            Navbar Item:start-->
                
                <!--            Navbar Item:end-->
            </div>
            <!--        Navbar Left:end-->
        </div>
        <!--Container:end-->

        <!--Main Mobile Navbar:start-->
        <div class="main-mobile-navbar pb-1">
            <!--Container:start-->
            <div class="container d-flex justify-content-center align-items-center">
                <!--Main Mobile Navbar Right:start-->
                <div class="main-mobile-navbar-right">
                    <!--Search Form:start-->
                    <form action="search.html" class="position-relative">
                        <input class="form-control border-0 fs-6 fw-normal bg-gray-150 border-radius-xl py-2"
                               type="search" placeholder="جستجو">
                        <button class="btn position-absolute" type="submit">
                            <i class="fab fa-sistrix text-light-gray fw-md fs-5"></i>
                        </button>
                    </form>
                    <!--Search Form:end-->
                </div>
                <!--Main Mobile Navbar Right:end-->

                <!--Main Mobile Navbar Left:start-->
                
                <!--Main Mobile Navbar Left:end-->
            </div>
            <!--        Container:end-->
        </div>
        <!--Main Mobile Navbar:end-->
    </nav>
    <!--Main Navbar::end-->
</div>
<!--Navbar:end-->

@yield('content')

<!--Footer:start-->
<footer class="footer mt-5">
    <div class="container">
        <div class="footer-top mt-4 mb-5">
            <!--            Footer Top Detail:start-->
            <div class="footer-top-detial d-flex justify-content-between align-items-center">
                <div class="">
                    <a href="" title=""><img class="border-radius-circle" src="{{asset('user_assets/img/logo/Logo.png')}}" style="width :45px" alt=""></a>
                    <p class="mt-2 fs-7">تلفن پشتیبانی : 05144445697</p>
                </div>
                <a href="#top" class="back-to-top border-radius-xl px-3 py-2 gray-600 fs-7">
                    برگشت به بالا
                    <i class="fa fa-angle-up ps-2"></i>
                </a>
            </div>
            <!--            Footer Top Detail:end-->

            <!--            Footer Top Attr:start-->
            <div class="footer-top-attr d-flex justify-content-between align-items-center my-5">
                <!--                Top Right Item:start-->
                <div class="top-right-item text-center">
                    <img src="{{asset('user_assets/img/express-delivery.svg')}}" alt="" title="">
                    <p class="mt-2 fs-8">امکان تحویل اکسپرس</p>
                </div>
                <!--                Top Right Item:end-->

                <!--                Top Right Item:start-->
                <div class="top-right-item text-center">
                    <img src="{{asset('user_assets/img/cash-on-delivery.svg')}}" alt="" title="">
                    <p class="mt-2 fs-8">امکان پرداخت در محل</p>
                </div>
                <!--                Top Right Item:end-->

                <!--                Top Right Item:start-->
                <div class="top-right-item text-center">
                    <img src="{{asset('user_assets/img/support.svg')}}" alt="" title="">
                    <p class="mt-2 fs-8">7 روز هفته، 24 ساعته</p>
                </div>
                <!--                Top Right Item:end-->

                <!--                Top Right Item:start-->
                <div class="top-right-item text-center">
                    <img src="{{asset('user_assets/img/days-return.svg')}}" alt="" title="">
                    <p class="mt-2 fs-8">هفت روز ضمانت بازگشت کالا</p>
                </div>
                <!--                Top Right Item:end-->

                <!--                Top Right Item:start-->
                <div class="top-right-item text-center">
                    <img src="{{asset('user_assets/img/original-products.svg')}}" alt="" title="">
                    <p class="mt-2 fs-8">ضمانت اصالت کالا</p>
                </div>
                <!--                Top Right Item:end-->
            </div>
            <!--            Footer Top Attr:end-->
        </div>
        <div class="footer-main my-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-4">
                    <p class="fw-bold fs-6">راهنمای خرید از برگشاپ</p>
                    <ul>
                        <li class="my-2"><a href="">نحوه ثبت سفارش</a></li>
                        <li class="my-2"><a href="">رویه ارسال سفارش</a></li>
                        <li class="my-2"><a href="">شیوه های پرداخت</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-4">
                    <p class="fw-bold fs-6">خدمات مشتریان</p>
                    <ul>
                        <li class="my-2"><a href="">پاسخ به پرسش های متدوال</a></li>
                        <li class="my-2"><a href="">رویه های بازگشت کالا</a></li>
                        <li class="my-2"><a href="">شرایط استفاده</a></li>
                        <li class="my-2"><a href="">حریم خصوصی</a></li>
                        <li class="my-2"><a href="">گزارش باگ</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-4">
                    <p class="fw-bold fs-6">راهنمای خرید از برگشاپ</p>
                    <ul>
                        <li class="my-2"><a href="">نحوه ثبت سفارش</a></li>
                        <li class="my-2"><a href="">رویه ارسال سفارش</a></li>
                        <li class="my-2"><a href="">شیوه های پرداخت</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-4">
                    <p class="fw-bold fs-6">همراه ما باشید!</p>
                    <ul class="social-list d-flex justify-content-around align-items-center mt-3">
                        <li class="my-2 instagram">
                            <a href="">
                                <i class="fab fa-instagram fa-2x gray-500"></i>
                            </a>
                        </li>
                        <li class="my-2 twitter">
                            <a href="">
                                <i class="fab fa-twitter fa-2x gray-500"></i>
                            </a>
                        </li>
                        <li class="my-2 linkedin">
                            <a href="">
                                <i class="fab fa-linkedin fa-2x gray-500"></i>
                            </a>
                        </li>
                        <li class="my-2 telegram">
                            <a href="">
                                <i class="fab fa-telegram fa-2x gray-500"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-info py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 mb-3">
                    <h1 class="fw-bold fs-5">فروشگاه اینترنتی برگشاپ، بررسی، انتخاب و خرید آنلاین.</h1>
                    <p class="gray-600 mt-3 fs-7">
                        خرید اینترنتی مطمئن، نیازمند فروشگاهی است که بتواند کالاهایی متنوع، باکیفیت و دارای قیمت مناسب
                        را در مدت زمانی کوتاه به دست مشتریان خود برساند و ضمانت بازگشت کالا هم داشته باشد؛ ویژگی‌هایی که
                        فروشگاه اینترنتی دیجی‌کالا سال‌هاست بر روی آن‌ها کار کرده و توانسته از این طریق مشتریان ثابت خود
                        را داشته باشد.
                    </p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-3 d-flex justify-content-evenly align-items-center">
                    <img src="{{asset('user_assets/img/symbol-01.png')}}" alt="" title=""
                         class="img-fluid border border-gray-200 border-radius-xl">
                    <img src="{{asset('user_assets/img/symbol-02.png')}}" alt="" title=""
                         class="img-fluid border border-gray-200 border-radius-xl">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-4">
        <div class="container">
            <p class="fs-8 gray-600">
                برای استفاده از مطالب برگشاپ، داشتن «هدف غیرتجاری» و ذکر «منبع» کافیست. تمام حقوق اين وب‌سايت نیز برای
                شرکت برگزیت است.
            </p>
        </div>
    </div>
</footer>
<!--Footer:End-->

<!--Chat Widget:start-->

<!--Chat Widget:end-->

<!--Scroll To Top:start-->
<div class="to-top border-radius-circle text-center">
    <a href="#">
        <!--begin::Svg Icon-->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
             viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24"/>
                <path d="M8.2928955,10.2071068 C7.90237121,9.81658249 7.90237121,9.18341751 8.2928955,8.79289322 C8.6834198,8.40236893 9.31658478,8.40236893 9.70710907,8.79289322 L15.7071091,14.7928932 C16.085688,15.1714722 16.0989336,15.7810586 15.7371564,16.1757246 L10.2371564,22.1757246 C9.86396402,22.5828436 9.23139665,22.6103465 8.82427766,22.2371541 C8.41715867,21.8639617 8.38965574,21.2313944 8.76284815,20.8242754 L13.6158645,15.5300757 L8.2928955,10.2071068 Z"
                      fill="#000000" fill-rule="nonzero"
                      transform="translate(12.000003, 15.500003) scale(-1, 1) rotate(-90.000000) translate(-12.000003, -15.500003) "/>
                <path d="M6.70710678,12.2071104 C6.31658249,12.5976347 5.68341751,12.5976347 5.29289322,12.2071104 C4.90236893,11.8165861 4.90236893,11.1834211 5.29289322,10.7928968 L11.2928932,4.79289682 C11.6714722,4.41431789 12.2810586,4.40107226 12.6757246,4.76284946 L18.6757246,10.2628495 C19.0828436,10.6360419 19.1103465,11.2686092 18.7371541,11.6757282 C18.3639617,12.0828472 17.7313944,12.1103502 17.3242754,11.7371577 L12.0300757,6.88414142 L6.70710678,12.2071104 Z"
                      fill="#000000" fill-rule="nonzero" opacity="0.3"
                      transform="translate(12.000003, 8.500003) scale(-1, 1) rotate(-360.000000) translate(-12.000003, -8.500003) "/>
            </g>
        </svg><!--end::Svg Icon-->
    </a>

</div>
<!--Scroll To Top:end-->

<!--Overlay:start-->
<div class="overlay"></div>
<!--Overlay:end-->

<!--Main Script::start-->
<script src="{{asset('user_assets/js/main.js')}}"></script>
<!--Main Script::end-->

<!--BootstrapJS:start-->
<script src="{{asset('user_assets/js/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
<!--BootstrapJS:end-->

<!--SwiperJS:start-->
<script src="{{asset('user_assets/js/vendors/swiper/swiper-bundle.min.js')}}"></script>
<!--SwiperJS:end-->

<!--Index JS:start Only for this page-->
<script src="{{asset('user_assets/js/index.js')}}"></script>
<!--Index JS:end Only for this page-->
</body>
<!--Body::end-->

</html>
