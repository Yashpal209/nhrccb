<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery\ActionTakReport;
use Illuminate\Http\Request;

class ActionTakRepoController extends Controller
{
    public function addActnTknRprt()
    {
        return view('admin.pages.gallery.actiontakenreport.addActionTakenReport');
    }

    public function postActnTknRprt(Request $req) {
        $actntknrprt = new ActionTakReport();  
     
        $actntknrprt->title = $req->title;
        $actntknrprt->date = $req->date;
        // $govtLetter->gvt_ltr_img = $req->gvt_ltr_img;
        $res = $actntknrprt->save();
        if ($req->hasFile('rprt_img')) {
            $file = $req->file('rprt_img');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationpath = ('uploads/gallery/actntknreport/');
            $file->move($destinationpath, $name);
            $actntknrprt->rprt_img = $destinationpath . $name;
            $actntknrprt->save();
        }
        if ($res) {
            return redirect()->route('addActnTknRprt')->with('alert', 'Data Saved Successfully');
        } else {
            return back()->with('alert', 'access denied');
        }      
    }
    public function viewActnTknRprt()
    {
        $actntknrprt = ActionTakReport::OrderBy('created_at', 'desc')->get();
        $data = compact('actntknrprt');
        return view('admin.pages.gallery.actiontakenreport.viewActionTakenReport')->with($data)->with('no', '1');
    }
    public function deleteActnTknRprt($id)
    {
        $deleteActntknrprt = ActionTakReport::find($id)->delete();
        if($deleteActntknrprt){
            return redirect()->route('viewActnTknRprt')->with('alert','Data Deleted Successfully');
        }else{
            return back()->with('access Denied');
        }
    }
}
