<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\OurAwardee;
use Illuminate\Http\Request;

class OurAwardeeController extends Controller
{
    public function addOurAwardee(){
        return view('admin.pages.our-awardee.addAwardee');
    }

    public function viewOurAwardee()
    {
        $viewAwardee = OurAwardee::OrderBy('created_at', 'desc')->get();
        $data = compact('viewAwardee');
        return view('admin.pages.our-awardee.viewAwardee')->with($data)->with('no', '1');
    }

    public function postOurAwardee(Request $req){
        $ourawardee = new OurAwardee();
        $ourawardee->awardee_name = $req->awardee_name;
        $ourawardee->award_name = $req->award_name;
        $ourawardee->award_category = $req->award_category;
        $ourawardee->convention_name = $req->convention_name;
        $res = $ourawardee->save();
        if ($res) {
            return redirect()->route('addOurAwardee')->with('alert', 'Data Saved Successfully');
        } else {
            return back()->with('alert', 'access denied');
        }  
    }
    public function deleteAward($id)
    {
        $deleteAward = OurAwardee::find($id)->delete();
        if($deleteAward){
            return redirect()->route('viewOurAwardee')->with('alert','Data Deleted Successfully');
        }else{
            return back()->with('access Denied');
        }
    }
}
