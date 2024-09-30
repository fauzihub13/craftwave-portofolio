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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/favicon.svg') }}" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/toko-online/agrihub/assets/css/main.css?v=5.6') }}" />
</head>

<body>
    @include('toko-online.agrihub.components.header')

    <main class="main">
        <section class="home-slider style-2 position-relative mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-12">
                        <div class="home-slide-cover">
                            <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                                <div class="single-hero-slider single-animation-wrap" style="background-image: url(/assets/toko-online/agrihub/assets/imgs/slider/slider-9.png)">
                                    <div class="slider-content">
                                        <h1 class="display-2 mb-40">
                                            Find the Best <br> Product
                                            on <br>your Location
                                        </h1>
                                        <p class="mb-65"></p>
                                        <form class="form-subcriber d-flex">
                                        </form>
                                    </div>
                                </div>
                                <div class="single-hero-slider single-animation-wrap" style="background-image: url(/assets/toko-online/agrihub/assets/imgs/slider/slider-4.png)">
                                    <div class="slider-content">
                                        <h1 class="display-2 mb-40">
                                            Strawberry <br> Pass Farm Bogor
                                        </h1>
                                        <p class="mb-65">Sign up for the daily newsletter</p>
                                        <form class="form-subcriber d-flex">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-arrow hero-slider-1-arrow"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-xl-block">
                        <div class="banner-img style-3 animated animated">
                            <div class="banner-text mt-50">
                                <h2 class="mb-50">
                                    Having trouble <br />
                                    finding <br>
                                    <span class="text-brand">a specific <br> product?<br />
                                        </span>
                                </h2>
                                <a href="{{ route('agrihub.chat-bot') }}" class="btn btn-xs">Chat Bot AI <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer class="main">
        <section class="newsletter mb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4095.2281698083298!2d106.97970469831336!3d-6.697543493605505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b77c044d6be9%3A0x705af1142447cc49!2sPuncak%20Pass%20Farm!5e0!3m2!1sid!2sid!4v1698040221493!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-6">
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
                                <br>
                                <br>
                            </div>
                            <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/banner/banner-9.png') }}" alt="newsletter"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br><br><br>

        <section class="product-tabs section-padding position-relative">
            <div class="container">
                <div class="section-title style-2">
                    <h3>Popular Products</h3>
                    <ul class="nav nav-tabs links" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">All</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Fruits</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">Vegetables</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-four" data-bs-toggle="tab" data-bs-target="#tab-four" type="button" role="tab" aria-controls="tab-four" aria-selected="false">Tubers</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-five" data-bs-toggle="tab" data-bs-target="#tab-five" type="button" role="tab" aria-controls="tab-five" aria-selected="false">Spices</button>
                        </li>
                    </ul>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Fruits</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Fresh Strawberry</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Pass Farm bogor</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>Rp.2.800.000,-</span>
                                                <span class="old-price">Rp.3.000.000,-</span>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/mangga.png') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/mangga.png') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Fruits</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Mangga Jawa Tengah</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Bumi Tani Jawa Tengah</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>Rp.1.000.000,-</span>
                                                <span class="old-price">Rp.1.500.000,-</span>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/umbi.png') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/umbi.png') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Tubers</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Ubi Jalar</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Alam Maju Garut</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>Rp.1.800.000,-</span>
                                                <span class="old-price">Rp.1.900.000,-</span>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/rempah.png') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/rempah.png') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Spices</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Ketumbar Kasar</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Sinar Panen Lampung</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>Rp.700.000,-</span>
                                                <span class="old-price">Rp.750.000,-</span>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/kayu.png') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/kayu.png') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">-14%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Spices</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Kayu Manis</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Nusantara Sejahtera</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>Rp.380.000,-</span>
                                                <span class="old-price">Rp.400.000,-</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/jambu.png') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/jambu.png') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Fruit</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Fresh Guava</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">BioBloom Jawa Barat</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>Rp.1.700.000</span>
                                                <span class="old-price">Rp.1.900.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/durian.png') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/durian.png') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Fruits</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Durian Pilot</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Tera Crops Semarang</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>Rp.3.200.000,-</span>
                                                <span class="old-price">Rp.3.500.000,-</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/jeruk.png') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/jeruk.png') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Fruits</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Fresh Orange</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Pure Agri Semarang</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>Rp.1.900.000,-</span>
                                                <span class="old-price">Rp.1.950.000,-</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/orange.png') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/orange.png') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Fruits</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Jeruk Manis</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Ever Green Aceh</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>Rp.1.200.000,-</span>
                                                <span class="old-price">Rp.1.500.000,-</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/kunyit.png') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/kunyit.png') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Spices</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Kunyit</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Nature Peak NTT</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>Rp.1.400.000,-</span>
                                                <span class="old-price">Rp.1.600.000,-</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one-->
                    <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                        <div class="row product-grid-4">
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-10-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-10-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Snack</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-12-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-12-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Hodo Foods</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">All Natural Italian-Style Chicken Meatballs</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Stouffer</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$52.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-13-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-13-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Snack</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">StarKist</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$48.85</span>
                                                <span class="old-price">$52.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-14-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-14-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Vegetables</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$17.85</span>
                                                <span class="old-price">$19.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-15-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-15-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">-14%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Pet Foods</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Blue Diamond Almonds Lightly Salted Vegetables</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-16-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-16-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Hodo Foods</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Chobani Complete Vanilla Greek Yogurt</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$54.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-7-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-7-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Meats</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$32.85</span>
                                                <span class="old-price">$33.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-8-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-8-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Snack</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Encore Seafoods Stuffed Alaskan Salmon</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$35.85</span>
                                                <span class="old-price">$37.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-9-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-9-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Coffes</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Gorton’s Beer Battered Fish Fillets with soft paper</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Old El Paso</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-10-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-10-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Cream</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Haagen-Dazs Caramel Cone Ice Cream Ketchup</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Tyson</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$22.85</span>
                                                <span class="old-price">$24.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab two-->
                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                        <div class="row product-grid-4">
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-9-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-9-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Snack</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-8-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-8-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Hodo Foods</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">All Natural Italian-Style Chicken Meatballs</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Stouffer</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$52.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-7-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-7-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Snack</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">StarKist</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$48.85</span>
                                                <span class="old-price">$52.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-6-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-6-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Vegetables</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$17.85</span>
                                                <span class="old-price">$19.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-5-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-5-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">-14%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Pet Foods</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Blue Diamond Almonds Lightly Salted Vegetables</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-4-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-4-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Hodo Foods</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Chobani Complete Vanilla Greek Yogurt</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$54.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-3-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-3-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Meats</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$32.85</span>
                                                <span class="old-price">$33.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-2-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-2-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Snack</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Encore Seafoods Stuffed Alaskan Salmon</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$35.85</span>
                                                <span class="old-price">$37.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-9-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-9-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Coffes</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Gorton’s Beer Battered Fish Fillets with soft paper</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Old El Paso</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-1-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-1-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Cream</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Haagen-Dazs Caramel Cone Ice Cream Ketchup</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Tyson</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$22.85</span>
                                                <span class="old-price">$24.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab three-->
                    <div class="tab-pane fade" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
                        <div class="row product-grid-4">
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-6-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-6-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Snack</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-7-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-7-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Hodo Foods</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">All Natural Italian-Style Chicken Meatballs</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Stouffer</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$52.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-8-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-8-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Snack</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">StarKist</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$48.85</span>
                                                <span class="old-price">$52.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-9-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-9-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Vegetables</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$17.85</span>
                                                <span class="old-price">$19.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-4-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-4-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">-14%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Pet Foods</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Blue Diamond Almonds Lightly Salted Vegetables</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-3-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-3-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Hodo Foods</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Chobani Complete Vanilla Greek Yogurt</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$54.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-2-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-2-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Meats</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$32.85</span>
                                                <span class="old-price">$33.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-1-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-1-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Snack</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Encore Seafoods Stuffed Alaskan Salmon</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$35.85</span>
                                                <span class="old-price">$37.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-11-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-11-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Coffes</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Gorton’s Beer Battered Fish Fillets with soft paper</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Old El Paso</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-12-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-12-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Cream</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Haagen-Dazs Caramel Cone Ice Cream Ketchup</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Tyson</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$22.85</span>
                                                <span class="old-price">$24.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab four-->
                    <div class="tab-pane fade" id="tab-five" role="tabpanel" aria-labelledby="tab-five">
                        <div class="row product-grid-4">
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-12-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-12-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Snack</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-13-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-13-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Hodo Foods</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">All Natural Italian-Style Chicken Meatballs</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Stouffer</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$52.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-14-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-14-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Snack</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">StarKist</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$48.85</span>
                                                <span class="old-price">$52.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-15-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-15-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Vegetables</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$17.85</span>
                                                <span class="old-price">$19.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-16-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-16-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">-14%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Pet Foods</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Blue Diamond Almonds Lightly Salted Vegetables</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-5-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-5-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Hodo Foods</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Chobani Complete Vanilla Greek Yogurt</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$54.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-7-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-7-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Meats</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$32.85</span>
                                                <span class="old-price">$33.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-8-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-8-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Snack</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Encore Seafoods Stuffed Alaskan Salmon</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$35.85</span>
                                                <span class="old-price">$37.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-9-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-9-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Coffes</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Gorton’s Beer Battered Fish Fillets with soft paper</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Old El Paso</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-10-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-10-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Cream</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Haagen-Dazs Caramel Cone Ice Cream Ketchup</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Tyson</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$22.85</span>
                                                <span class="old-price">$24.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab five-->
                    <div class="tab-pane fade" id="tab-six" role="tabpanel" aria-labelledby="tab-six">
                        <div class="row product-grid-4">
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-4-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-4-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Snack</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-6-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-6-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Hodo Foods</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">All Natural Italian-Style Chicken Meatballs</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Stouffer</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$52.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-8-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-8-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Snack</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">StarKist</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$48.85</span>
                                                <span class="old-price">$52.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-9-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-9-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Vegetables</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$17.85</span>
                                                <span class="old-price">$19.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-5-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-5-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">-14%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Pet Foods</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Blue Diamond Almonds Lightly Salted Vegetables</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-6-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-6-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Hodo Foods</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Chobani Complete Vanilla Greek Yogurt</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$54.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-7-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-7-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Meats</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$32.85</span>
                                                <span class="old-price">$33.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-8-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-8-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Snack</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Encore Seafoods Stuffed Alaskan Salmon</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$35.85</span>
                                                <span class="old-price">$37.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-9-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-9-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Coffes</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Gorton’s Beer Battered Fish Fillets with soft paper</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Old El Paso</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-10-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-10-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Cream</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Haagen-Dazs Caramel Cone Ice Cream Ketchup</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Tyson</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$22.85</span>
                                                <span class="old-price">$24.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab six-->
                    <div class="tab-pane fade" id="tab-seven" role="tabpanel" aria-labelledby="tab-seven">
                        <div class="row product-grid-4">
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-5-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-5-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Snack</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-3-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-3-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Hodo Foods</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">All Natural Italian-Style Chicken Meatballs</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Stouffer</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$52.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-7-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-7-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Snack</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">StarKist</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$48.85</span>
                                                <span class="old-price">$52.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/durian.png') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/durian.png') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Fruits</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Durian Pilot</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>Rp.3.200.000,-</span>
                                                <span class="old-price">Rp.3.500.000,-</span>
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
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-10-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-10-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">-14%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Pet Foods</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Blue Diamond Almonds Lightly Salted Vegetables</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-16-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-16-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Hodo Foods</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Chobani Complete Vanilla Greek Yogurt</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$54.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-7-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-7-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Meats</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$32.85</span>
                                                <span class="old-price">$33.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-8-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-8-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Snack</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Encore Seafoods Stuffed Alaskan Salmon</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">AgriHubFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$35.85</span>
                                                <span class="old-price">$37.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-9-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-9-2.jpg') }}" alt="" />
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
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Coffes</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Gorton’s Beer Battered Fish Fillets with soft paper</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Old El Paso</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('agrihub.shop-product-full') }}">
                                                <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-10-1.jpg') }}" alt="" />
                                                <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/product-10-2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ route('agrihub.shop-grid-left') }}">Cream</a>
                                        </div>
                                        <h2><a href="{{ route('agrihub.shop-product-full') }}">Haagen-Dazs Caramel Cone Ice Cream Ketchup</a></h2>
                                        <div>
                                            <span class="font-small text-muted">By <a href="{{ route('agrihub.vendor-details-1') }}">Tyson</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$22.85</span>
                                                <span class="old-price">$24.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="#"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab seven-->
                </div>
                <!--End tab-content-->
            </div>
        </section>

        @include('toko-online.agrihub.components.footer')

    </footer>

    <!-- <div class="chat-bot">
        <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/chatbot.png') }}" class="chat-bot-img" onclick="openModal()">
    </div>

    Modal -->
    <!-- <div id="myModal" class="modal">
        <div class="modal-content">
            <p>Belum di isi chat</p>
            Tambahan elemen atau konten lainnya yang Anda inginkan
            <button onclick="closeModal()">Tutup</button>
        </div>
    </div> -->


    <script>
        // Fungsi untuk membuka modal
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        // Fungsi untuk menutup modal
        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }
    </script>
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
