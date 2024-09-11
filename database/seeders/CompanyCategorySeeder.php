<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompanyCategory;

class CompanyCategorySeeder extends Seeder
{
    public function run()
    {
        $imageDimensions = '500/300'; // Example dimensions for the image


        // Development and Construction
        CompanyCategory::create([
            'name' => 'التطوير العقاري',
            'name_en' => 'Real Estate Development',
            'image' => "http://10.0.2.2:8000/storage/company-categories/qiXRaTNnBPVFi7AYBWSuOA81pL8q4K7LJkVYJv3M.png"
        ]);
        CompanyCategory::create([
            'name' => 'شركات إنشاءات وبناء',
            'name_en' => 'Construction & Building',
            'image' => "https://picsum.photos/$imageDimensions?random=" . mt_rand(1, 100)
        ]);
        // Property Management
        CompanyCategory::create([
            'name' => 'إدارة الأملاك',
            'name_en' => 'Property Management',
            'image' => "http://10.0.2.2:8000/storage/company-categories/rLHmEr7MPdAvwupjccVVnzBTmLfTXXyAspv1uHh9.png"
        ]);
        CompanyCategory::create([
            'name' => 'خدمات الصيانة وإدارة المرافق',
            'name_en' => 'Maintenance & Facility Services',
            'image' => "http://10.0.2.2:8000/storage/company-categories/fOmTJU9bLMMzAqYmJfO7T6tSWJ3A0xaOBfqNWf14.png"
        ]);

        // Real Estate Brokerage
        CompanyCategory::create([
            'name' => 'الوساطة العقارية',
            'name_en' => 'Real Estate Brokerage',
            'image' => "http://10.0.2.2:8000/storage/company-categories/gGMOoNfK7KKD9iGOHT12dElfWaSgwGvUG54FstSb.png"
        ]);

        // Real Estate Finance and Insurance
        CompanyCategory::create([
            'name' => 'بنوك وشركات تمويل عقاري',
            'name_en' => 'Banks & Real Estate Finance ',
            'image' => "https://picsum.photos/$imageDimensions?random=" . mt_rand(1, 100)
        ]);
        CompanyCategory::create([
            'name' => 'شركات التأمين على العقارات',
            'name_en' => 'Real Estate Insurance',
            'image' => "https://picsum.photos/$imageDimensions?random=" . mt_rand(1, 100)
        ]);

        // Real Estate Valuation and Consultancy
        CompanyCategory::create([
            'name' => 'تقييم الأراضي والمباني',
            'name_en' => 'Land & Building Valuation',
            'image' => "https://picsum.photos/$imageDimensions?random=" . mt_rand(1, 100)
        ]);
        CompanyCategory::create([
            'name' => 'استشارات قانونية وعقارية',
            'name_en' => 'Legal & Real Estate Consultancy',
            'image' => "https://picsum.photos/$imageDimensions?random=" . mt_rand(1, 100)
        ]);
        CompanyCategory::create([
            'name' => 'دراسات جدوى استثمارية',
            'name_en' => 'Investment Feasibility Studies',
            'image' => "https://picsum.photos/$imageDimensions?random=" . mt_rand(1, 100)
        ]);

        // Architecture and Design
        CompanyCategory::create([
            'name' => 'تصميم معماري',
            'name_en' => 'Architectural Design',
            'image' => "https://picsum.photos/$imageDimensions?random=" . mt_rand(1, 100)
        ]);
        CompanyCategory::create([
            'name' => 'تخطيط وتصميم داخلي',
            'name_en' => 'Interior Planning & Design',
            'image' => "https://picsum.photos/$imageDimensions?random=" . mt_rand(1, 100)
        ]);
        CompanyCategory::create([
            'name' => 'تصميم الحدائق والمساحات الخارجية',
            'name_en' => 'Garden & Outdoor Space Design',
            'image' => "https://picsum.photos/$imageDimensions?random=" . mt_rand(1, 100)
        ]);

        // Contracting and Finishing
        CompanyCategory::create([
            'name' => 'مقاولات بناء وتشطيب',
            'name_en' => 'Building & Finishing Contracting',
            'image' => "https://picsum.photos/$imageDimensions?random=" . mt_rand(1, 100)
        ]);
        CompanyCategory::create(['name' => 'تجهيزات داخلية وخارجية', 'name_en' => 'Interior and Exterior Furnishings']);
        CompanyCategory::create([
            'name' => 'توفير مواد البناء',
            'name_en' => 'Supply of Building Materials',
            'image' => "https://picsum.photos/$imageDimensions?random=" . mt_rand(1, 100)
        ]);

        // Real Estate Project Management
        CompanyCategory::create([
            'name' => 'إدارة المشاريع الإنشائية',
            'name_en' => 'Construction Project Management',
            'image' => "https://picsum.photos/$imageDimensions?random=" . mt_rand(1, 100)
        ]);
        CompanyCategory::create([
            'name' => 'إدارة المشاريع الاستثمارية',
            'name_en' => 'Investment Project Management',
            'image' => "https://picsum.photos/$imageDimensions?random=" . mt_rand(1, 100)
        ]);
    }
}
