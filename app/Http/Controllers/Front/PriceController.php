<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Models\Price;
use App\Models\Choice;
Use Illuminate\Support\Facades\Session;
use DB;
use Auth;

class PriceController extends Controller
{
    public function price()
    {
        $choices = Choice::all();
        return view('front.price.price', compact('choices'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if(is_null($request->choice))
        {
            return redirect()->route('cjenovnik');
        }
        $choice =new Choice();
        $choice->choice = implode(",", $request->choice);
        $choice->name=  $request->name;
        $choice->last_name=  $request->last_name;
        $choice->email=  $request->email;
        $choice->site=  $request->site;
        $choice->question=  $request->question;

        $choice->save();
        session::flash('message', 'Poštovani, uspješno ste poslali upit. Javićemo Vam se uskoro');

        Return redirect()->back();
    }




    public function show(Choice $choice )
    {
        //
    }




    public function priceList()
    {

        return view('front.price.price-list');
    }
}
