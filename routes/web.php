<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return "<h2>Hello, We're at get / route </h2>";
});

Route::get('/greeting', function () {
    return "<h2>Good Morning</h2>";
});
