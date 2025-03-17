<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery\PrintMedia;
use Illuminate\Http\Request;

class PrintMediaController extends Controller
{
    public function addPrintMedia()
    {
        return view('admin.pages.gallery.printmedia.addPrintmedia');
    }

    public function postPrintMedia(Request $req)
    {
        $printmedia = new PrintMedia();
        $printmedia->date = $req->date;
        $res = $printmedia->save();
        if ($req->hasFile('print_media_img')) {
            $file = $req->file('print_media_img');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationpath = ('uploads/gallery/printmedia/');
            $file->move($destinationpath,  $name);
            $printmedia->print_media_img =  $destinationpath . $name;
            $printmedia->save();
        }
        if($res){
            return redirect()->route('addPrintMedia')->with('alert', 'Data Saved Successfully');
        }
        else{
            return back()->with("alert", 'Access Denied');
        }
    }
    public function viewPrintMedia(){
        $printmedia = PrintMedia::orderBy('date', 'desc')->get();
        $data = compact('printmedia');
        return view('admin.pages.gallery.printmedia.viewPrintmedia')->with($data)->with('no','1');
    }

    public function deletePrintMedia($id){

        $deletePrintMedia = PrintMedia::find($id)->delete();
        if($deletePrintMedia){
            return redirect()->route('viewPrintMedia')->with('alert', 'Data Deleted Successfully');
        }else{
            return back()->with('alert', 'Access Denied');
        }
    }
}
