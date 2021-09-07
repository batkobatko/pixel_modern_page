<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminController extends Controller
{
    public function messages(){
        $data = DB::table('messages')->orderby('mid', 'DESC')->paginate(20);
        return view ('backend.messages', ['data'=> $data]);
    }

    public function multipleDelete(Request $request){
        $data = $request->except('_token');
        //$data = Input::except('_token');
        // INPUT NE RADI U LARAVELU 6, 7, 8 - except se mora rjesavati drugacije???
        //print_r($data);
        if ($data['bulk-action'] == 0){
            session::flash('message', 'Please select the action you want to perform');
            return redirect()->back();
        }
        $tbl = decrypt($data['tbl']);
        $tblid = decrypt($data['tblid']);
        if (empty($data['select-data'])){
            session::flash('message', 'Please select the data you want to delete');
            return redirect()->back();
        }
        $ids = $data['select-data'];
        //print_r($ids);
        foreach($ids as $id){
            DB::table($tbl)->where($tblid, $id)->delete();
        }
        session::flash('message', 'Data deleted successfully');
        return redirect()->back();
    }
}
