<?php

namespace App\Http\Controllers\Admin\CellUnit;

use App\Http\Controllers\Controller;
use App\Models\Admin\CellUnit\MediaCell;
use Illuminate\Http\Request;

class MediaCellController extends Controller
{
    public function addMediaCell()
    {
       return view('admin.pages.cellunit.mediacell.addMediacell');
    }
 
    public function postMediaCell(Request $req)
    {
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
 
       $mediacell = new MediaCell();
       $mediacell->name = $req->name;
       $mediacell->designation = $req->designation;
 
       $res = $mediacell->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =   $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/cellunit/mediacell/');
          $file->move($destinationpath, $name);
          $mediacell->image = $destinationpath . $name;
          $mediacell->save();
       }
 
       if ($res) {
          return redirect()->route('addMediaCell')->with('alert', 'Data save Successfully');
       } else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    }
 
    public function viewMediaCell(){
       $mediacell =  MediaCell::orderby('created_at','desc')->get();
       $data = compact('mediacell');
       return view('admin.pages.cellunit.mediacell.viewMediaCell')->with($data)->with('no', '1');
    }
 
    public function deleteMediaCell($id){
       $mediacell =  MediaCell::find($id)->delete();
       if($mediacell){
          return redirect()->route('viewMediaCell')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
 
    }
}
