<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompanyCategory;

class CompanyCategorySeeder extends Seeder
{
    public function run()
    {
        $imageDimensions = '500/300'; // Example dimensions for the image

        // Define main categories
        $mainCategoriesData = [
            [
                'name' => 'الخدمات العقارية',
                'name_en' => 'Real Estate Services',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(1, 100)
            ],
            [
                'name' => 'خدمات التصميم',
                'name_en' => 'Design Services',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(101, 200)
            ],
            [
                'name' => 'استشارات عقارية',
                'name_en' => 'Real Estate Consultancy',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(201, 300)
            ],
            [
                'name' => 'خدمات المقاولات',
                'name_en' => 'Contracting Services',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(301, 400)
            ],
        ];

        // Create main categories and keep track of their instances
        $mainCategories = [];
        foreach ($mainCategoriesData as $mainCategoryData) {
            $mainCategories[] = CompanyCategory::create($mainCategoryData);
        }

        // Define sub-categories with their corresponding main category IDs
        $subCategoriesData = [
            // Real Estate Services (Main Category ID: 0)
            [
                'name' => 'التطوير العقاري',
                'name_en' => 'Real Estate Development',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(401, 500),
                'parent_id' => $mainCategories[0]->id,
            ],
            [
                'name' => 'الوساطة العقارية',
                'name_en' => 'Real Estate Brokerage',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(501, 600),
                'parent_id' => $mainCategories[0]->id,
            ],
            [
                'name' => 'تقييم الاراضي والمباني',
                'name_en' => 'Land & Building Valuation',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(601, 700),
                'parent_id' => $mainCategories[0]->id,
            ],
            [
                'name' => 'ادارة الاملاك',
                'name_en' => 'Property Management',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(701, 800),
                'parent_id' => $mainCategories[0]->id,
            ],
            [
                'name' => 'الصيانة وإدارة المرافق',
                'name_en' => 'Maintenance & Facility Services',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(801, 900),
                'parent_id' => $mainCategories[0]->id,
            ],

            // Design Services (Main Category ID: 1)
            [
                'name' => 'تصميم معماري',
                'name_en' => 'Architectural Design',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(901, 1000),
                'parent_id' => $mainCategories[1]->id,
            ],
            [
                'name' => 'تخطيط ورسم وتصميم داخلي',
                'name_en' => 'Interior Planning & Design',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(1001, 1100),
                'parent_id' => $mainCategories[1]->id,
            ],
            [
                'name' => 'تصميم الحدائق والمساحات الخارجية',
                'name_en' => 'Garden & Outdoor Space Design',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(1101, 1200),
                'parent_id' => $mainCategories[1]->id,
            ],
            [
                'name' => 'تجهيزات داخلية وخارجية',
                'name_en' => 'Interior and Exterior Furnishings',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(1201, 1300),
                'parent_id' => $mainCategories[1]->id,
            ],

            // Real Estate Consultancy (Main Category ID: 2)
            [
                'name' => 'بنوك وشركات تمويل عقاري',
                'name_en' => 'Banks & Real Estate Finance',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(1301, 1400),
                'parent_id' => $mainCategories[2]->id,
            ],
            [
                'name' => 'شركات التأمين العقاري',
                'name_en' => 'Real Estate Insurance',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(1401, 1500),
                'parent_id' => $mainCategories[2]->id,
            ],
            [
                'name' => 'دراسات جدوى استثمارية',
                'name_en' => 'Investment Feasibility Studies',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(1501, 1600),
                'parent_id' => $mainCategories[2]->id,
            ],
            [
                'name' => 'استشارات قانونية وعقارية',
                'name_en' => 'Legal & Real Estate Consultancy',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(1601, 1700),
                'parent_id' => $mainCategories[2]->id,
            ],
            [
                'name' => 'ادارة المشاريع الاستثمارية',
                'name_en' => 'Investment Project Management',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(1701, 1800),
                'parent_id' => $mainCategories[2]->id,
            ],

            // Contracting Services (Main Category ID: 3)
            [
                'name' => 'مقاولات بناء وتشطيب',
                'name_en' => 'Building & Finishing Contracting',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(1801, 1900),
                'parent_id' => $mainCategories[3]->id,
            ],
            [
                'name' => 'إنشاءات وبناء',
                'name_en' => 'Construction & Building',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(1901, 2000),
                'parent_id' => $mainCategories[3]->id,
            ],
            [
                'name' => 'توفير مواد البناء',
                'name_en' => 'Supply of Building Materials',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(2001, 2100),
                'parent_id' => $mainCategories[3]->id,
            ],
            [
                'name' => 'ادارة المشاريع الإنشائية',
                'name_en' => 'Construction Project Management',
                'image' => "https://picsum.photos/{$imageDimensions}?random=" . mt_rand(2101, 2200),
                'parent_id' => $mainCategories[3]->id,
            ],
        ];

        // Create sub-categories
        foreach ($subCategoriesData as $subCategoryData) {
            CompanyCategory::create($subCategoryData);
        }
    }
}
