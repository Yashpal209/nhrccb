<?php

namespace App\Http\Controllers\Admin\Administration;

use App\Http\Controllers\Controller;
use App\Models\Admin\Administration\OfficeStaff;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class OfficestaffController extends Controller
{
    public function addOfficestaff()
    {
        return view('admin.pages.administration.addofficestaff');
    }
    public function OfficeStaffPost(Request $req)
    {
        $req->validate([
            'staff_image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048|dimensions:width=350,height=350'
        ], [
            'staff_image.dimensions' => 'The image must be exactly 350x350 pixels.'
        ]);
        $officestaff = new OfficeStaff();
        $officestaff->name = $req->name;
        $officestaff->order_no = $req->order_no;
        $officestaff->designation = $req->designation;

        $res = $officestaff->save();

        if ($req->hasFile('staff_image')) {
            $file =  $req->file('staff_image');
            $ext =  $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destination  = ('uploads/officestaff/');
            $file->move($destination, $name);
            $officestaff->staff_image =  $destination . $name;
            $officestaff->save();
        }
        if ($res) {
            return redirect('admin/add-office-staff')->with('alert', 'Data Save Successfully');
        } else {
            return redirect() - back()->with('error', 'Permission denied');
        }
    }
    public function viewOfficestaff()
    {
        $officestaff = OfficeStaff::OrderBy('order_no', 'asc')->get();
        $data = compact('officestaff');
        return view('admin.pages.administration.viewofficestaff')->with($data);
    }

    public function deleteofficestaff($id)
    {

        $officestaff = OfficeStaff::find($id)->delete();
        if ($officestaff) {
            return redirect()->route('viewOfficestaff')->with('alert', 'Data Deleted Successfully');
        } else {
            return redirect() - back()->with('error', 'Permission denied');
        }
    }
}
