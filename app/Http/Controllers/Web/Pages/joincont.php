<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use App\Models\Web\Pages\JoinUs;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class JoinUsController extends Controller
{
    public function postJoinUsForm(Request $req)
    {  
        return $req->all();
        // Validate the incoming data
        $validatedData = $request->validate([
            'state' => 'required|string|max:255',
            'division' => 'required|string|max:255',
            'districts' => 'required|string|max:255',
            'blocks' => 'required|string|max:255',
        ]);
        $validator = Validator::make($request->all(), [
            // 'state' => 'required|string',
            // 'division' => 'required|string',
            // 'districts' => 'required|string',
            // 'blocks' => 'required|string',
            // 'policeStation' => 'required|string',
            // 'name' => 'required|string|max:255',
            // 'fathersName' => 'required|string|max:255',
            // 'address' => 'required|string',
            // 'mobile' => 'required|string',
            // 'whatsappNumber' => 'required|string',
            // 'email' => 'required|email',
            // 'current_work' => 'required|string',
            // 'adhar_no' => 'required|string',
            // 'pan_card_no' => 'required|string',
            // 'wing' => 'required|string',
            // 'level' => 'required|string',
            // 'designation' => 'required|string',
            // 'gender' => 'required|string',
            // 'blood_group' => 'required|string',
            // 'qualification' => 'required|string',
            // 'maritial_status' => 'required|string',
            // 'dob' => 'required|date',
            // 'member_of_any_pol_party' => 'required|string',
            // 'member_social_org' => 'required|string',
            // 'court_cases' => 'required|string',
            // 'recommended_by_id' => 'required|string',
            // 'passport_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            // 'adhar_front_img' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            // 'adhar_back_img' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            // 'pan_card_img' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            // 'other_doc_img' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // If validation fails, return back with errors
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // Store the form data
        $formData = new JoinUs();
        $formData->state = $request->state;
        $formData->division = $request->division;
        $formData->districts = $request->districts;
        $formData->blocks = $request->blocks;
        $formData->policeStation = $request->policeStation;
        // $formData->name = $request->name;
        // $formData->fathersName = $request->fathersName;
        // $formData->address = $request->address;
        // $formData->mobile = $request->mobile;
        // $formData->whatsappNumber = $request->whatsappNumber;
        // $formData->email = $request->email;
        // $formData->current_work = $request->current_work;
        // $formData->adhar_no = $request->adhar_no;
        // $formData->pan_card_no = $request->pan_card_no;
        // $formData->wing = $request->wing;
        // $formData->level = $request->level;
        // $formData->designation = $request->designation;
        // $formData->gender = $request->gender;
        // $formData->blood_group = $request->blood_group;
        // $formData->qualification = $request->qualification;
        // $formData->maritial_status = $request->maritial_status;
        // $formData->dob = $request->dob;
        // $formData->member_of_any_pol_party = $request->member_of_any_pol_party;
        // $formData->member_social_org = $request->member_social_org;
        // $formData->court_cases = $request->court_cases;
        // $formData->recommended_by_id = $request->recommended_by_id;

        // if ($request->hasFile('passport_image')) {
        //     $file = $request->file('passport_image');
        //     $ext = $file->getClientOriginalExtension();
        //     $name = uniqid() . "." . $ext;
        //     $destinationPath = 'uploads/join_us/passportImage/';
        //     $uploadPath = $destinationPath . $name;
        //     $file->move($destinationPath, $name);
        //     $formData->passport_image = $uploadPath;
        // }

        // if ($request->hasFile('adhar_front_img')) {
        //     $file = $request->file('adhar_front_img');
        //     $ext = $file->getClientOriginalExtension();
        //     $name = uniqid() . "." . $ext;
        //     $destinationPath = 'uploads/join_us/adharFrontImage/';
        //     $uploadPath = $destinationPath . $name;
        //     $file->move($destinationPath, $name);
        //     $formData->adhar_front_img = $uploadPath;
        // }

        // if ($request->hasFile('adhar_back_img')) {
        //     $file = $request->file('adhar_back_img');
        //     $ext = $file->getClientOriginalExtension();
        //     $name = uniqid() . "." . $ext;
        //     $destinationPath = 'uploads/join_us/adharBackImage/';
        //     $uploadPath = $destinationPath . $name;
        //     $file->move($destinationPath, $name);
        //     $formData->adhar_back_img = $uploadPath;
        // }

        // if ($request->hasFile('pan_card_img')) {
        //     $file = $request->file('pan_card_img');
        //     $ext = $file->getClientOriginalExtension();
        //     $name = uniqid() . "." . $ext;
        //     $destinationPath = 'uploads/join_us/panCardImage/';
        //     $uploadPath = $destinationPath . $name;
        //     $file->move($destinationPath, $name);
        //     $formData->pan_card_img = $uploadPath;
        // }

        // if ($request->hasFile('other_doc_img')) {
        //     $file = $request->file('other_doc_img');
        //     $ext = $file->getClientOriginalExtension();
        //     $name = uniqid() . "." . $ext;
        //     $destinationPath = 'uploads/join_us/otherDocsImage/';
        //     $uploadPath = $destinationPath . $name;
        //     $file->move($destinationPath, $name);
        //     $formData->other_doc_img = $uploadPath;
        // }


        // Save form data to the database
        // $formData->save();

        // Redirect with success message
        // return redirect()->route('join.us.form')->with('success', 'Form submitted successfully.');
    }
}
