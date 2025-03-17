<?php

namespace App\Http\Controllers\Admin\Joining;

use App\Http\Controllers\Controller;
use App\Models\Web\Pages\JoinUs;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class JoiningController extends Controller
{
    public function viewJoinApplictaion()
    {
    //    return view('admin.pages.joinus.joiningApplication');
        $joinApp = JoinUs::orderBy('created_at', 'desc')->get();
        $data = compact('joinApp');
        return view('admin.pages.joinus.joiningApplication')->with($data)->with('no', '1');
    }
    public function deleteJoinApplictaion($id)
    {  
        $joinApp = JoinUs::find($id);
        $joinApp->delete();
        if ($joinApp) {
            return redirect()->route('viewJoinApplictaion')->with('alert', 'Application Deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }     
    }
}
