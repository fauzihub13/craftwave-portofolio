<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('https://craftwave.id');
});

Route::get('/prolearn', function () {
    return view('landing-pages.prolearn.index');
});
