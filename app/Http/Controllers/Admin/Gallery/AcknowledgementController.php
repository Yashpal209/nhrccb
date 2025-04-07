<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery\Acknowledgement;
use Illuminate\Http\Request;

class AcknowledgementController extends Controller
{
    public function addAcknowledgement()
    {
        return view('admin.pages.gallery.acknowledgement.addAcknowledgement');
    }

    public function postAcknowledgement(Request $req)
    {
        $acknowledgement = new Acknowledgement();
        $acknowledgement->title = $req->title;
        $res = $acknowledgement->save();
        if ($req->hasFile('acknowledgement_img')) {
            $file = $req->file('acknowledgement_img');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationpath = ('uploads/gallery/acknowledgement/');
            $file->move($destinationpath, $name);
            $acknowledgement->acknowledgement_img = $destinationpath . $name;
            $acknowledgement->save();
        }
        if ($res) {
            return redirect()->route('addAcknowledgement')->with('alert', 'Data Saved Successfully');
        } else {
            return back()->with('alert', 'access denied');
        }
    }

    public function viewAcknowledgement()
    {
        $acknowledgement = Acknowledgement::OrderBy('created_at', 'desc')->get();
        $data = compact('acknowledgement');
        return view('admin.pages.gallery.acknowledgement.viewAcknowledgement')->with($data)->with('no', '1');
    }

    public function deleteAcknowledgement($id)
    {
        $deleteAcknowledgement = Acknowledgement::find($id)->delete();
        if($deleteAcknowledgement){
            return redirect()->route('viewAcknowledgement')->with('alert','Data Deleted Successfully');
        }else{
            return back()->with('access Denied');
        }
    }     
}
