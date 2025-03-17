<?php

namespace App\Http\Controllers\Admin\Publication;

use App\Http\Controllers\Controller;
use App\Models\Admin\Publication\MonthlyReport as PublicationMonthlyReport;
use Illuminate\Http\Request;

class MonthlyReport extends Controller
{
    public function addMonthlyReport()
    {
       return view('admin.pages.publication.monthlyreport.addMonthlyReport');
    }
 
    public function postMonthlyReport(Request $req)
    {
        // return $req->all();
        $monthlyreport = new PublicationMonthlyReport(); // 
        $monthlyreport->title = $req->input('title');
        $monthlyreport->date = $req->input('date');
        $res = $monthlyreport->save(); 
    
        if ($req->hasFile('report')) {
            $file = $req->file('report');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationPath = 'uploads/publication/monthlyreport/';
            $file->move($destinationPath, $name);
            $monthlyreport->report = $destinationPath . $name; 
            $monthlyreport->save();
        }
    
        if ($res) {
            return redirect()->route('addMonthlyReport')->with('alert', 'Monthly Report Added successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }
    
 
    public function viewMonthlyReport(){
       $monthlyreport =  PublicationMonthlyReport::orderby('created_at','desc')->get();
       $data = compact('monthlyreport');
       return view('admin.pages.publication.monthlyreport.viewMonthlyReport')->with($data)->with('no', '1');
    }
 
    public function deleteMonthlyReport($id){
       $monthlyreport =  PublicationMonthlyReport::find($id)->delete();
       if($monthlyreport){
          return redirect()->route('viewMonthlyReport')->with('alert', 'Data deleted Successfully');
       }else {
          return redirect() - back()->with('error', 'Permission denied');
       }
 
    }
}
