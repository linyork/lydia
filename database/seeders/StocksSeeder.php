<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StocksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table( 'stocks' )->delete();

        \DB::table('stocks')->insert(
            [
                'id' => 1,
                'sid' => '2330',
                'name' => '台積電'
            ],
        );
    }
}
