<!DOCTYPE html>
<html class="loading semi-dark-layout" lang="{{ app()->getLocale() }}" data-layout="semi-dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui" />
    <title>@yield('title') - Egio</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet" />

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/vendors.min.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-extended.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/components.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themes/bordered-layout.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themes/semi-dark-layout.css') }}" />
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/menu/menu-types/vertical-menu.css') }}" />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    @yield('css')
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="
            vertical-layout vertical-menu-modern
            navbar-floating
            footer-static
        " data-open="click" data-menu="vertical-menu-modern" data-col="">
    <!-- BEGIN: Header-->
    <nav class="
                header-navbar
                navbar navbar-expand-lg
                align-items-center
                floating-nav
                navbar-light navbar-shadow
                container-xxl
            ">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none" style="border-radius: 0; border-right: 2px solid #d6dce1; padding-right: 5px; margin-right: 10px;">
                    <li class="nav-item">
                        <a class="nav-link menu-toggle" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu ficon">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div id="brighter" class="d-flex align-items-center" href="#">
                    <h5 class="d-none d-sm-block" style="margin: 0;">Prestashop test - Marouane Benhaida</h5>
                </div>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="d-none d-md-block">
                    <span class="fw-bolder">{{ __('Choisissez une langue :') }}</span>
                </li>
                <li class="avatar avatar-sm mx-1">
                    <a href="{{ route('languageSwitcher', 'fr') }}">
                        <img src="{{ asset('assets/images/fr.png') }}" 
                        @if (app()->getLocale() == "fr")
                            style="box-sizing: content-box;border: 4px #746af7 solid;"
                        @endif>
                    </a> 
                </li>
                <li class="avatar avatar-sm">
                    <a href="{{ route('languageSwitcher', 'en') }}">
                        <img src="{{ asset('assets/images/en.png') }}"
                        @if (app()->getLocale() == "en")
                            style="box-sizing: content-box;border: 4px #746af7 solid;"
                        @endif>
                    </a> 
                </li>
            </ul>
        </div>
    </nav>
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('assets/images/logo.png') }}" height="40px" style="margin-left: -3px;" alt="logo">
                        <h2 class="brand-text" style="color: white;">{{ config('app.name') }}</h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x d-block d-xl-none text-primary toggle-icon font-medium-4">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #b4b7bd !important;" class="feather feather-disc d-none d-xl-block collapse-toggle-icon primary font-medium-4">
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content" style="margin-top: 1.35rem;">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item {{ (request()->is('reinsurances*')) ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href="{{ route('reinsurances.index') }}">
                        <i data-feather="copy"></i>
                        <span class="menu-title text-truncate">{{ __('Réassurances') }}</span>
                    </a>
                </li>
                <li class="nav-item {{ (request()->is('settings')) ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href="{{ route('settings') }}">
                        <i data-feather="settings"></i>
                        <span class="menu-title text-truncate">{{ __('Réglages du module') }}</span>
                    </a>
                </li>
                <li class="nav-item {{ (request()->is('product')) ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href="{{ route('productPage') }}">
                        <i data-feather='code'></i>
                        <span class="menu-title text-truncate">{{ __('Rendu 1') }}</span>
                    </a>
                </li>
                
                <li class="nav-item {{ (request()->is('shop')) ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href="{{ route('shopPage') }}">
                        <i data-feather="code"></i>
                        <span class="menu-title text-truncate">{{ __('Rendu 2') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">
                                @yield('title')
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0">
            <span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2022<a class="ms-25"
                    href="https://www.linkedin.com/in/marouane-benhaida-bb14a1221" target="_blank">Marouane Benhaida</a><span
                    class="d-none d-sm-inline-block">, All rights Reserved</span></span>
        </p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button">
        <i data-feather="arrow-up"></i>
    </button>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Custom JS-->
    @yield('js')
    <!-- END: Custom JS-->

    <script>
        $(window).on("load", function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14,
                });
            }
        });

    </script>
</body>
<!-- END: Body-->

</html>
