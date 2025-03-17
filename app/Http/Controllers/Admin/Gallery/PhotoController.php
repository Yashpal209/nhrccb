<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function addPhoto()
    {
        $photo = new Photo();
        return view('admin.pages.gallery.photo.addPhoto');
    }

    public function postPhoto(Request $req) {
        $photo = new Photo();
        $photo->date = $req->date;
        $res = $photo->save();
   
        if ($req->hasFile('img')) {
            $file = $req->file('img');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationpath = ('uploads/gallery/photos/');
            $file->move($destinationpath, $name);
            $photo->img = $destinationpath . $name;
            $photo->save();
        }
        if ($res) {
            return redirect()->route('addPhoto')->with('alert', 'Data Saved Successfully');
        } else {
            return back()->with('alert', 'access denied');
        }
    }

    public function viewPhoto()
    {
        $viewPhoto = Photo::Orderby('created_at', 'desc')->get();
        $data = compact('viewPhoto');
        return view('admin.pages.gallery.photo.viewPhoto')->with($data)->with('no','1');
    }

    public function deletePhoto($id){
        $deletePhoto = photo::find($id)->delete();
        if($deletePhoto){
            return redirect()->route('viewPhoto')->with('alert', 'Data Deleted Successfully');
        }else{
            return back()->with('alert', 'Access Denied');
        }
    }
}
