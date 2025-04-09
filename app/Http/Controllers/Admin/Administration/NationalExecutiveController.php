<?php

namespace App\Http\Controllers\Admin\Administration;

use App\Http\Controllers\Controller;
use App\Models\Admin\Administration\NationalExecutive;
use Illuminate\Http\Request;

class NationalExecutiveController extends Controller
{
    public function addNationalExecutive()
    {
        return view('admin.pages.administration.addnationalexecutive');
    }

    public function NationalExecutivePost(Request $req)
    {
        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048|dimensions:width=350,height=350'
        ], [
            'image.dimensions' => 'The image must be exactly 350x350 pixels.'
        ]);
        $nationalexecutive = new NationalExecutive();
        $nationalexecutive->name = $req->name;
        $nationalexecutive->order_no = $req->order_no;
        $nationalexecutive->designation = $req->designation;
        $res = $nationalexecutive->save();

        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $ext =  $file->getClientOriginalExtension();
            $name = uniqid() . "." .   $ext;
            $destination = ('uploads/nationalexecutive/');
            $file->move($destination, $name);
            $nationalexecutive->image = $destination . $name;
            $res = $nationalexecutive->save();
        }
        if ($res) {
            return redirect()->route('addNationalExecutive')->with('alert', 'Data saved successfully');
        } else {
            return redirect() - back()->with('error', 'Permission denied');
        }
    }

    public function viewNationalExecutive()
    {
        $nationalexecutive = NationalExecutive::orderBy('order_no', 'asc')->get();
        $data = compact('nationalexecutive');
        return view('admin.pages.administration.viewnationalexecutive')->with($data)->with('no', '1');
    }


    public function deleteNationalExecutive($id)
    {
        $nationalexecutive = NationalExecutive::find($id);
        if ($nationalexecutive) {
            $imagePath =$nationalexecutive->image;
            if (file_exists($imagePath) && is_file($imagePath)) {
                unlink($imagePath);
            }
            $nationalexecutive->delete();
            return redirect()->route('viewNationalExecutive')->with('alert', 'Data deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Permission denied');
        }
    }
}
