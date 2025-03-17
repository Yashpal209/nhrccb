<?php

namespace App\Http\Controllers\Admin\OurTeam;

use App\Http\Controllers\Controller;
use App\Models\Admin\OurTeam\NationalTeam;
use Illuminate\Http\Request;

class NationalTeamController extends Controller
{
    public function addNationalTeam()
    {
       return view('admin.pages.ourteam.nationalteam.addNationalTeam');
    }
 
    public function postNationalTeam(Request $req)
    {
 
       // return $req->all();
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
       $nationalteam = new NationalTeam();
       $nationalteam->name = $req->name;
       $nationalteam->designation = $req->designation;
       $nationalteam->wing_name = $req->wing_name;
 
       $res = $nationalteam->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =   $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/ourteam/nationalteam/');
          $file->move($destinationpath, $name);
          $nationalteam->image = $destinationpath . $name;
          $nationalteam->save();
       }
 
       if ($res) {
          return redirect()->route('addNationalTeam')->with('alert', 'Data save Successfully');
       } else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    }
 
    public function viewNationalTeam(){
       $nationalteam = NationalTeam::orderby('created_at','desc')->get();
       $data = compact('nationalteam');
       return view('admin.pages.ourteam.nationalteam.viewNationalTeam')->with($data)->with('no', '1');
    }
 
    public function deleteNationalTeam($id){
       $nationalteam = NationalTeam::find($id)->delete();
       if($nationalteam){
          return redirect()->route('viewNationalTeam')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
 
    }
}
