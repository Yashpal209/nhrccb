<?php

namespace App\Http\Controllers\Admin\CellUnit;

use App\Http\Controllers\Controller;
use App\Models\Admin\CellUnit\DoctorCell;
use Illuminate\Http\Request;

class DoctorCellController extends Controller
{
    public function addDoctorCell()
    {
       return view('admin.pages.cellunit.doctorcell.addDoctorCell');
    }
 
    public function postDoctorCell(Request $req)
    {
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
 
       $doctorcell = new DoctorCell();
       $doctorcell->name = $req->name;
       $doctorcell->designation = $req->designation;
 
       $res = $doctorcell->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =   $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/cellunit/doctorcell/');
          $file->move($destinationpath, $name);
          $doctorcell->image = $destinationpath . $name;
          $doctorcell->save();
       }
 
       if ($res) {
          return redirect()->route('addDoctorCell')->with('alert', 'Data save Successfully');
       } else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    }
 
    public function viewDoctorCell(){
       $doctorcell =  DoctorCell::orderby('created_at','desc')->get();
       $data = compact('doctorcell');
       return view('admin.pages.cellunit.doctorcell.viewDoctorCell')->with($data)->with('no', '1');
    }
 
    public function deleteDoctorCell($id){
       $doctorcell =  DoctorCell::find($id)->delete();
       if($doctorcell){
          return redirect()->route('viewDoctorCell')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
 
    }
}
