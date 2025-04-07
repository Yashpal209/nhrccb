<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery\ActionTakReport;
use App\Models\Admin\Gallery\ActionTknByDept;
use App\Models\Admin\Gallery\GovtLetter;
use Illuminate\Http\Request;

class GovtlettersController extends Controller
{
    public function addGovtLetter()
    {
        return view('admin.pages.gallery.govtletters.addgovtletters');
    }

    public function postGovtLetr(Request $req)
    {

        $govtLetter = new GovtLetter();
        $govtLetter->title = $req->title;
        $res = $govtLetter->save();
        if ($req->hasFile('gvt_ltr_img')) {
            $file = $req->file('gvt_ltr_img');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationpath = ('uploads/gallery/govtLetters/');
            $file->move($destinationpath, $name);
            $govtLetter->gvt_ltr_img = $destinationpath . $name;
            $govtLetter->save();
        }
        if ($res) {
            return redirect()->route('addGovtLetter')->with('alert', 'Data Saved Successfully');
        } else {
            return back()->with('alert', 'access denied');
        }
    }

    public function viewGovtLetter()
    {
        $govtletter = GovtLetter::OrderBy('created_at', 'desc')->get();
        $data = compact('govtletter');
        return view('admin.pages.gallery.govtletters.viewgovtletters')->with($data)->with('no', '1');
    }

    public function deleteGovtLetter($id)
    {
        $deleteGovtLetter = GovtLetter::find($id)->delete();
        if($deleteGovtLetter){
            return redirect()->route('viewGovtLetter')->with('alert','Data Deleted Successfully');
        }else{
            return back()->with('access Denied');
        }
    }

        // Action Taken By Department

        // public function addActionTaken()
        // {
        //     return view('admin.pages.gallery.govtletters.addgovtletters');
        // }
    
        public function postActnTknByDep(Request $req)
        {
    
            $govtLetter = new ActionTknByDept();
            $govtLetter->title = $req->title;
            $govtLetter->date = $req->date;
            // $govtLetter->gvt_ltr_img = $req->gvt_ltr_img;
            $res = $govtLetter->save();
            if ($req->hasFile('actionfile')) {
                $file = $req->file('actionfile');
                $ext = $file->getClientOriginalExtension();
                $name = uniqid() . "." . $ext;
                $destinationpath = ('uploads/gallery/actntkndoc/');
                $file->move($destinationpath, $name);
                $govtLetter->actionfile = $destinationpath . $name;
                $govtLetter->save();
            }
            if ($res) {
                return redirect()->route('addGovtLetter')->with('alert', 'Data Saved Successfully');
            } else {
                return back()->with('alert', 'access denied');
            }
        }
    
        public function viewActnTknByDept()
        {
            $govtletter = ActionTknByDept::OrderBy('date', 'desc')->get();
            $data = compact('govtletter');
            return view('admin.pages.gallery.govtletters.viewActnTknByDept')->with($data)->with('no', '1');
        }
    
        public function deleteActnfile($id)
        {
            $ActionTknByDept = ActionTknByDept::find($id)->delete();
            if($ActionTknByDept){
                return redirect()->route('viewActnTknByDept')->with('alert','Data Deleted Successfully');
            }else{
                return back()->with('access Denied');
            }
        }
}
