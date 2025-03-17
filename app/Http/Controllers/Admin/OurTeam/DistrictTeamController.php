<?php

namespace App\Http\Controllers\Admin\OurTeam;

use App\Http\Controllers\Controller;
use App\Models\Admin\OurTeam\DistrictTeam;
use Illuminate\Http\Request;

class DistrictTeamController extends Controller
{
    public function addDistrictTeam()
    {
       return view('admin.pages.ourteam.districtteam.addDistrictTeam');
    }
 
    public function postDistrictTeam(Request $req)
    {
 
       // return $req->all();
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
       $districtteam = new DistrictTeam();
       $districtteam->name = $req->name;
       $districtteam->designation = $req->designation;
       $districtteam->wing_name = $req->wing_name;
       $districtteam->district_name = $req->district_name;
       $districtteam->state_name = $req->state_name;
       $res = $districtteam->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =   $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/ourteam/districtteam/');
          $file->move($destinationpath, $name);
          $districtteam->image = $destinationpath . $name;
          $districtteam->save();
       }
 
       if ($res) {
          return redirect()->route('addDistrictTeam')->with('alert', 'Data save Successfully');
       } else {
          return redirect()->back()->with('error', 'Permission denied');
       }
    }
 
    public function viewDistrictTeam(){
       $districtteam = DistrictTeam::orderby('created_at','desc')->get();
       $data = compact('districtteam');
       return view('admin.pages.ourteam.districtteam.viewDistrictTeam')->with($data)->with('no', '1');
    }
 
    public function deleteDistrictTeam($id){
       $districtteam = DistrictTeam::find($id)->delete();
       if($districtteam){
          return redirect()->route('viewDistrictTeam')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    }
}
