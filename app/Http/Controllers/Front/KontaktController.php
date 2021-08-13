<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KontaktController extends Controller
{
    public function kontakt()
    {
        return view('front.kontakt.kontakt');
    }


    public function kontaktEn()
    {
        return view('front.kontakt.kontakt_en');
    }
}