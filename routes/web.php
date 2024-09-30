<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "hai";
});


Route::prefix('landing-pages')->group(function () {
    Route::get('/prolearn', function () {
        return view('landing-pages.prolearn.index');
    });
    Route::get('/cafe-1', function () {
        return view('landing-pages.cafe-1.index');
    });
});


Route::prefix('company-profile')->group(function () {
    Route::prefix('hotel-1')->group(function () {
        Route::get('/', function () {
            return view('company-profile.luxury-hotel.index');
        })->name('index');
        Route::get('/rooms', function () {
            return view('company-profile.luxury-hotel.rooms');
        })->name('rooms');
        Route::get('/blog', function () {
            return view('company-profile.luxury-hotel.blog');
        })->name('blog');
        Route::get('/blog-single', function () {
            return view('company-profile.luxury-hotel.blog-single');
        })->name('blog-single');
        Route::get('/about', function () {
            return view('company-profile.luxury-hotel.about');
        })->name('about');
        Route::get('/contact', function () {
            return view('company-profile.luxury-hotel.contact');
        })->name('contact');
        Route::get('/booknow', function () {
            return view('company-profile.luxury-hotel.booknow');
        })->name('booknow');
    });
    Route::prefix('properti-1')->group(function () {
        Route::get('/', function () {
            return view('company-profile.properti-1.index');
        })->name('properti-1.index');
        Route::get('/properties', function () {
            return view('company-profile.properti-1.properties');
        })->name('properti-1.properties');
        Route::get('/contact', function () {
            return view('company-profile.properti-1.contact');
        })->name('properti-1.contact');
        Route::get('/services', function () {
            return view('company-profile.properti-1.services');
        })->name('properti-1.services');
        Route::get('/about', function () {
            return view('company-profile.properti-1.about');
        })->name('properti-1.about');
        Route::get('/property-single', function () {
            return view('company-profile.properti-1.property-single');
        })->name('properti-1.property-single');

    });

});

Route::prefix('toko-online')->group(function () {
    Route::prefix( 'agrihub')->group(function () {
        Route::get('/', function () {
            return view('toko-online.agrihub.index');
        })->name('agrihub.index');
        Route::get('/page-account', function () {
            return view('toko-online.agrihub.page-account');
        })->name('agrihub.page-account');
        Route::get('/page-login', function () {
            return view('toko-online.agrihub.page-login');
        })->name('agrihub.page-login');
        Route::get('/page-register', function () {
            return view('toko-online.agrihub.page-register');
        })->name('agrihub.page-register');
        Route::get('/page-forgot-password', function () {
            return view('toko-online.agrihub.page-forgot-password');
        })->name('agrihub.page-forgot-password');
        Route::get('/page-reset-password', function () {
            return view('toko-online.agrihub.page-reset-password');
        })->name('agrihub.page-reset-password');
        Route::get('/page-purchase-guide', function () {
            return view('toko-online.agrihub.page-purchase-guide');
        })->name('agrihub.page-purchase-guide');
        Route::get('/page-privacy-policy', function () {
            return view('toko-online.agrihub.page-privacy-policy');
        })->name('agrihub.page-privacy-policy');
        Route::get('/page-terms', function () {
            return view('toko-online.agrihub.page-terms');
        })->name('agrihub.page-terms');
        Route::get('/page-404', function () {
            return view('toko-online.agrihub.page-404');
        })->name('agrihub.page-404');
        Route::get('/shop-grid-right', function () {
            return view('toko-online.agrihub.shop-grid-right');
        })->name('agrihub.shop-grid-right');
        Route::get('/shop-grid-left', function () {
            return view('toko-online.agrihub.shop-grid-left');
        })->name('agrihub.shop-grid-left');
        Route::get('/vendors-grid', function () {
            return view('toko-online.agrihub.vendors-grid');
        })->name('agrihub.vendors-grid');
        Route::get('/chat-bot', function () {
            return view('toko-online.agrihub.chat-bot');
        })->name('agrihub.chat-bot');
        Route::get('/page-contact', function () {
            return view('toko-online.agrihub.page-contact');
        })->name('agrihub.page-contact');
        Route::get('/subscribe', function () {
            return view('toko-online.agrihub.subscribe');
        })->name('agrihub.subscribe');
        Route::get('/shop-product-right', function () {
            return view('toko-online.agrihub.shop-product-right');
        })->name('agrihub.shop-product-right');
        Route::get('/shop-checkout', function () {
            return view('toko-online.agrihub.shop-checkout');
        })->name('agrihub.shop-checkout');

        // Batas header

        Route::get('/vendor-details-1', function () {
            return view('toko-online.agrihub.vendor-details-1');
        })->name('agrihub.vendor-details-1');
        Route::get('/shop-product-full', function () {
            return view('toko-online.agrihub.shop-product-full');
        })->name('agrihub.shop-product-full');
        // Route::get('/shop-cart', function () {
        //     return view('toko-online.agrihub.shop-cart');
        // })->name('agrihub.shop-cart');
        // Route::get('/', function () {
        //     return view('toko-online.agrihub.');
        // })->name('agrihub.');
        // Route::get('/', function () {
        //     return view('toko-online.agrihub.');
        // })->name('agrihub.');
        // Route::get('/', function () {
        //     return view('toko-online.agrihub.');
        // })->name('agrihub.');

        // Route::get('/', function () {
        //     return view('toko-online.agrihub.');
        // })->name('agrihub.');

    });

});
