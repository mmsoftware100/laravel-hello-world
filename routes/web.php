<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return "<h2>Hello, We're at get / route </h2>";
});

Route::get('/greeting', function () {
    return "<h2>Good Morning</h2>";
});

Route::get('/bye', function () {
    return "<h2>See you</h2>";
});

Route::get('/fun-fact', function () {
    return "<h2>Coding has over 700 languages.</h2>";
});
