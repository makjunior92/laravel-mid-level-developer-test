<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diaries = [
            [
                'buyer_id'=>1,
                'diary_taken'=>1,
            ],
            [
                'buyer_id'=>2,
                'diary_taken'=>3,
            ],
            [
                'buyer_id'=>3,
                'diary_taken'=>5,
            ],
        ];

        DB::table('diaries')->insert($diaries);
    }
}
