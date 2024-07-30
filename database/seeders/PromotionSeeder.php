<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promotion;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = json_decode(file_get_contents(__DIR__ . '\promotions.json'), true);

        foreach ($data as $promotionData) {
            $newPromotion = new Promotion();
            $newPromotion->title = $promotionData['title'];
            $newPromotion->duration = $promotionData['duration'];
            $newPromotion->price = $promotionData['price'];
            $newPromotion->description = $promotionData['description'];
            $newPromotion->save();
        }
    }
}
