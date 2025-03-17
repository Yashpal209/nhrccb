<?php

namespace App\Http\Controllers\Admin\CellUnit;

use App\Http\Controllers\Controller;
use App\Models\Admin\CellUnit\AntiCorruption;
use Illuminate\Http\Request;

class AntiCorruptionController extends Controller
{
    public function addAntiCorruption()
    {
       return view('admin.pages.cellunit.anticorruption.addAntiCorruption');
    }
 
    public function postAntiCorruption(Request $req)
    {
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
 
       $anticorruption = new AntiCorruption();
       $anticorruption->name = $req->name;
       $anticorruption->designation = $req->designation;
 
       $res = $anticorruption->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =   $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/cellunit/anticorruption/');
          $file->move($destinationpath, $name);
          $anticorruption->image = $destinationpath . $name;
          $anticorruption->save();
       }
 
       if ($res) {
          return redirect()->route('addAntiCorruption')->with('alert', 'Data save Successfully');
       } else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    }
 
    public function viewAntiCorruption(){
       $anticorruption =  AntiCorruption::orderby('created_at','desc')->get();
       $data = compact('anticorruption');
       return view('admin.pages.cellunit.anticorruption.viewAntiCorruption')->with($data)->with('no', '1');
    }
 
    public function deleteAntiCorruption($id){
       $anticorruption =  AntiCorruption::find($id)->delete();
       if($anticorruption){
          return redirect()->route('viewAntiCorruption')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
 
    }
}
