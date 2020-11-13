<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ErasersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $erasers = [
            [
                'buyer_id'=>1,
                'eraser_taken'=>4,
            ],
            [
                'buyer_id'=>2,
                'eraser_taken'=>1,
            ],
            [
                'buyer_id'=>3,
                'eraser_taken'=>1,
            ],
        ];

        DB::table('erasers')->insert($erasers);
    }
}
