<?php

namespace App\Http\Controllers\Admin\Administration;

use App\Http\Controllers\Controller;
use App\Models\Admin\Administration\NationalAdvisor;
use Illuminate\Http\Request;

class NationalAdvisorController extends Controller
{
    public function addNationalAdvisor(){
        return view('admin.pages.administration.addnationaladvisor');
    }

    public function NationalAdvisorPost(Request $req){
        $req->validate([
            'advisor_image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048|dimensions:width=350,height=350'
        ], [
         'advisor_image.dimensions' => 'The image must be exactly 350x350 pixels.']);
         $nationaladvisor = new NationalAdvisor();
         $nationaladvisor->name = $req->name;
         $nationaladvisor->order_no = $req->order_no;
         $nationaladvisor->designation = $req->designation;
         $res = $nationaladvisor->save();

         if($req->hasFile('advisor_image')){
            $file = $req->file('advisor_image');
            $ext =  $file->getClientOriginalExtension();
            $name = uniqid(). ".".   $ext ;
            $destination = ('uploads/nationaladvisor/'); 
            $file->move($destination ,$name );
            $nationaladvisor->advisor_image = $destination.$name;
            $res = $nationaladvisor->save();
         }
         if($res){
            return redirect('admin/add-national-advisor')->with('alert', 'Data save Successfully');
         }else {
            return redirect() - back()->with('error', 'Permission denied');
         }
    }

    public function viewNationalAdvisor(){
        $nationaladvisor = NationalAdvisor::orderBy('order_no', 'asc')->get();
        $data = compact('nationaladvisor');
        return view('admin.pages.administration.viewnationaladvisor')->with($data)->with('no', '1');
    }

    public function deleteNationalAdvisor($id){
        $nationaladvisor = NationalAdvisor::find($id)->delete();
        if($nationaladvisor){
           return redirect('admin/view-national-advisor')->with('alert', 'Data deleted Successfully');
        }else {
           return redirect() - back()->with('error', 'Permission denied');
        }
    }
}
