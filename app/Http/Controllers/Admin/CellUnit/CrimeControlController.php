<?php

namespace App\Http\Controllers\Admin\CellUnit;

use App\Http\Controllers\Controller;
use App\Models\Admin\CellUnit\CrimeControl;
use Illuminate\Http\Request;

class CrimeControlController extends Controller
{
    public function addCrimeControl()
    {
       return view('admin.pages.cellunit.crimecontrolunit.addCrimeControlUnit');
    }
 
    public function postCrimeControl(Request $req)
    {
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
 
       $crimecontrol = new CrimeControl();
       $crimecontrol->name = $req->name;
       $crimecontrol->designation = $req->designation;
 
       $res = $crimecontrol->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =   $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/cellunit/crimecontrol/');
          $file->move($destinationpath, $name);
          $crimecontrol->image = $destinationpath . $name;
          $crimecontrol->save();
       }
 
       if ($res) {
          return redirect()->route('addCrimeControl')->with('alert', 'Data save Successfully');
       } else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    }
 
    public function viewCrimeControl(){
       $crimecontrol =  CrimeControl::orderby('created_at','desc')->get();
       $data = compact('crimecontrol');
       return view('admin.pages.cellunit.crimecontrolunit.viewCrimeControlUnit')->with($data)->with('no', '1');
    }
 
    public function deleteCrimeControl($id){
       $crimecontrol =  CrimeControl::find($id)->delete();
       if($crimecontrol){
          return redirect()->route('viewCrimeControl')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
 
    }
}
