<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Illuminate\Http\Request;

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
        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email|unique:internships',
            'phone' => 'required',
            'education' => 'required|string',
            'type' => 'required|string',
            'university' => 'required|string',
            'reason' => 'required|string',
            'resume' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
        ]);
    
        // Handle file upload
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('uploads/internships', $filename, 'public');
            $validatedData['resume'] = 'storage/' . $path;
        }
    
        // Create and save the Internship record
        Internship::create($validatedData);
    
        return redirect()->back()->with('success', 'Internship application submitted successfully.');
    }
    
}
