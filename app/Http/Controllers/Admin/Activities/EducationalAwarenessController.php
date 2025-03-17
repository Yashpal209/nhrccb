<?php

namespace App\Http\Controllers\Admin\Activities;

use App\Http\Controllers\Controller;
use App\Models\Admin\Activities\EducationalAwareness;
use Illuminate\Http\Request;

class EducationalAwarenessController extends Controller
{
    public function addEducationalAwareness()
    {
        return view('admin.pages.activities.educationalawareness.addEducataionalAwareness');
    }

    public function postEducationalAwareness(Request $req)
    {

        $eduawareness = new EducationalAwareness();
        $eduawareness->title = $req->title;
        $eduawareness->date = $req->date;
        $res = $eduawareness->save();
        if ($req->hasFile('edu_awrns_img')) {
            $file = $req->file('edu_awrns_img');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationpath = ('uploads/activities/eduawareness/');
            $file->move($destinationpath, $name);
            $eduawareness->edu_awrns_img = $destinationpath . $name;
            $eduawareness->save();
        }
        if ($res) {
            return redirect()->route('addEducationalAwareness')->with('alert', 'Data Saved Successfully');
        } else {
            return back()->with('alert', 'access denied');
        }
    }

    public function viewEducationalAwareness()
    {
        $eduawareness = EducationalAwareness::OrderBy('created_at', 'desc')->get();
        $data = compact('eduawareness');
        return view('admin.pages.activities.educationalawareness.viewEducationalAwareness')->with($data)->with('no', '1');
    }

    public function deleteEducationalAwareness($id)
    {
        $eduawareness= EducationalAwareness::find($id)->delete();
        if($eduawareness){
            return redirect()->route('viewEducationalAwareness')->with('alert','Data Deleted Successfully');
        }else{
            return back()->with('access Denied');
        }
    }
}
