<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PropertyType;

class PropertyTypeSeeder extends Seeder
{
    public function run()
    {
        PropertyType::create(['name' => 'مبنى تجاري', 'name_en' => 'Commercial Building']);
        PropertyType::create(['name' => 'طابق تجاري', 'name_en' => 'Commercial Floor']);
        PropertyType::create(['name' => 'أرض تجارية', 'name_en' => 'Commercial Land']);
        PropertyType::create(['name' => 'فيلا تجارية', 'name_en' => 'Commercial Villa']);
        PropertyType::create(['name' => 'مساحة عمل مشتركة', 'name_en' => 'Coworking Space']);
        PropertyType::create(['name' => 'مصنع', 'name_en' => 'Factory']);
        PropertyType::create(['name' => 'أرض صناعية', 'name_en' => 'Industrial Land']);
        PropertyType::create(['name' => 'سكن عمال', 'name_en' => 'Labour Accommodation']);
        PropertyType::create(['name' => 'مكتب', 'name_en' => 'Office']);
        PropertyType::create(['name' => 'محل', 'name_en' => 'Shop']);
        PropertyType::create(['name' => 'قاعة عرض', 'name_en' => 'Showroom']);
        PropertyType::create(['name' => 'مخزن', 'name_en' => 'Store']);
        PropertyType::create(['name' => 'مكتب افتراضي', 'name_en' => 'Virtual office']);
        PropertyType::create(['name' => 'شقة', 'name_en' => 'Apartment']);
        PropertyType::create(['name' => 'طابق شقة', 'name_en' => 'Floor apartment']);
        PropertyType::create(['name' => 'فندق', 'name_en' => 'Hotel']);
        PropertyType::create(['name' => 'شقة فندقية', 'name_en' => 'Hotel apartment']);
        PropertyType::create(['name' => 'بنتهاوس', 'name_en' => 'Penthouse']);
        PropertyType::create(['name' => 'مبنى سكني', 'name_en' => 'Residential building']);
        PropertyType::create(['name' => 'أرض سكنية', 'name_en' => 'Residential Land']);
        PropertyType::create(['name' => 'غرفة', 'name_en' => 'Room']);
        PropertyType::create(['name' => 'استوديو', 'name_en' => 'Studio']);
        PropertyType::create(['name' => 'منزل مستقل', 'name_en' => 'Townhouse']);
        PropertyType::create(['name' => 'فيلا', 'name_en' => 'Villa']);
        PropertyType::create(['name' => 'مجمع فيلات', 'name_en' => 'Villa Compound']);
    }
}
