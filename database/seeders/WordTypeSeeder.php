<?php

namespace Database\Seeders;

use App\Models\WordType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WordTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedTypes = [
            [
                'id' => 1,
                'code' => 'OT',
                'name' => 'Other',
            ],
            [
                'id' => 10,
                'code' => 'AC',
                'name' => 'Acronym',
            ],
            [
                'code' => 'TE',
                'name' => 'Term',
            ],
            [
                'code' => 'AB',
                'name' => 'Abbreviation',
            ],
            [
                'code' => 'MN',
                'name' => 'Mnemonic',
            ],
            [
                'code' => 'BA',
                'name' => 'Backronym',
            ],

            [
                'code' => 'IN',
                'name' => 'Initialism',
            ],

        ];

        foreach ($seedTypes as $seedType) {
            WordType::create($seedType);
        }

    }
}
