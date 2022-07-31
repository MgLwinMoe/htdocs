<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home(Request $request)
    {
        return view('website.home');
    }
    public function serviceDetail()
    {
        return view('website.servicedetail');
    }
}
