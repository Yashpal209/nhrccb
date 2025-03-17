<?php

namespace App\Http\Controllers\Admin\Activities;

use App\Http\Controllers\Controller;
use App\Models\Admin\Activities\Seminar;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    public function addSeminar()
    {
        return view('admin.pages.activities.seminar.addSeminar');
    }

    public function postSeminar(Request $req)
    {
        $seminar = new Seminar();
        $seminar->date = $req->date;
        $res = $seminar->save();
        if ($req->hasFile('seminar_img')) {
            $file = $req->file('seminar_img');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationpath = ('uploads/activities/seminar/');
            $file->move($destinationpath,  $name);
            $seminar->seminar_img =  $destinationpath . $name;
            $seminar->save();
        }
        if($res){
            return redirect()->route('addSeminar')->with('alert', 'Data Saved Successfully');
        }
        else{
            return back()->with("alert", 'Access Denied');
        }
    }
    public function viewSeminar(){
        $seminar = Seminar::orderBy('created_at', 'desc')->get();
        $data = compact('seminar');
        return view('admin.pages.activities.seminar.viewSeminar')->with($data)->with('no', '1');
    }

    public function deleteSeminar($id){

        $deleteSeminar = Seminar::find($id)->delete();
        if($deleteSeminar){
            return redirect()->route('viewSeminar')->with('alert', 'Data Deleted Successfully');
        }else{
            return back()->with('alert', 'Access Denied');
        }
    }
}
