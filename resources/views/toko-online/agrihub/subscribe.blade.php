<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>AgriHub - Chat Bot</title>
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

<body>
    @include('toko-online.agrihub.components.header')
    <br>
    <footer class="main">
        <section class="newsletter mb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="position-relative newsletter-inner">
                            <div class="newsletter-content">
                                <h2 class="mb-20">
                                    Want access to vendor data?
                                    Subscribe now!
                                </h2>
                                <h4> Account Subscription Terms: <br><br> </h4>
                                   <p> 1. Registration and Subscription: <br>
                                        By registering and subscribing to our services, you agree to comply with all terms and conditions stated herein.<br>
                                    2. Vendor Data Access:<br>
                                        Your subscription account provides exclusive access to our vendor data.<br>

                                    3. Subscription Obligations:<br>
                                        You are responsible for paying the subscription fee according to the package you choose.<br>

                                    4. Subscription Renewal:<br>
                                        Subscription will automatically renew at the end of each subscription period, unless you cancel.<br>

                                    5. Subscription Cancellation:<br>
                                        You can cancel your subscription at any time by following the instructions provided in your account.<br>

                                    6. Specific Vendor Data:<br>
                                        Not all vendor data may be available in your subscription plan. We reserve the right to limit or change available vendors without prior notice.<br>

                                    7. Data Usage:<br>
                                        The data you access may only be used for lawful purposes. Use that violates the law or harms others is not permitted.<br>

                                    8. Account Security:<br>
                                        You are responsible for maintaining the security of your account. Do not provide login information to others.<br>

                                    9. Account Closure:<br>
                                        We reserve the right to terminate your account if you violate our subscription terms.<br>

                                    10. Changes to Conditions:<br>
                                        We may change these subscription terms. These changes will be announced online.<br>

                                    11. Questions and Support:<br>
                                        If you have questions or need support, contact our customer service.<br>

                                    By subscribing to an account, you will gain exclusive access to our vendor data in accordance with these terms. <br> Please read and understand the subscription terms carefully before continuing.</p>
                                    <br>
                                    <br>
                                <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Your emaill address" />
                                    <button class="btn" type="submit">Subscribe</button>
                                </form>
                            </div>
                            <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/banner/banner-13.png') }}" alt="newsletter" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
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
