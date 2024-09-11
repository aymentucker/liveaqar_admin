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

        // Get all category IDs from the CompanyCategory table
        $categoryIds = CompanyCategory::pluck('id')->toArray();

        for ($i = 0; $i < 50; $i++) { // Generate 50 companies
            Company::create([
                'category_id' => $faker->randomElement($categoryIds),
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
            ]);
        }
    }
}
