<?php

namespace App\Http\Controllers\Admin\OurTeam;

use App\Http\Controllers\Controller;
use App\Models\Admin\OurTeam\ZoneTeam;
use Illuminate\Http\Request;

class ZoneTeamController extends Controller
{
    public function addZoneTeam()
    {
       return view('admin.pages.ourteam.zoneteam.addZoneTeam');
    }
 
    public function postZoneTeam(Request $req)
    {

       // return $req->all();
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
       $zoneteam = new ZoneTeam();
       $zoneteam->name = $req->name;
       $zoneteam->designation = $req->designation;
       $zoneteam->wing_name = $req->wing_name;
       $zoneteam->zone_name = $req->zone_name;
 
       $res = $zoneteam->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =   $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/ourteam/zoneteam/');
          $file->move($destinationpath, $name);
          $zoneteam->image = $destinationpath . $name;
          $zoneteam->save();
       }
 
       if ($res) {
          return redirect()->route('addZoneTeam')->with('alert', 'Data save Successfully');
       } else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    }
 
    public function viewZoneTeam(){
       $zoneteam = ZoneTeam::orderby('created_at','desc')->get();
       $data = compact('zoneteam');
       return view('admin.pages.ourteam.zoneteam.viewZoneTeam')->with($data)->with('no', '1');
    }
 
    public function deleteZoneTeam($id){
       $zoneteam = ZoneTeam::find($id)->delete();
       if($zoneteam){
          return redirect()->route('viewZoneTeam')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
 
    }
}
