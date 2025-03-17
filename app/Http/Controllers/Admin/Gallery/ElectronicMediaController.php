<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery\ElectronicMedia;
use Illuminate\Http\Request;

class ElectronicMediaController extends Controller
{
    public function addElectronicMedia()
    {
        return view('admin.pages.gallery.electronicmedia.addElectronicMedia');
    }

    public function postElectronicMedia(Request $req) {
        $electronicmedia = new ElectronicMedia (); 
        $electronicmedia->title = $req->title;
        $electronicmedia->date = $req->date;
        $res = $electronicmedia->save();
        if ($req->hasFile('elec_med_img')) {
            $file = $req->file('elec_med_img');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationpath = ('uploads/gallery/electronicmedia/');
            $file->move($destinationpath, $name);
            $electronicmedia->elec_med_img = $destinationpath . $name;
            $electronicmedia->save();
        }
        if ($res) {
            return redirect()->route('addElectronicMedia')->with('alert', 'Data Saved Successfully');
        } else {
            return back()->with('alert', 'access denied');
        }      
    }
    public function viewElectronicMedia()
    {
        $elecmedia = ElectronicMedia::OrderBy('created_at', 'desc')->get();
        $data = compact('elecmedia');
        return view('admin.pages.gallery.electronicmedia.viewElectronicMedia')->with($data)->with('no', '1');
    }
    public function deleteElectronicMedia($id)
    {
        $deleteElectronicMedia = ElectronicMedia::find($id)->delete();
        if($deleteElectronicMedia){
            return redirect()->route('viewElectronicMedia')->with('alert','Data Deleted Successfully');
        }else{
            return back()->with('access Denied');
        }
    }
}
