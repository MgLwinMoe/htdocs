<?php

namespace App\Http\Controllers\Admin;

class HomeController
{
    public function index()
    {
        // dd("AdminHome");
        return view('home');
    }
}