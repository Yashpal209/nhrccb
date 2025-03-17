<?php

namespace App\Http\Controllers\Admin\Publication;

use App\Http\Controllers\Controller;
use App\Models\Admin\Publication\AnnualReport;
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
    
 
    public function viewAnnualReport(){
       $annualreport =  AnnualReport::orderby('created_at','desc')->get();
       $data = compact('annualreport');
       return view('admin.pages.publication.annualreport.viewAnnualReport')->with($data)->with('no', '1');
    }
 
    public function deleteannualReport($id){
       $annualreport =  AnnualReport::find($id)->delete();
       if($annualreport){
          return redirect()->route('viewAnnualReport')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
 
    }
}
