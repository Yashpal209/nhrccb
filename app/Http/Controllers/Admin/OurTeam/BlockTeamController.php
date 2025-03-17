<?php

namespace App\Http\Controllers\Admin\OurTeam;

use App\Http\Controllers\Controller;
use App\Models\Admin\OurTeam\BlockTeam;
use Illuminate\Http\Request;

class BlockTeamController extends Controller
{
    public function addBlockTeam()
    {
       return view('admin.pages.ourteam.blockteam.addBlockTeam');
    }
 
    public function postBlockTeam(Request $req)
    {
 
       // return $req->all();
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
       $blockteam = new BlockTeam();
       $blockteam->name = $req->name;
       $blockteam->designation = $req->designation;
       $blockteam->wing_name = $req->wing_name;
       $blockteam->block_name = $req->block_name;
       $blockteam->state_name = $req->state_name;
       $res = $blockteam->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =   $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/ourteam/blockteam/');
          $file->move($destinationpath, $name);
          $blockteam->image = $destinationpath . $name;
          $blockteam->save();
       }
 
       if ($res) {
          return redirect()->route('addBlockTeam')->with('alert', 'Data save Successfully');
       } else {
          return redirect()->back()->with('error', 'Permission denied');
       }
    }
 
    public function viewBlockTeam(){
       $blockteam = BlockTeam::orderby('created_at','desc')->get();
       $data = compact('blockteam');
       return view('admin.pages.ourteam.blockteam.viewBlockTeam')->with($data)->with('no', '1');
    }
 
    public function deleteBlockTeam($id){
       $blockteam = BlockTeam::find($id)->delete();
       if($blockteam){
          return redirect()->route('viewBlockTeam')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    }
}
