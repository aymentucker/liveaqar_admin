<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Agent;
use App\Models\User;
use Illuminate\Http\Request;

class AgentsController extends Controller
{
    public function index()
    {
        $agents = Agent::with('user', 'agency')->get();
        $agencies = Agency::all();
        return view('agents', compact('agents', 'agencies'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'agency_id' => 'required|exists:agencies,id',
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|string|email|max:255|unique:users,email',
            'user_password' => 'required|string|min:8',
            'position' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'whatsapp' => 'nullable|string|max:15',
            'language' => 'required|string|max:50',
            'address' => 'nullable|string|max:255',
        ]);

        $user = User::create([
            'name' => $validatedData['user_name'],
            'email' => $validatedData['user_email'],
            'password' => bcrypt($validatedData['user_password']),
            'role' => 'agent',
            'phone' => $validatedData['phone'],
            'whatsapp' => $validatedData['whatsapp'],
        ]);

        $excludeKeys = ['user_name', 'user_email', 'user_password', 'phone', 'whatsapp'];
        $agentData = array_diff_key($validatedData, array_flip($excludeKeys));
        $agentData['user_id'] = $user->id;
        Agent::create($agentData);

        return redirect()->route('agents.index')->with('success', 'Agent added successfully!');
    }

    public function update(Request $request, Agent $agent)
    {
        $validatedData = $request->validate([
            'agency_id' => 'required|exists:agencies,id',
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|string|email|max:255|unique:users,email,' . $agent->user->id,
            'user_password' => 'nullable|string|min:8',
            'position' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'whatsapp' => 'nullable|string|max:15',
            'language' => 'required|string|max:50',
            'address' => 'nullable|string|max:255',
        ]);

        $agent->user->update([
            'name' => $validatedData['user_name'],
            'email' => $validatedData['user_email'],
            'password' => $validatedData['user_password'] ? bcrypt($validatedData['user_password']) : $agent->user->password,
            'phone' => $validatedData['phone'],
            'whatsapp' => $validatedData['whatsapp'],
        ]);

        $excludeKeys = ['user_name', 'user_email', 'user_password', 'phone', 'whatsapp'];
        $agentData = array_diff_key($validatedData, array_flip($excludeKeys));
        $agent->update($agentData);

        return redirect()->route('agents.index')->with('success', 'Agent updated successfully!');
    }

    public function destroy(Agent $agent)
    {
        $agent->user->delete();
        $agent->delete();
        return redirect()->route('agents.index')->with('success', 'Agent deleted successfully!');
    }
}
