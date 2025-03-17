<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery\PoliceLetter;
use Illuminate\Http\Request;

class PoliceLetterController extends Controller
{
    public function addPoliceLetter(){
        
        return view('admin.pages.gallery.policeletter.addPoliceLetter');
    }

    public function postPoliceLetter(Request $req) {
 
        $policemedia = new PoliceLetter(); 
        $policemedia->title = $req->title;
        $policemedia->date = $req->date;
        $res = $policemedia->save();
        if ($req->hasFile('pol_let_img')) {
            $file = $req->file('pol_let_img');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationpath = ('uploads/gallery/policeletter/');
            $file->move($destinationpath, $name);
            $policemedia->pol_let_img = $destinationpath . $name;
            $policemedia->save();
        }
        if ($res) {
            return redirect()->route('addPoliceLetter')->with('alert', 'Data Saved Successfully');
        } else {
            return back()->with('alert', 'access denied');
        }      
    }

    public function viewPoliceLetter()
    {
     
        $policeletter = PoliceLetter::OrderBy('created_at', 'desc')->get();
        $data = compact('policeletter');
        return view('admin.pages.gallery.policeletter.viewPoliceLetter')->with($data)->with('no', '1');
    }

    public function deletePoliceLetter($id)
    {
        $deletePoliceLetter = PoliceLetter::find($id)->delete();
        if($deletePoliceLetter){
            return redirect()->route('viewPoliceLetter')->with('alert','Data Deleted Successfully');
        }else{
            return back()->with('access Denied');
        }
    }
}
