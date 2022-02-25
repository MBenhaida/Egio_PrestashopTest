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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/app-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shop.css') }}">
    <!-- END: Page CSS-->

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
    <div class="app-content content ecommerce-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">
                                {{ __('Boutique') }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-detached content-right">
                <div class="content-body">
                    <!-- E-commerce Content Section Starts -->
                    <section id="ecommerce-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="ecommerce-header-items">
                                    <div class="result-toggler">
                                        <button class="navbar-toggler shop-sidebar-toggler" type="button" data-bs-toggle="collapse">
                                            <span class="navbar-toggler-icon d-block d-lg-none"><i data-feather="menu"></i></span>
                                        </button>
                                        <div class="search-results">16285 results found</div>
                                    </div>
                                    <div class="view-options d-flex">
                                        <div class="btn-group dropdown-sort">
                                            <button type="button" class="btn btn-outline-primary dropdown-toggle me-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="active-sorting">Featured</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Featured</a>
                                                <a class="dropdown-item" href="#">Lowest</a>
                                                <a class="dropdown-item" href="#">Highest</a>
                                            </div>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <input type="radio" class="btn-check" name="radio_options" id="radio_option1" autocomplete="off" checked />
                                            <label class="btn btn-icon btn-outline-primary view-btn grid-view-btn" for="radio_option1"><i data-feather="grid" class="font-medium-3"></i></label>
                                            <input type="radio" class="btn-check" name="radio_options" id="radio_option2" autocomplete="off" />
                                            <label class="btn btn-icon btn-outline-primary view-btn list-view-btn" for="radio_option2"><i data-feather="list" class="font-medium-3"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- E-commerce Content Section Starts -->

                    <!-- background Overlay when sidebar is shown  starts-->
                    <div class="body-content-overlay"></div>
                    <!-- background Overlay when sidebar is shown  ends-->

                    <!-- E-commerce Search Bar Starts -->
                    <section id="ecommerce-searchbar" class="ecommerce-searchbar">
                        <div class="row mt-1">
                            <div class="col-sm-12">
                                <div class="input-group input-group-merge">
                                    <input type="text" class="form-control search-product" id="shop-search" placeholder="Search Product" aria-label="Search..." aria-describedby="shop-search" />
                                    <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- E-commerce Search Bar Ends -->

                    <!-- E-commerce Products Starts -->
                    <section id="ecommerce-products" class="grid-view">
                        <div class="card ecommerce-card">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img class="img-fluid card-img-top" src="{{ asset('assets/images/pages/eCommerce/1.png') }}" alt="img-placeholder" /></a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <ul class="unstyled-list list-inline">
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h6 class="item-price">$339.99</h6>
                                    </div>
                                </div>
                                <h6 class="item-name">
                                    <a class="text-body" href="app-ecommerce-details.html">Apple Watch Series 5</a>
                                    <span class="card-text item-company">By <a href="#" class="company-name">Apple</a></span>
                                </h6>
                                <p class="card-text item-description">
                                    On Retina display that never sleeps, so it’s easy to see the time and other important information, without
                                    raising or tapping the display. New location features, from a built-in compass to current elevation, help users
                                    better navigate their day, while international emergency calling1 allows customers to call emergency services
                                    directly from Apple Watch in over 150 countries, even without iPhone nearby. Apple Watch Series 5 is available
                                    in a wider range of materials, including aluminium, stainless steel, ceramic and an all-new titanium.
                                </p>
                            </div>
                            <div class="item-options text-center">
                                <div class="item-wrapper">
                                    <div class="item-cost">
                                        <h4 class="item-price">$339.99</h4>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-light btn-wishlist">
                                    <i data-feather="heart"></i>
                                    <span>Wishlist</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-cart">
                                    <i data-feather="shopping-cart"></i>
                                    <span class="add-to-cart">Add to cart</span>
                                </a>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img class="img-fluid card-img-top" src="{{ asset('assets/images/pages/eCommerce/2.png') }}" alt="img-placeholder" />
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <ul class="unstyled-list list-inline">
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h6 class="item-price">$669.99</h6>
                                    </div>
                                </div>
                                <h6 class="item-name">
                                    <a class="text-body" href="app-ecommerce-details.html">Apple iPhone 11 (64GB, Black)</a>
                                    <span class="card-text item-company">By <a href="#" class="company-name">Apple</a></span>
                                </h6>
                                <p class="card-text item-description">
                                    The Apple iPhone 11 is a great smartphone, which was loaded with a lot of quality features. It comes with a
                                    waterproof and dustproof body which is the key attraction of the device. The excellent set of cameras offer
                                    excellent images as well as capable of recording crisp videos. However, expandable storage and a fingerprint
                                    scanner would have made it a perfect option to go for around this price range.
                                </p>
                            </div>
                            <div class="item-options text-center">
                                <div class="item-wrapper">
                                    <div class="item-cost">
                                        <h4 class="item-price">$699.99</h4>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-light btn-wishlist">
                                    <i data-feather="heart" class="text-danger"></i>
                                    <span>Wishlist</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-cart">
                                    <i data-feather="shopping-cart"></i>
                                    <span class="add-to-cart">Add to cart</span>
                                </a>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html"><img class="img-fluid card-img-top" src="{{ asset('assets/images/pages/eCommerce/3.png') }}" alt="img-placeholder" /></a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <ul class="unstyled-list list-inline">
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div class="item-cost">
                                            <h6 class="item-price">$999.99</h6>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="item-name">
                                    <a class="text-body" href="app-ecommerce-details.html">Apple iMac 27-inch</a>
                                    <span class="card-text item-company">By <a href="#" class="company-name">Apple</a></span>
                                </h6>
                                <p class="card-text item-description">
                                    The all-in-one for all. If you can dream it, you can do it on iMac. It’s beautifully & incredibly intuitive and
                                    packed with tools that let you take any idea to the next level. And the new 27-inch model elevates the
                                    experience in way, with faster processors and graphics, expanded memory and storage, enhanced audio and video
                                    capabilities, and an even more stunning Retina 5K display. It’s the desktop that does it all — better and faster
                                    than ever.
                                </p>
                            </div>
                            <div class="item-options text-center">
                                <div class="item-wrapper">
                                    <div class="item-cost">
                                        <h4 class="item-price">$999.99</h4>
                                        <p class="card-text shipping"><span class="badge rounded-pill badge-light-success">Free Shipping</span></p>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-light btn-wishlist">
                                    <i data-feather="heart"></i>
                                    <span>Wishlist</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-cart">
                                    <i data-feather="shopping-cart"></i>
                                    <span class="add-to-cart">Add to cart</span>
                                </a>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img class="img-fluid card-img-top" src="{{ asset('assets/images/pages/eCommerce/4.png') }}" alt="img-placeholder" /></a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <ul class="unstyled-list list-inline">
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="item-cost">
                                        <h6 class="item-price">$49.99</h6>
                                    </div>
                                </div>
                                <h6 class="item-name">
                                    <a class="text-body" href="app-ecommerce-details.html">OneOdio A71 Wired Headphones</a>
                                    <span class="card-text item-company">By <a href="#" class="company-name">OneOdio</a></span>
                                </h6>
                                <p class="card-text item-description">
                                    Omnidirectional detachable boom mic upgrades the headphones into a professional headset for gaming, business,
                                    podcasting and taking calls on the go. Better pick up your voice. Control most electric devices through voice
                                    activation, or schedule a ride with Uber and order a pizza. OneOdio A71 Wired Headphones voice-controlled device
                                    turns any home into a smart device on a smartphone or tablet.
                                </p>
                            </div>
                            <div class="item-options text-center">
                                <div class="item-wrapper">
                                    <div class="item-cost">
                                        <h4 class="item-price">$49.99</h4>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-light btn-wishlist">
                                    <i data-feather="heart"></i>
                                    <span>Wishlist</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-cart">
                                    <i data-feather="shopping-cart"></i>
                                    <span class="add-to-cart">Add to cart</span>
                                </a>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img class="img-fluid card-img-top" src="{{ asset('assets/images/pages/eCommerce/5.png') }}" alt="img-placeholder" />
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <ul class="unstyled-list list-inline">
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="item-cost">
                                        <h6 class="item-price">$999.99</h6>
                                    </div>
                                </div>
                                <h6 class="item-name">
                                    <a class="text-body" href="app-ecommerce-details.html">
                                        Apple - MacBook Air® (Latest Model) - 13.3" Display - Silver
                                    </a>
                                    <span class="card-text item-company">By <a href="#" class="company-name">Apple</a></span>
                                </h6>
                                <p class="card-text item-description">
                                    MacBook Air is a thin, lightweight laptop from Apple. MacBook Air features up to 8GB of memory, a
                                    fifth-generation Intel Core processor, Thunderbolt 2, great built-in apps, and all-day battery life.1 Its thin,
                                    light, and durable enough to take everywhere you go-and powerful enough to do everything once you get there,
                                    better.
                                </p>
                            </div>
                            <div class="item-options text-center">
                                <div class="item-wrapper">
                                    <div class="item-cost">
                                        <h4 class="item-price">$999.99</h4>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-light btn-wishlist">
                                    <i data-feather="heart" class="text-danger"></i>
                                    <span>Wishlist</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-cart">
                                    <i data-feather="shopping-cart"></i>
                                    <span class="add-to-cart">Add to cart</span>
                                </a>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img class="img-fluid card-img-top" src="{{ asset('assets/images/pages/eCommerce/6.png') }}" alt="img-placeholder" />
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <ul class="unstyled-list list-inline">
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="item-cost">
                                        <h6 class="item-price">$429.99</h6>
                                    </div>
                                </div>
                                <h6 class="item-name">
                                    <a class="text-body" href="app-ecommerce-details.html"> Switch Pro Controller </a>
                                    <span class="card-text item-company">By <a href="#" class="company-name">Sharp</a></span>
                                </h6>
                                <p class="card-text item-description">
                                    The Nintendo Switch Pro Controller is one of the priciest "baseline" controllers in the current console
                                    generation, but it's also sturdy, feels good to play with, has an excellent direction pad, and features
                                    impressive motion sensors and vibration systems. On top of all of that, it uses Bluetooth, so you don't need an
                                    adapter to use it with your PC.
                                </p>
                            </div>
                            <div class="item-options text-center">
                                <div class="item-wrapper">
                                    <div class="item-cost">
                                        <h4 class="item-price">$429.99</h4>
                                        <p class="card-text shipping"><span class="badge rounded-pill badge-light-success">Free Shipping</span></p>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-light btn-wishlist">
                                    <i data-feather="heart"></i>
                                    <span>Wishlist</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-cart">
                                    <i data-feather="shopping-cart"></i>
                                    <span class="add-to-cart">Add to cart</span>
                                </a>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img class="img-fluid card-img-top" src="{{ asset('assets/images/pages/eCommerce/7.png') }}" alt="img-placeholder" />
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <ul class="unstyled-list list-inline">
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="item-cost">
                                        <h6 class="item-price">$129.29</h6>
                                    </div>
                                </div>
                                <h6 class="item-name">
                                    <a class="text-body" href="app-ecommerce-details.html"> Google - Google Home - White/Slate fabric </a>
                                    <span class="card-text item-company">By <a href="#" class="company-name">Google</a></span>
                                </h6>
                                <p class="card-text item-description">
                                    Simplify your everyday life with the Google Home, a voice-activated speaker powered by the Google Assistant. Use
                                    voice commands to enjoy music, get answers from Google and manage everyday tasks. Google Home is compatible with
                                    Android and iOS operating systems, and can control compatible smart devices such as Chromecast or Nest.
                                </p>
                            </div>
                            <div class="item-options text-center">
                                <div class="item-wrapper">
                                    <div class="item-cost">
                                        <h4 class="item-price">$129.29</h4>
                                        <p class="card-text shipping">
                                            <span class="badge rounded-pill badge-light-success">Free Shipping</span>
                                        </p>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-light btn-wishlist">
                                    <i data-feather="heart"></i>
                                    <span>Wishlist</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-cart">
                                    <i data-feather="shopping-cart"></i>
                                    <span class="add-to-cart">Add to cart</span>
                                </a>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img class="img-fluid card-img-top" src="{{ asset('assets/images/pages/eCommerce/8.png') }}" alt="img-placeholder" />
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <ul class="unstyled-list list-inline">
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="item-cost">
                                        <h6 class="item-price">$7999.99</h6>
                                    </div>
                                </div>
                                <h6 class="item-name">
                                    <a class="text-body" href="app-ecommerce-details.html"> Sony 4K Ultra HD LED TV </a>
                                    <span class="card-text item-company">By <a href="#" class="company-name">Apple</a></span>
                                </h6>
                                <p class="card-text item-description">
                                    Sony 4K Ultra HD LED TV has 4K HDR Support. The TV provides clear visuals and provides distinct sound quality
                                    and an immersive experience. This TV has Yes HDMI ports & Yes USB ports. Connectivity options included are HDMI.
                                    You can connect various gadgets such as your laptop using the HDMI port. The TV comes with a 1 Year warranty.
                                </p>
                            </div>
                            <div class="item-options text-center">
                                <div class="item-wrapper">
                                    <div class="item-cost">
                                        <h4 class="item-price">$29.99</h4>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-light btn-wishlist">
                                    <i data-feather="heart"></i>
                                    <span>Wishlist</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-cart">
                                    <i data-feather="shopping-cart"></i>
                                    <span class="add-to-cart">Add to cart</span>
                                </a>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img class="img-fluid card-img-top" src="{{ asset('assets/images/pages/eCommerce/9.png') }}" alt="img-placeholder" />
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <ul class="unstyled-list list-inline">
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="item-cost">
                                        <h6 class="item-price">$14.99</h6>
                                    </div>
                                </div>
                                <h6 class="item-name">
                                    <a class="text-body" href="app-ecommerce-details.html"> OnePlus 7 Pro </a>
                                    <span class="card-text item-company">By <a href="#" class="company-name">Philips</a></span>
                                </h6>
                                <p class="card-text item-description">
                                    The OnePlus 7 Pro features a brand new design, with a glass back and front and curved sides. The phone feels
                                    very premium but’s it’s also very heavy. The Nebula Blue variant looks slick but it’s quite slippery, which
                                    makes single-handed use a real challenge. It has a massive 6.67-inch ‘Fluid AMOLED’ display with a QHD+
                                    resolution, 90Hz refresh rate and support for HDR 10+ content. The display produces vivid colours, deep blacks
                                    and has good viewing angles.
                                </p>
                            </div>
                            <div class="item-options text-center">
                                <div class="item-wrapper">
                                    <div class="item-cost">
                                        <h4 class="item-price">$14.99</h4>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-light btn-wishlist">
                                    <i data-feather="heart"></i>
                                    <span>Wishlist</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-cart">
                                    <i data-feather="shopping-cart"></i>
                                    <span class="add-to-cart">Add to cart</span>
                                </a>
                            </div>
                        </div>
                    </section>
                    <!-- E-commerce Products Ends -->

                    <!-- E-commerce Pagination Starts -->
                    <section id="ecommerce-pagination">
                        <div class="row">
                            <div class="col-sm-12">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center mt-2">
                                        <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item" aria-current="page"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                        <li class="page-item next-item"><a class="page-link" href="#"></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>
                    <!-- E-commerce Pagination Ends -->
                </div>
                <div id="item-features" class="card">
                    @include('renders.module')
                </div>
            </div>
            
            <div class="sidebar-detached sidebar-left">
                <div class="sidebar">
                    <!-- Ecommerce Sidebar Starts -->
                    <div class="sidebar-shop">
                        <div class="row">
                            <div class="col-sm-12">
                                <h6 class="filter-heading d-none d-lg-block">Filters</h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <!-- Price Filter starts -->
                                <div class="multi-range-price">
                                    <h6 class="filter-title mt-0">Multi Range</h6>
                                    <ul class="list-unstyled price-range" id="price-range">
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" id="priceAll" name="price-range" class="form-check-input" checked />
                                                <label class="form-check-label" for="priceAll">All</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" id="priceRange1" name="price-range" class="form-check-input" />
                                                <label class="form-check-label" for="priceRange1">&lt;=$10</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" id="priceRange2" name="price-range" class="form-check-input" />
                                                <label class="form-check-label" for="priceRange2">$10 - $100</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" id="priceARange3" name="price-range" class="form-check-input" />
                                                <label class="form-check-label" for="priceARange3">$100 - $500</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" id="priceRange4" name="price-range" class="form-check-input" />
                                                <label class="form-check-label" for="priceRange4">&gt;= $500</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Price Filter ends -->

                                <!-- Price Slider starts -->
                                <div class="price-slider">
                                    <h6 class="filter-title">Price Range</h6>
                                    <div class="price-slider">
                                        <div class="range-slider mt-2" id="price-slider"></div>
                                    </div>
                                </div>
                                <!-- Price Range ends -->

                                <!-- Categories Starts -->
                                <div id="product-categories">
                                    <h6 class="filter-title">Categories</h6>
                                    <ul class="list-unstyled categories-list">
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" id="category1" name="category-filter" class="form-check-input" checked />
                                                <label class="form-check-label" for="category1">Appliances</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" id="category2" name="category-filter" class="form-check-input" />
                                                <label class="form-check-label" for="category2">Audio</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" id="category3" name="category-filter" class="form-check-input" />
                                                <label class="form-check-label" for="category3">Cameras & Camcorders</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" id="category4" name="category-filter" class="form-check-input" />
                                                <label class="form-check-label" for="category4">Car Electronics & GPS</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" id="category5" name="category-filter" class="form-check-input" />
                                                <label class="form-check-label" for="category5">Cell Phones</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" id="category6" name="category-filter" class="form-check-input" />
                                                <label class="form-check-label" for="category6">Computers & Tablets</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" id="category7" name="category-filter" class="form-check-input" />
                                                <label class="form-check-label" for="category7">Health, Fitness & Beauty</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" id="category8" name="category-filter" class="form-check-input" />
                                                <label class="form-check-label" for="category8">Office & School Supplies</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" id="category9" name="category-filter" class="form-check-input" />
                                                <label class="form-check-label" for="category9">TV & Home Theater</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="radio" id="category10" name="category-filter" class="form-check-input" />
                                                <label class="form-check-label" for="category10">Video Games</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Categories Ends -->

                                <!-- Brands starts -->
                                <div class="brands">
                                    <h6 class="filter-title">Brands</h6>
                                    <ul class="list-unstyled brand-list">
                                        <li>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="productBrand1" />
                                                <label class="form-check-label" for="productBrand1">Insignia™</label>
                                            </div>
                                            <span>746</span>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="productBrand2" checked />
                                                <label class="form-check-label" for="productBrand2">Samsung</label>
                                            </div>
                                            <span>633</span>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="productBrand3" />
                                                <label class="form-check-label" for="productBrand3">Metra</label>
                                            </div>
                                            <span>591</span>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="productBrand4" />
                                                <label class="form-check-label" for="productBrand4">HP</label>
                                            </div>
                                            <span>530</span>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="productBrand5" checked />
                                                <label class="form-check-label" for="productBrand5">Apple</label>
                                            </div>
                                            <span>442</span>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="productBrand6" />
                                                <label class="form-check-label" for="productBrand6">GE</label>
                                            </div>
                                            <span>394</span>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="productBrand7" />
                                                <label class="form-check-label" for="productBrand7">Sony</label>
                                            </div>
                                            <span>350</span>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="productBrand8" />
                                                <label class="form-check-label" for="productBrand8">Incipio</label>
                                            </div>
                                            <span>320</span>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="productBrand9" />
                                                <label class="form-check-label" for="productBrand9">KitchenAid</label>
                                            </div>
                                            <span>318</span>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="productBrand10" />
                                                <label class="form-check-label" for="productBrand10">Whirlpool</label>
                                            </div>
                                            <span>298</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Brand ends -->

                                <!-- Rating starts -->
                                <div id="ratings">
                                    <h6 class="filter-title">Ratings</h6>
                                    <div class="ratings-list">
                                        <a href="#">
                                            <ul class="unstyled-list list-inline">
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li>& up</li>
                                            </ul>
                                        </a>
                                        <div class="stars-received">160</div>
                                    </div>
                                    <div class="ratings-list">
                                        <a href="#">
                                            <ul class="unstyled-list list-inline">
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li>& up</li>
                                            </ul>
                                        </a>
                                        <div class="stars-received">176</div>
                                    </div>
                                    <div class="ratings-list">
                                        <a href="#">
                                            <ul class="unstyled-list list-inline">
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li>& up</li>
                                            </ul>
                                        </a>
                                        <div class="stars-received">291</div>
                                    </div>
                                    <div class="ratings-list">
                                        <a href="#">
                                            <ul class="unstyled-list list-inline">
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li>& up</li>
                                            </ul>
                                        </a>
                                        <div class="stars-received">190</div>
                                    </div>
                                </div>
                                <!-- Rating ends -->

                                <!-- Clear Filters Starts -->
                                <div id="clear-filters">
                                    <button type="button" class="btn w-100 btn-primary">Clear All Filters</button>
                                </div>
                                <!-- Clear Filters Ends -->
                            </div>
                        </div>
                    </div>
                    <!-- Ecommerce Sidebar Ends -->

                </div>
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

    <script>
        $(window).on("load", function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14,
                });
            }
        });
        $(function () {
            window.scrollTo(0,document.body.scrollHeight);
        });
    </script>
</body>
<!-- END: Body-->

</html>
