<?php

namespace App\Http\Controllers\Admin\Activities;

use App\Http\Controllers\Controller;
use App\Models\Admin\Activities\Workshop;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    public function addWorkshop()
    {
        return view('admin.pages.activities.workshop.addWorkshop');
    }

    public function postWorkshop(Request $req)
    {

        $workshop = new Workshop();
        $workshop ->title = $req->title;
        $workshop ->date = $req->date;
        // $govtLetter->gvt_ltr_img = $req->gvt_ltr_img;
        $res = $workshop ->save();
        if ($req->hasFile('workshop_img')) {
            $file = $req->file('workshop_img');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationpath = ('uploads/activities/workshop/');
            $file->move($destinationpath, $name);
            $workshop ->workshop_img = $destinationpath . $name;
            $workshop ->save();
        }
        if ($res) {
            return redirect()->route('addWorkshop')->with('alert', 'Data Saved Successfully');
        } else {
            return back()->with('alert', 'access denied');
        }
    }

    public function viewWorkshop()
    {
        $workshop = Workshop::OrderBy('created_at', 'desc')->get();
        $data = compact('workshop');
        return view('admin.pages.activities.workshop.viewWorkshop')->with($data)->with('no', '1');
    }

    public function deleteWorkshop($id)
    {
        $deleteWorkshop= Workshop::find($id)->delete();
        if($deleteWorkshop){
            return redirect()->route('viewWorkshop')->with('alert','Data Deleted Successfully');
        }else{
            return back()->with('access Denied');
        }
    }
}
