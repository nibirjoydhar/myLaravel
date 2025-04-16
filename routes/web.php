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

Route::get('/privacy', function () {
    return view('privacy_policy');
});

Route::get('/service/{id?}/{name}', function($id=0,$name){
    return view('service',['id' => $id,'name'=>$name]);
})->where([
    'id'=>'[0-9]+',
    'name'=>'[a-z]+'
]);