<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agency;
use Faker\Factory as Faker;

class AgencySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Agency::create([
                'name' => $faker->company,
                'name_en' => $faker->company,
                'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'description_en' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'logo' => $faker->imageUrl(200, 200, 'business'),
                'email' => $faker->companyEmail,
                'whatsapp' => $faker->phoneNumber,
                'phone_number' => $faker->phoneNumber,
                'fax_number' => $faker->phoneNumber,
                'license' => $faker->randomNumber($nbDigits = 7),
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
