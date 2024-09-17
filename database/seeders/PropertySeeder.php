<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;
use App\Models\PropertyStatus;

class PropertySeeder extends Seeder
{
    public function run()
    {
        // Property 1: Luxury Villa in Cairo
        $property1 = Property::create([
            'agency_id' => 1,
            'title_en' => 'Luxury Villa in Cairo',
            'title_ar' => 'فيلا فاخرة في القاهرة',
            'description_en' => 'A luxurious villa located in the heart of Cairo with stunning views.',
            'description_ar' => 'فيلا فاخرة تقع في قلب القاهرة مع مناظر خلابة.',
            'type_id' => 1,
            'city_id' => 1,
            'state_id' => 1,
            'featured_video' => 'https://player.vimeo.com/progressive_redirect/playback/1002393392/rendition/1080p/file.mp4?loc=external&signature=970cc79ccfd5de631707a16e27425ac24da1b9e01b80023e6eeb5e3a2dec33f8',
            'url_link' => 'https://www.vimeo.com/1002393392',
            'sell_price' => 5000000.00,
            'rent_price' => null,
            'area_size' => 1000.00,
            'master_rooms' => 2,
            'rooms' => 5,
            'bathrooms' => 4,
            'garages' => 2,
            'garage_size' => 40.00,
            'year_built' => 2022,
            'phone' => '123456789',
            'address' => '1234 Cairo Street, Cairo',
            'property_code' => 'PROP-CAIRO-001',
            'visibility' => true,
            'features' => json_encode(['Pool', 'Gym', 'Garden']),
            'additional_features' => json_encode(['Smart Home System', 'Solar Panels']),
        ]);
        // Attach status (For Sale)
        $property1->statuses()->attach([1]); // Assuming status 1 is 'For Sale'

        // Property 2: Modern Apartment in Alexandria
        $property2 = Property::create([
            'agency_id' => 1,
            'title_en' => 'Modern Apartment in Alexandria',
            'title_ar' => 'شقة حديثة في الإسكندرية',
            'description_en' => 'A modern apartment in Alexandria, close to the beach.',
            'description_ar' => 'شقة حديثة في الإسكندرية بالقرب من الشاطئ.',
            'type_id' => 2,
            'city_id' => 2,
            'state_id' => 2,
            'featured_video' => 'https://player.vimeo.com/progressive_redirect/playback/1002391420/rendition/1080p/file.mp4?loc=external&signature=b02806b7b1f15e902f978ba45cc39fd2740b42d725469f2b9061f7f97f801e8b',
            'url_link' => 'https://www.vimeo.com/1002391420',
            'sell_price' => null,
            'rent_price' => 10000.00,
            'area_size' => 200.00,
            'master_rooms' => 1,
            'rooms' => 3,
            'bathrooms' => 2,
            'garages' => 1,
            'garage_size' => 20.00,
            'year_built' => 2021,
            'phone' => '987654321',
            'address' => '5678 Alexandria Street, Alexandria',
            'property_code' => 'PROP-ALEX-002',
            'visibility' => true,
            'labels' => json_encode(['Modern', 'Close to Beach']),
            'features' => json_encode(['Balcony', 'Parking', 'Central Heating']),
            'additional_features' => json_encode(['High-Speed Internet', 'Elevator']),
        ]);
        // Attach status (For Rent)
        $property2->statuses()->attach([2]); // Assuming status 2 is 'For Rent'

        // Property 3: Commercial Office in Giza
        $property3 = Property::create([
            'agency_id' => 2,
            'title_en' => 'Commercial Office in Giza',
            'title_ar' => 'مكتب تجاري في الجيزة',
            'description_en' => 'Spacious commercial office located in a prime area in Giza.',
            'description_ar' => 'مكتب تجاري واسع يقع في منطقة متميزة في الجيزة.',
            'type_id' => 3,
            'city_id' => 3,
            'state_id' => 3,
            'featured_video' => 'https://player.vimeo.com/progressive_redirect/playback/1001600328/rendition/1080p/file.mp4?loc=external&signature=ea2c1e8c6af59e6a9d9d9c81561f8b7f9758f1ba01702ed208fabbd095100a4b',
            'url_link' => 'https://www.vimeo.com/1001600328',
            'sell_price' => 2000000.00,
            'rent_price' => null,
            'area_size' => 150.00,
            'rooms' => 0,
            'bathrooms' => 1,
            'garages' => 1,
            'garage_size' => 15.00,
            'year_built' => 2020,
            'phone' => '654321987',
            'address' => '7890 Giza Avenue, Giza',
            'property_code' => 'PROP-GIZA-003',
            'visibility' => true,
            'labels' => json_encode(['Commercial', 'Prime Location']),
            'features' => json_encode(['Conference Room', 'Security', 'Air Conditioning']),
            'additional_features' => json_encode(['Furnished', 'CCTV']),
        ]);
        // Attach status (For Sale)
        $property3->statuses()->attach([1]); // Assuming status 1 is 'For Sale'

        // Property 4: Beachfront Bungalow in Sharm El Sheikh
        $property4 = Property::create([
            'agency_id' => 3,
            'title_en' => 'Beachfront Bungalow in Sharm El Sheikh',
            'title_ar' => 'بنغل مواجه للشاطئ في شرم الشيخ',
            'description_en' => 'A cozy beachfront bungalow in Sharm El Sheikh.',
            'description_ar' => 'بنغل دافئ مواجه للشاطئ في شرم الشيخ.',
            'type_id' => 4,
            'city_id' => 4,
            'state_id' => 4,
            'featured_video' => 'https://player.vimeo.com/progressive_redirect/playback/1001097443/rendition/1080p/file.mp4?loc=external&signature=c5b75be16879876fd5f357626478eff0d72dcc9c0e4ce89a1f280a7b15c3fddd',
            'url_link' => 'https://www.vimeo.com/1001097443',
            'sell_price' => 4000000.00,
            'rent_price' => null,
            'area_size' => 300.00,
            'master_rooms' => 1,
            'rooms' => 2,
            'bathrooms' => 2,
            'garages' => 1,
            'garage_size' => 25.00,
            'year_built' => 2019,
            'phone' => '321654987',
            'address' => '1011 Beach Road, Sharm El Sheikh',
            'property_code' => 'PROP-SHARM-004',
            'visibility' => true,
            'labels' => json_encode(['Beachfront', 'Vacation Home']),
            'features' => json_encode(['Private Beach', 'Swimming Pool', 'Sun Deck']),
            'additional_features' => json_encode(['BBQ Area', 'Outdoor Shower']),
        ]);
        // Attach status (For Sale)
        $property4->statuses()->attach([1]); // Assuming status 1 is 'For Sale'

        // Property 5: Mountain Chalet in Aswan
        $property5 = Property::create([
            'agency_id' => 6,
            'title_en' => 'Mountain Chalet in Aswan',
            'title_ar' => 'شاليه جبلي في أسوان',
            'description_en' => 'A beautiful mountain chalet with breathtaking views in Aswan.',
            'description_ar' => 'شاليه جبلي جميل مع مناظر خلابة في أسوان.',
            'type_id' => 5,
            'city_id' => 5,
            'state_id' => 5,
            'featured_video' => 'https://player.vimeo.com/progressive_redirect/playback/949051912/rendition/1080p/file.mp4?loc=external&signature=13296aabffeb11477087387e01f18fa24729fd0328e8a2e1a49d8fc92119e8f6',
            'url_link' => 'https://www.vimeo.com/949051912',
            'sell_price' => null,
            'rent_price' => 12000.00,
            'area_size' => 400.00,
            'master_rooms' => 1,
            'rooms' => 3,
            'bathrooms' => 2,
            'garages' => 1,
            'garage_size' => 30.00,
            'year_built' => 2018,
            'phone' => '789123456',
            'address' => '2022 Mountain View, Aswan',
            'property_code' => 'PROP-ASWAN-005',
            'visibility' => true,
            'labels' => json_encode(['Mountain', 'Nature']),
            'features' => json_encode(['Fireplace', 'Mountain View', 'Large Balcony']),
            'additional_features' => json_encode(['Wooden Floors', 'Stone Walls']),
        ]);
        // Attach status (For Rent)
        $property5->statuses()->attach([2]); // Assuming status 2 is 'For Rent'
    }
}
