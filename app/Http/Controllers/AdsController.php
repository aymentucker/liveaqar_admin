<?php
namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = Ad::all();
        return view('ads', compact('ads'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title_en' => 'required|string|max:255',
            'description_en' => 'required|string',
            'image' => 'required|image|max:2048',
            'end_date' => 'required|date|after_or_equal:today',
        ]);

        $validatedData['image'] = $request->file('image')->store('ads', 'public');

        Ad::create($validatedData);
        return redirect()->route('ads.index')->with('success', 'Ad created successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ad $ad)
    {
        $validatedData = $request->validate([
            'title_en' => 'required|string|max:255',
            'description_en' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'end_date' => 'required|date|after_or_equal:today',
        ]);

        if ($request->hasFile('image')) {
            // Delete the old image
            if ($ad->image) {
                Storage::disk('public')->delete($ad->image);
            }
            // Store the new image
            $validatedData['image'] = $request->file('image')->store('ads', 'public');
        }

        $ad->update($validatedData);
        return redirect()->route('ads.index')->with('success', 'Ad updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ad $ad)
    {
        // Delete the image from storage
        if ($ad->image) {
            Storage::disk('public')->delete($ad->image);
        }

        $ad->delete();
        return redirect()->route('ads.index')->with('success', 'Ad deleted successfully!');
    }
}
