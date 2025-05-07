<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    // return "<h2>Hello, We're at get / route </h2>";
    // $html = <<<HTML
    //     <!DOCTYPE html>
        // <html lang="en">
        // <head>
        //     <meta charset="UTF-8">
        //     <meta name="viewport" content="width=device-width, initial-scale=1">
        //     <title>My First HTML Page</title>
        // </head>
        // <body>
        //     <h1>Hello, World!</h1>
        //     <p>This is a basic HTML file returned from a Laravel route.</p>
        // </body>
        // </html>
    //     HTML;
    // return $html;
    return view('hello');
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
