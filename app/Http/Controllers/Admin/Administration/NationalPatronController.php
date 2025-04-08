<?php

namespace App\Http\Controllers\Admin\Administration;

use App\Http\Controllers\Controller;
use App\Models\Admin\Administration\NationalPatron;
use Illuminate\Http\Request;

class NationalPatronController extends Controller
{
   public function addNationalPatron()
   {
      return view('admin.pages.administration.addnationalpatron');
   }

   public function addNationalPatronPost(Request $req)
   {
       $req->validate([
           'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048|dimensions:width=350,height=350'
       ], [
           'image.dimensions' => 'The image must be exactly 350x350 pixels.'
       ]);
   
       $nationalpatron = new NationalPatron();
       $nationalpatron->name = $req->name;
       $nationalpatron->type = $req->type;
       $nationalpatron->designation = $req->designation;
   
       if ($req->hasFile('image')) {
           $file = $req->file('image');
           $ext = $file->getClientOriginalExtension();
           $name = uniqid() . '.' . $ext;
           $destinationPath = 'uploads/nationalpatron';
   
           // Ensure the directory exists
           if (!file_exists($destinationPath)) {
               mkdir($destinationPath, 0755, true);
           }
   
           $file->move($destinationPath, $name);
           $nationalpatron->image = 'uploads/nationalpatron/' . $name;
       }
      //  return $nationalpatron;
       $res = $nationalpatron->save();
   
       if ($res) {
           return redirect()->route('addNationalPatron')->with('alert', 'Data saved successfully');
       } else {
           return redirect()->back()->with('error', 'Something went wrong');
       }
   }
   

   public function viewNationalPatron(){
      $nationalpatronlist = NationalPatron::orderby('created_at','asc')->get();
      $data = compact('nationalpatronlist');
      return view('admin.pages.administration.viewnationalpatron')->with($data);
   }

   public function deleteNationalPatron($id)
   {
       $nationalpatron = NationalPatron::find($id);
      //  return $nationalpatron;
       if ($nationalpatron) {
           $imagePath =  $nationalpatron->image;
           if (file_exists($imagePath) && is_file($imagePath)) {
               unlink($imagePath);
           }
           $nationalpatron->delete();
           return redirect()->route('viewNationalPatron')->with('alert', 'Data deleted Successfully');
       } else {
           return redirect()->back()->with('error', 'Permission denied');
       }
   }
   
   
}
