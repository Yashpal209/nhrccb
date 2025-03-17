<?php

namespace App\Http\Controllers\Admin\Activities;

use App\Http\Controllers\Controller;
use App\Models\Admin\Activities\RuralAwareness;
use Illuminate\Http\Request;

class RuralAwarenessController extends Controller
{
    public function addRuralAwareness()
    {
        return view('admin.pages.activities.ruralawareness.addRuralAwareness');
    }

    public function postRuralAwareness(Request $req)
    {

        $ruralawareness = new RuralAwareness();
        $ruralawareness->title = $req->title;
        $ruralawareness->date = $req->date;
        $res = $ruralawareness->save();
        if ($req->hasFile('rrl_awrns_img')) {
            $file = $req->file('rrl_awrns_img');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationpath = ('uploads/activities/ruralawareness/');
            $file->move($destinationpath, $name);
            $ruralawareness->rrl_awrns_img = $destinationpath . $name;
            $ruralawareness->save();
        }
        if ($res) {
            return redirect()->route('addRuralAwareness')->with('alert', 'Data Saved Successfully');
        } else {
            return back()->with('alert', 'access denied');
        }
    }

    public function viewRuralAwareness()
    {
        $ruralawareness = RuralAwareness::OrderBy('created_at', 'desc')->get();
        $data = compact('ruralawareness');
        return view('admin.pages.activities.ruralawareness.viewRuralAwareness')->with($data)->with('no', '1');
    }

    public function deleteRuralAwareness($id)
    {
        $ruralawareness= RuralAwareness::find($id)->delete();
        if($ruralawareness){
            return redirect()->route('viewRuralAwareness')->with('alert','Data Deleted Successfully');
        }else{
            return back()->with('access Denied');
        }
    }
}
