<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class MessagesEnController extends Controller
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
            session::flash('message', 'Thank you for contacting us.
            We have received your enquiry and will respond to you within 24 hours.  
            For urgent enquiries please contact us on email: it.sasa.novakovic@gmail.com.');
        } else {
            session::flash('message', 'Data inserted successfully');

        }
        Return redirect()->back();
    }
}
