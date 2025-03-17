<?php

namespace App\Http\Controllers\Admin\Publication;

use App\Http\Controllers\Controller;
use App\Models\Admin\Publication\Prospectus;
use Illuminate\Http\Request;

class ProspectusController extends Controller
{
    public function addProspectus()
    {
        return view('admin.pages.publication.prospectus.addProspectus');
    }

    public function postProspectus(Request $req)
    {
        $prospectus = new Prospectus();
        $prospectus->title = $req->input('title');
        $prospectus->date = $req->input('date');
        $res =  $prospectus->save();

        if ($req->hasFile('prospectus')) {
            $file = $req->file('prospectus');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationPath = 'uploads/publication/prospectus/';
            $file->move($destinationPath, $name);
            $prospectus->prospectus = $destinationPath . $name;
            $prospectus->save();
        }
        if ($res) {
            return redirect()->route('addProspectus')->with('alert', 'Prospectus Added successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }

    public function viewProspectus()
    {
        $prospectus =  Prospectus::orderby('created_at', 'desc')->get();
        $data = compact('prospectus');
        return view('admin.pages.publication.prospectus.viewProspectus')->with($data)->with('no', '1');
    }

    public function deleteProspectus($id)
    {
        $prospectus = Prospectus::find($id)->delete();
        if ($prospectus) {
            return redirect()->route('viewProspectus')->with('alert', 'Data deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Permission denied');
        }
    }
}
