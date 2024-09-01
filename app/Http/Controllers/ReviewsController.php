<?php
namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Review;
use App\Models\Agency;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();
        $properties = Property::all();
        $agencies = Agency::all();

        return view("reviews", compact("reviews", "properties", "agencies"));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'property_id' => 'required|exists:properties,id',
            'agency_id' => 'required|exists:agencies,id',
            'title' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content' => 'required|string',
            'content_en'=> 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'email' => 'required|email',
            'visibility' => 'sometimes|boolean',
            'display_location' => 'nullable|json',
        ]);

        Review::create($validatedData);
        return redirect()->route('reviews.index')->with('success', 'Review added successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $validatedData = $request->validate([
            'property_id' => 'required|exists:properties,id',
            'agency_id' => 'required|exists:agencies,id',
            'title' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content' => 'required|string',
            'content_en'=> 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'email' => 'required|email',
            'visibility' => 'sometimes|boolean',
            'display_location' => 'nullable|json',
        ]);

        $review->update($validatedData);
        return redirect()->route('reviews.index')->with('success', 'Review updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully!');
    }
}
