<!DOCTYPE html>
<html class="no-js" lang="en">

  @include('company-profile.travel-1.components.head')

  <body>

    <!-- Start Header Section -->
    @include('company-profile.travel-1.components.header')
    @include('company-profile.travel-1.components.header_search')
    <!-- End Header Section -->

    <!-- Start Hero Section -->
    <?php
      $subTitle='Modern & Beautiful Travel Theme';
      $img='/assets/company-profile/travel-1/assets/images/tour_header_bg.jpeg';
      $title ='Popular Tours Packagess';
    ?>
    @include('company-profile.travel-1.components.hero')
    <!-- End Hero Section -->

    <!-- Start Package Section -->
    <section>
      <div class="cs_height_140 cs_height_lg_80"></div>
      <div class="container">
        <div class="row cs_gap_y_24">
          <div class="col-lg-4">
            <div class="cs_card cs_style_3 cs_white_bg">
              <a href="{{ route('travel-1.tour-details') }}" class="cs_card_thumb position-relative cs_zoom">
                <img {{ asset('assets/company-profile/travel-1/images/package_img_5.jpeg') }} alt="Package Thumb" class="cs_zoom_in">
                <div class="cs_package_badge cs_fs_18 cs_semibold cs_primary_color cs_primary_font position-absolute">3 Day 2 Night</div>
              </a>
              <div class="cs_card_content">
                <h2 class="cs_card_title cs_fs_24 cs_semibold"><a href="{{ route('travel-1.tour-details') }}">Beauty of Solomon Island</a></h2>
                <p class="cs_card_subtitle mb-0"><i class="fa-solid fa-globe cs_accent_color"></i> Africa Portugal Mexico</p>
                <hr>
                <div class="cs_card_action">
                  <span class="cs_card_price cs_fs_24 cs_semibold cs_primary_color cs_primary_font mb-0">$4500</span>
                  <a href="{{ route('travel-1.tour-details') }}" class="cs_btn cs_style_1 cs_fs_18 cs_semibold"> Book Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_card cs_style_3 cs_white_bg">
              <a href="{{ route('travel-1.tour-details') }}" class="cs_card_thumb position-relative cs_zoom">
                <img {{ asset('assets/company-profile/travel-1/images/package_img_6.jpeg') }} alt="Package Thumb" class="cs_zoom_in">
                <div class="cs_package_badge cs_fs_18 cs_semibold cs_primary_color cs_primary_font position-absolute">3 Day 2 Night</div>
              </a>
              <div class="cs_card_content">
                <h2 class="cs_card_title cs_fs_24 cs_semibold"><a href="{{ route('travel-1.tour-details') }}">Believe In Your Mexico</a></h2>
                <p class="cs_card_subtitle mb-0"><i class="fa-solid fa-globe cs_accent_color"></i> Paris, France </p>
                <hr>
                <div class="cs_card_action">
                  <span class="cs_card_price cs_fs_24 cs_semibold cs_primary_color cs_primary_font mb-0">$4500</span>
                  <a href="{{ route('travel-1.tour-details') }}" class="cs_btn cs_style_1 cs_fs_18 cs_semibold"> Book Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_card cs_style_3 cs_white_bg">
              <a href="{{ route('travel-1.tour-details') }}" class="cs_card_thumb position-relative cs_zoom">
                <img {{ asset('assets/company-profile/travel-1/images/package_img_7.jpeg') }} alt="Package Thumb" class="cs_zoom_in">
                <div class="cs_package_badge cs_fs_18 cs_semibold cs_primary_color cs_primary_font position-absolute">3 Day 2 Night</div>
              </a>
              <div class="cs_card_content">
                <h2 class="cs_card_title cs_fs_24 cs_semibold"><a href="{{ route('travel-1.tour-details') }}">Proof That Bahamas Beauty</a></h2>
                <p class="cs_card_subtitle mb-0"><i class="fa-solid fa-globe cs_accent_color"></i> Rome, Italy</p>
                <hr>
                <div class="cs_card_action">
                  <span class="cs_card_price cs_fs_24 cs_semibold cs_primary_color cs_primary_font mb-0">$4500</span>
                  <a href="{{ route('travel-1.tour-details') }}" class="cs_btn cs_style_1 cs_fs_18 cs_semibold"> Book Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_card cs_style_3 cs_white_bg">
              <a href="{{ route('travel-1.tour-details') }}" class="cs_card_thumb position-relative cs_zoom">
                <img {{ asset('assets/company-profile/travel-1/images/package_img_8.jpeg') }} alt="Package Thumb" class="cs_zoom_in">
                <div class="cs_package_badge cs_fs_18 cs_semibold cs_primary_color cs_primary_font position-absolute">3 Day 2 Night</div>
              </a>
              <div class="cs_card_content">
                <h2 class="cs_card_title cs_fs_24 cs_semibold"><a href="{{ route('travel-1.tour-details') }}">Famous for its skyscrapers</a></h2>
                <p class="cs_card_subtitle mb-0"><i class="fa-solid fa-globe cs_accent_color"></i>New York City, USA</p>
                <hr>
                <div class="cs_card_action">
                  <span class="cs_card_price cs_fs_24 cs_semibold cs_primary_color cs_primary_font mb-0">$4500</span>
                  <a href="{{ route('travel-1.tour-details') }}" class="cs_btn cs_style_1 cs_fs_18 cs_semibold"> Book Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_card cs_style_3 cs_white_bg">
              <a href="{{ route('travel-1.tour-details') }}" class="cs_card_thumb position-relative cs_zoom">
                <img {{ asset('assets/company-profile/travel-1/images/package_img_9.jpeg') }} alt="Package Thumb" class="cs_zoom_in">
                <div class="cs_package_badge cs_fs_18 cs_semibold cs_primary_color cs_primary_font position-absolute">3 Day 2 Night</div>
              </a>
              <div class="cs_card_content">
                <h2 class="cs_card_title cs_fs_24 cs_semibold"><a href="{{ route('travel-1.tour-details') }}">An ancient Incan city</a></h2>
                <p class="cs_card_subtitle mb-0"><i class="fa-solid fa-globe cs_accent_color"></i> Machu Picchu, Peru</p>
                <hr>
                <div class="cs_card_action">
                  <span class="cs_card_price cs_fs_24 cs_semibold cs_primary_color cs_primary_font mb-0">$4500</span>
                  <a href="{{ route('travel-1.tour-details') }}" class="cs_btn cs_style_1 cs_fs_18 cs_semibold"> Book Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_card cs_style_3 cs_white_bg">
              <a href="{{ route('travel-1.tour-details') }}" class="cs_card_thumb position-relative cs_zoom">
                <img {{ asset('assets/company-profile/travel-1/images/package_img_4.jpeg') }} alt="Package Thumb" class="cs_zoom_in">
                <div class="cs_package_badge cs_fs_18 cs_semibold cs_primary_color cs_primary_font position-absolute">3 Day 2 Night</div>
              </a>
              <div class="cs_card_content">
                <h2 class="cs_card_title cs_fs_24 cs_semibold"><a href="{{ route('travel-1.tour-details') }}">Famous for its whitewashed</a></h2>
                <p class="cs_card_subtitle mb-0"><i class="fa-solid fa-globe cs_accent_color"></i> Santorini, Greece</p>
                <hr>
                <div class="cs_card_action">
                  <span class="cs_card_price cs_fs_24 cs_semibold cs_primary_color cs_primary_font mb-0">$4500</span>
                  <a href="{{ route('travel-1.tour-details') }}" class="cs_btn cs_style_1 cs_fs_18 cs_semibold"> Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cs_height_140 cs_height_lg_80"></div>
    </section>
    <!-- End Package Section -->

    <!-- Start footer -->
    @include('company-profile.travel-1.components.footer')
    <!-- End footer -->

    <!-- Script -->
    @include('company-profile.travel-1.components.script')
  </body>
</html>
