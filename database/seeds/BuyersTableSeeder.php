<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuyersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buyers = [
            ['name'=>'Cristiano Ronaldo'],
            ['name'=>'Lionel Messi'],
            ['name'=>'Ronaldinho'],
        ];

        DB::table('buyers')->insert($buyers);

        // factory(\App\Buyer::class,10)->create();
    }
}
