<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table( 'records' )->delete();

        \DB::table('records')->insert(
            [
                [
                    'stock_id' => 1,
                    'open' => 600,
                    'high' => 601,
                    'low' => 604,
                    'close' => 588,
                    'date' => '2021-11-08'
                ],
                [
                    'stock_id' => 1,
                    'open' => 588,
                    'high' => 595,
                    'low' => 601,
                    'close' => 591,
                    'date' => '2021-11-07'
                ],
            ]
        );
    }
}
