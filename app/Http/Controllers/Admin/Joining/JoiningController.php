<?php

namespace App\Http\Controllers\Admin\Joining;

use App\Http\Controllers\Controller;
use App\Models\Web\Pages\JoinUs;
use Illuminate\Http\Request;

class JoiningController extends Controller
{
    // Display all applications
    public function viewJoinApplication()
    {
        $joinApp = JoinUs::where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('admin.pages.joinus.joiningApplication', compact('joinApp'))->with('no', 1);
    }

    // Display only approved applications
    public function Application()
    {
        $joinApp = JoinUs::where('status', 2)->orderBy('created_at', 'desc')->get();
        return view('admin.pages.joinus.Application', compact('joinApp'));
    }

    // Change application status
    public function ChangeStatusApplication(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:join_us_form,id',
            'status' => 'required|integer|min:1|max:3',
        ]);

        $joinApp = JoinUs::find($request->id);

        if (!$joinApp) {
            return redirect()->route('viewJoinApplication')->with('error', 'Application not found!');
        }

        // Define level-based prefixes
        $prefixes = [
            'NATIONAL TEAM' => 'NHRCCB/NT/',
            'STATE TEAM' => 'NHRCCB/ST/',
            'DISTRICT TEAM' => 'NHRCCB/DT/',
            'DIVISION TEAM' => 'NHRCCB/VT/',
            'BLOCK TEAM' => 'NHRCCB/BT/',
            'ACTIVE MEMBERSHIP' => 'NHRCCB/AM/',
            'VOLUNTEER' => 'NHRCCB/VL/',
            'DEFAULT' => 'NHRCCB/OT/', // Default for any other level
        ];

        // Determine the prefix based on the level
        $prefix = $prefixes[$joinApp->level] ?? $prefixes['DEFAULT'];

        // Generate registration number dynamically
        $reg_no = $prefix . (60000 + $joinApp->id);

        // Update application status and reg_no
        $joinApp->reg_no = $reg_no;
        $joinApp->status = $request->status;
        $joinApp->updated_at = now();
        // return $joinApp;
        $joinApp->save();

        return redirect()->back()->with('alert', 'Application status updated successfully!');
    }


    // Delete an application
    public function deleteJoinApplication($id)
    {
        $joinApp = JoinUs::find($id);
        if ($joinApp) {
            $joinApp->delete();
            return redirect()->route('viewJoinApplication')->with('alert', 'Application deleted successfully!');
        }
        return redirect()->back()->with('error', 'Application not found!');
    }
}
