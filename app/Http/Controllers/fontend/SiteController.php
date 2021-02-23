<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('website.home');
    }
    public function news()
    {
        return view('website.news');
    }
    public function newsDetails()
    {
        return view('website.news_details');
    }
    public function business()
    {
        return view('website.business');
    }
    public function about()
    {
        return view('website.about');
    }
    public function contact()
    {
        return view('website.contact');
    }
}
