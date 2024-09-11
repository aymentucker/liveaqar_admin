<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            AgencySeeder::class,
            CityStateSeeder::class,
            PropertyTypeSeeder::class,
            PropertyStatusSeeder::class,
            PropertyFeatureSeeder::class,
            CompanyCategorySeeder::class,
            PropertySeeder::class,
            AdSeeder::class,
            CompanySeeder::class,

        ]);
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
