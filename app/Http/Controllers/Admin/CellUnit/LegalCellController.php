<?php

namespace App\Http\Controllers\Admin\CellUnit;

use App\Http\Controllers\Controller;
use App\Models\Admin\CellUnit\LegalCell;
use Illuminate\Http\Request;

class LegalCellController extends Controller
{
    public function addLegalCell()
    {
       return view('admin.pages.cellunit.legalcell.addCellUnit');
    }
 
    public function postLegalCell(Request $req)
    {
 
       // return $req->all();
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
 
       $legalcell = new LegalCell();
       $legalcell->name = $req->name;
       $legalcell->designation = $req->designation;
 
       $res = $legalcell->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =   $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/cellunit/legalcell/');
          $file->move($destinationpath, $name);
          $legalcell->image = $destinationpath . $name;
          $legalcell->save();
       }
 
       if ($res) {
          return redirect()->route('addLegalCell')->with('alert', 'Data save Successfully');
       } else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    }
 
    public function viewLegalCell(){
       $legalcell = LegalCell::orderby('created_at','desc')->get();
       $data = compact('legalcell');
       return view('admin.pages.cellunit.legalcell.viewCellUnit')->with($data)->with('no', '1');
    }
 
    public function deleteLegalCell($id){
       $legalcell = LegalCell::find($id)->delete();
       if($legalcell){
          return redirect()->route('viewLegalCell')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
 
    }
}
