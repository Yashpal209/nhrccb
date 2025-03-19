<?php

namespace App\Http\Controllers\Admin\OurTeam;

use App\Http\Controllers\Controller;
use App\Models\Admin\OurTeam\Intern;
use Illuminate\Http\Request;

class InternController extends Controller
{
    public function addIntern()
    {
       return view('admin.pages.ourteam.intern.addIntern');
    }
 
    public function postIntern(Request $req)
    {
 
       // return $req->all();
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
      $intern = new Intern();
      $intern->name = $req->name;
      $intern->designation = $req->designation;
       $res =$intern->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =  $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/ourteam/intern/');
          $file->move($destinationpath, $name);
         $intern->image = $destinationpath . $name;
         $intern->save();
       }
 
       if ($res) {
          return redirect()->route('addIntern')->with('alert', 'Data save Successfully');
       } else {
          return redirect()->back()->with('error', 'Permission denied');
       }
    }
 
    public function viewIntern(){
      $intern = Intern::orderby('created_at','desc')->get();
       $data = compact('intern');
       return view('admin.pages.ourteam.intern.viewIntern')->with($data)->with('no', '1');
    }
 
    public function deleteIntern($id){
      $intern = Intern::find($id)->delete();
       if($intern){
          return redirect()->route('viewIntern')->with('alert', 'Data Deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    } 
}
