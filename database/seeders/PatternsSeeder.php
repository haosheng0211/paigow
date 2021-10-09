<?php

namespace Database\Seeders;

use App\Models\Patterns;
use Illuminate\Database\Seeder;

class PatternsSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                "label" => "通官",
                "hands" => [
                    [
                        3,
                        7,
                        11,
                        15
                    ],
                    [
                        2,
                        6,
                        10,
                        14
                    ],
                    [
                        1,
                        5,
                        9,
                        13
                    ],
                    [
                        0,
                        4,
                        8,
                        12
                    ]
                ]
            ],
            [
                "label" => "山形",
                "hands" => [
                    [
                        1,
                        2,
                        5,
                        6
                    ],
                    [
                        3,
                        7,
                        11,
                        15
                    ],
                    [
                        9,
                        10,
                        13,
                        14
                    ],
                    [
                        0,
                        4,
                        8,
                        12
                    ]
                ]
            ],
            [
                "label" => "剝皮",
                "hands" => [
                    [
                        0,
                        1,
                        2,
                        3
                    ],
                    [
                        4,
                        5,
                        6,
                        7
                    ],
                    [
                        8,
                        9,
                        10,
                        11
                    ],
                    [
                        12,
                        13,
                        14,
                        15
                    ]
                ]
            ],
            [
                "label" => "AB官",
                "hands" => [
                    [
                        2,
                        3,
                        6,
                        7
                    ],
                    [
                        10,
                        11,
                        14,
                        15
                    ],
                    [
                        8,
                        9,
                        12,
                        13
                    ],
                    [
                        0,
                        1,
                        4,
                        5
                    ]
                ]
            ],
            [
                "label" => "A官",
                "hands" => [
                    [
                        2,
                        3,
                        6,
                        7
                    ],
                    [
                        10,
                        11,
                        14,
                        15
                    ],
                    [
                        1,
                        5,
                        9,
                        13
                    ],
                    [
                        0,
                        4,
                        8,
                        12
                    ]
                ]
            ],
            [
                "label" => "B官",
                "hands" => [
                    [
                        0,
                        1,
                        4,
                        5
                    ],
                    [
                        3,
                        7,
                        11,
                        15
                    ],
                    [
                        2,
                        6,
                        10,
                        14
                    ],
                    [
                        8,
                        9,
                        12,
                        13
                    ]
                ]
            ],
            [
                "label" => "AB官剝皮",
                "hands" => [
                    [
                        2,
                        3,
                        6,
                        7
                    ],
                    [
                        8,
                        9,
                        10,
                        11
                    ],
                    [
                        12,
                        13,
                        14,
                        15
                    ],
                    [
                        0,
                        1,
                        4,
                        5
                    ]
                ]
            ],
            [
                "label" => "剝皮AB",
                "hands" => [
                    [
                        0,
                        1,
                        2,
                        3
                    ],
                    [
                        4,
                        5,
                        6,
                        7
                    ],
                    [
                        10,
                        11,
                        14,
                        15
                    ],
                    [
                        8,
                        9,
                        12,
                        13
                    ]
                ]
            ],
            [
                "label" => "螃蟹",
                "hands" => [
                    [
                        0,
                        3,
                        4,
                        7
                    ],
                    [
                        1,
                        2,
                        5,
                        6
                    ],
                    [
                        8,
                        9,
                        10,
                        11
                    ],
                    [
                        12,
                        13,
                        14,
                        15
                    ]
                ]
            ]
        ];

        foreach ($items as $item) {
            $pattern = Patterns::create([
                'label' => $item['label']
            ]);
            foreach ($item['hands'] as $key => $hand) {
                $pattern->hands()->create([
                    'cards' => $hand,
                    'order' => $key + 1
                ]);
            }
        }
    }
}
