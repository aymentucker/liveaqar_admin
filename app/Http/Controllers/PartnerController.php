<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::all();
        return view('partners', compact('partners'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
            'url' => 'required|string',
        ]);

        $validatedData['image'] = $request->file('image')->store('partners', 'public');

        Partner::create($validatedData);
        return redirect()->route('partners.index')->with('success', 'Partner created successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        $validatedData = $request->validate([
           'title' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
            'url' => 'required|string',
          ]);

        if ($request->hasFile('image')) {
            // Delete the old image
            if ($partner->image) {
                Storage::disk('public')->delete($partner->image);
            }
            // Store the new image
            $validatedData['image'] = $request->file('image')->store('partners', 'public');
        }

        $partner->update($validatedData);
        return redirect()->route('partners.index')->with('success', 'Partner updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        // Delete the image from storage
        if ($partner->image) {
            Storage::disk('public')->delete($partner->image);
        }

        $partner->delete();
        return redirect()->route('partners.index')->with('success', 'Partner deleted successfully!');
    }
}
