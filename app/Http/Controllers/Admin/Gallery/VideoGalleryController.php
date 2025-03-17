<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery\VideoGallery;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
{
    public function addVideoGallery(){
        
        return view('admin.pages.gallery.videogallery.addVideoGallery');
    }

    public function postVideoGallery(Request $req) {
        $videogallery = new VideoGallery();
        $videogallery->title = $req->title;
        $videogallery->date = $req->date;
        $videogallery->video = $req->video;
        $res = $videogallery->save();
        if ($res) {
            return redirect()->route('addVideoGallery')->with('alert', 'Data Saved Successfully');
        } else {
            return back()->with('alert', 'access denied');
        }      
    }

    public function viewVideoGallery()
    {
        $videogallery = VideoGallery::OrderBy('created_at', 'desc')->get();
        $data = compact('videogallery');
        return view('admin.pages.gallery.videogallery.viewVideoGallery')->with($data)->with('no', '1');
    }

    public function deleteVideo($id)
    {
        $deleteVideo = VideoGallery::find($id)->delete();
        if($deleteVideo){
            return redirect()->route('viewVideoGallery')->with('alert','Data Deleted Successfully');
        }else{
            return back()->with('access Denied');
        }
    }
}
