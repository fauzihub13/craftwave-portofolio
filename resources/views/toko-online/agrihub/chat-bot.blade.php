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
    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('agrihub.index') }}" rel="nofollow">Home</a>
                    <span></span> Chat Bot AI
                </div>
            </div>
        </div>
        <div class="chat-container">
            <div class="chat-header">
                Chatbot
            </div>
            <div class="chat-box">
                <div class="chat-message user">Saya ingin mencari supplier buah apel dengan kebutuhan sekitar 600-700kg pada bulan november jika bisa, <br>berikan supplier yang sudah memiliki sertifikasi untuk ekspor</div>
                <div class="chat-message bot">✔ Menganalisa permintaan user
                   <br> ✔ Mengambil data supplier dari database
                   <br> ✔ (langkah lainnya) ..</div>
                <div class="chat-message bot">Menurut data yang ada, kami menemukan supplier Puncak Farm dapat memenuhi permintaan yang anda inginkan, <br>dikarenakan kuota panen yang besar dan masa panen yang mendekati target waktu pembelian anda.
                    <br>
                    <br>
                    <div class="akun-card" style="width: 500px; background-color: #fff; border: 1px solid #ccc; border-radius: 5px; box-shadow: 2px 2px 5px #888888; text-align: center; padding: 20px; display: flex; align-items: center;">
                        <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/vendor/vendor-1.png') }}" alt="Foto Profil" style="width: 100px; height: 100px; border-radius: 50%; margin-right: 20px;">
                        <br>
                        <div class="info" style="text-align: left;">
                            <h5 style="font-size: 20px; margin: 0; color: #333;">Pass Farm Bogor</h5>
                            <img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/rating/rating5.svg') }}" width="50%">
                            <ul class="contact-infor text-muted">
                                <li style="margin-bottom: 0.2px;"><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span>Bogor</span></li>
                                <li><img src="{{ asset ('assets/toko-online/agrihub/assets/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us:</strong><span> Subscribe to Unlock</span></li>
                            </ul>
                            <br>
                        <a href="{{ route('agrihub.vendor-details-1') }}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="chat-input">
                <input type="text" id="user-input" placeholder="Type your message...">
                <button id="send-button">Send</button>
            </div>
        </div>

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
