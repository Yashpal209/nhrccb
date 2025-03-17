<?php

namespace App\Http\Controllers\Admin\Activities;

use App\Http\Controllers\Controller;
use App\Models\Admin\Activities\SocialWork;
use Illuminate\Http\Request;

class SocialWorkController extends Controller
{
    public function addSocialWork()
    {
        return view('admin.pages.activities.socialwork.addSocialWork');
    }

    public function postSocialWork(Request $req)
    {
        $socialwork = new SocialWork();
        $socialwork->title = $req->title;
        $socialwork->date = $req->date;
        $res = $socialwork->save();
        if ($req->hasFile('social_wrk_img')) {
            $file = $req->file('social_wrk_img');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationpath = ('uploads/activities/socialwork/');
            $file->move($destinationpath, $name);
            $socialwork->social_wrk_img = $destinationpath . $name;
            $socialwork->save();
        }
        if ($res) {
            return redirect()->route('addSocialWork')->with('alert', 'Data Saved Successfully');
        } else {
            return back()->with('alert', 'access denied');
        }
    }

    public function viewSocialWork()
    {
        $socialwork = SocialWork::OrderBy('created_at', 'desc')->get();
        $data = compact('socialwork');
        return view('admin.pages.activities.socialwork.viewSocialWork')->with($data)->with('no', '1');
    }

    public function deleteSocialWork($id)
    {
        $socialwork= SocialWork::find($id)->delete();
        if($socialwork){
            return redirect()->route('viewSocialWork')->with('alert','Data Deleted Successfully');
        }else{
            return back()->with('access Denied');
        }
    }
}
