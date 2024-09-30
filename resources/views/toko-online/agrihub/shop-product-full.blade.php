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
    <link rel="stylesheet" href="{{ asset ('assets/toko-online/agrihub/assets/css/main.css?v=5.6') }}" />
</head>

<body class="single-product">
    <!-- Quick view -->
    @include('toko-online.agrihub.components.header')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('agrihub.index') }}" rel="nofollow">Home</a>
                    <span></span> <a href="{{ route('agrihub.shop-product-full') }}">Shop</a> <span></span> Fresh Strawberry
                </div>
            </div>
        </div>
        <div class="container mb-30">
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <div class="product-detail accordion-detail">
                        <div class="row mb-50 mt-30">
                            <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                <div class="detail-gallery">
                                    <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                    <!-- MAIN SLIDES -->
                                    <div class="product-image-slider">
                                        <figure class="border-radius-10">
                                            <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/umbi.png') }}" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/mangga.png') }}" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/kayu.png') }}" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/jambu.png') }}" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/durian.png') }}" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/orange.png') }}" alt="product image" />
                                        </figure>
                                    </div>
                                    <!-- THUMBNAILS -->
                                    <!-- <div class="slider-nav-thumbnails">
                                        <div><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="product image" /></div>
                                        <div><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/umbi.png') }}" alt="product image" /></div>
                                        <div><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/mangga.png') }}" alt="product image" /></div>
                                        <div><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/kayu.png') }}" alt="product image" /></div>
                                        <div><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/jambu.png') }}" alt="product image" /></div>
                                        <div><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/durian.png') }}" alt="product image" /></div>
                                        <div><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/orange.png') }}" alt="product image" /></div>
                                    </div> -->
                                </div>
                                <!-- End Gallery -->
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info pr-30 pl-30">
                                    <span class="stock-status out-stock"> Sale Off </span>
                                    <h2 class="title-detail">Fresh Strawberry</h2>
                                    <div class="clearfix product-price-cover">
                                        <div class="product-price primary-color float-left">
                                            <span class="current-price text-brand">Rp.1.600.000</span>
                                            <span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="short-desc mb-30">
                                        <p>Our fresh strawberries are known for their delicious, sweet taste and vibrant red color. Grown in our quality-focused garden, these berries are meticulously cared for to ensure peak ripeness and top-notch quality. With clean, smooth skin and a burst of sweetness, our strawberries are both versatile and nutritious.</p>
                                        <br>
                                        <p>Packing : In Bulk (Kg)
                                            <br> Annual Production volume : 1500 Kg (1.5 Tonne)
                                            </p>
                                    </div>
                                    <div class="attr-detail attr-size mb-30">
                                        <strong class="mr-10">Size / Weight: </strong>
                                        <ul class="list-filter size-filter font-small">
                                            <li><a href="#">50kg</a></li>
                                            <li class="active"><a href="#">60kg</a></li>
                                            <li><a href="#">80kg</a></li>
                                            <li><a href="#">100kg</a></li>
                                            <li><a href="#">150kg</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails" style="margin-top: 90px;">
                                    <div><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/strawberry.png') }}" alt="product image" /></div>
                                    <div><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/umbi.png') }}" alt="product image" /></div>
                                    <div><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/mangga.png') }}" alt="product image" /></div>
                                    <div><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/kayu.png') }}" alt="product image" /></div>
                                    <div><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/jambu.png') }}" alt="product image" /></div>
                                    <div><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/durian.png') }}" alt="product image" /></div>
                                    <div><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/orange.png') }}" alt="product image" /></div>
                                </div>
                                <!-- Detail Info -->
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Sertifikation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info">Estimation Panen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Vendor-info-tab" data-bs-toggle="tab" href="#Vendor-info">MOQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Information Supplier</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Description">
                                        <div class="">
                                            <div class="my-3">
                                                    </p>
                                                </div>

                                                <span style="color: #066F3B;" class="text-bold">Sertifikation Produk :</span> <br>
                                                <!-- <div class="my-3 d-flex">
                                                    <div class="flex-wrap">
                                                        <div class="card">
                                                            <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/sertification/halal.svg') }}" alt="Card Image" width="5px">
                                                            <div class="card-content">
                                                                <h6>Sertification Halal</h6>
                                                                <h7>Majelis Ulama Indonesia</h7>
                                                                <br>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-wrap">
                                                        <div class="card">
                                                            <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/sertification/halal.svg') }}" alt="Card Image">
                                                            <div class="card-content">
                                                                <h6>Sertification BPOM</h6>
                                                                <h7>Badan POM</h7>
                                                                <br>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-wrap">
                                                        <div class="card">
                                                            <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/sertification/halal.svg') }}" alt="Card Image">
                                                            <div class="card-content">
                                                                <h6>Sertification GMP</h6>
                                                                <h7>Good Manufacturing Practice</h7>
                                                                <br>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Additional-info">
                                        <table class="font-md">
                                            <tbody>
                                                <tr>
                                                    <th class="fw-normal">No</th>
                                                    <th class="fw-normal">Estimasi Panen</th>
                                                    <th class="fw-normal">Estimasi Jumlah</th>
                                                    <th class="fw-normal">Status</th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Maret 2023</td>
                                                    <td>800 Kg</td>
                                                    <td>Sudah Panen</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Juli 2023</td>
                                                    <td>950 Kg</td>
                                                    <td>Sudah Panen</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>November 2023</td>
                                                    <td>650 Kg</td>
                                                    <td>Belum Panen</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="Vendor-info">
                                        <div class="vendor-logo d-flex mb-30">
                                            <table class="table table-bordered table-sm table-responsive table-striped">
                                                <tr>
                                                    <th class="fw-normal">No</th>
                                                    <th class="fw-normal">MOQ</th>
                                                    <th class="fw-normal">Harga</th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td> < 200 Kg</td>
                                                    <td>Rp 5.000/Kg</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>201 Kg - 500 Kg</td>
                                                    <td>Rp 4.500/Kg</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td> > 501 Kg</td>
                                                    <td>Rp 3.500/Kg</td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="Reviews">
                                        <!--Comments-->
                                        <div class="comments-area">
                                            <div class="my-3">
                        <span style="color: #066F3B;" class="text-bold">Disupply Oleh:</span> <br>
                        <div class="d-flex gap-2 justify-content-between align-items-center">
                            <div class="d-flex flex-column">
                                <a href="#" class="text-decoration-none" style="color: #066F3B;">Puncak Farm Bogor</a>
                                <span>Bergabung sejak: Mei 2020</span>
                            </div>
                            <img src="{{ asset ('assets/toko-online/agrihub/assets/puncak-farm.png') }}" class="rounded" width="70" alt="">
                        </div>
                        <div class="d-flex mb-2 gap-2 justify-content-between align-items-center">
                            <div class="d-flex flex-column">
                                <a href="detail-katalog" class="text-decoration-none" style="color: #066F3B;">Produk ini berada di Katalog:</a>
                                <span>Katalog Buah Manis</span>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="#" class="text-right" style="color: #066F3B; font-size: 0.75rem !important; text-align: right;">Lihat Katalog</a>
                            <a href="#" class="" style="color: #066F3B; font-size: 0.75rem !important;">Lihat Semua Katalog</a>
                            </div>
                        </div>

                        <!-- <span style="color: #066F3B;" class="text-bold">informasi Katalog:</span>
                        <div class="d-flex gap-2 justify-content-between align-items-center">
                            <span class="text-bold">Lokasi:</span> <span>Kota Bogor, Jawa Barat</span>
                        </div> -->
                        <span style="color: #066F3B;" class="text-bold">informasi Supplier:</span> <br>
                        <div class="d-flex gap-2 justify-content-between align-items-center">
                            <span class="text-bold">Lokasi:</span> <span>Kota Bogor, Jawa Barat</span>
                        </div>
                        <div class="d-flex gap-2 justify-content-between align-items-center">
                            <span class="text-bold">Tipe Supplier:</span> <span>Supplier Besar</span>
                        </div>
                        <div class="d-flex gap-2 justify-content-between align-items-center">
                            <span class="text-bold">Email:</span> <span><a href="{{ route('agrihub.subscribe') }}"> Subscribe to Get Contact </span></a>
                        </div>
                        <div class="d-flex gap-2 justify-content-between align-items-center">
                            <span class="text-bold">Nomor Telepon:</span> <span><a href="{{ route('agrihub.subscribe') }}">Subscribe to Get Contact</span></a>
                        </div>
                        <div class="d-flex gap-2 justify-content-between align-items-center">
                            <span class="text-bold">Lokasi:</span> <span><a href="#">Buka pada Peta</a></span>
                        </div>
                        <div class="d-flex gap-2 justify-content-between align-items-center my-2 border">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.590667507179!2d106.97963541009817!3d-6.697511393270042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b77c044d6be9%3A0x705af1142447cc49!2sPuncak%20Pass%20Farm!5e0!3m2!1sen!2sid!4v1694509195995!5m2!1sen!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                                        <!--comment form-->

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-60">

                                <div class="row related-products">
                                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap hover-up">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#" tabindex="0">
                                                        <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/thumbnail-12.jpg') }}" alt="" />
                                                        <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/jeruk.png') }}" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <h2><a href="#" tabindex="0">Jeruk Manis</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span> </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap hover-up">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#" tabindex="0">
                                                        <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/thumbnail-9.jpg') }}" alt="" />
                                                        <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/thumbnail-9.jpg') }}" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">-12%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <h2><a href="#" tabindex="0">Jagung Manis</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span> </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$138.85 </span>
                                                    <span class="old-price">$145.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap hover-up">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#" tabindex="0">
                                                        <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/thumbnail-11.jpg') }}" alt="" />
                                                        <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/thumbnail-11.jpg') }}" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <h2><a href="#" tabindex="0">Alpukat/a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span> </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$738.85 </span>
                                                    <span class="old-price">$1245.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-12 col-sm-6 d-lg-block d-none">
                                        <div class="product-cart-wrap hover-up mb-0">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#" tabindex="0">
                                                        <img class="default-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/thumbnail-7.jpg') }}" alt="" />
                                                        <img class="hover-img" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/thumbnail-7.jpg') }}" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <h2><a href="#" tabindex="0">Mangga Arumanis</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span> </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$89.8 </span>
                                                    <span class="old-price">$98.8</span>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


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
