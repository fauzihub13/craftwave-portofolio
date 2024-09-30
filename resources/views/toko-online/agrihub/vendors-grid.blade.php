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
                            <h1 class="mb-15">Vendor</h1>
                            <div class="breadcrumb">
                                <a href="{{ route('agrihub.index') }}" rel="nofollow">Home</a>
                                <span></span> Vendor
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
                            <p>We found <strong class="text-brand">29</strong> vendors for you!</p>
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
                                        <a href="{{ route('agrihub.vendor-details-1') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/vendor/vendor-1.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->

                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Since 2012</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Puncak Pass Farm</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>Bogor</span></li>
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('agrihub.vendor-details-1') }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.vendor-details-1') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/vendor/vendor-2.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->

                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Since 2012</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Alam Maju Garut</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>Garut</span></li>
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('agrihub.vendor-details-1') }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end card 2 -->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.vendor-details-1') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/vendor/vendor-7.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->

                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Since 2019</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Bumi Tani</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>Jawa Tengah</span></li>
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('agrihub.vendor-details-1') }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.vendor-details-1') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/vendor/vendor-8.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->

                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Since 2018</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Sinar Panen</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>Lampung</span></li>
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('agrihub.vendor-details-1') }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.vendor-details-1') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/vendor/vendor-3.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->

                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Since 2017</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Nusantara Sejahtera</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>Jakarta</span></li>
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('agrihub.vendor-details-1') }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.vendor-details-1') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/vendor/vendor-9.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->

                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Since 2019</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Sinar Jaya</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>Karawang</span></li>
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('agrihub.vendor-details-1') }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.vendor-details-1') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/vendor/vendor-4.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->

                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Since 2012</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Eko Makmur</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>Makkasar</span></li>
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('agrihub.vendor-details-1') }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.vendor-details-1') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/vendor/vendor-10.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->

                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Since 2012</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Sumber Tani</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>Yogyakarta</span></li>
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('agrihub.vendor-details-1') }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.vendor-details-1') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/vendor/vendor-5.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->

                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Since 2018</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Harvest Hub</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>Depok</span></li>
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('agrihub.vendor-details-1') }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.vendor-details-1') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/vendor/vendor-11.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->

                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Since 2020</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">BioBloom</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>Sumedang</span></li>
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('agrihub.vendor-details-1') }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.vendor-details-1') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/vendor/vendor-6.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->

                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Since 2019</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Tera Crops</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>Semarang</span></li>
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('agrihub.vendor-details-1') }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->

                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.vendor-details-1') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/vendor/vendor-8.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->

                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Since 2018</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Sinar Panen</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>Lampung</span></li>
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('agrihub.vendor-details-1') }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.vendor-details-1') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/vendor/vendor-3.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->

                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Since 2017</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Nusantara Sejahtera</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>Jakarta</span></li>
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('agrihub.vendor-details-1') }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('agrihub.vendor-details-1') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/vendor/vendor-9.png') }}" alt="" />
                                        </a>
                                    </div>
                                    <!-- <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div> -->

                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ route('agrihub.shop-product-full') }}">Since 2019</a>
                                    </div>
                                    <h2><a href="{{ route('agrihub.shop-product-full') }}">Sinar Jaya</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>Karawang</span></li>
                                            <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us: </strong><span>Subcribe to Unclock</span></li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('agrihub.vendor-details-1') }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
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
                        <h5 class="section-title style-1 mb-30">Vendor Category</h5>
                        <ul>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/category-1.svg') }}" alt="" />Fruits</a>
                            </li>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/category-2.svg') }}" alt="" />Vegetables</a>
                            </li>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/category-4.svg') }}" alt="" />Tubers</a>
                            </li>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/category-5.svg') }}" alt="" />Spice</a>
                            </li>
                        </ul>
                    </div>



                    <!-- Fillter By Price -->
                    <div class="sidebar-widget price_range range mb-30">
                        <h5 class="section-title style-1 mb-30">Find by Location</h5>
                        <div class="search-location">
                            <form action="#">
                                <select class="select-active">
                                    <option>Your Location</option>
                                    <option>Aceh</option>
                                    <option>Bali</option>
                                    <option>Banten</option>
                                    <option>Bengkulu</option>
                                    <option>DI Yogyakarta</option>
                                    <option>DKI Jakarta</option>
                                    <option>Gorontalo</option>
                                    <option>Jambi</option>
                                    <option>Jawa Barat</option>
                                    <option>Jawa Tengah</option>
                                    <option>Jawa Timur</option>
                                    <option>Kalimantan Barat</option>
                                    <option>Kalimantan Selatan</option>
                                    <option>Kalimantan Tengah</option>
                                    <option>Kalimantan Timur</option>
                                    <option>Kalimantan Utara</option>
                                    <option>Kepulauan Bangka Belitung</option>
                                    <option>Kepulauan Riau</option>
                                    <option>Lampung</option>
                                    <option>Maluku</option>
                                    <option>Maluku Utara</option>
                                    <option>Nusa Tenggara Barat</option>
                                    <option>Nusa Tenggara Timur</option>
                                    <option>Papua</option>
                                    <option>Papua Barat</option>
                                    <option>Riau</option>
                                    <option>Sulawesi Barat</option>
                                    <option>Sulawesi Selatan</option>
                                    <option>Sulawesi Tengah</option>
                                    <option>Sulawesi Tenggara</option>
                                    <option>Sulawesi Utara</option>
                                    <option>Sumatera Barat</option>
                                    <option>Sumatera Selatan</option>
                                    <option>Sumatera Utara</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget  range mb-30">
                        <h5 class="section-title style-1 mb-30">Rating</h5>
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
                        <h5 class="section-title style-1 mb-30">Product Capacity</h5>
                        <ul>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}">50 Kg</span>
                            </li>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}">60 Kg</span>
                            </li>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}">80 Kg</span>
                            </li>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}">100 Kg</span>
                            </li>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}">150 Kg</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Product sidebar Widget -->

                    <!-- <div class="banner-img wow fadeIn mb-lg-0 animated d-lg-block d-none">
                        <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/banner/banner-11.png') }}" alt="" />
                        <div class="banner-text">
                            <span>Oganic</span>
                            <h4>
                                Save 17% <br />
                                on <span class="text-brand">Oganic</span><br />
                                Juice
                            </h4>
                        </div>
                    </div> -->
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
