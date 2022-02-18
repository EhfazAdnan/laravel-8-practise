<?php

use Illuminate\Support\Facades\Route;

Route::get('/my', function () {
    return "my-custom-route-worked";
});

Route::get('/provider', function () {
    return view('provider-check');
});
