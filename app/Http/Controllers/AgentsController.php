<?php
namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Agent;
use Illuminate\Http\Request;

class AgentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agent::all();
        $agencies = Agency::all();

        return view("agents", compact("agents", "agencies"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'agency_id' => 'required|exists:agencies,id',
            'position' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:15',
            'whatsapp' => 'nullable|string|max:15',
            'language' => 'required|string|max:50',
            'address' => 'nullable|string|max:255',
        ]);

        Agent::create($validatedData);
        return redirect()->route('agents.index')->with('success', 'Agent added successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agent $agent)
    {
        $validatedData = $request->validate([
            'agency_id' => 'required|exists:agencies,id',
            'position' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:15',
            'whatsapp' => 'nullable|string|max:15',
            'language' => 'required|string|max:50',
            'address' => 'nullable|string|max:255',
        ]);

        $agent->update($validatedData);
        return redirect()->route('agents.index')->with('success', 'Agent updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent)
    {
        $agent->delete();
        return redirect()->route('agents.index')->with('success', 'Agent deleted successfully!');
    }
}
