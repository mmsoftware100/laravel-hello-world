<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurController extends Controller
{
    public function helloWorld()
    {
        return view('hello');
    }
    public function greeting()
    {
       return "<h2>Good Morning</h2>";
    }
    public function bye()
    {
       return "<h2>See you</h2>";
    }
    public function funFact()
    {
       return "<h2>Coding has over 700 languages.</h2>";
    }
}
