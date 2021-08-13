<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutUs()
    {
        return view('front.about.about_us');
    }

    public function aboutUsEn()
    {
        return view('front.about.about_us_en');
    }

}
