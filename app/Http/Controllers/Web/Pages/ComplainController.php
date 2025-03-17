<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use App\Models\Web\Pages\NewComplain;
use Illuminate\Http\Request;

class ComplainController extends Controller
{
    public function newComplain()
    {
        return view('web.pages.complain.newComplain');
    }
   
        public function postNewComplainForm(Request $request)
        {
            // Define Validation Rules
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'gender' => 'required|in:male,female',
                'mobile' => 'required|digits:10',
                'complain_type' => 'required|string|max:255',
                'address' => 'required|string',
                'complain_details' => 'required|string',
                'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            ], [
                // Custom error messages (optional)
                'name.required' => 'The name field is required.',
                'email.required' => 'The email field is required.',
                'gender.required' => 'Please select your gender.',
                'mobile.required' => 'The mobile number field is required.',
                'complain_type.required' => 'Please select a complaint type.',
                'address.required' => 'The address field is required.',
                'complain_details.required' => 'Please provide complaint details.',
            ]);

        //    return $request->all();
    
            // Store the form data
            $complaint = new NewComplain();
            $complaint->name = $request->name;
            $complaint->email = $request->email;
            $complaint->gender = $request->gender;
            $complaint->mobile = $request->mobile;
            $complaint->complain_type = $request->complain_type;
            $complaint->address = $request->address;
            $complaint->complain_details = $request->complain_details;
    

          if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationPath = 'uploads/newComplain';
            $uploadPath = $destinationPath . $name;
            $file->move($destinationPath, $name);
            $complaint->attachment = $uploadPath;
        }
    
            // Save form data to the database
            $complaint->save();
            // dd($validatedData);
    
            return redirect()->route('thankYou')->with('alert', 'Complaint submitted successfully.');
        }
   
    public function ComplainStatus()
    {
        return view('web.pages.complain.complainStatus');
    }

    public function ComplainDashboard()
    {
        return view('web.pages.complain.complainDashboard');
    }
}
