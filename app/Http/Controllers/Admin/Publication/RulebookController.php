<?php

namespace App\Http\Controllers\Admin\Publication;

use App\Http\Controllers\Controller;
use App\Models\Admin\Publication\Rulebook;
use Illuminate\Support\Facades\File;
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
        return view('admin.pages.publication.rulebook.viewRuleBook')->with($data)->with('no', '1');
    }

    public function deleteRulebook($id)
    {
        $rulebook = Rulebook::find($id);
        if ($rulebook) {
            $imagePath = $rulebook->rulebook; // change this if your column name is different
            if (!empty($imagePath) && File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $rulebook->delete();
            return redirect()->route('viewRulebook')->with('alert', 'Data deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Permission denied');
        }
    }
}
