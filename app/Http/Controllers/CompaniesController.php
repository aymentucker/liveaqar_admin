<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyCategory;
use App\Models\CompanyReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        $categories = CompanyCategory::all();
        return view("corporate.companies", compact("companies", "categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:company_categories,id',
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
            $path = $request->file('logo')->store('companies/logos', 'public');
            $validatedData['logo'] = $path;
        }


        Company::create($validatedData);
        return redirect()->route('companies.indexcorporate')->with('success', 'Company added successfully!');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:company_categories,id',
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
            if ($company->logo) {
                Storage::disk('public')->delete($company->logo);
            }
            $path = $request->file('logo')->store('agencies/logos', 'public');
            $validatedData['logo'] = $path;
        }

        $company->update($validatedData);
        return redirect()->route('companies.indexcorporate')->with('success', 'Company updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {

        if ($company->logo) {
            Storage::disk('public')->delete($company->logo);
        }

        $company->delete();
        return redirect()->route('companies.indexcorporate')->with('success', 'Company deleted successfully!');
    }

     /**
     * ======>>>>>>> Company Category Controller <<<<<====
     */


      /**
     * Display a listing of the resource.
     */
    public function indexCategory()
    {
        $categories = CompanyCategory::all();
        return view("corporate.categories", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeCategory(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);
        // Store the image and get the path
        $path = $request->file('image')->store('company-categories', 'public');

        // Generate a URL to the stored image
        $validatedData['image'] = asset('storage/' . $path);

        CompanyCategory::create($validatedData);
        return redirect()->route('categories.indexcorporate')->with('success', 'Category added successfully!');
    }


    /**
     * Update the specified resource in storage.
     */
    public function updateCategory(Request $request, CompanyCategory $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);
        if ($request->hasFile('image')) {
            // Delete the old image
            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }

             // Store the image and get the path
        $path = $request->file('image')->store('company-categories', 'public');

        // Generate a URL to the stored image
        $validatedData['image'] = asset('storage/' . $path);

        }

        $category->update($validatedData);
        return redirect()->route('categories.indexcorporate')->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyCategory(CompanyCategory $category)
    {

        // Delete the image from storage
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }
        $category->delete();
        return redirect()->route('categories.indexcorporate')->with('success', 'Category deleted successfully!');
    }

     /**
     * ======>>>>>>> Company Review Controller <<<<<====
     */


      /**
     * Display a listing of the resource.
     */
    public function indexReview()
    {
        $reviews = CompanyReview::all();
        return view("corporate.reviews", compact("reviews"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeReview(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]);

        CompanyReview::create($validatedData);
        return redirect()->route('reviews.indexcorporate')->with('success', 'Review added successfully!');
    }


    /**
     * Update the specified resource in storage.
     */
    public function updateReview(Request $request, CompanyReview $review)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]);

        $review->update($validatedData);
        return redirect()->route('reviews.indexcorporate')->with('success', 'Review updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyReview(CompanyReview $review)
    {
        $review->delete();
        return redirect()->route('reviews.indexcorporate')->with('success', 'Review deleted successfully!');
    }


}
