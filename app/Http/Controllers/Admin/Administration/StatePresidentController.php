<?php

namespace App\Http\Controllers\Admin\Administration;

use App\Http\Controllers\Controller;
use App\Models\Admin\Administration\StatePresident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StatePresidentController extends Controller
{
    // Show add form
    public function addStatePresident()
    {
        $states = [
            'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh',
            'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jharkhand',
            'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur',
            'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab',
            'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telangana', 'Tripura',
            'Uttar Pradesh', 'Uttarakhand', 'West Bengal'
        ];

        return view('admin.pages.administration.addstatepresident', compact('states'));
    }

    // Store data in DB
    public function StatePresidentPost(Request $req)
    {
        // return $req;
        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048|dimensions:width=350,height=350',
        ], [
            'image.dimensions' => 'The image must be exactly 350x350 pixels.'
        ]);

        $statepresident = new StatePresident;
        $statepresident->state = $req->state;
        $statepresident->name = $req->name;
        $statepresident->mobile = $req->mobile;
        $statepresident->designation = $req->designation;
        $statepresident->order_no = $req->order_no;

        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = uniqid() . '.' . $ext;
            $destination = 'uploads/statepresident/';
            $file->move($destination, $filename);
            $statepresident->image = $destination . $filename;
        }

        if ($statepresident->save()) {
            return redirect()->route('viewStatePresident')->with('alert', 'Data saved successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    // View list
    public function viewStatePresident()
    {
        $statepresidents = StatePresident::orderBy('order_no', 'asc')->get();
        return view('admin.pages.administration.viewstatepresident', compact('statepresidents'))->with('no', 1);
    }

    // Delete entry
    public function deleteStatePresident($id)
    {
        $statepresident = StatePresident::find($id);
        if ($statepresident) {
            $imagePath =  $statepresident->image;
            if (file_exists($imagePath) && is_file($imagePath)) {
                unlink($imagePath);
            }

            $statepresident->delete();
            return redirect()->route('viewStatePresident')->with('alert', 'Data deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Record not found');
        }
    }
}
