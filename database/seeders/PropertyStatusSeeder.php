<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PropertyStatus;

class PropertyStatusSeeder extends Seeder
{
    public function run()
    {
        PropertyStatus::create(['name' => 'للاستثمار', 'name_en' => 'For Invest']);
        PropertyStatus::create(['name' => 'للإيجار', 'name_en' => 'For Rent']);
        PropertyStatus::create(['name' => 'للبيع', 'name_en' => 'For Sale']);
        PropertyStatus::create(['name' => 'الرهن', 'name_en' => 'Foreclosures']);
        PropertyStatus::create(['name' => 'بناء جديد', 'name_en' => 'New Construction']);
        PropertyStatus::create(['name' => 'إدراج جديد', 'name_en' => 'New Listing']);
        PropertyStatus::create(['name' => 'بيت مفتوح', 'name_en' => 'Open House']);
        PropertyStatus::create(['name' => 'سعر مخفض', 'name_en' => 'Reduced Price']);
        PropertyStatus::create(['name' => 'إعادة بيع', 'name_en' => 'Resale']);
    }
}
