<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show Contact Form
    public function showForm()
    {
        return view('contact');
    }

    // Handle Form Submission
    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // Process the form (e.g., send email or save to database)
        
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
