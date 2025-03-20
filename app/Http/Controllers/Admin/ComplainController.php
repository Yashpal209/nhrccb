<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Web\Pages\NewComplain;
use Illuminate\Http\Request;

class ComplainController extends Controller
{
    public function viewComplainApplictaion()
    {
        $complainData = NewComplain::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pages.complain.newComplain', compact('complainData'));
    }
    public function ComplainApplictaionStatus()
    {
        $complainData = NewComplain::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pages.complain.ComplainStatus', compact('complainData'));
    }
    public function changeStatus(Request $request)
    {
        // Validate input
        // return $request;
        $request->validate([
            'id' => 'required',
            'status' => 'required|integer|min:0|max:3',
        ]);

        // Find complaint and update status
        $complaint = NewComplain::find($request->id);
        if ($complaint) {
            $complaint->status = $request->status;
            $complaint->resion = $request->resion;
            $complaint->save();

            return redirect()->back()->with('alert', 'Complaint status updated successfully!');
        }

        return redirect()->back()->with('error', 'Complaint not found.');
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
