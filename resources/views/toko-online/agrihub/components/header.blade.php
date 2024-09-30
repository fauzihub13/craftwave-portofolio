<!--Start header-->
<header class="header-area header-style-1 header-height-2">
    <div class="mobile-promotion">
        <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="{{ route ('agrihub.index' ) }}"><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/AgriHub.svg') }}" alt="logo" /></a>
                </div>
                <div class="header-right">
                    <div class="search-style-2">
                        <form action="#">
                            <select class="select-active">
                                <option>All Categories</option>
                                <option>Fruits</option>
                                <option>Vegetable</option>
                                <option>Tubers</option>
                                <option>Spices</option>
                            </select>
                            <input type="text" placeholder="Search for items..." />
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                            </div>
                            <div class="header-action-icon-2">
                                <a href="{{ route ('agrihub.page-account' ) }}">
                                    <img class="svgInject" alt="Nest" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-user.svg') }}" />
                                </a>
                                <a href="{{ route ('agrihub.page-account' ) }}"><span class="lable ml-0">Account</span></a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                    <ul>
                                        <li><a href="{{ route ('agrihub.page-account' ) }}"><i class="fi fi-rs-user mr-10"></i>My Account</a></li>
                                        <li><a href="{{ route ('agrihub.page-account' ) }}"><i class="fi fi-rs-settings-sliders mr-10"></i>Setting</a></li>
                                        <li><a href="{{ route ('agrihub.page-login' ) }}"><i class="fi fi-rs-sign-out mr-10"></i>Sign In</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="{{ route ('agrihub.index' ) }}"><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/AgriHub.svg') }}" alt="logo" /></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                        <a class="categories-button-active" href="#">
                            <span class="fi-rs-apps"></span> <span class="et">Browse</span> All Categories
                            <i class="fi-rs-angle-down"></i>
                        </a>
                        <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                            <div class="d-flex categori-dropdown-inner">
                                <ul>
                                    <li>
                                        <a href="{{ route ('agrihub.shop-grid-right' ) }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/category-1.svg') }}" alt="" />Fruits</a>
                                    </li>
                                    <li>
                                        <a href="{{ route ('agrihub.shop-grid-right' ) }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/category-7.svg') }}" alt="" />Vegetable</a>
                                    </li>
                                    <li>
                                        <a href="{{ route ('agrihub.shop-grid-right' ) }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/category-8.svg') }}" alt="" />Tubers</a>
                                    </li>
                                    <li>
                                        <a href="{{ route ('agrihub.shop-grid-right' ) }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/category-9.svg') }}" alt="" />Spices</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="more_slide_open" style="display: none">
                                <div class="d-flex categori-dropdown-inner">
                                    <ul>
                                        <li>
                                            <a href="{{ route ('agrihub.shop-grid-left' ) }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-1.svg') }}" alt="" />Milks and Dairies</a>
                                        </li>
                                        <li>
                                            <a href="{{ route ('agrihub.shop-grid-left' ) }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-2.svg') }}" alt="" />Clothing & beauty</a>
                                        </li>
                                    </ul>
                                    <ul class="end">
                                        <li>
                                            <a href="{{ route ('agrihub.shop-grid-left' ) }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-3.svg') }}" alt="" />Wines & Drinks</a>
                                        </li>
                                        <li>
                                            <a href="{{ route ('agrihub.shop-grid-left' ) }}"> <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-4.svg') }}" alt="" />Fresh Seafood</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1">Show more...</span></div>
                        </div>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                        <nav>
                            <ul>
                                <li class="hot-deals"><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-hot.svg') }}" alt="hot deals" /><a href="{{ route ('agrihub.shop-grid-left' ) }}">Deals</a></li>
                                <li>
                                    <a class="active" href="{{ route ('agrihub.index' ) }}">Home </i></a>
                                </li>
                                <li>
                                    <a href="{{ route ('agrihub.shop-grid-left' ) }}">Shop</i></a>
                                </li>
                                <li>
                                    <a href="{{ route ('agrihub.vendors-grid' ) }}">Vendors</a>
                                </li>
                                <li>
                                    <a  href="{{ route ('agrihub.chat-bot' ) }}">Chat Bot AI</a>
                                </li>
                                <li>
                                    <a href="{{ route ('agrihub.subscribe' ) }}">Subscribe</a>
                                </li>
                                <li>
                                    <a href="{{ route ('agrihub.page-contact' ) }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header-action-icon-2 d-block d-lg-none">
                    <div class="burger-icon burger-icon-white">
                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-mid"></span>
                        <span class="burger-icon-bottom"></span>
                    </div>
                </div>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                        </div>
                        <div class="header-action-icon-2">
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="{{ route ('agrihub.shop-product-right' ) }}"><img alt="AgriHub" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/thumbnail-3.jpg') }}" /></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="{{ route ('agrihub.shop-product-right' ) }}">Plain Striola Shirts</a></h4>
                                            <h3><span>1 × </span>$800.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="{{ route ('agrihub.shop-product-right' ) }}"><img alt="AgriHub" src="{{ asset ('assets/toko-online/agrihub/assets/imgs/shop/thumbnail-4.jpg') }}" /></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="{{ route ('agrihub.shop-product-right' ) }}">Macbook Pro 2022</a></h4>
                                            <h3><span>1 × </span>$3500.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>$383.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="{{ route ('agrihub.shop-checkout' ) }}">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="{{ route ('agrihub.index' ) }}"><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/AgriHub.svg') }}" alt="logo" /></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="#">
                    <input type="text" placeholder="Search for items…" />
                    <button type="submit"><i class="fi-rs-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <!-- mobile menu start -->
                <nav>
                    <ul>
                        <li class="hot-deals"><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-hot.svg') }}" alt="hot deals" /><a href="{{ route ('agrihub.shop-grid-left' ) }}">Deals</a></li>
                        <li>
                            <a class="active" href="{{ route ('agrihub.index' ) }}">Home </i></a>
                        </li>
                        <li>
                            <a href="{{ route ('agrihub.shop-grid-left' ) }}">Shop</i></a>
                        </li>
                        <li>
                            <a href="{{ route ('agrihub.vendors-grid' ) }}">Vendors</a>
                        </li>
                        <li>
                            <a href="{{ route ('agrihub.chat-bot' ) }}">Chat Bot AI</a>
                        </li>
                        <li>
                            <a href="{{ route ('agrihub.subscribe' ) }}">Subscribe</a>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="{{ route ('agrihub.page-contact' ) }}">Contact</a></li>
                                <li><a href="{{ route ('agrihub.page-account' ) }}">My Account</a></li>
                                <li><a href="{{ route ('agrihub.page-login' ) }}">Login</a></li>
                                <li><a href="{{ route ('agrihub.page-register' ) }}">Register</a></li>
                                <li><a href="{{ route ('agrihub.page-forgot-password' ) }}">Forgot password</a></li>
                                <li><a href="{{ route ('agrihub.page-reset-password') }}">Reset password</a></li>
                                <li><a href="{{ route ('agrihub.page-purchase-guide' ) }}">Purchase Guide</a></li>
                                <li><a href="{{ route ('agrihub.page-privacy-policy' ) }}">Privacy Policy</a></li>
                                <li><a href="{{ route ('agrihub.page-terms' ) }}">Terms of Service</a></li>
                                <li><a href="{{ route ('agrihub.page-404' ) }}">404 Page</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Language</a>
                            <ul class="dropdown">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap">
                <div class="single-mobile-header-info">
                    <a href="{{ route ('agrihub.page-contact' ) }}"><i class="fi-rs-marker"></i> Our location </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="{{ route ('agrihub.page-login' ) }}"><i class="fi-rs-user"></i>Log In / Sign Up </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="#"><i class="fi-rs-headphones"></i>(+01) - 2345 - 6789 </a>
                </div>
            </div>
            <div class="mobile-social-icon mb-50">
                <h6 class="mb-15">Follow Us</h6>
                <a href="#"><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-facebook-white.svg') }}" alt="" /></a>
                <a href="#"><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-twitter-white.svg') }}" alt="" /></a>
                <a href="#"><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-instagram-white.svg') }}" alt="" /></a>
                <a href="#"><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-pinterest-white.svg') }}" alt="" /></a>
                <a href="#"><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-youtube-white.svg') }}" alt="" /></a>
            </div>
            <div class="site-copyright">Copyright 2022 © AgriHub. All rights reserved. Powered by AliThemes.</div>
        </div>
    </div>
</div>
<!--End header-->
