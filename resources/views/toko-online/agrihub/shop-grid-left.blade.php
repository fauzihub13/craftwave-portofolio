<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>AgriHub</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg') }}" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slider-range.css" />
    <link rel="stylesheet" href="{{ asset ('assets/toko-online/agrihub/assets/css/main.css?v=5.6') }}" />
</head>

<body>
    @include('toko-online.agrihub.components.header')
    <main class="main">
        <div class="page-header mt-30 mb-50">
            <div class="container">
                <div class="archive-header">
                    <div class="row align-items-center">
                        <div class="col-xl-3">
                            <h1 class="mb-15">Shop</h1>
                            <div class="breadcrumb">
                                <a href="{{ route('agrihub.index') }}" rel="nofollow">Home</a>
                                <span></span> Shop <span></span> Strawberry
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-30">
            <div class="row flex-row-reverse">
                <div class="col-lg-4-5">
                    <div class="shop-product-fillter">
                        <div class="totall-product">
                            <p>We found <strong class="text-brand">29</strong> items for you!</p>
                        </div>
                        <div class="sort-by-product-area">
                            <div class="sort-by-cover mr-10">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps"></i>Show:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap">
                                        <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <li><a class="active" href="#">50</a></li>
                                        <li><a href="#">100</a></li>
                                        <li><a href="#">150</a></li>
                                        <li><a href="#">200</a></li>
                                        <li><a href="#">All</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sort-by-cover">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap">
                                        <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <li><a class="active" href="#">Featured</a></li>
                                        <li><a href="#">Price: Low to High</a></li>
                                        <li><a href="#">Price: High to Low</a></li>
                                        <li><a href="#">Release Date</a></li>
                                        <li><a href="#">Avg. Rating</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row product-grid">
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruit</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Fress Strawberry </a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHub</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry Fresh</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Pass Farm</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Pass Farm</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Mall</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry Manis</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Agrihub</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">-14%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry Merah</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Agrihub</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry Manis</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Agrihub</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry Fresh</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Pass Farm</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <!-- <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div> -->
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Pass Farm</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <!-- <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Mall</span>
                                    </div> -->
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry Manis</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Agrihub</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">-14%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry Merah</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Agrihub</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <!-- <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div> -->
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry Manis</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Agrihub</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <!-- <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div> -->
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry Fresh</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Pass Farm</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Pass Farm</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <!-- <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Mall</span>
                                    </div> -->
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry Manis</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Agrihub</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">-14%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry Merah</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Agrihub</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <!-- <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div> -->
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry Manis</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Agrihub</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges">
                                        <span class="sale">-50%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry Fresh</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Pass Farm</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <!-- <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div> -->
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Pass Farm</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Mall</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry Manis</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Agrihub</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.shop-product-full') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/cat-2.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">-14%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Fruits</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Strawberry Merah</a></h2>

                                    <div>
                                        <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Agrihub</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>Rp.1.200.000,-</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                    </div>
                    <!--product grid-->
                    <div class="pagination-area mt-20 mb-20">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fi-rs-arrow-small-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fi-rs-arrow-small-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!--End Deals-->
                </div>
                <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
                    <div class="sidebar-widget widget-category-2 mb-30">
                        <h5 class="section-title style-1 mb-30">Category</h5>
                        <ul>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/category-1.svg') }}" alt="" />Fruits</a><span class="count">30</span>
                            </li>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/category-2.svg') }}" alt="" />Vegetables</a><span class="count">35</span>
                            </li>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/category-4.svg') }}" alt="" />Tubers</a><span class="count">68</span>
                            </li>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/category-5.svg') }}" alt="" />Spice</a><span class="count">87</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Fillter By Price -->
                    <div class="sidebar-widget price_range range mb-30">
                        <h5 class="section-title style-1 mb-30">Fill by Price</h5>
                        <div class="price-filter">
                            <input type="text" class="form-control" id="minimumPrice" placeholder="Minimum Price">
                            <br>
                            <input type="text" class="form-control" id="maximumPrice" placeholder="Maximum Price">
                        </div>
                        <br>
                        <br>
                        <a href="{{ route('agrihub.shop-product-full') }}" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Fillter</a>
                    </div>
                    <div class="sidebar-widget  range mb-30">
                        <h5 class="section-title style-1 mb-30">Rating Account</h5>
                        <div class="container">
                            <form>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked style="background-color: #3bb77e; border: none;" />
                                    <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/rating/rating5.svg') }}" width="80%">
                                  </div>
                                  <!-- Default checkbox -->
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked style="background-color: #3bb77e; border: none;" />
                                    <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/rating/rating4.svg') }}" width="80%">
                                  </div>
                                  <!-- Default checkbox -->
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked style="background-color: #3bb77e; border: none;" />
                                    <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/rating/rating3.svg') }}" width="80%">
                                  </div>
                                  <!-- Default checkbox -->
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked style="background-color: #3bb77e; border: none;" />
                                    <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/rating/rating2.svg') }}" width="80%">
                                  </div>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget widget-category-2 mb-30">
                        <h5 class="section-title style-1 mb-30">Last Added</h5>
                        <ul>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}">1 Days</span>
                            </li>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}">3 Days</span>
                            </li>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}">7 Days</span>
                            </li>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}">1 Month</span>
                            </li>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}">3 Month</span>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </main>
    <footer class="main">
        <section class="newsletter mb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="position-relative newsletter-inner">
                            <div class="newsletter-content">
                                <h2 class="mb-20">
                                    Want access to vendor data?  <br />
                                    Subscribe now!
                                </h2>
                                <p class="mb-45">Start You'r Daily Shopping with <span class="text-brand">AgriHub</span></p>
                                <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Your emaill address" />
                                    <button class="btn" type="submit">Subscribe</button>
                                </form>
                            </div>
                            <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/banner/banner-9.png') }}" alt="newsletter" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="featured section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 mb-md-4 mb-xl-0">
                        <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                            <div class="banner-icon">
                                <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-1.svg') }}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Best prices & offers</h3>
                                <p>Orders $50 or more</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                            <div class="banner-icon">
                                <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-2.svg') }}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Free delivery</h3>
                                <p>24/7 amazing services</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                            <div class="banner-icon">
                                <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-3.svg') }}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Great daily deal</h3>
                                <p>When you sign up</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                            <div class="banner-icon">
                                <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-4.svg') }}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Wide assortment</h3>
                                <p>Mega Discounts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                            <div class="banner-icon">
                                <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-5.svg') }}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Easy returns</h3>
                                <p>Within 30 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-xl-none">
                        <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                            <div class="banner-icon">
                                <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-6.svg') }}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Safe delivery</h3>
                                <p>Within 30 days</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        @include('toko-online.agrihub.components.footer')
        <div class="container pb-30">
            <div class="row align-items-center">
                <div class="col-12 mb-30">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <p class="font-sm mb-0">&copy; 2023, <strong class="text-brand">AgriHub</strong></p>
                </div>

            </div>
        </div>
    </footer>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/loading.gif') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
     @include('toko-online.agrihub.components.js-script')
</body>

</html>
