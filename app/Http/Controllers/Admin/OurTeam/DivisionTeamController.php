<?php

namespace App\Http\Controllers\Admin\OurTeam;

use App\Http\Controllers\Controller;
use App\Models\Admin\OurTeam\DivisionTeam;
use Illuminate\Http\Request;

class DivisionTeamController extends Controller
{
    public function addDivisionTeam()
    {
       return view('admin.pages.ourteam.divisionteam.addDivisionTeam');
    }
 
    public function postDivisionTeam(Request $req)
    {
 
       // return $req->all();
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
       $divisionteam = new DivisionTeam();
       $divisionteam->name = $req->name;
       $divisionteam->designation = $req->designation;
       $divisionteam->wing_name = $req->wing_name;
       $divisionteam->city_name = $req->city_name;
       $divisionteam->state_name = $req->state_name;
       $res = $divisionteam->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =   $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/ourteam/divisionteam/');
          $file->move($destinationpath, $name);
          $divisionteam->image = $destinationpath . $name;
          $divisionteam->save();
       }
 
       if ($res) {
          return redirect()->route('addDivisionTeam')->with('alert', 'Data save Successfully');
       } else {
          return redirect()->back()->with('error', 'Permission denied');
       }
    }
 
    public function viewDivisionTeam(){
       $divisionteam = DivisionTeam::orderby('created_at','desc')->get();
       $data = compact('divisionteam');
       return view('admin.pages.ourteam.divisionteam.viewDivisionTeam')->with($data)->with('no', '1');
    }
 
    public function deleteDivisionTeam($id){
       $divisionteam = DivisionTeam::find($id)->delete();
       if($divisionteam){
          return redirect()->route('viewDivisionTeam')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    }
}
