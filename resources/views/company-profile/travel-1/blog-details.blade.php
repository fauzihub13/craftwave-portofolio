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
      $subTitle='Modern & Beautiful TravelPro Theme';
      $img='/assets/company-profile/travel-1/assets/images/destination_header_bg.jpeg';
      $title = 'Single Blog';
    ?>
    @include('company-profile.travel-1.components.hero')
    <!-- End Hero Section -->

   <!-- Start Blog Section -->
   <section>
    <div class="cs_height_140 cs_height_lg_80"></div>
    <div class="container">
      <div class="row cs_gap_y_50">
        <div class="col-lg-8">
          <article class="cs_post_details">
            <div class="position-relative">
              <img src="{{ asset('assets/company-profile/travel-1/assets/images/post_details_1.jpeg') }}" alt="Post Thumb">
              <span class="cs_post_label">Travel/Tour</span>
            </div>
            <ul class="cs_post_meta cs_mp0 cs_primary_color">
              <li><i class="fa-solid fa-calendar-days cs_accent_color"></i>Auguest 09,2024</li>
              <li><i class="fa-regular fa-user cs_accent_color"></i>Masum Billah</li>
            </ul>
            <h2>The complete guide for travelers in London</h2>
            <p>The foreign and commonwealth office draws up an extensive list of countries that should not be travelled quite regularly and it is from that our, and other global travel insurance providers', underwriters decide
            which countries travel insurance should be provided for. We look at the government travel advice and decide from that whether or not we can provide insurance to travellers.</p>
            <p>Although global travel insurance does, by its nature, cover the majority of the world, the current climate ensures that there are some places where the likelihood of incident means that UK travel insurance providers are unable to offer protection.</p>
            <p>Thankfully, the list is clear of the majority of popular holiday destinations, and you're unlikely to have your big holiday plans affected. The most likely group to have their travel plans altered by the foreign office's travel advice are business travellers.</p>
            <p>The foreign office's travel advice is not to travel to the following countries, even if it means losing business the risk from the warzones listed below is just too great to make the reward worth:</p>
            <blockquote>“Ei elit omnes impedit ius, vel et hinc agam fabulas. Ut audiamre iracundia vim. An sumo diam ea. Cu omnis.”</blockquote>
            <p>ere's our top 10 countries to avoid travelling to, and the reasons for the high risk factor! The risk is far from conclusive (the foreign office's travel advice lists many more countries), but to me, these are the ones that all travellers should avoid like the plague:</p>
            <div class="row">
              <div class="col-sm-5">
                <img src="{{ asset('assets/company-profile/travel-1/assets/images/post_details_2.jpeg') }}" alt="Destination Image">
              </div>
              <div class="col-sm-7">
                <img src="{{ asset('assets/company-profile/travel-1/assets/images/post_details_3.jpeg') }}" alt="Destination Image">
              </div>
            </div>
            <p>Ai elit omnes lmpedit ius, tel et hinc agam fabulas. Ut audiam invenire iracundia vim. An eam dico similique ut sint posse sit, eum sumo diam ea. Liber consectetuer in mei, sea in imperdiet assueverit contentions cibo blandit tacimates. Iusto iudicabit similique idefinitionem eos an.Sit delicata persequeris ex, in sea rebum deseruisse appella ntur. Lorem ipsum dolor si vix aperiri consequat an.</p>
          </article>
          <div class="cs_social_btns cs_primary_color">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
           </div>
           <div class="cs_post_author">
            <div class="cs_author_top d-flex">
              <div class="cs_author_thumb">
                <img src="{{ asset('assets/company-profile/travel-1/assets/images/avatar_4.jpeg') }}" alt="Avatar">
              </div>
              <div class="cs_author_info">
                <h3 class="cs_author_title cs_fs_20 cs_medium mb-0">Nancy Cruz</h3>
                <p class="cs_author_subtitle mb-0">Traveller,Blogger & Photographer</p>
              </div>
            </div>
            <div class="cs_author_bottom d-flex">
              <div class="cs_social_btns cs_primary_color">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
               </div>
               <p class="mb-0">The foreign and commonwealth office draws up an extensive list of countries that should not be travelled to quite regularly and it is from that our, and other global travel insurance providers', under writers decide which countries travel insurance should be provided for. We look at the government travel advice and decide from that whether</p>
            </div>
           </div>
           <hr>
           <div class="cs_comments">
            <h3 class="cs_fs_24 cs_semibold">Comment</h3>
            <ol class="cs_comment_list cs_mp0">
              <li class="cs_comment">
                <div class="cs_comment_body">
                  <div class="cs_comment_author cs_fs_20 cs_medium cs_primary_color">
                    <img src="{{ asset('assets/company-profile/travel-1/assets/images/avatar_5.jpeg') }}" alt="Avatar">
                    <a href="#">Martha Grey</a>
                  </div>
                  <p class="cs_comment_subtitle">Ut sint posse sit, eum sumo diam ea. Liber consectetuer in mei, sea in imperdiet assueverit contentiones, an his cib.</p>
                  <div class="cs_reply_btn"><a class="cs_reply_link cs_radius_5" href="#">Reply</a></div>
                </div>
              </li>
            </ol>
            <form action="#" class="cs_comment_form cs_white_bg cs_radius_5">
              <h3 class="cs_fs_24 cs_semibold">Post Comemnt</h3>
              <div class="row row cs_gap_y_30">
              <div class="col-lg-12">
                <textarea class="cs_gray_bg cs_radius_5 cs_form_field" placeholder="Write Comment" cols="35" rows="8"></textarea>
              </div>
              <div class="col-lg-6">
                <input class="cs_gray_bg cs_radius_5 cs_form_field" type="text" placeholder="Your Name*">
              </div>
              <div class="col-lg-6">
                <input class="cs_gray_bg cs_radius_5 cs_form_field" type="email" placeholder="Write Your Email*">
              </div>
              <div class="col-lg-12">
                <button class="cs_btn cs_style_1 w-100">Post Comment</button>
              </div>
            </div>
            </form>
          </div>
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
   </section>
   <!-- End Blog Section -->

    <!-- Start footer -->
    @include('company-profile.travel-1.components.footer')
    <!-- End footer -->

    <!-- Script -->
    @include('company-profile.travel-1.components.script')
  </body>
</html>
