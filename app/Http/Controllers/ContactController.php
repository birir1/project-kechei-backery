<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create'); // Create a Blade view for the form
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new contact record
        Contact::create($request->only(['name', 'email', 'subject', 'message']));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}