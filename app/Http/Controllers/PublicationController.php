<?php

namespace App\Http\Controllers;

use App\Models\Admin\publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function viewPublication()
    {
        $publications = Publication::orderBy('publication_date', 'desc')->get();
        return view('admin.pages.viewPublication', compact('publications'))->with('no','1');
    }

    public function addPublication()
    {
        $publications = Publication::orderBy('created_at', 'desc')->take(5)->get();
        return view('admin.pages.addPublication', compact('publications'));
    }

    public function addPublicationPost(Request $req)
    {
        $publication = new publication();
        $publication->publication_title = $req->input('publication_title');
        $publication->publication_date = $req->input('publication_date');
        $publication->publication_file = $req->input('publication_file');
        $res = $publication->save();

        // if ($req->hasFile('publication_file')) {
        //     $file = $req->file('publication_file');
        //     $ext = $file->getClientOriginalExtension();
        //     $name = uniqid() . "." . $ext;
        //     $destinationPath = 'uploads/publication/';
        //     $file->move($destinationPath, $name);
        //     $publication->publication_file = $destinationPath . $name;
        //     $publication->save();
        // }

        if ($res) {
            return redirect('/admin/add-new-publication')->with('alert', 'Publication updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }
    public function publicationList()
    {

        $publications = Publication::orderBy('created_at', 'desc')->get();
        // return  $publications;

        return view('admin.pages.addPublication', compact('publications'));
    }

    public function publicationDelete($id)
    {
        // return $id;
        $publication = publication::find($id)->delete();
        if ($publication) {
            return redirect('/admin/view-publication')->with('alert', 'Publication Deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }
}
