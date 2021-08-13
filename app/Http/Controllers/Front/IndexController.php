<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class IndexController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function indexEn()
    {
        return view('front.index_en');
    }
}
