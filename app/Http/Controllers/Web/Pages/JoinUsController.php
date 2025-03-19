<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use App\Models\Web\Pages\JoinUs;
use Illuminate\Http\Request;

class JoinUsController extends Controller
{

    public function JoinUs()
    {
        return view('web.pages.join_us.join_us_form');
    }
    public function postJoinUsForm(Request $request)
    {
        // return $request->all();
        // Define Validation Rules
        $validatedData = $request->validate([
            'state' => 'required|string|max:255',
            'division' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'blocks' => 'required|string|max:255',
            'policeStation' => 'required|string|max:255',
            'wing' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'fathersName' => 'required|string|max:255',
            'gender' => 'required|string|max:50',
            'dob' => 'required|date',
            'blood_group' => 'required|string|max:10',
            'address' => 'required|string|max:500',
            'mobile' => 'required|digits:10',
            'whatsappNumber' => 'required|digits:10',
            'email' => 'required|email|max:255',

            'qualification' => 'required|string',
            'current_work' => 'required|string|max:255',
            'adhar_no' => 'required|digits:12',
            'pan_card_no' => 'required|string|max:10',
            'maritial_status' => 'required|string|in:married,unmarried',
            'member_of_any_pol_party' => 'required|string|in:Yes,No',
            'member_social_org' => 'required|string|in:yes,no',
            'court_cases' => 'required',
            'recommended_by' => 'required|string',

            'passport_image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'adhar_front_img' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'adhar_back_img' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'pan_card_img' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
            'other_doc_img' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
    
        ], [
            // Custom error messages (optional)
            'state.required' => 'The state field is required.',
            'division.required' => 'The division field is required.',
            'districts.required' => 'The districts field is required.',
            'blocks.required' => 'The blocks field is required.',
            'policeStation.required' => 'The police station field is required.',
            'wing.required' => 'The Wing field is required.',

            'level.required' => 'The level field is required.',
            'designation.required' => 'The designation field is required.',
            'name.required' => 'The name field is required.',
            'fathersName.required' => "The father's/husband's name field is required.",
            'gender.required' => 'The gender field is required.',
            'dob.required' => 'The date of birth is required.',
            'blood_group.required' => 'The blood group field is required.',
            'address.required' => 'The address field is required.',
            'mobile.required' => 'The mobile number is required.',
            'mobile.digits' => 'The mobile number must be 10 digits.',
            'whatsappNumber.required' => 'The WhatsApp number is required.',
            'whatsappNumber.digits' => 'The WhatsApp number must be 10 digits.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',

            'qualification.required' => 'Qualification is required.',
            'current_work.required' => 'Current Work is required.',
            'adhar_no.required' => 'Aadhar Number is required.',
            'adhar_no.digits' => 'Aadhar Number must be exactly 12 digits.',
            'pan_card_no.required' => 'PAN Card Number is required.',
            'pan_card_no.max' => 'PAN Card Number should not exceed 10 characters.',
            'maritial_status.required' => 'Marital Status is required.',
            'maritial_status.in' => 'Please select a valid marital status (Married or Unmarried).',
            'member_of_any_pol_party.required' => 'Please specify if you are a member of any political party.',
            'member_of_any_pol_party.in' => 'Please choose Yes or No for Political Party Membership.',
            'member_social_org.required' => 'Please specify if you are a member of any social organization.',
            'member_social_org.in' => 'Please choose Yes or No for Social Organization Membership.',
            'court_cases.required' => 'Please specify if you have any court cases.',
            'court_cases.in' => 'Please choose Yes or No for Court Cases.',
            'recommended_by_id.required' => 'Recommended By ID is required.',

            'passport_image.required' => 'The passport size image is required.',
            'passport_image.image' => 'The file must be an image.',
            'passport_image.mimes' => 'The image must be a file of type: jpeg, png, jpg, webp.',
            'passport_image.max' => 'The image size must not exceed 2MB.',

            'adhar_front_img.required' => 'The Adhar Front Side image is required.',
            'adhar_front_img.image' => 'The file must be an image.',
            'adhar_front_img.mimes' => 'The image must be a file of type: jpeg, png, jpg, webp.',
            'adhar_front_img.max' => 'The image size must not exceed 2MB.',

            'adhar_back_img.required' => 'The Adhar Back Side image is required.',
            'adhar_back_img.image' => 'The file must be an image.',
            'adhar_back_img.mimes' => 'The image must be a file of type: jpeg, png, jpg, webp.',
            'adhar_back_img.max' => 'The image size must not exceed 2MB.',

            'pan_card_img.required' => 'The PAN Card image is required.',
            'pan_card_img.image' => 'The file must be an image.',
            'pan_card_img.mimes' => 'The image must be a file of type: jpeg, png, jpg, webp.',
            'pan_card_img.max' => 'The image size must not exceed 2MB.',

            'other_doc_img.required' => 'The  image is required.',
            'other_doc_img.image' => 'The file must be an image.',
            'other_doc_img.mimes' => 'The image must be a file of type: jpeg, png, jpg, webp.',
            'other_doc_img.max' => 'The image size must not exceed 2MB.',
           
        ]);

          // Store the form data
          $formData = new JoinUs();
          $formData->state = $request->state;
          $formData->division = $request->division;
          $formData->district = $request->districts;
          $formData->blocks = $request->blocks;
          $formData->policeStation = $request->policeStation;
          $formData->name = $request->name;
          $formData->fathersName = $request->fathersName;
          $formData->address = $request->address;
          $formData->mobile = $request->mobile;
          $formData->whatsappNumber = $request->whatsappNumber;
          $formData->email = $request->email;
          $formData->current_work = $request->current_work;
          $formData->adhar_no = $request->adhar_no;
          $formData->pan_card_no = $request->pan_card_no;
          $formData->wing = $request->wing;
          $formData->level = $request->level;
          $formData->designation = $request->designation;
          $formData->gender = $request->gender;
          $formData->blood_group = $request->blood_group;
          $formData->qualification = $request->qualification;
          $formData->maritial_status = $request->maritial_status;
          $formData->dob = $request->dob;
          $formData->member_of_any_pol_party = $request->member_of_any_pol_party;
          $formData->member_social_org = $request->member_social_org;
          $formData->court_cases = $request->court_cases;
          $formData->recommended_by= $request->recommended_by;
  
          if ($request->hasFile('passport_image')) {
              $file = $request->file('passport_image');
              $ext = $file->getClientOriginalExtension();
              $name = uniqid() . "." . $ext;
              $destinationPath = 'uploads/join_us/passportImage/';
              $uploadPath = $destinationPath . $name;
              $file->move($destinationPath, $name);
              $formData->passport_image = $uploadPath;
          }
  
          if ($request->hasFile('adhar_front_img')) {
              $file = $request->file('adhar_front_img');
              $ext = $file->getClientOriginalExtension();
              $name = uniqid() . "." . $ext;
              $destinationPath = 'uploads/join_us/adharFrontImage/';
              $uploadPath = $destinationPath . $name;
              $file->move($destinationPath, $name);
              $formData->adhar_front_img = $uploadPath;
          }
  
          if ($request->hasFile('adhar_back_img')) {
              $file = $request->file('adhar_back_img');
              $ext = $file->getClientOriginalExtension();
              $name = uniqid() . "." . $ext;
              $destinationPath = 'uploads/join_us/adharBackImage/';
              $uploadPath = $destinationPath . $name;
              $file->move($destinationPath, $name);
              $formData->adhar_back_img = $uploadPath;
          }
  
          if ($request->hasFile('pan_card_img')) {
              $file = $request->file('pan_card_img');
              $ext = $file->getClientOriginalExtension();
              $name = uniqid() . "." . $ext;
              $destinationPath = 'uploads/join_us/panCardImage/';
              $uploadPath = $destinationPath . $name;
              $file->move($destinationPath, $name);
              $formData->pan_card_img = $uploadPath;
          }
  
          if ($request->hasFile('other_doc_img')) {
              $file = $request->file('other_doc_img');
              $ext = $file->getClientOriginalExtension();
              $name = uniqid() . "." . $ext;
              $destinationPath = 'uploads/join_us/otherDocsImage/';
              $uploadPath = $destinationPath . $name;
              $file->move($destinationPath, $name);
              $formData->other_doc_img = $uploadPath;
          }
  
  
          // Save form data to the database
          $formData->save();

        //   alert("Data Saved");
  
          // Redirect with success message
          return redirect()->route('thankYou')->with('alert', 'Form submitted successfully.');

        // Process Data (e.g., Save to Database)
        // return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    

    public function thankYou()
    {
        return view('web.pages.join_us.thanku');
    }
}
