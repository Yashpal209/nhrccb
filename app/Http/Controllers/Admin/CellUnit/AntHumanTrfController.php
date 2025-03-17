<?php

namespace App\Http\Controllers\Admin\CellUnit;

use App\Http\Controllers\Controller;
use App\Models\Admin\CellUnit\AntHumanTrf;
use Illuminate\Http\Request;

class AntHumanTrfController extends Controller
{
    public function addAntHmnTrf()
    {
       return view('admin.pages.cellunit.antihumantraffickingcell.addAntiHumanTrafficking');
    }
 
    public function postAntHmnTrf(Request $req)
    {
       $req->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=350,height=350'
      ], [
       'image.dimensions' => 'The image must be exactly 350x350 pixels.']);
      
 
       $antihuman = new AntHumanTrf();
       $antihuman->name = $req->name;
       $antihuman->designation = $req->designation;
 
       $res = $antihuman->save();
 
       if ($req->hasFile('image')) {
          $file = $req->file('image');
          $ext =   $file->getClientOriginalExtension();
          $name = uniqid() . "." . $ext;
          $destinationpath = ('uploads/cellunit/antihumantrf/');
          $file->move($destinationpath, $name);
          $antihuman->image = $destinationpath . $name;
          $antihuman->save();
       }
 
       if ($res) {
          return redirect()->route('addAntHmnTrf')->with('alert', 'Data save Successfully');
       } else {
          return redirect() - back()->with('error', 'Permission denied');
       }
    }
 
    public function viewAntHmnTrf(){
       $antihuman =  AntHumanTrf::orderby('created_at','desc')->get();
       $data = compact('antihuman');
       return view('admin.pages.cellunit.antihumantraffickingcell.viewAntiHumanTrafficking')->with($data)->with('no', '1');
    }
 
    public function deleteAntHmnTrf($id){
       $antihuman =  AntHumanTrf::find($id)->delete();
       if($antihuman){
          return redirect()->route('viewAntHmnTrf')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
 
    }
}
