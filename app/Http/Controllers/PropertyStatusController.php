<?php

namespace App\Http\Controllers;

use App\Models\PropertyStatus;
use Illuminate\Http\Request;

class PropertyStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propertystatus = PropertyStatus::all();
        return view("propertystatus", compact("propertystatus"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PropertyStatus $propertyStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PropertyStatus $propertyStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PropertyStatus $propertyStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PropertyStatus $propertyStatus)
    {
        //
    }
}
