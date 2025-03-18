<?php

namespace App\Http\Controllers\Admin\Activities;

use App\Http\Controllers\Controller;
use App\Models\Admin\Activities\Awards;
use Illuminate\Http\Request;

class AwardsController extends Controller
{
    public function addAwards()
    {
        return view('admin.pages.activities.Awards.addAwards');
    }

    public function postAwards(Request $req)
    {
        $Awards = new Awards();
        $Awards->date = $req->date;
        $Awards->title = $req->title;
        $res = $Awards->save();
        if ($req->hasFile('awards')) {
            $file = $req->file('awards');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationpath = ('uploads/activities/awards/');
            $file->move($destinationpath,  $name);
            $Awards->awards =  $destinationpath . $name;
            $Awards->save();
        }
        if($res){
            return redirect()->route('addAwards')->with('alert', 'Data Saved Successfully');
        }
        else{
            return back()->with("alert", 'Access Denied');
        }
    }
    public function viewAwards(){
        $Awards = Awards::orderBy('created_at', 'desc')->get();
        $data = compact('Awards');
        return view('admin.pages.activities.awards.viewAwards')->with($data)->with('no', '1');
    }

    public function deleteAwards($id){

        $deleteAwards = Awards::find($id)->delete();
        if($deleteAwards){
            return redirect()->route('viewAwards')->with('alert', 'Data Deleted Successfully');
        }else{
            return back()->with('alert', 'Access Denied');
        }
    }
}
