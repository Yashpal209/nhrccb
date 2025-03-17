<?php

namespace App\Http\Controllers\Admin\OurTeam;

use App\Http\Controllers\Controller;
use App\Models\Admin\OurTeam\ActiveMember;
use Illuminate\Http\Request;

class ActiveMemberController extends Controller
{
    public function addActiveTeam()
    {
       return view('admin.pages.ourteam.activemember.addActiveMember');
    }
 
    public function postActiveTeam(Request $req)
    {
 
       // return $req->all();
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
       $activemember = new ActiveMember();
       $activemember->name = $req->name;
       $activemember->designation = $req->designation;
       $res = $activemember->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =  $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/ourteam/activeteam/');
          $file->move($destinationpath, $name);
          $activemember->image = $destinationpath . $name;
          $activemember->save();
       }
 
       if ($res) {
          return redirect()->route('addActiveTeam')->with('alert', 'Data save Successfully');
       } else {
          return redirect()->back()->with('error', 'Permission denied');
       }
    }
 
    public function viewActiveTeam(){
       $activemember = ActiveMember::orderby('created_at','desc')->get();
       $data = compact('activemember');
       return view('admin.pages.ourteam.activemember.viewActiveMember')->with($data)->with('no', '1');
    }
 
    public function deleteActiveTeam($id){
       $activemember = ActiveMember::find($id)->delete();
       if($activemember){
          return redirect()->route('viewActiveTeam')->with('alert', 'Data Deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    }
}
