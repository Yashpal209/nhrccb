<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Web\Pages\NewComplain;
use Illuminate\Http\Request;

class ComplainController extends Controller
{   
    public function viewComplainApplictaion()
    {
   
        $complainData = NewComplain::orderBy('created_at', 'desc')->get();
        $data = compact('complainData');
        return view('admin.pages.complain.newComplain')->with($data)->with('no', '1');
    }

    public function deleteCompApplictaion($id)
    {  
        $compApp = NewComplain::find($id);
        $compApp->delete();
        if ($compApp) {
            return redirect()->route('viewComplainApplictaion')->with('alert', 'Application Deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }     
    }
}
