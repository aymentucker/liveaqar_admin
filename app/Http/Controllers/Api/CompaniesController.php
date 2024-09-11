<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyCategory;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::with(['category'])
            ->get()
            ->map(function ($company) {
                return [
                    'id' => $company->id,
                    'name' => $company->name,
                    'name_en' => $company->name_en,
                    'description' => $company->description,
                    'description_en' => $company->description_en,
                    'logo' => $company->logo,
                    'email' => $company->email,
                    'whatsapp' => $company->whatsapp,
                    'phone_number' => $company->phone_number,
                    'fax_number' => $company->fax_number,
                    'license' =>$company->license,
                    'website_url' => $company->website_url,
                    'social_media' =>$company->social_media,
                    'address' => $company->address,
                    'category_id' => $company->category->id,


                ];
            });

        if ($companies->isEmpty()) {
            return response()->json(['message' => 'No companies found'], 404);
        }

        return response()->json($companies, 200);
    }


      /**
     * Display a category of the resource.
     */
    public function fetchCategory()
    {
        $categories = CompanyCategory::all();


        if ($categories->isEmpty()) {
            return response()->json(['message' => 'No categories found'], 404);
        }

        return response()->json($categories, 200);
    }

     /**
     * Display a companies category of the resource.
     */
    public function fetchCompaniesCategory($categoryId)
    {
        $companies = Company::with(['category'])
            ->where('category_id', $categoryId)
            ->get()
            ->map(function ($company) {
                return [
                    'id' => $company->id,
                    'name' => $company->name,
                    'name_en' => $company->name_en,
                    'description' => $company->description,
                    'description_en' => $company->description_en,
                    'logo' => $company->logo,
                    'email' => $company->email,
                    'whatsapp' => $company->whatsapp,
                    'phone_number' => $company->phone_number,
                    'fax_number' => $company->fax_number,
                    'license' =>$company->license,
                    'website_url' => $company->website_url,
                    'social_media' =>$company->social_media,
                    'address' => $company->address,
                    'category_id' => $company->category->id,


                ];
            });

        if ($companies->isEmpty()) {
            return response()->json(['message' => 'No companies found'], 404);
        }

        return response()->json($companies, 200);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
