<?php

namespace App\Http\Controllers\Admin\Activities;

use App\Http\Controllers\Controller;
use App\Models\Admin\Activities\StandwithNation;
use Illuminate\Http\Request;

class StandwithNationController extends Controller
{
    public function addStandwithNation()
    {
        return view('admin.pages.activities.standwithnation.addStandwithnation');
    }

    public function postStandwithNation(Request $req)
    {

        $standwithnation = new StandwithNation();
        $standwithnation->title = $req->title;
        $standwithnation->date = $req->date;
        $res = $standwithnation ->save();
        if ($req->hasFile('stand_with_natn_img')) {
            $file = $req->file('stand_with_natn_img');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationpath = ('uploads/activities/standwithnation/');
            $file->move($destinationpath, $name);
            $standwithnation->stand_with_natn_img = $destinationpath . $name;
            $standwithnation ->save();
        }
        if ($res) {
            return redirect()->route('addStandwithNation')->with('alert', 'Data Saved Successfully');
        } else {
            return back()->with('alert', 'access denied');
        }
    }

    public function viewStandwithNation()
    {
        $standwithnation = StandwithNation::OrderBy('created_at', 'desc')->get();
        $data = compact('standwithnation');
        return view('admin.pages.activities.standwithnation.viewStandwithnation')->with($data)->with('no', '1');
    }

    public function deleteStandwithNation($id)
    {
        $deleteStandwithNation= StandwithNation::find($id)->delete();
        if($deleteStandwithNation){
            return redirect()->route('viewStandwithNation')->with('alert','Data Deleted Successfully');
        }else{
            return back()->with('access Denied');
        }
    }
}
