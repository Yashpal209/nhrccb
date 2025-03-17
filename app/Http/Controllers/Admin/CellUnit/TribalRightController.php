<?php

namespace App\Http\Controllers\Admin\CellUnit;

use App\Http\Controllers\Controller;
use App\Models\Admin\CellUnit\TribalRight;
use Illuminate\Http\Request;

class TribalRightController extends Controller
{
    public function addTRProtection()
    {
       return view('admin.pages.cellunit.tribalright.addTribalRight');
    }
 
    public function postTRProtection(Request $req)
    {
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
 
       $trlcell = new TribalRight();
       $trlcell->name = $req->name;
       $trlcell->designation = $req->designation;
 
       $res = $trlcell->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =   $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/cellunit/tribalcell/');
          $file->move($destinationpath, $name);
          $trlcell->image = $destinationpath . $name;
          $trlcell->save();
       }
 
       if ($res) {
          return redirect()->route('addTRProtection')->with('alert', 'Data save Successfully');
       } else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    }
 
    public function viewTRProtection(){
       $tribalcell =  TribalRight::orderby('created_at','desc')->get();
       $data = compact('tribalcell');
       return view('admin.pages.cellunit.tribalright.viewTribalRight')->with($data)->with('no', '1');
    }
 
    public function deleteTRProtection($id){
       $tribalcell =  TribalRight::find($id)->delete();
       if($tribalcell){
          return redirect()->route('viewTRProtection')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
 
    }
}
