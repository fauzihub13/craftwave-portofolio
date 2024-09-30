<header class="cs_site_header cs_style_1 cs_color_1 cs_fs_18 cs_sticky_header">
      <div class="cs_top_header cs_accent_bg">
        <div class="cs_top_header_in">
          <div class="cs_top_header_left">
            <ul class="cs_top_header_list cs_mp0">
              <li><b>Address: </b>3517 W. Gray St. Utica, Pennsylvania 57867</li>
              <li>info@company.com</li>
            </ul>
          </div>
          <div class="cs_top_header_right">
            <ul class="cs_top_header_list cs_mp0">
              <li><a href="#">Help</a></li>
              <li><a href="#">Support</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="cs_main_header">
        <div class="cs_main_header_in">
          <div class="cs_main_header_left">
            <a class="cs_site_branding" href="{{ route('travel-1.index') }}">
              <img src="{{ asset('assets/company-profile/travel-1/assets/images/logo_2.svg') }}" alt="Logo">
            </a>
          </div>
          <div class="cs_main_header_center">
            <div class="cs_nav cs_medium cs_primary_font">
              <ul class="cs_nav_list">
                <li class="">
                  <a href="{{ route('travel-1.index') }}">Home</a>
                </li>
                <li><a href="{{ route('travel-1.about') }}">About Us</a></li>
                <li class="menu-item-has-children">
                  <a href="{{ route('travel-1.destination') }}">Destinations</a>
                  <ul>
                    <li><a href="{{ route('travel-1.destination') }}">Destination</a></li>
                    <li><a href="{{ route('travel-1.destination-details') }}">Destination Details</a></li>
                  </ul>
                </li>
                <li class="menu-item-has-children">
                  <a href="{{ route('travel-1.tour') }}">Tours</a>
                  <ul>
                    <li><a href="{{ route('travel-1.tour') }}">Tour</a></li>
                    <li><a href="{{ route('travel-1.tour-details') }}">Tour Details</a></li>
                  </ul>
                </li>
                <li class="menu-item-has-children">
                  <a href="{{ route('travel-1.blog') }}">Blog</a>
                  <ul>
                    <li><a href="{{ route('travel-1.blog') }}">Blog</a></li>
                    <li><a href="{{ route('travel-1.blog-details') }}">Blog Details</a></li>
                  </ul>
                </li>
                <li><a href="{{ route('travel-1.contact') }}">Contacts</a></li>
              </ul>
            </div>
          </div>
          <div class="cs_main_header_right">
            <div class="cs_header_toolbox">
              <div>
                <button class="cs_search_btn cs_fs_24" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
              </div>
              <div class="cs_fs_20 cs_medium">+8 (123) 985 789</div>
            </div>
          </div>
        </div>
      </div>
    </header>
