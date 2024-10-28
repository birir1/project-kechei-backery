<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function create()
    {
        return view('suggestions.create'); // Create a Blade view for the form
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'suggestions' => 'required|string',
        ]);

        // Create a new suggestion record
        Suggestion::create($request->only(['name', 'email', 'suggestions']));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your suggestion!');
    }
}