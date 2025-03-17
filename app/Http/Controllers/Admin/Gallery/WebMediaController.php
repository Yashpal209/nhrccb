<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery\WebMedia;
use Illuminate\Http\Request;

class WebMediaController extends Controller
{
    public function addWebMedia(){
        
            return view('admin.pages.gallery.webmedia.addWebmedia');
        }
    
        public function postWebMedia(Request $req) {
            $webmedia = new WebMedia(); 
            $webmedia->title = $req->title;
            $webmedia->date = $req->date;
            $webmedia->web_url = $req->url;
            $res = $webmedia->save();
            // if ($req->hasFile('web_med_img')) {
            //     $file = $req->file('web_med_img');
            //     $ext = $file->getClientOriginalExtension();
            //     $name = uniqid() . "." . $ext;
            //     $destinationpath = ('uploads/gallery/webmedia/');
            //     $file->move($destinationpath, $name);
            //     $webmedia->web_med_img = $destinationpath . $name;
            //     $webmedia->save();
            // }
            if ($res) {
                return redirect()->route('addWebMedia')->with('alert', 'Data Saved Successfully');
            } else {
                return back()->with('alert', 'access denied');
            }      
        }

        public function viewWebMedia()
        {
            $webmedia = WebMedia::OrderBy('created_at', 'desc')->get();
            $data = compact('webmedia');
            return view('admin.pages.gallery.webmedia.viewWebmedia')->with($data)->with('no', '1');
        }

        public function deletewebmedia($id)
        {
            $deleteWebMedia = WebMedia::find($id)->delete();
            if($deleteWebMedia){
                return redirect()->route('viewWebMedia')->with('alert','Data Deleted Successfully');
            }else{
                return back()->with('access Denied');
            }
        }
}
