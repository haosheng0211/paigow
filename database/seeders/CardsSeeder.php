<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CardsSeeder extends Seeder
{
    public function run()
    {
        $cards = [
            [
                "id"          => 1,
                "label"       => "天",
                "image"       => storage_path('assets/images/cards/1.png'),
                "cards_count" => 2,
            ],
            [
                "id"          => 2,
                "label"       => "地",
                "image"       => storage_path("assets/images/cards/2.png"),
                "cards_count" => 2,
            ],
            [
                "id"          => 3,
                "label"       => "人",
                "image"       => storage_path("assets/images/cards/3.png"),
                "cards_count" => 2,
            ],
            [
                "id"          => 4,
                "label"       => "牙",
                "image"       => storage_path("assets/images/cards/4.png"),
                "cards_count" => 2,
            ],
            [
                "id"          => 5,
                "label"       => "板六",
                "image"       => storage_path("assets/images/cards/5.png"),
                "cards_count" => 2,
            ],
            [
                "id"          => 6,
                "label"       => "板四",
                "image"       => storage_path("assets/images/cards/6.png"),
                "cards_count" => 2,
            ],
            [
                "id"          => 7,
                "label"       => "肥豬",
                "image"       => storage_path("assets/images/cards/7.png"),
                "cards_count" => 2,
            ],
            [
                "id"          => 8,
                "label"       => "景平",
                "image"       => storage_path("assets/images/cards/8.png"),
                "cards_count" => 2,
            ],
            [
                "id"          => 9,
                "label"       => "魷魚",
                "image"       => storage_path("assets/images/cards/9.png"),
                "cards_count" => 2,
            ],
            [
                "id"          => 10,
                "label"       => "紅頭七",
                "image"       => storage_path("assets/images/cards/10.png"),
                "cards_count" => 2,
            ],
            [
                "id"          => 11,
                "label"       => "紅頭六",
                "image"       => storage_path("assets/images/cards/11.png"),
                "cards_count" => 2,
            ],
            [
                "id"          => 12,
                "label"       => "九(1)",
                "image"       => storage_path("assets/images/cards/12.png"),
                "cards_count" => 1,
            ],
            [
                "id"          => 13,
                "label"       => "九(2)",
                "image"       => storage_path("assets/images/cards/13.png"),
                "cards_count" => 1,
            ],
            [
                "id"          => 14,
                "label"       => "八(1)",
                "image"       => storage_path("assets/images/cards/14.png"),
                "cards_count" => 1,
            ],
            [
                "id"          => 15,
                "label"       => "八(2)",
                "image"       => storage_path("assets/images/cards/15.png"),
                "cards_count" => 1,
            ],
            [
                "id"          => 16,
                "label"       => "七(1)",
                "image"       => storage_path("assets/images/cards/16.png"),
                "cards_count" => 1,
            ],
            [
                "id"          => 17,
                "label"       => "七(2)",
                "image"       => storage_path("assets/images/cards/17.png"),
                "cards_count" => 1,
            ],
            [
                "id"          => 18,
                "label"       => "皇帝六",
                "image"       => storage_path("assets/images/cards/18.png"),
                "cards_count" => 1,
            ],
            [
                "id"          => 19,
                "label"       => "五(1)",
                "image"       => storage_path("assets/images/cards/19.png"),
                "cards_count" => 1,
            ],
            [
                "id"          => 20,
                "label"       => "五(2)",
                "image"       => storage_path("assets/images/cards/20.png"),
                "cards_count" => 1,
            ],
            [
                "id"          => 21,
                "label"       => "丁三",
                "image"       => storage_path("assets/images/cards/21.png"),
                "cards_count" => 1,
            ]
        ];
        foreach ($cards as $card) {
            $card['image'] = Storage::putFile('uploads', $card['image']);
            $card['image'] = Storage::url($card['image']);
            Card::create($card);
        }
    }
}
