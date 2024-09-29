<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('https://craftwave.id');
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
    Route::get('/hotel-1', function () {
        return view('company-profile.luxury-hotel.index');
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
});

Route::prefix('custom')->group(function () {
    Route::get('/prolearn', function () {
        return view('landing-pages.prolearn.index');
    });

});
