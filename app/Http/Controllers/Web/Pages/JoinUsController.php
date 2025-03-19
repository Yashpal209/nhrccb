<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use App\Models\Web\Pages\JoinUs;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class JoinUsController extends Controller
{
    public function postJoinUsForm(Request $request)
    {
        // Define Validation Rules
        // return $request->all();
        $validatedData = $request->validate([
            'state' => 'required',
            'division' => 'required',
            'districts' => 'required',
            'blocks' => 'required',
            'policeStation' => 'required',
            'wing' => 'required',
            'level' => 'required',
            'designation' => 'required',
            'name' => 'required',
            'fathersName' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'blood_group' => 'required',
            'address' => 'required',
            'mobile' => 'required|digits:10',
            'whatsappNumber' => 'required|digits:10',
            'email' => 'required',
            'qualification' => 'required',
            'current_work' => 'required',
            'adhar_no' => 'required|digits:12',
            'pan_card_no' => 'required|max:10',
            'maritial_status' => 'required',
            'member_of_any_pol_party' => 'required',
            'member_social_org' => 'required',
            // 'court_cases' => 'required',
            'recommended_by' => 'required',
            'passport_image' => 'required',
            'adhar_front_img' => 'required',
            'adhar_back_img' => 'required',
            'pan_card_img' => 'nullable',
            'other_doc_img' => 'nullable',
        ]);
        // Store the form data
        $formData = new JoinUs();
        $formData->state = $request->state;
        $formData->division = $request->division;
        $formData->districts = $request->districts;
        $formData->blocks = $request->blocks;
        $formData->policeStation = $request->policeStation;
        $formData->wing = $request->wing;
        $formData->level = $request->level;
        $formData->designation = $request->designation;
        $formData->name = $request->name;
        $formData->fathersName = $request->fathersName;
        $formData->gender = $request->gender;
        $formData->dob = $request->dob;
        $formData->blood_group = $request->blood_group;
        $formData->address = $request->address;
        $formData->mobile = $request->mobile;
        $formData->whatsappNumber = $request->whatsappNumber;
        $formData->email = $request->email;
        $formData->qualification = $request->qualification;
        $formData->current_work = $request->current_work;
        $formData->adhar_no = $request->adhar_no;
        $formData->pan_card_no = $request->pan_card_no;
        $formData->marital_status = $request->marital_status;
        $formData->member_of_any_pol_party = $request->member_of_any_pol_party;
        $formData->member_social_org = $request->member_social_org;
        $formData->court_cases = $request->court_cases;
        $formData->recommended_by = $request->recommended_by;
        $formData->fill($validatedData);

        // File upload helper
        function uploadFile($request, $fieldName, $folder)
        {
            if ($request->hasFile($fieldName)) {
                $file = $request->file($fieldName);
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                $filePath = $file->storeAs("public/uploads/join_us/$folder", $fileName);
                return str_replace("public/", "storage/", $filePath);
            }
            return null;
        }

        // Upload images
        $formData->passport_image = uploadFile($request, 'passport_image', 'passportImage');
        $formData->adhar_front_img = uploadFile($request, 'adhar_front_img', 'adharFrontImage');
        $formData->adhar_back_img = uploadFile($request, 'adhar_back_img', 'adharBackImage');
        $formData->pan_card_img = uploadFile($request, 'pan_card_img', 'panCardImage');
        $formData->other_doc_img = uploadFile($request, 'other_doc_img', 'otherDocsImage');

        // Save form data to the database
        $formData->save();

        return redirect()->route('thankYou')->with('success', 'Form submitted successfully.');
    }

    public function thankYou()
    {
        return view('web.pages.join_us.thanku');
    }
}
