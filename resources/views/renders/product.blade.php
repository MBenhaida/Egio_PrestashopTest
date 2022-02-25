@extends('master')

@section('title')
    {{ __('Page Produit') }}
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/app-ecommerce-details.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/product.css') }}">
@endsection

@section('js')

@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row my-2">
                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/images/product.png') }}" class="img-fluid product-img" alt="product image" />
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <h4>Apple Watch Series 5</h4>
                    <span class="card-text item-company">By <a href="#" class="company-name">Apple</a></span>
                    <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                        <h4 class="item-price me-1">$499.99</h4>
                        <ul class="unstyled-list list-inline ps-1 border-start">
                            <li class="ratings-list-item"><i data-feather="star" ></i></li>
                            <li class="ratings-list-item"><i data-feather="star" ></i></li>
                            <li class="ratings-list-item"><i data-feather="star" ></i></li>
                            <li class="ratings-list-item"><i data-feather="star" ></i></li>
                            <li class="ratings-list-item"><i data-feather="star" style="opacity: .5;"></i></li>
                        </ul>
                    </div>
                    <p class="card-text">Available - <span class="text-success">In stock</span></p>
                    <p class="card-text">
                        GPS, Always-On Retina display, 30% larger screen, Swimproof, ECG app, Electrical and optical heart sensors,
                        Built-in compass, Elevation, Emergency SOS, Fall Detection, S5 SiP with up to 2x faster 64-bit dual-core
                        processor, watchOS 6 with Activity trends, cycle tracking, hearing health innovations, and the App Store on
                        your wrist
                    </p>
                    <hr />
                    <div class="d-flex flex-column flex-sm-row pt-1">
                        <a href="#" class="btn btn-primary btn-cart me-0 me-sm-1 mb-1 mb-sm-0">
                            <i data-feather="shopping-cart" class="me-50"></i>
                            <span class="add-to-cart">Add to cart</span>
                        </a>
                        <a href="#" class="btn btn-outline-secondary btn-wishlist me-0 me-sm-1 mb-1 mb-sm-0">
                            <i data-feather="heart" class="me-50"></i>
                            <span>Wishlist</span>
                        </a>
                        <div class="btn-group dropdown-icon-wrapper btn-share">
                            <button type="button" class="btn btn-icon hide-arrow btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="share-2"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i data-feather="facebook"></i>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i data-feather="twitter"></i>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i data-feather="youtube"></i>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i data-feather="instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-features">
            @include('renders.module')
        </div>
    </div>
@endsection

