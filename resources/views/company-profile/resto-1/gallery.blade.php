<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#F5C332">
  <!-- favicon  -->
  <link rel="shortcut icon" href="img/ui/logo.ico" type="image/x-icon">
  @include('company-profile.resto-1.components.css-link')
  <!-- page title -->
  <title>Starbelly</title>
</head>

<body>
  <!-- app wrapper -->
  <div class="sb-app">
    @include('company-profile.resto-1.components.header')

    <!-- dynamic content -->
    <div id="sb-dynamic-content" class="sb-transition-fade">

      <!-- banner -->
      <section class="sb-banner sb-banner-xs sb-banner-color">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- main title -->
              <div class="sb-main-title-frame">
                <div class="sb-main-title">
                  <h1 class="sb-h2">Gallery.</h1>
                  <ul class="sb-breadcrumbs">
                    <li><a href="{{ route ('resto-1.index') }}">Home</a></li>
                    <li><a href="#.">gallery</a></li>
                  </ul>
                </div>
              </div>
              <!-- main title end -->
            </div>
          </div>
        </div>
      </section>
      <!-- banner end -->

      <!-- gallery -->
      <div class="sb-p-90-60">
        <div class="container">
          <div class="sb-masonry-grid">
            <div class="sb-grid-sizer"></div>
            <div class="sb-grid-item sb-item-33">
              <div class="sb-gallery-item sb-mb-30">
                <img src="{{ asset('assets/company-profile/resto-1/img/gallery/1.jpg') }}" alt="photo">
                <!-- button -->
                <a data-fancybox="gallery" data-no-swup href="img/gallery/1.jpg') }}" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                  <span class="sb-icon">
                    <img src="{{ asset('assets/company-profile/resto-1/img/ui/icons/zoom.svg') }}" alt="icon">
                  </span>
                </a>
                <!-- button end -->
              </div>
            </div>
            <div class="sb-grid-item sb-item-33">
              <div class="sb-gallery-item sb-gallery-vert sb-mb-30">
                <img src="{{ asset('assets/company-profile/resto-1/img/gallery/2.jpg') }}" alt="photo">
                <!-- button -->
                <a data-fancybox="gallery" data-no-swup href="img/gallery/2.jpg') }}" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                  <span class="sb-icon">
                    <img src="{{ asset('assets/company-profile/resto-1/img/ui/icons/zoom.svg') }}" alt="icon">
                  </span>
                </a>
                <!-- button end -->
              </div>
            </div>
            <div class="sb-grid-item sb-item-33">
              <div class="sb-gallery-item sb-mb-30">
                <img src="{{ asset('assets/company-profile/resto-1/img/gallery/3.jpg') }}" alt="photo">
                <!-- button -->
                <a data-fancybox="gallery" data-no-swup href="img/gallery/3.jpg') }}" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                  <span class="sb-icon">
                    <img src="{{ asset('assets/company-profile/resto-1/img/ui/icons/zoom.svg') }}" alt="icon">
                  </span>
                </a>
                <!-- button end -->
              </div>
            </div>
            <div class="sb-grid-item sb-item-33">
              <div class="sb-gallery-item sb-gallery-vert sb-mb-30">
                <img src="{{ asset('assets/company-profile/resto-1/img/gallery/4.jpg') }}" alt="photo">
                <!-- button -->
                <a data-fancybox="gallery" data-no-swup href="img/gallery/4.jpg') }}" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                  <span class="sb-icon">
                    <img src="{{ asset('assets/company-profile/resto-1/img/ui/icons/zoom.svg') }}" alt="icon">
                  </span>
                </a>
                <!-- button end -->
              </div>
            </div>
            <div class="sb-grid-item sb-item-33">
              <div class="sb-gallery-item sb-gallery-vert sb-mb-30">
                <img src="{{ asset('assets/company-profile/resto-1/img/gallery/5.jpg') }}" alt="photo">
                <!-- button -->
                <a data-fancybox="gallery" data-no-swup href="img/gallery/5.jpg') }}" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                  <span class="sb-icon">
                    <img src="{{ asset('assets/company-profile/resto-1/img/ui/icons/zoom.svg') }}" alt="icon">
                  </span>
                </a>
                <!-- button end -->
              </div>
            </div>
            <div class="sb-grid-item sb-item-33">
              <div class="sb-gallery-item sb-mb-30">
                <img src="{{ asset('assets/company-profile/resto-1/img/gallery/6.jpg') }}" alt="photo">
                <!-- button -->
                <a data-fancybox="gallery" data-no-swup href="img/gallery/6.jpg') }}" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                  <span class="sb-icon">
                    <img src="{{ asset('assets/company-profile/resto-1/img/ui/icons/zoom.svg') }}" alt="icon">
                  </span>
                </a>
                <!-- button end -->
              </div>
            </div>
            <div class="sb-grid-item sb-item-33">
              <div class="sb-gallery-item sb-mb-30">
                <img src="{{ asset('assets/company-profile/resto-1/img/gallery/7.jpg') }}" alt="photo">
                <!-- button -->
                <a data-fancybox="gallery" data-no-swup href="img/gallery/7.jpg') }}" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                  <span class="sb-icon">
                    <img src="{{ asset('assets/company-profile/resto-1/img/ui/icons/zoom.svg') }}" alt="icon">
                  </span>
                </a>
                <!-- button end -->
              </div>
            </div>
            <div class="sb-grid-item sb-item-33">
              <div class="sb-gallery-item sb-gallery-vert sb-mb-30">
                <img src="{{ asset('assets/company-profile/resto-1/img/gallery/8.jpg') }}" alt="photo">
                <!-- button -->
                <a data-fancybox="gallery" data-no-swup href="img/gallery/8.jpg') }}" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                  <span class="sb-icon">
                    <img src="{{ asset('assets/company-profile/resto-1/img/ui/icons/zoom.svg') }}" alt="icon">
                  </span>
                </a>
                <!-- button end -->
              </div>
            </div>
            <div class="sb-grid-item sb-item-33">
              <div class="sb-gallery-item sb-mb-30">
                <img src="{{ asset('assets/company-profile/resto-1/img/gallery/9.jpg') }}" alt="photo">
                <!-- button -->
                <a data-fancybox="gallery" data-no-swup href="img/gallery/9.jpg') }}" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                  <span class="sb-icon">
                    <img src="{{ asset('assets/company-profile/resto-1/img/ui/icons/zoom.svg') }}" alt="icon">
                  </span>
                </a>
                <!-- button end -->
              </div>
            </div>
            <div class="sb-grid-item sb-item-33">
              <div class="sb-gallery-item sb-gallery-vert sb-mb-30">
                <img src="{{ asset('assets/company-profile/resto-1/img/gallery/10.jpg') }}" alt="photo">
                <!-- button -->
                <a data-fancybox="gallery" data-no-swup href="img/gallery/10.jpg') }}" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                  <span class="sb-icon">
                    <img src="{{ asset('assets/company-profile/resto-1/img/ui/icons/zoom.svg') }}" alt="icon">
                  </span>
                </a>
                <!-- button end -->
              </div>
            </div>
            <div class="sb-grid-item sb-item-33">
              <div class="sb-gallery-item sb-gallery-vert sb-mb-30">
                <img src="{{ asset('assets/company-profile/resto-1/img/gallery/11.jpg') }}" alt="photo">
                <!-- button -->
                <a data-fancybox="gallery" data-no-swup href="img/gallery/11.jpg') }}" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                  <span class="sb-icon">
                    <img src="{{ asset('assets/company-profile/resto-1/img/ui/icons/zoom.svg') }}" alt="icon">
                  </span>
                </a>
                <!-- button end -->
              </div>
            </div>
            <div class="sb-grid-item sb-item-33">
              <div class="sb-gallery-item sb-mb-30">
                <img src="{{ asset('assets/company-profile/resto-1/img/gallery/12.jpg') }}" alt="photo">
                <!-- button -->
                <a data-fancybox="gallery" data-no-swup href="img/gallery/12.jpg') }}" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                  <span class="sb-icon">
                    <img src="{{ asset('assets/company-profile/resto-1/img/ui/icons/zoom.svg') }}" alt="icon">
                  </span>
                </a>
                <!-- button end -->
              </div>
            </div>
          </div>
          <div>
            <ul class="sb-pagination">
              <li class="sb-active"><a href="#.">1</a></li>
              <li><a href="{{ route ('resto-1.gallery') }}">2</a></li>
              <li><a href="{{ route ('resto-1.gallery') }}">3</a></li>
              <li><a href="{{ route ('resto-1.gallery') }}">4</a></li>
              <li><a href="{{ route ('resto-1.gallery') }}">...</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- gallery end -->

      <!-- call to action -->
      <section class="sb-call-to-action">
        <div class="sb-bg-3"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="sb-cta-text">
                <h2 class="sb-h1 sb-mb-30">Download our mobile app.</h2>
                <p class="sb-text sb-mb-30">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
                <a href="#." target="_blank" data-no-swup class="sb-download-btn"><img src="{{ asset('assets/company-profile/resto-1/img/buttons/1.svg') }}" alt="img"></a>
                <a href="#." target="_blank" data-no-swup class="sb-download-btn"><img src="{{ asset('assets/company-profile/resto-1/img/buttons/2.svg') }}" alt="img"></a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="sb-illustration-3">
                <img src="{{ asset('assets/company-profile/resto-1/img/illustrations/phones.png')}}" alt="phones" class="sb-phones">
                <div class="sb-cirkle-1"></div>
                <div class="sb-cirkle-2"></div>
                <div class="sb-cirkle-3"></div>
                <div class="sb-cirkle-4"></div>
                <img src="{{ asset('assets/company-profile/resto-1/img/illustrations/1.svg') }}" alt="phones" class="sb-pik-1">
                <img src="{{ asset('assets/company-profile/resto-1/img/illustrations/2.svg') }}" alt="phones" class="sb-pik-2">
                <img src="{{ asset('assets/company-profile/resto-1/img/illustrations/3.svg') }}" alt="phones" class="sb-pik-3">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- call to action end -->

      @include('company-profile.resto-1.components.footer')

    </div>
    <!-- dynamic content end -->

  </div>
  <!-- app wrapper end -->

    @include('company-profile.resto-1.components.js-script')

</body>

</html>
