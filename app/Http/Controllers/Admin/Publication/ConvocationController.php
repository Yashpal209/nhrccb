<?php

namespace App\Http\Controllers\Admin\Publication;

use App\Http\Controllers\Controller;
use App\Models\Admin\Publication\Convocation;
use Illuminate\Http\Request;

class ConvocationController extends Controller
{
    public function addConvocation()
    {
       return view('admin.pages.publication.convocation.addConvocation');
    }
 
    public function postconvocation(Request $req)
    {     
         $convocation = new Convocation();
          $convocation->title = $req->input('title');
          $convocation->date = $req->input('date');
         $res = $convocation->save(); 
    
        if ($req->hasFile('convocation')) {
            $file = $req->file('convocation');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationPath = 'uploads/publication/convocation/';
            $file->move($destinationPath, $name);
              $convocation->convocation = $destinationPath . $name; 
              $convocation->save();
        }
        if ($res) {
            return redirect()->route('addConvocation')->with('alert', 'Convocation Added successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }
 
    public function viewConvocation(){
         $convocation =  Convocation::orderby('created_at','desc')->get();
       $data = compact('convocation');
       return view('admin.pages.publication.convocation.viewConvocation')->with($data)->with('no', '1');
    }

    public function deleteConvocation($id){
         $convocation = Convocation::find($id)->delete();
       if($convocation){
          return redirect()->route('viewConvocation')->with('alert', 'Data Deleted Successfully');
       }else {
          return redirect()->back()->with('error', 'Permission denied');
       }
 
    }
}
