<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyCategory;
use App\Models\CompanyReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\CompanyCategoryResource;
use App\Http\Resources\CompanyReviewResource;

class CompaniesController extends Controller
{
    /**
     * Display a nested listing of main categories, their subcategories, and companies per subcategory.
     */
    public function index()
    {
        // Fetch main categories (parent_id is null) with their subcategories and companies per subcategory
        $mainCategories = CompanyCategory::with(['children.companies'])
            ->whereNull('parent_id')
            ->get();

        if ($mainCategories->isEmpty()) {
            return response()->json(['message' => 'No categories found'], 404);
        }

        // Use resources to transform data
        $data = CompanyCategoryResource::collection($mainCategories)->map(function ($mainCategory) use ($mainCategories) {
            $subcategories = CompanyCategoryResource::collection(
                $mainCategory->children
            )->map(function ($subcategory) {
                return [
                    'subcategory' => $subcategory,
                    'companies' => CompanyResource::collection($subcategory->companies),
                ];
            });

            return [
                'id' => $mainCategory->id,
                'name' => $mainCategory->name,
                'name_en' => $mainCategory->name_en,
                'image' => $mainCategory->image,
                'subcategories' => $subcategories,
            ];
        });

        return response()->json($data, 200);
    }

    /**
     * Fetch all main categories.
     */
    public function fetchMainCategories()
    {
        $mainCategories = CompanyCategory::whereNull('parent_id')->get(['id', 'name', 'name_en', 'image']);

        if ($mainCategories->isEmpty()) {
            return response()->json(['message' => 'No main categories found'], 404);
        }

        return CompanyCategoryResource::collection($mainCategories);
    }

    /**
     * Fetch subcategories for a given main category.
     */
    public function fetchSubcategories($mainCategoryId)
    {
        $mainCategory = CompanyCategory::find($mainCategoryId);

        if (!$mainCategory) {
            return response()->json(['message' => 'Main category not found'], 404);
        }

        $subcategories = $mainCategory->children()->get(['id', 'name', 'name_en', 'image']);

        if ($subcategories->isEmpty()) {
            return response()->json(['message' => 'No subcategories found for this main category'], 404);
        }

        return CompanyCategoryResource::collection($subcategories);
    }

    /**
     * Fetch companies for a given subcategory.
     */
    public function fetchCompaniesBySubcategory($subcategoryId)
    {
        $subcategory = CompanyCategory::find($subcategoryId);

        if (!$subcategory || $subcategory->parent_id === null) {
            return response()->json(['message' => 'Subcategory not found'], 404);
        }

        $companies = $subcategory->companies()->get();

        if ($companies->isEmpty()) {
            return response()->json(['message' => 'No companies found for this subcategory'], 404);
        }

        return CompanyResource::collection($companies);
    }

    /**
     * Store a newly created company.
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
        $validatedData['user_id'] = $request->user()->id ?? null;

        // Create the company
        $company = Company::create($validatedData);

        // Attach the selected sub-categories to the company
        $company->categories()->attach($request->sub_category_ids);

        return response()->json([
            'message' => 'Company added successfully!',
            'company' => new CompanyResource($company->load('categories')),
        ], 201);
    }

    /**
     * Display the specified company.
     */
    public function show(string $id)
    {
        $company = Company::with('categories')->find($id);

        if (!$company) {
            return response()->json(['message' => 'Company not found'], 404);
        }

        return new CompanyResource($company);
    }

    /**
     * Update the specified company in storage.
     */
    public function update(Request $request, string $id)
    {
        $company = Company::find($id);

        if (!$company) {
            return response()->json(['message' => 'Company not found'], 404);
        }

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

        // Update the company
        $company->update($validatedData);

        // Sync the selected sub-categories
        $company->categories()->sync($request->sub_category_ids);

        return response()->json([
            'message' => 'Company updated successfully!',
            'company' => new CompanyResource($company->load('categories')),
        ], 200);
    }

    /**
     * Remove the specified company from storage.
     */
    public function destroy(string $id)
    {
        $company = Company::find($id);

        if (!$company) {
            return response()->json(['message' => 'Company not found'], 404);
        }

        // Delete the logo from storage if it exists
        if ($company->logo) {
            Storage::disk('public')->delete($company->logo);
        }

        // Detach all categories associated with the company
        $company->categories()->detach();

        // Delete the company
        $company->delete();

        return response()->json(['message' => 'Company deleted successfully!'], 200);
    }

    /**
     * ======>>>>>>> Company Category Controller <<<<<====
     */

    /**
     * Display a listing of the main categories with their subcategories.
     */
    public function indexCategory()
    {
        $categories = CompanyCategory::with('children')->whereNull('parent_id')->get();

        if ($categories->isEmpty()) {
            return response()->json(['message' => 'No categories found'], 404);
        }

        return CompanyCategoryResource::collection($categories);
    }

    /**
     * Store a newly created category.
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
        $validatedData['user_id'] = $request->user()->id ?? null;

        // Create the category
        $category = CompanyCategory::create($validatedData);

        return response()->json([
            'message' => 'Category added successfully!',
            'category' => new CompanyCategoryResource($category),
        ], 201);
    }

    /**
     * Update the specified category in storage.
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
            // Delete the old image if exists
            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }

            $path = $request->file('image')->store('company-categories', 'public');
            $validatedData['image'] = $path;
        }

        // Update the category
        $category->update($validatedData);

        return response()->json([
            'message' => 'Category updated successfully!',
            'category' => new CompanyCategoryResource($category),
        ], 200);
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroyCategory(CompanyCategory $category)
    {
        // Check if the category has child categories
        if ($category->children()->count() > 0) {
            return response()->json(['message' => 'Cannot delete a category that has sub-categories.'], 400);
        }

        // Detach all companies associated with this category
        $category->companies()->detach();

        // Delete the image from storage if it exists
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

        // Delete the category
        $category->delete();

        return response()->json(['message' => 'Category deleted successfully!'], 200);
    }

    /**
     * ======>>>>>>> Company Review Controller <<<<<====
     */

    /**
     * Display a listing of the reviews.
     */
    public function indexReview()
    {
        $reviews = CompanyReview::all();

        if ($reviews->isEmpty()) {
            return response()->json(['message' => 'No reviews found'], 404);
        }

        return CompanyReviewResource::collection($reviews);
    }

    /**
     * Store a newly created review.
     */
    public function storeReview(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            // Add other fields as necessary
        ]);

        $review = CompanyReview::create($validatedData);

        return response()->json([
            'message' => 'Review added successfully!',
            'review' => new CompanyReviewResource($review),
        ], 201);
    }

    /**
     * Update the specified review in storage.
     */
    public function updateReview(Request $request, CompanyReview $review)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            // Add other fields as necessary
        ]);

        $review->update($validatedData);

        return response()->json([
            'message' => 'Review updated successfully!',
            'review' => new CompanyReviewResource($review),
        ], 200);
    }

    /**
     * Remove the specified review from storage.
     */
    public function destroyReview(CompanyReview $review)
    {
        $review->delete();

        return response()->json(['message' => 'Review deleted successfully!'], 200);
    }
}
