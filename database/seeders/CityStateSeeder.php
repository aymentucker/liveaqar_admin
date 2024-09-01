<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\State;

class CityStateSeeder extends Seeder
{
    public function run()
    {
        //  Cities
        $city1 = City::create(['name' => 'الدوحة', 'name_en' => 'Doha']);
        $city2 = City::create(['name' => 'الخور', 'name_en' => 'Al Khor']);
        $city3 = City::create(['name' => 'الشمال', 'name_en' => 'Al Shamal']);
        $city4 = City::create(['name' => 'الوسيل', 'name_en' => 'Lusail']);
        $city5 = City::create(['name' => 'الوكرة', 'name_en' => 'Al Wakra']);
        $city6 = City::create(['name' => 'دخان', 'name_en' => 'Dukhan']);
        $city7 = City::create(['name' => 'مسيعيد', 'name_en' => 'Mesaieed']);
        $city8 = City::create(['name' => 'الشحانية', 'name_en' => 'Ash Shaḩānīyah']);

        //  States for City => الدوحة (Doha)
        State::create(['city_id' => $city1->id, 'name' => 'الخريطيات', 'name_en' => 'Al Kharaitiyat']);
        State::create(['city_id' => $city1->id, 'name' => 'الخيسة', 'name_en' => 'Al Kheesa']);
        State::create(['city_id' => $city1->id, 'name' => 'العب', 'name_en' => 'Al Ebb']);
        State::create(['city_id' => $city1->id, 'name' => 'ابوهامور', 'name_en' => 'Abu Hamour']);
        State::create(['city_id' => $city1->id, 'name' => 'ام صلال علي', 'name_en' => 'Umm Salal Ali']);
        State::create(['city_id' => $city1->id, 'name' => 'ام صلال محمد', 'name_en' => 'Umm Salal Mohammed']);
        State::create(['city_id' => $city1->id, 'name' => 'ام غويلينا', 'name_en' => 'Umm Ghuwailina']);
        State::create(['city_id' => $city1->id, 'name' => 'ازغوى', 'name_en' => 'Izghawa']);
        State::create(['city_id' => $city1->id, 'name' => 'الأصمخ', 'name_en' => 'Al Asmakh']);
        State::create(['city_id' => $city1->id, 'name' => 'البدع', 'name_en' => 'Al Bidda']);
        State::create(['city_id' => $city1->id, 'name' => 'الثمامة', 'name_en' => 'Al Thumama']);
        State::create(['city_id' => $city1->id, 'name' => 'الجاسرة', 'name_en' => 'Al Jasra']);
        State::create(['city_id' => $city1->id, 'name' => 'الهتمي', 'name_en' => 'Al Hitmi']);
        State::create(['city_id' => $city1->id, 'name' => 'الحي الدبلوماسي', 'name_en' => 'Diplomatic Area']);
        State::create(['city_id' => $city1->id, 'name' => 'الخليج الغربي', 'name_en' => 'West Bay']);
        State::create(['city_id' => $city1->id, 'name' => 'الدحيل', 'name_en' => 'Al Duhail']);
        State::create(['city_id' => $city1->id, 'name' => 'الدفنة', 'name_en' => 'Al Dafna']);
        State::create(['city_id' => $city1->id, 'name' => 'الدوحة الجديدة', 'name_en' => 'New Doha']);
        State::create(['city_id' => $city1->id, 'name' => 'الروضة', 'name_en' => 'Al Rawda']);
        State::create(['city_id' => $city1->id, 'name' => 'الريان الجديد', 'name_en' => 'Al Rayyan Al Jadeed']);
        State::create(['city_id' => $city1->id, 'name' => 'الريان القديم', 'name_en' => 'Al Rayyan Al Qadeem']);
        State::create(['city_id' => $city1->id, 'name' => 'السد', 'name_en' => 'Al Sadd']);
        State::create(['city_id' => $city1->id, 'name' => 'السودان', 'name_en' => 'Al Soudan']);
        State::create(['city_id' => $city1->id, 'name' => 'السيلية', 'name_en' => 'Al Sailiya']);
        State::create(['city_id' => $city1->id, 'name' => 'العزيزية', 'name_en' => 'Al Aziziya']);
        State::create(['city_id' => $city1->id, 'name' => 'العسيري', 'name_en' => 'Al Asiri']);
        State::create(['city_id' => $city1->id, 'name' => 'الغانم', 'name_en' => 'Al Ghanim']);
        State::create(['city_id' => $city1->id, 'name' => 'الغرافة', 'name_en' => 'Al Gharrafa']);
        State::create(['city_id' => $city1->id, 'name' => 'اللؤلؤة', 'name_en' => 'The Pearl']);
        State::create(['city_id' => $city1->id, 'name' => 'اللقطة', 'name_en' => 'Al Luqta']);
        State::create(['city_id' => $city1->id, 'name' => 'المرخية', 'name_en' => 'Al Markhiya']);
        State::create(['city_id' => $city1->id, 'name' => 'المرقاب', 'name_en' => 'Al Mirqab']);
        State::create(['city_id' => $city1->id, 'name' => 'المريخ', 'name_en' => 'Muraikh']);
        State::create(['city_id' => $city1->id, 'name' => 'المسيلة', 'name_en' => 'Al Messila']);
        State::create(['city_id' => $city1->id, 'name' => 'المعمورة', 'name_en' => 'Al Maamoura']);
        State::create(['city_id' => $city1->id, 'name' => 'المنتزه', 'name_en' => 'Al Muntazah']);
        State::create(['city_id' => $city1->id, 'name' => 'المنصورة', 'name_en' => 'Al Mansoura']);
        State::create(['city_id' => $city1->id, 'name' => 'المنطقة الصناعية القديمة', 'name_en' => 'Old Industrial Area']);
        State::create(['city_id' => $city1->id, 'name' => 'النجمة', 'name_en' => 'Al Najma']);
        State::create(['city_id' => $city1->id, 'name' => 'النخيل', 'name_en' => 'Al Nakheel']);
        State::create(['city_id' => $city1->id, 'name' => 'النصر', 'name_en' => 'Al Nasr']);
        State::create(['city_id' => $city1->id, 'name' => 'نعيجة', 'name_en' => 'Naija']);
        State::create(['city_id' => $city1->id, 'name' => 'الهلال', 'name_en' => 'Al Hilal']);
        State::create(['city_id' => $city1->id, 'name' => 'الوعب', 'name_en' => 'Al Waab']);
        State::create(['city_id' => $city1->id, 'name' => 'بحيرة وست لاجون', 'name_en' => 'West Bay Lagoon']);
        State::create(['city_id' => $city1->id, 'name' => 'بن عمران', 'name_en' => 'Bin Omran']);
        State::create(['city_id' => $city1->id, 'name' => 'حي الأعمال', 'name_en' => 'Business District']);
        State::create(['city_id' => $city1->id, 'name' => 'ر اس ابو عبود', 'name_en' => 'Ras Abu Aboud']);
        State::create(['city_id' => $city1->id, 'name' => 'شارع الخليج', 'name_en' => 'Gulf Street']);
        State::create(['city_id' => $city1->id, 'name' => 'شارع الكورنيش', 'name_en' => 'Corniche Street']);
        State::create(['city_id' => $city1->id, 'name' => 'شارع كليب', 'name_en' => 'Kulaib Road']);
        State::create(['city_id' => $city1->id, 'name' => 'طريق المطار القديم', 'name_en' => 'Old Airport Road']);
        State::create(['city_id' => $city1->id, 'name' => 'طريق سلوى', 'name_en' => 'Salwa Road']);
        State::create(['city_id' => $city1->id, 'name' => 'عنيزة', 'name_en' => 'Onaiza']);
        State::create(['city_id' => $city1->id, 'name' => 'عين خالد', 'name_en' => 'Ain Khaled']);
        State::create(['city_id' => $city1->id, 'name' => 'فريج بن محمود', 'name_en' => 'Fereej Bin Mahmoud']);
        State::create(['city_id' => $city1->id, 'name' => 'فر يج بن عبدالعز يز', 'name_en' => 'Fereej Bin Abdul Aziz']);
        State::create(['city_id' => $city1->id, 'name' => 'فريج الغانم الجديد', 'name_en' => 'Fereej Al Ghanim']);
        State::create(['city_id' => $city1->id, 'name' => 'فريج كليب', 'name_en' => 'Fereej Kulaib']);
        State::create(['city_id' => $city1->id, 'name' => 'مدينة خليفة الجنوبية', 'name_en' => 'Khalifa South City']);
        State::create(['city_id' => $city1->id, 'name' => 'مدينة خليفة الشمالية', 'name_en' => 'Khalifa North City']);
        State::create(['city_id' => $city1->id, 'name' => 'مسيمير', 'name_en' => 'Mesaimeer']);
        State::create(['city_id' => $city1->id, 'name' => 'مشيرب', 'name_en' => 'Msheireb']);
        State::create(['city_id' => $city1->id, 'name' => 'منطقة المطار', 'name_en' => 'Airport Area']);
        State::create(['city_id' => $city1->id, 'name' => 'منطقة معيذر', 'name_en' => 'Muaither Area']);
        State::create(['city_id' => $city1->id, 'name' => 'وادي السيل', 'name_en' => 'Wadi Al Sail']);
        State::create(['city_id' => $city1->id, 'name' => 'ام قرن', 'name_en' => 'Umm Qarn']);
        State::create(['city_id' => $city1->id, 'name' => 'سميسمة', 'name_en' => 'Simaisma']);
        State::create(['city_id' => $city1->id, 'name' => 'روضة الحمامة', 'name_en' => 'Rawdat Al Hamama']);
        State::create(['city_id' => $city1->id, 'name' => 'المره الغربية', 'name_en' => 'Al Mearad']);
        State::create(['city_id' => $city1->id, 'name' => 'المره الشرقية', 'name_en' => 'Al Mearad East']);
        State::create(['city_id' => $city1->id, 'name' => 'المناصير', 'name_en' => 'Al Manaseer']);
        State::create(['city_id' => $city1->id, 'name' => 'الضعاين', 'name_en' => 'Az̧ Z̧a‘āyin']);
        State::create(['city_id' => $city1->id, 'name' => 'ام سعيد', 'name_en' => 'Umm Sa‘īd']);
        State::create(['city_id' => $city1->id, 'name' => 'الضحى', 'name_en' => 'Ad-Daẖirah']);
        State::create(['city_id' => $city1->id, 'name' => 'الغويرية', 'name_en' => 'Al-Ghuwayriyah']);
        State::create(['city_id' => $city1->id, 'name' => 'مكينيس', 'name_en' => 'Mukaynis']);
        State::create(['city_id' => $city1->id, 'name' => 'الجميلية', 'name_en' => 'Al-Jumayliyah']);
        State::create(['city_id' => $city1->id, 'name' => 'ام باب', 'name_en' => 'Umm Bab']);
        State::create(['city_id' => $city1->id, 'name' => 'روضة راشد', 'name_en' => 'Rawdat Rashed']);
        State::create(['city_id' => $city1->id, 'name' => 'أم عبيرية', 'name_en' => 'Umm Ebairiya']);
        State::create(['city_id' => $city1->id, 'name' => 'النصرانية', 'name_en' => 'Al Nasraniya']);
        State::create(['city_id' => $city1->id, 'name' => 'ناصرية', 'name_en' => 'Nasiriyah']);
        State::create(['city_id' => $city1->id, 'name' => 'بني هاجر', 'name_en' => 'Bani Hajer']);
        State::create(['city_id' => $city1->id, 'name' => 'الثميد', 'name_en' => 'Al Themaid']);
        State::create(['city_id' => $city1->id, 'name' => 'السلطة الجديدة', 'name_en' => 'As Salatah al Jadidah']);
        State::create(['city_id' => $city1->id, 'name' => 'السلطة القديمة', 'name_en' => 'Old As Salatah']);
        State::create(['city_id' => $city1->id, 'name' => 'أبا الحيران', 'name_en' => 'Aba Al-Hiran']);
        State::create(['city_id' => $city1->id, 'name' => 'سوق واقف', 'name_en' => 'Souq Waqif']);
        State::create(['city_id' => $city1->id, 'name' => 'فريج الأمير', 'name_en' => 'Fereej Al Amir']);
        State::create(['city_id' => $city1->id, 'name' => 'فريج بن محمود', 'name_en' => 'Fereej Bin Mahmoud']);
        State::create(['city_id' => $city1->id, 'name' => 'لعبيب', 'name_en' => 'Leabaib']);

        //  States for City => الخور (Al Khor)
        State::create(['city_id' => $city2->id, 'name' => 'الذخيرة', 'name_en' => 'Al Dhakhira']);

        //  States for City => الشمال (Al Shamal)
        State::create(['city_id' => $city3->id, 'name' => 'أم العمد', 'name_en' => 'Umm Al Amad']);
        State::create(['city_id' => $city3->id, 'name' => 'الرويس', 'name_en' => 'Al Ruwais']);
        State::create(['city_id' => $city3->id, 'name' => 'مدينة الشمال', 'name_en' => 'Madinat ash Shamal']);
        State::create(['city_id' => $city3->id, 'name' => 'مسيكة', 'name_en' => 'Mseke']);


        //  States for City => الوسيل (Lusail)
        State::create(['city_id' => $city4->id, 'name' => 'الواجهة المائية', 'name_en' => 'Waterfront']);
        State::create(['city_id' => $city4->id, 'name' => 'فوكس هيلز', 'name_en' => 'Fox Hills']);
        State::create(['city_id' => $city4->id, 'name' => 'منطقة المارينا', 'name_en' => 'Marina District']);
        State::create(['city_id' => $city4->id, 'name' => 'جزر قطيفان', 'name_en' => 'Qtaifan Islands']);


        //  States for City => الوكرة (Al Wakra)
        State::create(['city_id' => $city5->id, 'name' => 'الوكير', 'name_en' => 'Al Wukair']);
        State::create(['city_id' => $city5->id, 'name' => 'قرية بروة', 'name_en' => 'Barwa Village']);
        State::create(['city_id' => $city5->id, 'name' => 'المشاف', 'name_en' => 'Al Meshaf']);
        State::create(['city_id' => $city5->id, 'name' => 'جبل الوكرة', 'name_en' => 'Wakrah Hill']);
        State::create(['city_id' => $city5->id, 'name' => 'معيذر الوكير', 'name_en' => 'Muaither Wakra']);


        //  States for City => دخان (Dukhan)
        State::create(['city_id' => $city6->id, 'name' => 'دخان', 'name_en' => 'Dukhan']);


        //  States for City => مسيعيد (Mesaieed)
        State::create(['city_id' => $city7->id, 'name' => 'المنطقة الصناعية الجديدة', 'name_en' => 'New Industrial Area']);
        State::create(['city_id' => $city7->id, 'name' => 'بركة العوامر', 'name_en' => 'Umm Al Houl']);

        //  States for City => الشحانية (Ash Shaḩānīyah)
        State::create(['city_id' => $city8->id, 'name' => 'الشحانية', 'name_en' => 'Ash Shaḩānīyah']);
    }
}
