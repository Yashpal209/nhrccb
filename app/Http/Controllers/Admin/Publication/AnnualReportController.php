<?php

namespace App\Http\Controllers\Admin\Publication;

use App\Http\Controllers\Controller;
use App\Models\Admin\Publication\AnnualReport;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class AnnualReportController extends Controller
{
    public function addAnnualReport()
    {
        return view('admin.pages.publication.annualreport.addAnnualReport');
    }

    public function postAnnualReport(Request $req)
    {
        // return $req->all();
        $annualreport = new AnnualReport();
        $annualreport->title = $req->input('title');
        $annualreport->date = $req->input('date');
        $res = $annualreport->save();

        if ($req->hasFile('report')) {
            $file = $req->file('report');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationPath = 'uploads/publication/annualreport/';
            $file->move($destinationPath, $name);
            $annualreport->report = $destinationPath . $name;
            $annualreport->save();
        }

        if ($res) {
            return redirect()->route('addAnnualReport')->with('alert', 'annual Report Added successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }


    public function viewAnnualReport()
    {
        $annualreport = AnnualReport::orderBy('created_at', 'desc')->paginate(10); // 10 per page
        return view('admin.pages.publication.annualreport.viewAnnualReport', compact('annualreport'))
            ->with('no', ($annualreport->currentPage() - 1) * $annualreport->perPage() + 1);
    }

    public function deleteannualReport($id)
    {
        $annualreport = AnnualReport::find($id);
        if ($annualreport) {
            $filePath = $annualreport->report; // or $annualreport->image
            if (!empty($filePath) && File::exists($filePath)) {
                File::delete($filePath);
            }
            $annualreport->delete();
            return redirect()->route('viewAnnualReport')->with('alert', 'Data deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Permission denied');
        }
    }
}
