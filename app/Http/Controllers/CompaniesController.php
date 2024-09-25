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
        $companies = Company::with('categories')->get();
        $mainCategories = CompanyCategory::with('children')->whereNull('parent_id')->get();

        return view('corporate.companies', compact('companies', 'mainCategories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input data
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
            // Validate sub_category_ids as an array of existing IDs
            'sub_category_ids' => 'required|array',
            'sub_category_ids.*' => 'exists:company_categories,id',
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('companies/logos', 'public');
            $validatedData['logo'] = $path;
        }

        // Add the authenticated user's ID to the data
        $validatedData['user_id'] = $request->user()->id;


        // Create the company without 'sub_category_ids'
        $company = Company::create($validatedData);

        // Attach the selected sub-categories to the company
        $company->categories()->attach($request->sub_category_ids);

        return redirect()->route('companies.indexcorporate')->with('success', 'Company added successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        // Validate the input data
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
            // Validate sub_category_ids as an array of existing IDs
            'sub_category_ids' => 'required|array',
            'sub_category_ids.*' => 'exists:company_categories,id',
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            if ($company->logo) {
                Storage::disk('public')->delete($company->logo);
            }
            $path = $request->file('logo')->store('companies/logos', 'public');
            $validatedData['logo'] = $path;
        }

        // Update the company without 'sub_category_ids'
        $company->update($validatedData);

        // Sync the selected sub-categories
        $company->categories()->sync($request->sub_category_ids);

        return redirect()->route('companies.indexcorporate')->with('success', 'Company updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        // Delete the logo from storage if it exists
        if ($company->logo) {
            Storage::disk('public')->delete($company->logo);
        }

        // Detach all categories associated with the company
        $company->categories()->detach();

        // Delete the company
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
        $categories = CompanyCategory::with('children')->whereNull('parent_id')->get();
        $mainCategories = CompanyCategory::whereNull('parent_id')->get();

        return view("corporate.categories", compact("categories", "mainCategories"));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function storeCategory(Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'parent_id' => 'nullable|exists:company_categories,id',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('company-categories', 'public');
            $validatedData['image'] = $path;
        }

        // Add the authenticated user's ID to the data
        $validatedData['user_id'] = $request->user()->id;

        // Create the category
        CompanyCategory::create($validatedData);

        return redirect()->route('categories.indexcorporate')->with('success', 'Category added successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateCategory(Request $request, CompanyCategory $category)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'parent_id' => 'nullable|exists:company_categories,id',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the old image
            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }

            $path = $request->file('image')->store('company-categories', 'public');
            $validatedData['image'] = $path;
        }

        // Update the category
        $category->update($validatedData);

        return redirect()->route('categories.indexcorporate')->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyCategory(CompanyCategory $category)
    {
        // Check if the category has child categories
        if ($category->children()->count() > 0) {
            return redirect()->route('categories.indexcorporate')->with('error', 'Cannot delete a category that has sub-categories.');
        }

        // Detach all companies associated with this category
        $category->companies()->detach();

        // Delete the image from storage if it exists
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

        // Delete the category
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
