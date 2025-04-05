<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InternshipController extends Controller
{
    public function internshipGuideline()
    {
        return view('web.pages.tranning.internshipguideline');
    }

    public function shortTerm()
    {
        return view('web.pages.tranning.shortTerm');
    }

    public function winter()
    {
        return view('web.pages.tranning.winter');
    }

    public function summer()
    {
        return view('web.pages.tranning.summer');
    }

    public function apply()
    {
        return view('web.pages.tranning.apply');
    }

    public function applyInternship(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'full_name'   => 'required|string|max:255',
            'email'       => 'required|email|unique:internships,email|max:255',
            'phone'       => 'required|string|max:20',
            'education'   => 'required|string|max:255',
            'type'        => 'required|string|max:255',
            'university'  => 'required|string|max:255',
            'reason'      => 'required|string|max:1000',
            'resume'      => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');

            // Check if the file is valid
            if (!$file->isValid()) {
                return back()->withErrors(['resume' => 'Invalid file upload.']);
            }

            // Generate unique filename
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();

            // Store file in storage/app/public/uploads/internships/
            $path = $file->storeAs('uploads/internships', $filename, 'public');

            // Check if file was stored successfully
            if (!$path) {
                return back()->withErrors(['resume' => 'File upload failed.']);
            }

            // Save the path to store in the database
            $validatedData['resume'] = 'storage/' . $path;
        }

        // Create and save the Internship record
        Internship::create($validatedData);

        return redirect()->back()->with('success', 'Internship application submitted successfully.');
    }
}
