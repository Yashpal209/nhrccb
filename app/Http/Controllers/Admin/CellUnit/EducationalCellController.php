<?php

namespace App\Http\Controllers\Admin\CellUnit;

use App\Http\Controllers\Controller;
use App\Models\Admin\CellUnit\EducationalCell;
use Illuminate\Http\Request;

class EducationalCellController extends Controller
{
    public function addEducationalCell()
    {
       return view('admin.pages.cellunit.educationalcell.addEducationalCell');
    }
 
    public function postEducationalCell(Request $req)
    {
 
       // return $req->all();
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
 
       $eductionalcell = new EducationalCell();
       $eductionalcell->name = $req->name;
       $eductionalcell->designation = $req->designation;
 
       $res = $eductionalcell->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =   $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/cellunit/educationalcell/');
          $file->move($destinationpath, $name);
          $eductionalcell->image = $destinationpath . $name;
          $eductionalcell->save();
       }
 
       if ($res) {
          return redirect()->route('addEducationalCell')->with('alert', 'Data save Successfully');
       } else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    }
 
    public function viewEducationalCell(){
       $educationalcell = EducationalCell::orderby('created_at','desc')->get();
       $data = compact('educationalcell');
       return view('admin.pages.cellunit.educationalcell.viewEducationalCell')->with($data)->with('no', '1');
    }
 
    public function deleteEducationalCell($id){
       $educationalcell = EducationalCell::find($id)->delete();
       if($educationalcell){
          return redirect()->route('viewEducationalCell')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
 
    }
}
