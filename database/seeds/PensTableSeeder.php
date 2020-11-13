<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pens = [
            [
                'buyer_id'=>1,
                'pen_taken'=>3,
            ],
            [
                'buyer_id'=>2,
                'pen_taken'=>5,
            ],
            [
                'buyer_id'=>3,
                'pen_taken'=>4,
            ],
        ];

        DB::table('pens')->insert($pens);
    }
}
