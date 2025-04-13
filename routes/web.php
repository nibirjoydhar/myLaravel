<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     echo "<h1>Hello</h1>";
//     // return view('welcome');
// });




Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', function () {
    return view('home');
});
