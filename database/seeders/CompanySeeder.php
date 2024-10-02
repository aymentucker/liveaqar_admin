<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\CompanyCategory;
use Faker\Factory as Faker;

class CompanySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Get all sub-category IDs (categories that have a parent_id)
        $subCategoryIds = CompanyCategory::whereNotNull('parent_id')->pluck('id')->toArray();

        // Ensure we have sub-categories to attach companies to
        if (empty($subCategoryIds)) {
            $this->command->info('No sub-categories found. Please run the CompanyCategorySeeder first.');
            return;
        }

        for ($i = 0; $i < 50; $i++) { // Generate 50 companies
            // Create company data
            $companyData = [
                'name' => $faker->company,
                'name_en' => $faker->company,
                'description' => $faker->paragraph,
                'description_en' => $faker->paragraph,
                'logo' => $faker->imageUrl(200, 200, 'business'), // Generates a random business-related image
                'email' => $faker->companyEmail,
                'whatsapp' => $faker->phoneNumber,
                'phone_number' => $faker->phoneNumber,
                'fax_number' => $faker->phoneNumber,
                'license' => $faker->randomNumber(8),
                'website_url' => $faker->url,
                'social_media' => json_encode([
                    'facebook' => $faker->url,
                    'twitter' => $faker->url,
                    'linkedin' => $faker->url
                ]),
                'address' => $faker->address,
                'user_id' => \App\Models\User::inRandomOrder()->first()->id ?? null, // Assign a random user or null
            ];

            // Create the company
            $company = Company::create($companyData);

            // Decide how many categories to attach (e.g., 1 to 5)
            $numberOfCategories = rand(1, 5);
            $randomSubCategoryIds = $faker->randomElements($subCategoryIds, $numberOfCategories);

            // Attach the categories
            $company->categories()->attach($randomSubCategoryIds);
        }
    }
}
