<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;

class MessagesController extends Controller
{
    public function insertData(Request $request)
    {
        $data = $request->except('_token');
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['created_at'] = date('Y-m-d H:i:s');


        //Insert data, maaildata, post data
        DB::table($tbl)->insert($data);
        if ($tbl == 'messages') {
            session::flash('message', 'Poštovani, uspješno ste poslali upit. Javićemo Vam se uskoro');
        } else {
            session::flash('message', 'Data inserted successfully');

        }
        Return redirect()->back();
    }
}
