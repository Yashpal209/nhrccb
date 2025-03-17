<?php

namespace App\Http\Controllers\Admin\OurTeam;

use App\Http\Controllers\Controller;
use App\Models\Admin\OurTeam\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function addVolunteer()
    {
       return view('admin.pages.ourteam.volunteer.addVolunteer');
    }
 
    public function postVolunteer(Request $req)
    {
 
       // return $req->all();
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
      $volunteer = new Volunteer();
      $volunteer->name = $req->name;
      $volunteer->designation = $req->designation;
       $res =$volunteer->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =  $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/ourteam/volunteer/');
          $file->move($destinationpath, $name);
         $volunteer->image = $destinationpath . $name;
         $volunteer->save();
       }
 
       if ($res) {
          return redirect()->route('addVolunteer')->with('alert', 'Data save Successfully');
       } else {
          return redirect()->back()->with('error', 'Permission denied');
       }
    }
 
    public function viewVolunteer(){
      $volunteer = Volunteer::orderby('created_at','desc')->get();
       $data = compact('volunteer');
       return view('admin.pages.ourteam.volunteer.viewVolunteer')->with($data)->with('no', '1');
    }
 
    public function deleteVolunteer($id){
      $volunteer = Volunteer::find($id)->delete();
       if($volunteer){
          return redirect()->route('viewVolunteer')->with('alert', 'Data Deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    }
}
