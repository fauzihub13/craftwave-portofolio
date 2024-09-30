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
      $title ='Popular Destination';
      $subTitle='Modern & Beautiful Travel Theme';
      $img='/assets/company-profile/travel-1/assets/images/destination_header_bg.jpeg';
    ?>
    @include('company-profile.travel-1.components.hero')
    <!-- End Hero Section -->

    <!-- Start destination Section -->
    <section>
      <div class="cs_height_140 cs_height_lg_80"></div>
      <div class="container">
        <div class="cs_grid_1">
          <div class="cs_grid_item">
            <a href="destination-details.html" class="cs_card cs_style_2 cs_zoom position-relative cs_radius_8">
              <div class="cs_card_thumb w-100 h-100">
                <img src="{{ asset('assets/company-profile/travel-1/assets/images/popular_destination_1.jpeg') }}" alt="Card Image" class="w-100 h-100 cs_zoom_in">
              </div>
              <div class="cs_card_content position-absolute">
                <h2 class="cs_card_title cs_fs_35 cs_medium cs_white_color">Eiffel Tower</h2>
                <p class="cs_card_subtitle cs_fs_18 cs_medium cs_white_color mb-0">Paris, 24 Trips</p>
              </div>
            </a>
          </div>
          <div class="cs_grid_item">
            <a href="destination-details.html" class="cs_card cs_style_2 cs_zoom position-relative cs_radius_8">
              <div class="cs_card_thumb w-100 h-100">
                <img src="{{ asset('assets/company-profile/travel-1/assets/images/popular_destination_2.jpeg') }}" alt="Card Image" class="w-100 h-100 cs_zoom_in">
              </div>
              <div class="cs_card_content position-absolute">
                <h2 class="cs_card_title cs_fs_35 cs_medium cs_white_color">
                  Pryde Mountains</h2>
                <p class="cs_card_subtitle cs_fs_18 cs_medium cs_white_color mb-0">
                 Prydelands, 100 Trips</p>
              </div>
            </a>
          </div>
          <div class="cs_grid_item">
            <a href="destination-details.html" class="cs_card cs_style_2 cs_zoom position-relative cs_radius_8">
              <div class="cs_card_thumb w-100 h-100">
                <img src="{{ asset('assets/company-profile/travel-1/assets/images/popular_destination_3.jpeg') }}" alt="Card Image" class="w-100 h-100 cs_zoom_in">
              </div>
              <div class="cs_card_content position-absolute">
                <h2 class="cs_card_title cs_fs_35 cs_medium cs_white_color">Lao Lading Island</h2>
                <p class="cs_card_subtitle cs_fs_18 cs_medium cs_white_color mb-0">Krabal, 12 Trips</p>
              </div>
            </a>
          </div>
          <div class="cs_grid_item">
            <a href="destination-details.html" class="cs_card cs_style_2 cs_zoom position-relative cs_radius_8">
              <div class="cs_card_thumb w-100 h-100">
                <img src="{{ asset('assets/company-profile/travel-1/assets/images/popular_destination_4.jpeg') }}" alt="Card Image" class="w-100 h-100 cs_zoom_in">
              </div>
              <div class="cs_card_content position-absolute">
                <h2 class="cs_card_title cs_fs_35 cs_medium cs_white_color">Ton Kwen Temple</h2>
                <p class="cs_card_subtitle cs_fs_18 cs_medium cs_white_color mb-0">Thailand, 20 Trips</p>
              </div>
            </a>
          </div>
          <div class="cs_grid_item">
            <a href="destination-details.html" class="cs_card cs_style_2 cs_zoom position-relative cs_radius_8">
              <div class="cs_card_thumb w-100 h-100">
                <img src="{{ asset('assets/company-profile/travel-1/assets/images/popular_destination_5.jpeg') }}" alt="Card Image" class="w-100 h-100 cs_zoom_in">
              </div>
              <div class="cs_card_content position-absolute">
                <h2 class="cs_card_title cs_fs_35 cs_medium cs_white_color">Taj Mahal</h2>
                <p class="cs_card_subtitle cs_fs_18 cs_medium cs_white_color mb-0">Thailand, 50 Trips</p>
              </div>
            </a>
          </div>
          <div class="cs_grid_item">
            <a href="destination-details.html" class="cs_card cs_style_2 cs_zoom position-relative cs_radius_8">
              <div class="cs_card_thumb w-100 h-100">
                <img src="{{ asset('assets/company-profile/travel-1/assets/images/popular_destination_9.jpeg') }}" alt="Card Image" class="w-100 h-100 cs_zoom_in">
              </div>
              <div class="cs_card_content position-absolute">
                <h2 class="cs_card_title cs_fs_35 cs_medium cs_white_color">
                  Pryde Mountains</h2>
                <p class="cs_card_subtitle cs_fs_18 cs_medium cs_white_color mb-0">
                 Prydelands, 120 Trips</p>
              </div>
            </a>
          </div>
          <div class="cs_grid_item">
            <a href="destination-details.html" class="cs_card cs_style_2 cs_zoom position-relative cs_radius_8">
              <div class="cs_card_thumb w-100 h-100">
                <img src="{{ asset('assets/company-profile/travel-1/assets/images/popular_destination_1.jpeg') }}" alt="Card Image" class="w-100 h-100 cs_zoom_in">
              </div>
              <div class="cs_card_content position-absolute">
                <h2 class="cs_card_title cs_fs_35 cs_medium cs_white_color">Eiffel Tower</h2>
                <p class="cs_card_subtitle cs_fs_18 cs_medium cs_white_color mb-0">Paris, 24 Trips</p>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="cs_height_140 cs_height_lg_80"></div>
    </section>
    <!-- End destination Section -->

    <!-- Start footer -->
    @include('company-profile.travel-1.components.footer')
    <!-- End footer -->

    <!-- Script -->
    @include('company-profile.travel-1.components.script')
  </body>
</html>
