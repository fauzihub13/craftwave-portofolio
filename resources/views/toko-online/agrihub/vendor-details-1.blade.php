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
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('agrihub.index') }}" rel="nofollow">Home</a>
                    <span></span> Vendors <span></span> Pass Farm Bogor
                </div>
            </div>
        </div>
        <div class="container mb-30">
            <div class="archive-header-3 mt-30 mb-80" style="background-image: url(assets/imgs/vendor/vendor-header-bg.png)">
                <div class="archive-header-3-inner">
                    <div class="vendor-logo mr-50">
                        <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/vendor/vendor-1.png') }}" alt="" />
                    </div>
                    <div class="vendor-content">
                        <div class="product-category">
                            <span class="text-muted">Since 2012</span>
                        </div>
                        <h3 class="mb-5 text-white"><a href="{{ route('agrihub.vendor-details-1') }}" class="text-white">Pass Farm Bogor</a></h3>
                        <div class="product-rate-cover mb-15">
                            <div class="product-rate d-inline-block">
                                <div class="product-rating" style="width: 90%"></div>
                            </div>
                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="vendor-des mb-15">
                                    <p class="font-sm text-white">Ini adalah toko spesialis yang menawarkan berbagai produk strawberry dan pangan berkualitas tinggi.</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="vendor-info text-white mb-15">
                                    <ul class="font-sm">
                                        <li><img class="mr-5" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>Kabupaten Bogor, Jawa Barat</span></li>
                                        <li><img class="mr-5" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us:</strong><span>Subscribe to Unlock</span></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="follow-social">
                                    <!-- <h6 class="mb-15 text-white">Follow Us</h6>
                                    <ul class="social-network">
                                        <li class="hover-up">
                                            <a href="#">
                                                <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/social-tw.svg') }}" alt="" />
                                            </a>
                                        </li>
                                        <li class="hover-up">
                                            <a href="#">
                                                <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/social-fb.svg') }}" alt="" />
                                            </a>
                                        </li>
                                        <li class="hover-up">
                                            <a href="#">
                                                <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/social-insta.svg') }}" alt="" />
                                            </a>
                                        </li>
                                        <li class="hover-up">
                                            <a href="#">
                                                <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/social-pin.svg') }}" alt="" />
                                            </a>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                    <div class="product-list mb-50">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <div class="product-img-inner">
                                        <a href="{{ route('agrihub.shop-product-right') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="" />
                                        </a>
                                    </div>
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
                                    <a href="{{ route('agrihub.shop-product-full') }}">Pass Farm Bogor</a>
                                </div>
                                <h2><a href="{{ route('agrihub.shop-product-right') }}">Sweet Strawberry</a></h2>

                                <p class="mt-15 mb-15">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam beatae consectetur, atque inventore aliquam adipisci perspiciatis nostrum qui consequatur praesentium?</p>
                                <div class="product-price">
                                    <span>Rp.1.400.000,-</span>
                                </div>
                                <div class="mt-30 d-flex align-items-center">
                                    <a aria-label="Buy now" class="btn" href="#"><i class="fi-rs-shopping-cart mr-5"></i>See More</a>
                                </div>
                            </div>
                        </div>
                        <!--single product-->
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <div class="product-img-inner">
                                        <a href="{{ route('agrihub.shop-product-right') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/jeruk.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/jeruk.png') }}" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="{{ route('agrihub.shop-product-full') }}">Pass Farm Bogor</a>
                                </div>
                                <h2><a href="{{ route('agrihub.shop-product-right') }}">Fresh Orange</a></h2>

                                <p class="mt-15 mb-15">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam beatae consectetur, atque inventore aliquam adipisci perspiciatis nostrum qui consequatur praesentium?</p>
                                <div class="product-price">
                                    <span>Rp.1.400.000,-</span>
                                </div>
                                <div class="mt-30">
                                    <a aria-label="Buy now" class="btn" href="#"><i class="fi-rs-shopping-cart mr-5"></i>See More</a>
                                </div>
                            </div>
                        </div>
                        <!--single product-->
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <div class="product-img-inner">
                                        <a href="{{ route('agrihub.shop-product-right') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/umbi.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/umbi.png') }}" alt="" />
                                        </a>
                                    </div>
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
                                    <a href="{{ route('agrihub.shop-product-full') }}">Pass Farm Bogor</a>
                                </div>
                                <h2><a href="{{ route('agrihub.shop-product-right') }}">Ubi Jalar</a></h2>

                                <p class="mt-15 mb-15">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam beatae consectetur, atque inventore aliquam adipisci perspiciatis nostrum qui consequatur praesentium?</p>
                                <div class="product-price">
                                    <span>Rp.1.400.000,-</span>
                                </div>
                                <div class="mt-30">
                                    <a aria-label="Buy now" class="btn" href="#"><i class="fi-rs-shopping-cart mr-5"></i>See More</a>
                                </div>
                            </div>
                        </div>
                        <!--single product-->
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <div class="product-img-inner">
                                        <a href="{{ route('agrihub.shop-product-right') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/kayu.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/kayu.png') }}" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="{{ route('agrihub.shop-product-full') }}">Pass Farm Bogor</a>
                                </div>
                                <h2><a href="{{ route('agrihub.shop-product-right') }}">Ketumbar Kasar</a></h2>

                                <p class="mt-15 mb-15">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam beatae consectetur, atque inventore aliquam adipisci perspiciatis nostrum qui consequatur praesentium?</p>
                                <div class="product-price">
                                    <span>Rp.1.400.000,-</span>
                                </div>
                                <div class="mt-30">
                                    <a aria-label="Buy now" class="btn" href="#"><i class="fi-rs-shopping-cart mr-5"></i>See More</a>
                                </div>
                            </div>
                        </div>
                        <!--single product-->
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <div class="product-img-inner">
                                        <a href="{{ route('agrihub.shop-product-right') }}">
                                            <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/durian.png') }}" alt="" />
                                            <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/durian.png') }}" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="best">Best</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="{{ route('agrihub.shop-product-full') }}">Pass Farm Bogor</a>
                                </div>
                                <h2><a href="{{ route('agrihub.shop-product-right') }}">Durian Pilot</a></h2>

                                <p class="mt-15 mb-15">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam beatae consectetur, atque inventore aliquam adipisci perspiciatis nostrum qui consequatur praesentium?</p>
                                <div class="product-price">
                                    <span>Rp.1.400.000,-</span>
                                </div>
                                <div class="mt-30">
                                    <a aria-label="Buy now" class="btn" href="#"><i class="fi-rs-shopping-cart mr-5"></i>See More</a>
                                </div>
                            </div>
                        </div>
                        <!--single product-->
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
                    <section class="section-padding pb-5">

                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="product-cart-wrap style-2">

                                </div>
                            </div>
                        </div>
                    </section>
                    <!--End Deals-->
                </div>
                <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
                    <!-- <div class="banner-img mb-30">
                        <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/banner/banner-10.jpg') }}" alt="" />
                    </div> -->
                    <div class="sidebar-widget widget-category-2 mb-30">
                        <h5 class="section-title style-1 mb-30">Category</h5>
                        <ul>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/category-1.svg') }}" alt="" />Fruits</a><span class="count">30</span>
                            </li>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/category-3.svg') }}" alt="" />Vegetables </a><span class="count">42</span>
                            </li>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/category-4.svg') }}" alt="" />Tubers</a><span class="count">68</span>
                            </li>
                            <li>
                                <a href="{{ route('agrihub.shop-product-full') }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/category-5.svg') }}" alt="" />Spices</a><span class="count">87</span>
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
        <section class="featured section-padding">
            <div class="container">
                <div class="row">

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
