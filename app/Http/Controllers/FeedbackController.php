<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback; // Assuming you have a Feedback model

class FeedbackController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'feedback' => 'required|string',
        ]);

        // Store feedback in the database
        Feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'feedback' => $request->feedback,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }
}