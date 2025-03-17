<?php

namespace App\Http\Controllers\Admin\CellUnit;

use App\Http\Controllers\Controller;
use App\Models\Admin\CellUnit\RtiCell;
use Illuminate\Http\Request;

class RtiCellController extends Controller
{
    public function addRtiCell()
    {
       return view('admin.pages.cellunit.rticell.addRtiCell');
    }
 
    public function postRtiCell(Request $req)
    {
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
 
       $rticell = new RtiCell();
       $rticell->name = $req->name;
       $rticell->designation = $req->designation;
 
       $res = $rticell->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =   $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/cellunit/rticell/');
          $file->move($destinationpath, $name);
          $rticell->image = $destinationpath . $name;
          $rticell->save();
       }
 
       if ($res) {
          return redirect()->route('addRtiCell')->with('alert', 'Data save Successfully');
       } else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    }
 
    public function viewRtiCell(){
       $rticell =  RtiCell::orderby('created_at','desc')->get();
       $data = compact('rticell');
       return view('admin.pages.cellunit.rticell.viewRtiCell')->with($data)->with('no', '1');
    }
 
    public function deleteRtiCell($id){
       $rticell =  RtiCell::find($id)->delete();
       if($rticell){
          return redirect()->route('viewRtiCell')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
 
    }
}
