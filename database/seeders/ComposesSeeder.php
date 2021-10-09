<?php

namespace Database\Seeders;

use App\Models\Compose;
use Illuminate\Database\Seeder;

class ComposesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->pairs();
        $this->other();
    }

    public function pairs()
    {
        $composes = [
            [
                "label"       => "至尊",
                "cards"       => [
                    18,
                    21
                ],
                "pairs"       => 1,
                "order"       => 0,
                "score_north" => "44.000",
                "score_south" => "44.000"
            ],
            [
                "label"       => "天對",
                "cards"       => [
                    1,
                    1
                ],
                "pairs"       => 1,
                "order"       => 1,
                "score_north" => "42.000",
                "score_south" => "42.000"
            ],
            [
                "label"       => "地對",
                "cards"       => [
                    2,
                    2
                ],
                "pairs"       => 1,
                "order"       => 2,
                "score_north" => "40.000",
                "score_south" => "40.000"
            ],
            [
                "label"       => "人對",
                "cards"       => [
                    3,
                    3
                ],
                "pairs"       => 1,
                "order"       => 3,
                "score_north" => "38.000",
                "score_south" => "38.000"
            ],
            [
                "label"       => "牙對",
                "cards"       => [
                    4,
                    4
                ],
                "pairs"       => 1,
                "order"       => 4,
                "score_north" => "36.000",
                "score_south" => "36.000"
            ],
            [
                "label"       => "肥豬對",
                "cards"       => [
                    7,
                    7
                ],
                "pairs"       => 1,
                "order"       => 5,
                "score_north" => "30.000",
                "score_south" => "34.000"
            ],
            [
                "label"       => "板六對",
                "cards"       => [
                    5,
                    5
                ],
                "pairs"       => 1,
                "order"       => 6,
                "score_north" => "30.000",
                "score_south" => "32.000"
            ],
            [
                "label"       => "板四對",
                "cards"       => [
                    6,
                    6
                ],
                "pairs"       => 1,
                "order"       => 7,
                "score_north" => "30.000",
                "score_south" => "30.000"
            ],
            [
                "label"       => "景平對",
                "cards"       => [
                    8,
                    8
                ],
                "pairs"       => 1,
                "order"       => 8,
                "score_north" => "28.000",
                "score_south" => "26.000"
            ],
            [
                "label"       => "魷魚對",
                "cards"       => [
                    9,
                    9
                ],
                "pairs"       => 1,
                "order"       => 9,
                "score_north" => "28.000",
                "score_south" => "26.000"
            ],
            [
                "label"       => "紅頭七對",
                "cards"       => [
                    10,
                    10
                ],
                "pairs"       => 1,
                "order"       => 10,
                "score_north" => "28.000",
                "score_south" => "26.000"
            ],
            [
                "label"       => "紅頭六對",
                "cards"       => [
                    11,
                    11
                ],
                "pairs"       => 1,
                "order"       => 11,
                "score_north" => "28.000",
                "score_south" => "26.000"
            ],
            [
                "label"       => "九對",
                "cards"       => [
                    12,
                    13
                ],
                "pairs"       => 1,
                "order"       => 12,
                "score_north" => "26.000",
                "score_south" => "26.000"
            ],
            [
                "label"       => "八對",
                "cards"       => [
                    14,
                    15
                ],
                "pairs"       => 1,
                "order"       => 13,
                "score_north" => "26.000",
                "score_south" => "26.000"
            ],
            [
                "label"       => "七對",
                "cards"       => [
                    16,
                    17
                ],
                "pairs"       => 1,
                "order"       => 14,
                "score_north" => "26.000",
                "score_south" => "26.000"
            ],
            [
                "label"       => "五對",
                "cards"       => [
                    19,
                    20
                ],
                "pairs"       => 1,
                "order"       => 15,
                "score_north" => "26.000",
                "score_south" => "26.000"
            ],
            [
                "label"       => "九王爺",
                "cards"       => [
                    1,
                    12
                ],
                "pairs"       => 1,
                "order"       => 16,
                "score_north" => "24.000",
                "score_south" => "24.000"
            ],
            [
                "label"       => "九王爺",
                "cards"       => [
                    1,
                    13
                ],
                "pairs"       => 1,
                "order"       => 17,
                "score_north" => "24.000",
                "score_south" => "24.000"
            ],
            [
                "label"       => "天冠",
                "cards"       => [
                    1,
                    14
                ],
                "pairs"       => 1,
                "order"       => 18,
                "score_north" => "22.000",
                "score_south" => "22.000"
            ],
            [
                "label"       => "天冠",
                "cards"       => [
                    1,
                    15
                ],
                "pairs"       => 1,
                "order"       => 19,
                "score_north" => "22.000",
                "score_south" => "22.000"
            ],
            [
                "label"       => "天冠",
                "cards"       => [
                    1,
                    3
                ],
                "pairs"       => 1,
                "order"       => 20,
                "score_north" => "22.000",
                "score_south" => "22.000"
            ],
            [
                "label"       => "地冠",
                "cards"       => [
                    2,
                    14
                ],
                "pairs"       => 1,
                "order"       => 21,
                "score_north" => "20.000",
                "score_south" => "20.000"
            ],
            [
                "label"       => "地冠",
                "cards"       => [
                    2,
                    15
                ],
                "pairs"       => 1,
                "order"       => 22,
                "score_north" => "20.000",
                "score_south" => "20.000"
            ],
            [
                "label"       => "地冠",
                "cards"       => [
                    2,
                    3
                ],
                "pairs"       => 1,
                "order"       => 23,
                "score_north" => "20.000",
                "score_south" => "20.000"
            ]
        ];
        foreach ($composes as $compose) {
            Compose::create($compose);
        }
    }

    public function other()
    {
        $composes = [
            [
                "label"       => null,
                "cards"       => [
                    1,
                    2
                ],
                "score_north" => "4.172",
                "score_south" => "4.172",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    1,
                    4
                ],
                "score_north" => "6.150",
                "score_south" => "6.150",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    1,
                    5
                ],
                "score_north" => "8.140",
                "score_south" => "8.141",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    1,
                    6
                ],
                "score_north" => "6.140",
                "score_south" => "6.140",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    1,
                    7
                ],
                "score_north" => "2.140",
                "score_south" => "2.142",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    1,
                    8
                ],
                "score_north" => "2.110",
                "score_south" => "2.090",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    1,
                    9
                ],
                "score_north" => "3.110",
                "score_south" => "3.090",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    1,
                    10
                ],
                "score_north" => "9.090",
                "score_south" => "9.090",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    1,
                    11
                ],
                "score_north" => "8.110",
                "score_south" => "8.090",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    1,
                    16
                ],
                "score_north" => "9.090",
                "score_south" => "9.090",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    1,
                    17
                ],
                "score_north" => "9.090",
                "score_south" => "9.090",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    1,
                    18
                ],
                "score_north" => "8.090",
                "score_south" => "8.090",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    1,
                    19
                ],
                "score_north" => "7.090",
                "score_south" => "7.090",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    1,
                    20
                ],
                "score_north" => "7.090",
                "score_south" => "7.090",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    1,
                    21
                ],
                "score_north" => "5.090",
                "score_south" => "5.090",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    2,
                    4
                ],
                "score_north" => "6.142",
                "score_south" => "6.142",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    2,
                    5
                ],
                "score_north" => "8.132",
                "score_south" => "8.133",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    2,
                    6
                ],
                "score_north" => "6.132",
                "score_south" => "6.132",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    2,
                    7
                ],
                "score_north" => "2.132",
                "score_south" => "2.134",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    2,
                    8
                ],
                "score_north" => "2.102",
                "score_south" => "2.082",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    2,
                    9
                ],
                "score_north" => "3.102",
                "score_south" => "3.082",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    2,
                    10
                ],
                "score_north" => "9.102",
                "score_south" => "9.082",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    2,
                    11
                ],
                "score_north" => "8.102",
                "score_south" => "8.082",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    2,
                    12
                ],
                "score_north" => "1.082",
                "score_south" => "1.082",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    2,
                    13
                ],
                "score_north" => "1.082",
                "score_south" => "1.082",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    2,
                    16
                ],
                "score_north" => "9.082",
                "score_south" => "9.082",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    2,
                    17
                ],
                "score_north" => "9.082",
                "score_south" => "9.082",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    2,
                    18
                ],
                "score_north" => "8.082",
                "score_south" => "8.082",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    2,
                    19
                ],
                "score_north" => "7.082",
                "score_south" => "7.082",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    2,
                    20
                ],
                "score_north" => "7.082",
                "score_south" => "7.082",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    2,
                    21
                ],
                "score_north" => "5.082",
                "score_south" => "5.082",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    3,
                    4
                ],
                "score_north" => "2.141",
                "score_south" => "2.141",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    3,
                    5
                ],
                "score_north" => "4.131",
                "score_south" => "4.132",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    3,
                    6
                ],
                "score_north" => "2.131",
                "score_south" => "2.131",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    3,
                    7
                ],
                "score_north" => "8.131",
                "score_south" => "8.133",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    3,
                    8
                ],
                "score_north" => "8.101",
                "score_south" => "8.081",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    3,
                    9
                ],
                "score_north" => "9.101",
                "score_south" => "9.081",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    3,
                    10
                ],
                "score_north" => "5.101",
                "score_south" => "5.081",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    3,
                    11
                ],
                "score_north" => "4.101",
                "score_south" => "4.081",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    3,
                    12
                ],
                "score_north" => "7.081",
                "score_south" => "7.081",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    3,
                    13
                ],
                "score_north" => "7.081",
                "score_south" => "7.081",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    3,
                    14
                ],
                "score_north" => "6.081",
                "score_south" => "6.081",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    3,
                    15
                ],
                "score_north" => "6.081",
                "score_south" => "6.081",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    3,
                    16
                ],
                "score_north" => "5.081",
                "score_south" => "5.081",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    3,
                    17
                ],
                "score_north" => "5.081",
                "score_south" => "5.081",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    3,
                    18
                ],
                "score_north" => "4.081",
                "score_south" => "4.081",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    3,
                    19
                ],
                "score_north" => "3.081",
                "score_south" => "3.081",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    3,
                    20
                ],
                "score_north" => "3.081",
                "score_south" => "3.081",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    3,
                    21
                ],
                "score_north" => "1.081",
                "score_south" => "1.081",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    4,
                    5
                ],
                "score_north" => "0.110",
                "score_south" => "0.111",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    4,
                    6
                ],
                "score_north" => "8.110",
                "score_south" => "8.110",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    4,
                    7
                ],
                "score_north" => "4.110",
                "score_south" => "4.112",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    4,
                    8
                ],
                "score_north" => "4.080",
                "score_south" => "4.060",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    4,
                    9
                ],
                "score_north" => "5.080",
                "score_south" => "5.060",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    4,
                    10
                ],
                "score_north" => "1.080",
                "score_south" => "1.060",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    4,
                    11
                ],
                "score_north" => "0.080",
                "score_south" => "0.060",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    4,
                    12
                ],
                "score_north" => "3.060",
                "score_south" => "3.060",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    4,
                    13
                ],
                "score_north" => "3.060",
                "score_south" => "3.060",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    4,
                    14
                ],
                "score_north" => "2.060",
                "score_south" => "2.060",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    4,
                    15
                ],
                "score_north" => "2.060",
                "score_south" => "2.060",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    4,
                    16
                ],
                "score_north" => "1.060",
                "score_south" => "1.060",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    4,
                    17
                ],
                "score_north" => "1.060",
                "score_south" => "1.060",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    4,
                    18
                ],
                "score_north" => "0.060",
                "score_south" => "0.060",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    4,
                    19
                ],
                "score_north" => "9.060",
                "score_south" => "9.060",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    4,
                    20
                ],
                "score_north" => "9.060",
                "score_south" => "9.060",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    4,
                    21
                ],
                "score_north" => "7.060",
                "score_south" => "7.060",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    5,
                    6
                ],
                "score_north" => "0.100",
                "score_south" => "0.101",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    5,
                    7
                ],
                "score_north" => "6.100",
                "score_south" => "6.103",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    5,
                    8
                ],
                "score_north" => "6.070",
                "score_south" => "6.051",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    5,
                    9
                ],
                "score_north" => "7.070",
                "score_south" => "7.051",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    5,
                    10
                ],
                "score_north" => "3.070",
                "score_south" => "3.051",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    5,
                    11
                ],
                "score_north" => "2.070",
                "score_south" => "2.051",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    5,
                    12
                ],
                "score_north" => "5.050",
                "score_south" => "5.051",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    5,
                    13
                ],
                "score_north" => "5.050",
                "score_south" => "5.051",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    5,
                    14
                ],
                "score_north" => "4.050",
                "score_south" => "4.051",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    5,
                    15
                ],
                "score_north" => "4.050",
                "score_south" => "4.051",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    5,
                    16
                ],
                "score_north" => "3.050",
                "score_south" => "3.051",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    5,
                    17
                ],
                "score_north" => "3.050",
                "score_south" => "3.051",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    5,
                    18
                ],
                "score_north" => "2.050",
                "score_south" => "2.051",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    5,
                    19
                ],
                "score_north" => "1.050",
                "score_south" => "1.051",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    5,
                    20
                ],
                "score_north" => "1.050",
                "score_south" => "1.051",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    5,
                    21
                ],
                "score_north" => "9.050",
                "score_south" => "9.051",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    6,
                    7
                ],
                "score_north" => "4.100",
                "score_south" => "4.102",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    6,
                    8
                ],
                "score_north" => "4.070",
                "score_south" => "4.050",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    6,
                    9
                ],
                "score_north" => "5.070",
                "score_south" => "5.050",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    6,
                    10
                ],
                "score_north" => "1.070",
                "score_south" => "1.050",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    6,
                    11
                ],
                "score_north" => "0.070",
                "score_south" => "0.050",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    6,
                    12
                ],
                "score_north" => "3.050",
                "score_south" => "3.050",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    6,
                    13
                ],
                "score_north" => "3.050",
                "score_south" => "3.050",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    6,
                    14
                ],
                "score_north" => "2.050",
                "score_south" => "2.050",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    6,
                    15
                ],
                "score_north" => "2.050",
                "score_south" => "2.050",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    6,
                    16
                ],
                "score_north" => "1.050",
                "score_south" => "1.050",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    6,
                    17
                ],
                "score_north" => "1.050",
                "score_south" => "1.050",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    6,
                    18
                ],
                "score_north" => "0.050",
                "score_south" => "0.050",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    6,
                    19
                ],
                "score_north" => "9.050",
                "score_south" => "9.050",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    6,
                    20
                ],
                "score_north" => "9.050",
                "score_south" => "9.050",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    6,
                    21
                ],
                "score_north" => "7.050",
                "score_south" => "7.050",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    7,
                    8
                ],
                "score_north" => "0.070",
                "score_south" => "0.052",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    7,
                    9
                ],
                "score_north" => "1.070",
                "score_south" => "1.052",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    7,
                    10
                ],
                "score_north" => "7.070",
                "score_south" => "7.052",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    7,
                    11
                ],
                "score_north" => "6.070",
                "score_south" => "6.052",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    7,
                    12
                ],
                "score_north" => "9.050",
                "score_south" => "9.052",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    7,
                    13
                ],
                "score_north" => "9.050",
                "score_south" => "9.052",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    7,
                    14
                ],
                "score_north" => "8.050",
                "score_south" => "8.052",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    7,
                    15
                ],
                "score_north" => "8.050",
                "score_south" => "8.052",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    7,
                    16
                ],
                "score_north" => "7.050",
                "score_south" => "7.052",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    7,
                    17
                ],
                "score_north" => "7.050",
                "score_south" => "7.052",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    7,
                    18
                ],
                "score_north" => "6.050",
                "score_south" => "6.052",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    7,
                    19
                ],
                "score_north" => "5.050",
                "score_south" => "5.052",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    7,
                    20
                ],
                "score_north" => "5.050",
                "score_south" => "5.052",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    7,
                    21
                ],
                "score_north" => "3.050",
                "score_south" => "3.052",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    8,
                    9
                ],
                "score_north" => "1.040",
                "score_south" => "1.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    8,
                    10
                ],
                "score_north" => "7.040",
                "score_south" => "7.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    8,
                    11
                ],
                "score_north" => "6.040",
                "score_south" => "6.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    8,
                    12
                ],
                "score_north" => "9.020",
                "score_south" => "9.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    8,
                    13
                ],
                "score_north" => "9.020",
                "score_south" => "9.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    8,
                    14
                ],
                "score_north" => "8.020",
                "score_south" => "8.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    8,
                    15
                ],
                "score_north" => "8.020",
                "score_south" => "8.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    8,
                    16
                ],
                "score_north" => "7.020",
                "score_south" => "7.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    8,
                    17
                ],
                "score_north" => "7.020",
                "score_south" => "7.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    8,
                    18
                ],
                "score_north" => "6.020",
                "score_south" => "6.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    8,
                    19
                ],
                "score_north" => "5.020",
                "score_south" => "5.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    8,
                    20
                ],
                "score_north" => "5.020",
                "score_south" => "5.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    8,
                    21
                ],
                "score_north" => "3.020",
                "score_south" => "3.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    9,
                    10
                ],
                "score_north" => "8.040",
                "score_south" => "8.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    9,
                    11
                ],
                "score_north" => "7.040",
                "score_south" => "7.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    9,
                    12
                ],
                "score_north" => "0.020",
                "score_south" => "0.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    9,
                    13
                ],
                "score_north" => "0.020",
                "score_south" => "0.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    9,
                    14
                ],
                "score_north" => "9.020",
                "score_south" => "9.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    9,
                    15
                ],
                "score_north" => "9.020",
                "score_south" => "9.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    9,
                    16
                ],
                "score_north" => "8.020",
                "score_south" => "8.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    9,
                    17
                ],
                "score_north" => "8.020",
                "score_south" => "8.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    9,
                    18
                ],
                "score_north" => "7.020",
                "score_south" => "7.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    9,
                    19
                ],
                "score_north" => "6.020",
                "score_south" => "6.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    9,
                    20
                ],
                "score_north" => "6.020",
                "score_south" => "6.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    9,
                    21
                ],
                "score_north" => "4.020",
                "score_south" => "4.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    10,
                    11
                ],
                "score_north" => "3.040",
                "score_south" => "3.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    10,
                    12
                ],
                "score_north" => "6.020",
                "score_south" => "6.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    10,
                    13
                ],
                "score_north" => "6.020",
                "score_south" => "6.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    10,
                    14
                ],
                "score_north" => "5.020",
                "score_south" => "5.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    10,
                    15
                ],
                "score_north" => "5.020",
                "score_south" => "5.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    10,
                    16
                ],
                "score_north" => "4.020",
                "score_south" => "4.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    10,
                    17
                ],
                "score_north" => "4.020",
                "score_south" => "4.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    10,
                    18
                ],
                "score_north" => "3.020",
                "score_south" => "3.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    10,
                    19
                ],
                "score_north" => "2.020",
                "score_south" => "2.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    10,
                    20
                ],
                "score_north" => "2.020",
                "score_south" => "2.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    10,
                    21
                ],
                "score_north" => "0.020",
                "score_south" => "0.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    11,
                    12
                ],
                "score_north" => "5.020",
                "score_south" => "5.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    11,
                    13
                ],
                "score_north" => "5.020",
                "score_south" => "5.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    11,
                    14
                ],
                "score_north" => "4.020",
                "score_south" => "4.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    11,
                    15
                ],
                "score_north" => "4.020",
                "score_south" => "4.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    11,
                    16
                ],
                "score_north" => "3.020",
                "score_south" => "3.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    11,
                    17
                ],
                "score_north" => "3.020",
                "score_south" => "3.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    11,
                    18
                ],
                "score_north" => "2.020",
                "score_south" => "2.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    11,
                    19
                ],
                "score_north" => "1.020",
                "score_south" => "1.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    11,
                    20
                ],
                "score_north" => "1.020",
                "score_south" => "1.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    11,
                    21
                ],
                "score_north" => "9.020",
                "score_south" => "9.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    12,
                    14
                ],
                "score_north" => "7.000",
                "score_south" => "7.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    12,
                    15
                ],
                "score_north" => "7.000",
                "score_south" => "7.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    12,
                    16
                ],
                "score_north" => "6.000",
                "score_south" => "6.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    12,
                    17
                ],
                "score_north" => "6.000",
                "score_south" => "6.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    12,
                    18
                ],
                "score_north" => "5.000",
                "score_south" => "5.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    12,
                    19
                ],
                "score_north" => "4.000",
                "score_south" => "4.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    12,
                    20
                ],
                "score_north" => "4.000",
                "score_south" => "4.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    12,
                    21
                ],
                "score_north" => "2.000",
                "score_south" => "2.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    13,
                    14
                ],
                "score_north" => "7.000",
                "score_south" => "7.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    13,
                    15
                ],
                "score_north" => "7.000",
                "score_south" => "7.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    13,
                    16
                ],
                "score_north" => "6.000",
                "score_south" => "6.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    13,
                    17
                ],
                "score_north" => "6.000",
                "score_south" => "6.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    13,
                    18
                ],
                "score_north" => "5.000",
                "score_south" => "5.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    13,
                    19
                ],
                "score_north" => "4.000",
                "score_south" => "4.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    13,
                    20
                ],
                "score_north" => "4.000",
                "score_south" => "4.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    13,
                    21
                ],
                "score_north" => "2.000",
                "score_south" => "2.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    14,
                    16
                ],
                "score_north" => "5.000",
                "score_south" => "5.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    14,
                    17
                ],
                "score_north" => "5.000",
                "score_south" => "5.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    14,
                    18
                ],
                "score_north" => "4.000",
                "score_south" => "4.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    14,
                    19
                ],
                "score_north" => "3.000",
                "score_south" => "3.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    14,
                    20
                ],
                "score_north" => "3.000",
                "score_south" => "3.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    14,
                    21
                ],
                "score_north" => "1.000",
                "score_south" => "1.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    15,
                    16
                ],
                "score_north" => "5.000",
                "score_south" => "5.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    15,
                    17
                ],
                "score_north" => "5.000",
                "score_south" => "5.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    15,
                    18
                ],
                "score_north" => "4.000",
                "score_south" => "4.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    15,
                    19
                ],
                "score_north" => "3.000",
                "score_south" => "3.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    15,
                    20
                ],
                "score_north" => "3.000",
                "score_south" => "3.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    15,
                    21
                ],
                "score_north" => "1.000",
                "score_south" => "1.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    16,
                    18
                ],
                "score_north" => "3.000",
                "score_south" => "3.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    16,
                    19
                ],
                "score_north" => "2.000",
                "score_south" => "2.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    16,
                    20
                ],
                "score_north" => "2.000",
                "score_south" => "2.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    16,
                    21
                ],
                "score_north" => "0.000",
                "score_south" => "0.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    17,
                    18
                ],
                "score_north" => "3.000",
                "score_south" => "3.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    17,
                    19
                ],
                "score_north" => "2.000",
                "score_south" => "2.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    17,
                    20
                ],
                "score_north" => "2.000",
                "score_south" => "2.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    17,
                    21
                ],
                "score_north" => "0.000",
                "score_south" => "0.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    18,
                    19
                ],
                "score_north" => "1.000",
                "score_south" => "1.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    18,
                    20
                ],
                "score_north" => "1.000",
                "score_south" => "1.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    19,
                    21
                ],
                "score_north" => "8.000",
                "score_south" => "8.000",
                "pairs"       => 0,
                "order"       => 0
            ],
            [
                "label"       => null,
                "cards"       => [
                    20,
                    21
                ],
                "score_north" => "8.000",
                "score_south" => "8.000",
                "pairs"       => 0,
                "order"       => 0
            ]
        ];
        foreach ($composes as $compose) {
            Compose::create($compose);
        }
    }
}
