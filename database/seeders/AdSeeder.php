<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ad; // Ensure your Ad model is correctly imported

class AdSeeder extends Seeder
{
    public function run()
    {
        Ad::create([
            'title' => 'design master',
            'title_en' => 'design master',
            'description' => 'Enjoy our exclusive summer sale with up to 50% off!',
            'description_en' => 'Enjoy our exclusive summer sale with up to 50% off!',
            'image' => 'http://10.0.2.2:8000/storage/ads/AbOLIYrYLzeZLFzkjROp1q64Iee3bfda3aU5jKEJ.png',
            'url' => 'https://designmaster.qa',
            'start_date' => '2023-06-01',
            'end_date' => '2023-06-30',
            'type' => 'banner'
        ]);

        Ad::create([
            'title' => 'Sporthub App',
            'title_en' => 'Sporthub App',
            'description' => 'BOOK A GAME! Play, Score & Win. Using our user-friendly platform, you can easily book games, matches, and sporting challenges.',
            'description_en' => 'BOOK A GAME! Play, Score & Win. Using our user-friendly platform, you can easily book games, matches, and sporting challenges.',
            'image' => 'http://10.0.2.2:8000/storage/ads/rjn3CiEftXEEzIUkWGKLxmBJG3ivAJTNaEj3Gb83.png',
            'url' => 'https://sporthubapp.com',
            'start_date' => '2023-08-01',
            'end_date' => '2023-08-31',
            'type' => 'banner'
        ]);

    }
}
