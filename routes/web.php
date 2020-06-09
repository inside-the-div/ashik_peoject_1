<?php

use Illuminate\Support\Facades\Route;





// layout extends
// laravel 
// laravel blade in bangla 


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});



