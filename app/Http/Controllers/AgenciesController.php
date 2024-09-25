<?php
namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AgenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agencies = Agency::all();

        return view("agencies", compact("agencies"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'description' => 'nullable|string',
            'description_en' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'nullable|email|max:255',
            'whatsapp' => 'nullable|string|max:15',
            'phone_number' => 'nullable|string|max:15',
            'fax_number' => 'nullable|string|max:15',
            'license' => 'nullable|string|max:50',
            'website_url' => 'nullable|url|max:255',
            'social_media' => 'nullable|json',
            'address' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('agencies/logos', 'public');
            $validatedData['logo'] = $path;
        }

          // Add the authenticated user's ID to the data
          $validatedData['user_id'] = $request->user()->id;


        Agency::create($validatedData);
        return redirect()->route('agencies.index')->with('success', 'Agency added successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agency $agency)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'description' => 'nullable|string',
            'description_en' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'nullable|email|max:255',
            'whatsapp' => 'nullable|string|max:15',
            'phone_number' => 'nullable|string|max:15',
            'fax_number' => 'nullable|string|max:15',
            'license' => 'nullable|string|max:50',
            'website_url' => 'nullable|url|max:255',
            'social_media' => 'nullable|json',
            'address' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('logo')) {
            if ($agency->logo) {
                Storage::disk('public')->delete($agency->logo);
            }
            $path = $request->file('logo')->store('agencies/logos', 'public');
            $validatedData['logo'] = $path;
        }

        $agency->update($validatedData);
        return redirect()->route('agencies.index')->with('success', 'Agency updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agency $agency)
    {
        if ($agency->logo) {
            Storage::disk('public')->delete($agency->logo);
        }

        $agency->delete();
        return redirect()->route('agencies.index')->with('success', 'Agency deleted successfully!');
    }
}
