<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use App\Models\Web\Pages\JoinUs;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
     
    
class JoinUsController extends Controller
{
    public function JoinUs()
    {
        return view('web.pages.join_us.join_us_form');
    }

    public function postJoinUsForm(Request $request)
    {
        // Validation Rules
        $validatedData = $request->validate([
            'state' => 'required|string|max:255',
            'division' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'blocks' => 'required|string|max:255',
            'policeStation' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'fathersName' => 'required|string|max:255',
            'gender' => 'required|string|max:50',
            'dob' => 'required|date',
            'blood_group' => 'required|string|max:11',
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
            'court_cases' => 'required|string',
            'recommended_by' => 'required|string',

            'passport_image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'adhar_front_img' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'adhar_back_img' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'pan_card_img' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
            'other_doc_img' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);
        if (JoinUs::where('mobile', $request->mobile)->exists()) {
            return redirect()->back()
                ->withErrors(['mobile' => 'This mobile number is already registered.'])
                ->with('alert', 'There was an error in your submission. Please check the form.');
        }
        
        // Handle File Uploads
        $validatedData['passport_image'] = $this->uploadFile($request, 'passport_image', 'uploads/join_us/passportImage/');
        $validatedData['adhar_front_img'] = $this->uploadFile($request, 'adhar_front_img', 'uploads/join_us/adharFrontImage/');
        $validatedData['adhar_back_img'] = $this->uploadFile($request, 'adhar_back_img', 'uploads/join_us/adharBackImage/');
        $validatedData['pan_card_img'] = $this->uploadFile($request, 'pan_card_img', 'uploads/join_us/panCardImage/');
        $validatedData['other_doc_img'] = $this->uploadFile($request, 'other_doc_img', 'uploads/join_us/otherDocsImage/');

        // Save Data
        JoinUs::create($validatedData);

        // Redirect with Success Message
        return redirect()->route('thankYou')->with('alert', 'Form submitted successfully.');
    }

    public function thankYou()
    {
        return view('web.pages.join_us.thanku');
    }

    /**
     * Handle File Uploads
     */
    

     
     private function uploadFile(Request $request, $fieldName, $destinationPath)
     {
         if ($request->hasFile($fieldName)) {
             $file = $request->file($fieldName);
             $name = uniqid() . '.' . $file->getClientOriginalExtension();
             $path = $destinationPath . $name;
     
             // Ensure the directory exists
             if (!file_exists($destinationPath)) {
                 mkdir($destinationPath, 0777, true);
             }
     
             // Create ImageManager instance with GD driver
             $manager = new ImageManager(new Driver());
     
             // Load image and resize to 350x350
             $image = $manager->read($file->getRealPath())
                 ->scale(width: 350, height: 350); // Resize to 350x350
     
             // Save the resized image
             $image->save($path);
     
             return $path; // Return the saved image path
         }
         return null;
     }
     
    
}
