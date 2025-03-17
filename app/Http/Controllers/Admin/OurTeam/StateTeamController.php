<?php

namespace App\Http\Controllers\Admin\OurTeam;

use App\Http\Controllers\Controller;
use App\Models\Admin\OurTeam\StateTeam;
use Illuminate\Http\Request;

class StateTeamController extends Controller
{
    public function addStateTeam()
    {
       return view('admin.pages.ourteam.stateteam.addStateTeam');
    }
 
    public function postStateTeam(Request $req)
    {
 
       // return $req->all();
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
       $stateteam = new StateTeam();
       $stateteam->name = $req->name;
       $stateteam->designation = $req->designation;
       $stateteam->wing_name = $req->wing_name;
       $stateteam->state_name = $req->state_name;
       $res = $stateteam->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =   $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/ourteam/stateteam/');
          $file->move($destinationpath, $name);
          $stateteam->image = $destinationpath . $name;
          $stateteam->save();
       }
 
       if ($res) {
          return redirect()->route('addStateTeam')->with('alert', 'Data save Successfully');
       } else {
          return redirect()->back()->with('error', 'Permission denied');
       }
    }
 
    public function viewStateTeam(){
       $stateteam = StateTeam::orderby('created_at','desc')->get();
       $data = compact('stateteam');
       return view('admin.pages.ourteam.stateteam.viewStateTeam')->with($data)->with('no', '1');
    }
 
    public function deleteStateTeam($id){
       $stateteam = StateTeam::find($id)->delete();
       if($stateteam){
          return redirect()->route('viewStateTeam')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    }
}
