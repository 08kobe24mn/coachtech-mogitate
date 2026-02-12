<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeasonSeeder extends Seeder
{
    private const PRODUCT_ID = [
        'kiwi' => 1,
        'strawberry' => 2,
        'orange' => 3,
        'watermelon' => 4,
        'peach' => 5,
        'muscat' => 6,
        'pineapple' => 7,
        'grapes' => 8,
        'banana' => 9,
        'melon' => 10,
    ];

    private const SEASON_ID = [
        'spring' => 1,
        'summer' => 2,
        'autumn' => 3,
        'winter' => 4,
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'product_id' => self::PRODUCT_ID['kiwi'],
                'season_id' => self::SEASON_ID['autumn'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => self::PRODUCT_ID['kiwi'],
                'season_id' => self::SEASON_ID['winter'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => self::PRODUCT_ID['strawberry'],
                'season_id' => self::SEASON_ID['spring'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => self::PRODUCT_ID['orange'],
                'season_id' => self::SEASON_ID['winter'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => self::PRODUCT_ID['watermelon'],
                'season_id' => self::SEASON_ID['summer'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => self::PRODUCT_ID['peach'],
                'season_id' => self::SEASON_ID['summer'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => self::PRODUCT_ID['muscat'],
                'season_id' => self::SEASON_ID['summer'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => self::PRODUCT_ID['muscat'],
                'season_id' => self::SEASON_ID['autumn'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => self::PRODUCT_ID['pineapple'],
                'season_id' => self::SEASON_ID['spring'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => self::PRODUCT_ID['pineapple'],
                'season_id' => self::SEASON_ID['summer'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => self::PRODUCT_ID['grapes'],
                'season_id' => self::SEASON_ID['summer'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => self::PRODUCT_ID['grapes'],
                'season_id' => self::SEASON_ID['autumn'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => self::PRODUCT_ID['banana'],
                'season_id' => self::SEASON_ID['summer'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => self::PRODUCT_ID['melon'],
                'season_id' => self::SEASON_ID['spring'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_id' => self::PRODUCT_ID['melon'],
                'season_id' => self::SEASON_ID['summer'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('product_season')->insert($data);
    }
}
