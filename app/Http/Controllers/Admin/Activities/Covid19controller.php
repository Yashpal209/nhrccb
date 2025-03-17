<?php

namespace App\Http\Controllers\Admin\Activities;

use App\Http\Controllers\Controller;
use App\Models\Admin\Activities\Covid19;
use Illuminate\Http\Request;

class Covid19controller extends Controller
{
    
    public function addCovid19()
    {
        return view('admin.pages.activities.covid19.addCovid19');
    }

    public function postCovid19(Request $req)
    {
        $covid19 = new Covid19();
        $covid19->title = $req->title;
        $covid19->date = $req->date;
        $res = $covid19->save();
        if ($req->hasFile('covid_img')) {
            $file = $req->file('covid_img');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationpath = ('uploads/activities/covid19/');
            $file->move($destinationpath, $name);
            $covid19->covid_img = $destinationpath . $name;
            $covid19->save();
        }
        if ($res) {
            return redirect()->route('addCovid19')->with('alert', 'Data Saved Successfully');
        } else {
            return back()->with('alert', 'access denied');
        }
    }

    public function viewCovid19()
    {
        $covid19 = Covid19::OrderBy('created_at', 'desc')->get();
        $data = compact('covid19');
        return view('admin.pages.activities.covid19.viewCovid19')->with($data)->with('no', '1');
    }

    public function deleteCovid19($id)
    {
        $covid19= Covid19::find($id)->delete();
        if($covid19){
            return redirect()->route('viewCovid19')->with('alert','Data Deleted Successfully');
        }else{
            return back()->with('access Denied');
        }
    }
}
