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

      // return $req->all();
      $req->validate([
         'patron_image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048|dimensions:width=350,height=350'
     ], [
      'patron_image.dimensions' => 'The image must be exactly 350x350 pixels.']);
     

      $nationalpatron = new NationalPatron();
      $nationalpatron->name = $req->name;
      $nationalpatron->order_no = $req->order_no;
      $nationalpatron->designation = $req->designation;

      $res = $nationalpatron->save();

      if ($req->hasFile('patron_image')) {
         $file = $req->file('patron_image');
         $ext =   $file->getClientOriginalExtension();
         $name = uniqid() . "." . $ext;
         $destinationpath = ('uploads/nationalpatron/');
         $file->move($destinationpath, $name);
         $nationalpatron->patron_image = $destinationpath . $name;
         $nationalpatron->save();
      }

      if ($res) {
         return redirect('admin/add-national-patron')->with('alert', 'Data save Successfully');
      } else {
         return redirect() - back()->with('error', 'Permission denied');
      }
   }

   public function viewNationalPatron(){
      $nationalpatronlist = NationalPatron::orderby('order_no','asc')->get();
      $data = compact('nationalpatronlist');
      return view('admin.pages.administration.viewnationalpatron')->with($data);
   }

   public function deleteNationalPatron($id){
      $nationalpatron = NationalPatron::find($id)->delete();
      if($nationalpatron){
         return redirect('admin/view-national-patron')->with('alert', 'Data deleted Successfully');
      }else {
         return redirect() - back()->with('error', 'Permission denied');
      }

   }
}
