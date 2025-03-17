<?php

namespace App\Http\Controllers\Admin\CellUnit;

use App\Http\Controllers\Controller;
use App\Models\Admin\CellUnit\ChildRightCell;
use Illuminate\Http\Request;

class ChildRightCellController extends Controller
{
    public function addChildRightCell()
    {
       return view('admin.pages.cellunit.childrightcell.addChildRightCell');
    }
 
    public function postChildRightCell(Request $req)
    {
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
 
       $childrightcell = new ChildRightCell();
       $childrightcell->name = $req->name;
       $childrightcell->designation = $req->designation;
 
       $res = $childrightcell->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =   $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/cellunit/childrightcell/');
          $file->move($destinationpath, $name);
          $childrightcell->image = $destinationpath . $name;
          $childrightcell->save();
       }
 
       if ($res) {
          return redirect()->route('addChildRightCell')->with('alert', 'Data save Successfully');
       } else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    }
 
    public function viewChildRightCell(){
       $childrightcell =  ChildRightCell::orderby('created_at','desc')->get();
       $data = compact('childrightcell');
       return view('admin.pages.cellunit.childrightcell.viewChildRightCell')->with($data)->with('no', '1');
    }
 
    public function deleteChildRightCell($id){
       $childrightcell =  ChildRightCell::find($id)->delete();
       if($childrightcell){
          return redirect()->route('viewChildRightCell')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
 
    }
}
