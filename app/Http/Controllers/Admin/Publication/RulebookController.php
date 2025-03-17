<?php

namespace App\Http\Controllers\Admin\Publication;

use App\Http\Controllers\Controller;
use App\Models\Admin\Publication\Rulebook;
use Illuminate\Http\Request;

class RulebookController extends Controller
{
    public function addRulebook()
    {
        return view('admin.pages.publication.rulebook.addRulebook');
    }

    public function postRulebook(Request $req)
    {
        // dd($req->all());
        $rulebook = new Rulebook();
        $rulebook->title = $req->input('title');
        $rulebook->date = $req->input('date');
        $res = $rulebook->save();

        if ($req->hasFile('rulebook')) {
            $file = $req->file('rulebook');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationPath = 'uploads/publication/rulebook/';
            $file->move($destinationPath, $name);
            $rulebook->rulebook = $destinationPath . $name;
            $rulebook->save();
        }
        if ($res) {
            return redirect()->route('addRulebook')->with('alert', ' Rulebook Added successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }

    public function viewRulebook()
    {
        $rulebook = Rulebook::orderby('created_at', 'desc')->get();
        $data = compact('rulebook');
        // dd($rulebook);
        return view('admin.pages.publication.rulebook.viewRulebook')->with($data)->with('no', '1');
    }

    public function deleteRulebook($id)
    {
        $rulebook =  Rulebook::find($id)->delete();
        if ($rulebook) {
            return redirect()->route('viewRulebook')->with('alert', 'Data deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Permission denied');
        }
    }
}
