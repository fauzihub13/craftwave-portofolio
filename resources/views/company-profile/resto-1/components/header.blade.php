    <!-- Start Header -->
    <div class="sb-top-bar-frame">
      <div class="sb-top-bar-bg"></div>
      <div class="container">
        <div class="sb-top-bar">
          <a href="{{ route ('resto-1.index') }}" class="sb-logo-frame">
            <!-- logo img -->
            <img src="{{ asset('assets/company-profile/resto-1/img/ui/logo.svg') }}" alt="Starbelly">
          </a>
          <!-- menu -->
          <div class="sb-right-side">
            <nav id="sb-dynamic-menu" class="sb-menu-transition">
              <ul class="sb-navigation">
                <li class="sb-active ">
                  <a href="{{ route ('resto-1.index') }}">Home</a>
                </li>
                <li class="sb-has-children">
                  <a href="{{ route ('resto-1.about') }}">Pages</a>
                  <ul>
                    <li><a href="{{ route ('resto-1.about') }}">About Us</a></li>
                    <li><a href="{{ route ('resto-1.gallery') }}">Gallery</a></li>
                    <li><a href="{{ route ('resto-1.reservation') }}">Reservation</a></li>
                  </ul>
                </li>
                <li class="">
                  <a href="{{ route ('resto-1.menu') }}">Menu</a>

                </li>
                <li class="">
                  <a href="{{ route ('resto-1.faq') }}">FAQ</a>
                </li>
                <li>
                  <a href="{{ route ('resto-1.contact') }}">Contact</a>
                </li>
              </ul>
            </nav>
            <div class="sb-buttons-frame">

              <!-- menu btn -->
              <div class="sb-menu-btn"><span></span></div>
              <!-- info btn -->
              <div class="sb-info-btn"><span></span></div>
            </div>
          </div>
        </div>
      </div>
      <!-- info bar -->
      <div class="sb-info-bar">
        <div class="sb-infobar-content">
          <div class="sb-ib-title-frame sb-mb-30">
            <h4>Contact</h4><i class="fas fa-arrow-down"></i>
          </div>
          <ul class="sb-list sb-mb-30">
            <li><b>Address:</b><span>Montréal, 1510 Rue Sauvé</span></li>
            <li><b>Working hours:</b><span>09:00 - 23:00</span></li>
            <li><b>Phone:</b><span>+02 (044) 756-X6-52</span></li>
            <li><b>Email:</b><span>starbelly@mail.com</span></li>
          </ul>
          <div class="sb-ib-title-frame sb-mb-30">
            <h4>Instagram</h4><i class="fas fa-arrow-down"></i>
          </div>
          <ul class="sb-instagram sb-mb-30">
            <li><a href="#."><img src="{{ asset('assets/company-profile/resto-1/img/instagram/1.jpg') }}" alt="instagram"></a></li>
            <li><a href="#."><img src="{{ asset('assets/company-profile/resto-1/img/instagram/2.jpg') }}" alt="instagram"></a></li>
            <li><a href="#."><img src="{{ asset('assets/company-profile/resto-1/img/instagram/3.jpg') }}" alt="instagram"></a></li>
            <li><a href="#."><img src="{{ asset('assets/company-profile/resto-1/img/instagram/4.jpg') }}" alt="instagram"></a></li>
            <li><a href="#."><img src="{{ asset('assets/company-profile/resto-1/img/instagram/5.jpg') }}" alt="instagram"></a></li>
            <li><a href="#."><img src="{{ asset('assets/company-profile/resto-1/img/instagram/6.jpg') }}" alt="instagram"></a></li>
          </ul>
          <hr>

        </div>

      </div>
      <!-- info bar end -->

    </div>
    <!-- End Header -->
