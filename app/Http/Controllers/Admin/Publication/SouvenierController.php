<?php

namespace App\Http\Controllers\Admin\Publication;

use App\Http\Controllers\Controller;
use App\Models\Admin\Publication\Souvenier;
use Illuminate\Http\Request;

class SouvenierController extends Controller
{
    public function addSouvenier()
    {
       return view('admin.pages.publication.souvenier.addSouvenier');
    }
 
    public function postSouvenier(Request $req)
    {
        // return $req->all();
        $souvenier = new Souvenier();
        $souvenier->title = $req->input('title');
        $souvenier->date = $req->input('date');
        $res = $souvenier->save(); 
    
        if ($req->hasFile('souvenier')) {
            $file = $req->file('souvenier');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationPath = 'uploads/publication/souvenier/';
            $file->move($destinationPath, $name);
            $souvenier->souvenier = $destinationPath . $name; 
            $souvenier->save();
        }
    
        if ($res) {
            return redirect()->route('addSouvenier')->with('alert', 'Souvenier Added successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }
    
 
    public function viewSouvenier(){
       $souvenier =  Souvenier::orderby('created_at','desc')->get();
       $data = compact('souvenier');
       return view('admin.pages.publication.souvenier.viewSouvenier')->with($data)->with('no', '1');
    }
 
    public function deleteSouvenier($id){
       $souvenier =  Souvenier::find($id)->delete();
       if($souvenier){
          return redirect()->route('viewSouvenier')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
 
    }
}
