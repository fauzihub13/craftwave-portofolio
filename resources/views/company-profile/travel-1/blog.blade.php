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
      $img='/assets/company-profile/travel-1/assets/images/destination_header_bg.jpeg';
      $title = 'Latest Blog';
    ?>
    @include('company-profile.travel-1.components.hero')
    <!-- End Hero Section -->

    <!-- Start Blog Section -->
    <div class="cs_height_140 cs_height_lg_80"></div>
    <div class="container">
      <div class="row cs_gap_y_50">
        <div class="col-lg-8">
          <article class="cs_post cs_style_5">
            <a href="{{ route('travel-1.blog-details') }}" class="cs_post_thumb cs_zoom">
              <img src="{{ asset('assets/company-profile/travel-1/assets/images/post_9.jpeg') }}" alt="Post Thumb" class="w-100 h-100 cs_zoom_in">
              <span class="cs_link_hover"><i class="fas fa-link"></i></span>
            </a>
            <ul class="cs_post_meta cs_mp0 cs_primary_color">
              <li class="cs_accent_color">OCTOBER 01, 2024</li>
              <li>By <a href="#" class="cs_accent_color">JOHN ALEX</a></li>
            </ul>
            <h2 class="cs_post_title cs_fs_35 cs_semibold"><a href="{{ route('travel-1.blog-details') }}">EazyPNR is the only Theme you will ever need</a></h2>
            <div class="cs_post_subtitle">Globally coordinate user friendly interfaces through 24/365 niche markets. Seamlessly supply accurate human capital with corporate e-markets. Efficiently architect enterprise-wide platforms after error-free process are  Completely envisioneer market-driven e-markets through </div>
            <a href="{{ route('travel-1.blog-details') }}" class="cs_post_btn cs_fs_18 cs_medium cs_primary_color">
              <span>Continue Reading</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </article>
          <article class="cs_post cs_style_5">
            <a href="{{ route('travel-1.blog-details') }}" class="cs_post_thumb cs_zoom">
              <img src="{{ asset('assets/company-profile/travel-1/assets/images/post_10.jpeg') }}" alt="Post Thumb" class="w-100 h-100 cs_zoom_in">
              <span class="cs_link_hover"><i class="fas fa-link"></i></span>
            </a>
            <ul class="cs_post_meta cs_mp0 cs_primary_color">
              <li class="cs_accent_color">OCTOBER 01, 2024</li>
              <li>By <a href="#" class="cs_accent_color">JOHN ALEX</a></li>
            </ul>
            <h2 class="cs_post_title cs_fs_35 cs_semibold"><a href="{{ route('travel-1.blog-details') }}">How To Get Strangers To Take Epic Travel</a></h2>
            <div class="cs_post_subtitle">Globally coordinate user friendly interfaces through 24/365 niche markets. Seamlessly supply accurate human capital with corporate e-markets. Efficiently architect enterprise-wide platforms after error-free process are Completely envisioneer market-driven e-markets through </div>
            <a href="{{ route('travel-1.blog-details') }}" class="cs_post_btn cs_fs_18 cs_medium cs_primary_color">
              <span>Continue Reading</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </article>
          <article class="cs_post cs_style_5">
            <a href="{{ route('travel-1.blog-details') }}" class="cs_post_thumb cs_zoom">
              <img src="{{ asset('assets/company-profile/travel-1/assets/images/post_11.jpeg') }}" alt="Post Thumb" class="w-100 h-100 cs_zoom_in">
              <span class="cs_link_hover"><i class="fas fa-link"></i></span>
            </a>
            <ul class="cs_post_meta cs_mp0 cs_primary_color">
              <li class="cs_accent_color">OCTOBER 01, 2024</li>
              <li>By <a href="#" class="cs_accent_color">JOHN ALEX</a></li>
            </ul>
            <h2 class="cs_post_title cs_fs_35 cs_semibold"><a href="{{ route('travel-1.blog-details') }}">The Top 10 Destinations You Should Visit In</a></h2>
            <div class="cs_post_subtitle">Globally coordinate user friendly interfaces through 24/365 niche markets. Seamlessly supply accurate human capital with corporate e-markets. Efficiently architect enterprise-wide platforms after error-free process are  Completely envisioneer market-driven e-markets through </div>
            <a href="{{ route('travel-1.blog-details') }}" class="cs_post_btn cs_fs_18 cs_medium cs_primary_color">
              <span>Continue Reading</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </article>
          <ul class="cs_pagination_box cs_mp0">
            <li>
              <a class="cs_pagination_item cs_center cs_fs_18 cs_medium active" href="#">1</a>
            </li>
            <li>
              <a class="cs_pagination_item cs_center cs_fs_18 cs_medium" href="#">2</a>
            </li>
            <li>
              <a class="cs_pagination_item cs_center cs_fs_18 cs_medium" href="#">3</a>
            </li>
            <li>
              <a href="#" class="cs_pagination_item cs_center cs_fs_18 cs_medium">
                <i class="fa-solid fa-chevron-right"></i></a>
            </li>
          </ul>
        </div>
        <aside class="col-lg-4">
          <div class="cs_sidebar cs_right_sidebar">
            <div class="cs_sidebar_item cs_gray_bg widget_search">
              <form class="cs_sidebar_search cs_white_bg" action="#">
                <input type="text" placeholder="Search...">
                <button class="cs_sidebar_search_btn cs_accent_bg cs_white_color">
                  <i class="fa-solid fa-magnifying-glass"></i></button>
              </form>
            </div>
            <div class="cs_sidebar_item cs_gray_bg widget_categories">
              <h3 class="cs_sidebar_widget_title cs_fs_24 cs_semibold">Category</h3>
              <hr>
              <ul class="cs_mp0">
                <li class="cs_cat_item cs_primary_color">
                  <a href="#">Travels</a>
                  <span>(20)</span>
                </li>
                <li class="cs_cat_item cs_primary_color">
                  <a href="#">Camping</a>
                  <div>(35)</div>
                </li>
                <li class="cs_cat_item cs_primary_color">
                  <a href="#">Life Style</a>
                  <div>(10)</div>
                </li>
                <li class="cs_cat_item cs_primary_color">
                  <a href="#">Sight Seeing</a>
                  <span>(25)</span>
                </li>
                <li class="cs_cat_item cs_primary_color">
                  <a href="#">Trekking</a>
                  <span>(40)</span>
                </li>
                <li class="cs_cat_item">
                  <a href="#">Traveling</a>
                  <span>(25)</span>
                </li>
              </ul>
            </div>
            <div class="cs_sidebar_item cs_gray_bg">
              <h3 class="cs_sidebar_widget_title cs_fs_24 cs_semibold">Popular Post</h3>
              <hr>
              <ul class="cs_recent_posts cs_mp0">
                <li>
                  <article class="cs_recent_post">
                    <a href="{{ route('travel-1.blog-details') }}" class="cs_recent_post_thumb cs_zoom">
                      <img src="{{ asset('assets/company-profile/travel-1/assets/images/latest_post_1.jpeg') }}" alt="Post Thumb" class="cs_zoom_in w-100 h-100 object-fit-cover">
                    </a>
                    <div class="cs_recent_post_info">
                      <h3 class="cs_recent_post_title cs_fs_16 cs_medium cs_secondary_font">
                        <a href="{{ route('travel-1.blog-details') }}">How to Modify Your Car engine Properly?</a>
                      </h3>
                      <div class="cs_recent_post_date cs_fs_14">October 01, 2024</div>
                    </div>
                  </article>
                </li>
                <li>
                  <article class="cs_recent_post">
                    <a href="{{ route('travel-1.blog-details') }}" class="cs_recent_post_thumb cs_zoom">
                      <img src="{{ asset('assets/company-profile/travel-1/assets/images/latest_post_2.jpeg') }}" alt="Post Thumb" class="cs_zoom_in w-100 h-100 object-fit-cover">
                    </a>
                    <div class="cs_recent_post_info">
                      <h3 class="cs_recent_post_title cs_fs_16 cs_medium cs_secondary_font">
                        <a href="{{ route('travel-1.blog-details') }}">Top 10 New Car Available in our Showroom</a>
                      </h3>
                      <div class="cs_recent_post_date cs_fs_14">October 01, 2024</div>
                    </div>
                  </article>
                </li>
                <li>
                  <article class="cs_recent_post">
                    <a href="{{ route('travel-1.blog-details') }}" class="cs_recent_post_thumb cs_zoom">
                      <img src="{{ asset('assets/company-profile/travel-1/assets/images/latest_post_3.jpeg') }}" alt="Post Thumb" class="cs_zoom_in w-100 h-100 object-fit-cover">
                    </a>
                    <div class="cs_recent_post_info">
                      <h3 class="cs_recent_post_title cs_fs_16 cs_medium cs_secondary_font">
                        <a href="{{ route('travel-1.blog-details') }}">How to Cool Your Car Engine Emidietly</a>
                      </h3>
                      <div class="cs_recent_post_date cs_fs_14">October 01, 2024</div>
                    </div>
                  </article>
                </li>
                <li>
                  <article class="cs_recent_post">
                    <a href="{{ route('travel-1.blog-details') }}" class="cs_recent_post_thumb cs_zoom">
                      <img src="{{ asset('assets/company-profile/travel-1/assets/images/latest_post_4.jpeg') }}" alt="Post Thumb" class="cs_zoom_in w-100 h-100 object-fit-cover">
                    </a>
                    <div class="cs_recent_post_info">
                      <h3 class="cs_recent_post_title cs_fs_16 cs_medium cs_secondary_font">
                        <a href="{{ route('travel-1.blog-details') }}">Classification of Car Wash Type By Service</a>
                      </h3>
                      <div class="cs_recent_post_date cs_fs_14">October 01, 2024</div>
                    </div>
                  </article>
                </li>
              </ul>
            </div>
            <div class="cs_sidebar_item cs_gray_bg widget_tag_cloud">
              <h3 class="cs_sidebar_widget_title cs_fs_24 cs_semibold">Tag Cloud</h3>
              <hr>
              <div class="cs_tag_cloud">
                <a href="#" class="cs_tag_link cs_radius_5 cs_white_bg cs_primary_color">Campaign</a>
                <a href="#" class="cs_tag_link cs_radius_5 cs_white_bg cs_primary_color">Making</a>
                <a href="#" class="cs_tag_link cs_radius_5 cs_white_bg cs_primary_color">Life Style</a>
                <a href="#" class="cs_tag_link cs_radius_5 cs_white_bg cs_primary_color">Traveling</a>
                <a href="#" class="cs_tag_link cs_radius_5 cs_white_bg cs_primary_color">Trekking</a>
                <a href="#" class="cs_tag_link cs_radius_5 cs_white_bg cs_primary_color">Travels</a>
              </div>
            </div>
            <div class="cs_sidebar_item cs_gray_bg">
              <h3 class="cs_sidebar_widget_title cs_fs_24 cs_semibold">Newsletter</h3>
              <hr>
            <form class="cs_subscribe_form">
              <div class="cs_input_field">
                <input type="text" placeholder="Enter E-Mail">
                <span><i class="fa-regular fa-envelope"></i></span>
              </div>
              <button type="submit" class="cs_btn cs_style_1 cs_fs_18 cs_medium cs_radius_4">Subscribe Now</button>
            </form>
            </div>
          </div>
        </aside>
      </div>
    </div>
    <div class="cs_height_140 cs_height_lg_80"></div>
    <!-- End Blog Section -->

    <!-- Start footer -->
    @include('company-profile.travel-1.components.footer')
    <!-- End footer -->

    <!-- Script -->
    @include('company-profile.travel-1.components.script')
  </body>
</html>
