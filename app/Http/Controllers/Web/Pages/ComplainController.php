<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use App\Models\Web\Pages\NewComplain;
use Illuminate\Support\Facades\Mail;
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
        $latestId = NewComplain::max('id') ?? 0;
        $nextNumber = str_pad($latestId + 1, 2, '0', STR_PAD_LEFT); 
        $complaint->complain_no = 'COMP/' . strtolower(preg_replace('/\s+/', '', $request->mobile)) . '/' . $nextNumber;
        // return $complaint->complain_no;
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
            $destinationPath = 'uploads/newComplain/';
            $uploadPath = $destinationPath . $name;
            $file->move($destinationPath, $name);
            $complaint->attachment = $uploadPath;
        }

        // Mail::send([], [], function ($message) use ($complaint) {
        //     $message->to($complaint->email)
        //         ->subject('Welcome to the NHRCCB Teams')
        //         ->html('<p>Dear ' . $complaint->name . ',</p><p> Your Complain No is : ' .  $complaint->complain_no . ' </p><p>Designation as a ' . $complaint->complain_type . ' </p><p>Thank You For Complaint in the NHRCCB Teams.</p><p>Best regards,<br>NHRCCB</p>');
        // });
        $complaint->save();

        return back()->with('success', 'Complaint submitted successfully. Please check your email for Complain no.');
    }

    public function ComplainStatus()
    {
        return view('web.pages.complain.complainStatus',);
    }

    public function verify(Request $request)
    {
        $request->validate([
            'identifier' => 'required',
        ]);

        $identifier = $request->input('identifier');
        $complain = NewComplain::where('complain_no', $identifier)->first();
        if ($complain) {
            return back()->with('success', 'Complain Found')->with('complain', $complain);
        } else {
            return back()->with('error', 'Complain  not found');
        }
    }
    public function ComplainDashboard()
    {
        $complain = NewComplain::where('status', 0)->orderBy('created_at', 'desc')->get();
        return view('web.pages.complain.complainDashboard')->with('complain');
    }
}
