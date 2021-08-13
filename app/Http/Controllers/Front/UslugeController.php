<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UslugeController extends Controller
    {
    public function cms()
        {
        return view('front.usluge.cms');
        }

    public function special()
        {
        return view('front.usluge.special');
        }

    public function webProdavnica()
        {
        return view('front.usluge.web_prodavnica_info');
        }

    public function blogInfo()
        {
        return view('front.usluge.blog_info');
        }

    public function oglasavanje()
        {
        return view('front.usluge.oglasavanje');
        }

        public function seo()
        {
        return view('front.usluge.seo');
        }

    public function aktuelno()
        {
        return view('front.usluge.aktuelno');
        }
    public function aktuelnoEn()
    {
        return view('front.usluge.aktuelno_en');
    }
}





