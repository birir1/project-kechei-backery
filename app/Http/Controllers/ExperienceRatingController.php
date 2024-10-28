<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExperienceRating; // Make sure to import your model

class ExperienceRatingController extends Controller
{
    public function submitRating(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'rating' => 'required|integer|between:1,5',
            'comments' => 'nullable|string',
        ]);

        // Create a new rating record
        ExperienceRating::create($request->all());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }
}