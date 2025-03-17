<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery\OfficerInteraction;
use Illuminate\Http\Request;

class OfficerInteractionController extends Controller
{
    public function addOfficerInteraction(){
        return view('admin.pages.gallery.officerinteraction.addOfficerInteraction');
    }
    public function postOfficerInteraction(Request $req){
        $postOfficerInteraction = new OfficerInteraction();
        $postOfficerInteraction->title = $req->title;
        $postOfficerInteraction->date = $req->date;
        $res = $postOfficerInteraction->save();
        if ($req->hasFile('ofcr_int_img')) {
            $file = $req->file('ofcr_int_img');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationpath = ('uploads/gallery/officerinteraction/');
            $file->move($destinationpath, $name);
            $postOfficerInteraction->ofcr_int_img = $destinationpath . $name;
            $postOfficerInteraction->save();
        }
        if ($res) {
            return redirect()->route('addOfficerInteraction')->with('alert', 'Data Saved Successfully');
        } else {
            return back()->with('alert', 'access denied');
        }

    }

    public function viewOfficerInteraction(){
        $officerinteraction = OfficerInteraction::orderBy('created_at','desc')->get();
        $data = compact('officerinteraction');
        return view('admin.pages.gallery.officerinteraction.viewOfficerInteraction')->with($data)->with('no','1');
    }
    public function deleteOfficerInteraction($id){
        $deleteOfficerInteraction = OfficerInteraction::find($id)->delete();
        if($deleteOfficerInteraction){
            return redirect()->route('viewOfficerInteraction')->with('alert','Data Deleted Successfully');
        }else{
            return back()->with('access Denied');
        }
    }
}
