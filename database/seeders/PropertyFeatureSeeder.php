<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PropertyFeature;

class PropertyFeatureSeeder extends Seeder
{
    public function run()
    {
        // Create property features
        $features = [
            ['name' => 'تكييف الهواء', 'name_en' => 'Air Conditioning'],
            ['name' => 'الأجهزة', 'name_en' => 'Appliances'],
            ['name' => 'شرفة', 'name_en' => 'Balcony'],
            ['name' => 'مركز أعمال', 'name_en' => 'Business Center'],
            ['name' => 'مراقبة CCTV', 'name_en' => 'CCTV Security'],
            ['name' => 'مكيف مركزي', 'name_en' => 'Centrally Air Conditioned'],
            ['name' => 'خدمات الكونسيرج', 'name_en' => 'Concierge'],
            ['name' => 'نوافذ مزدوجة الزجاج', 'name_en' => 'Double Glazed Windows'],
            ['name' => 'نسخ احتياطي للكهرباء', 'name_en' => 'Electricity Backup'],
            ['name' => 'المصاعد', 'name_en' => 'Elevators'],
            ['name' => 'صالة ألعاب رياضية', 'name_en' => 'Gym'],
            ['name' => 'الإنتركم', 'name_en' => 'Intercom'],
            ['name' => 'جاكوزي', 'name_en' => 'Jacuzzi'],
            ['name' => 'لوبي في المبنى', 'name_en' => 'Lobby in Building'],
            ['name' => 'الصيانة', 'name_en' => 'Maintenance'],
            ['name' => 'محطة حافلات قريبة', 'name_en' => 'Nearby Bus Stop'],
            ['name' => 'محطة بنزين قريبة', 'name_en' => 'Nearby Gas Station'],
            ['name' => 'محل بقالة قريب', 'name_en' => 'Nearby Grocery Store'],
            ['name' => 'مستشفى قريب', 'name_en' => 'Nearby Hospital'],
            ['name' => 'محطة مترو قريبة', 'name_en' => 'Nearby Metro'],
            ['name' => 'مسجد قريب', 'name_en' => 'Nearby Mosque'],
            ['name' => 'منتزه قريب', 'name_en' => 'Nearby Park'],
            ['name' => 'صيدلية قريبة', 'name_en' => 'Nearby Pharmacy'],
            ['name' => 'مدرسة قريبة', 'name_en' => 'Nearby School'],
            ['name' => 'موقف سيارات', 'name_en' => 'Parking'],
            ['name' => 'مسموح بالحيوانات الأليفة', 'name_en' => 'Pets Allowed'],
            ['name' => 'حمام سباحة', 'name_en' => 'Pool'],
            ['name' => 'غرفة الصلاة', 'name_en' => 'Prayer Room'],
            ['name' => 'حمام سباحة خاص', 'name_en' => 'Private Pool'],
            ['name' => 'استقبال', 'name_en' => 'Reception'],
            ['name' => 'ساتلايت', 'name_en' => 'Satellite'],
            ['name' => 'الأمن', 'name_en' => 'Security'],
            ['name' => 'موظفين الأمن', 'name_en' => 'Security Staff'],
            ['name' => 'المصاعد الخدمية', 'name_en' => 'Service Elevators'],
            ['name' => 'مناطق التخزين', 'name_en' => 'Storage Areas'],
            ['name' => 'حمام سباحة', 'name_en' => 'Swimming Pool'],
            ['name' => 'منظر', 'name_en' => 'View'],
            ['name' => 'التخلص من النفايات', 'name_en' => 'Waste Disposal'],
        ];

        foreach ($features as $feature) {
            PropertyFeature::create($feature);
        }
    }
}
