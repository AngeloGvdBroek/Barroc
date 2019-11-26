<?php

use Illuminate\Database\Seeder;

class PurchasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('purchases')->insert([
            [
                'user_id'       => 2,
                'created_at'    => '2019-11-01',
                'updated_at'    => '2019-11-01'
            ],
            [
                'user_id' => 2,
                'created_at'    => '2019-11-12',
                'updated_at'    => '2019-11-12'
            ],
            [
                'user_id' => 2,
                'created_at'    => '2019-11-13',
                'updated_at'    => '2019-11-13'
            ],
            [
                'user_id' => 2,
                'created_at'    => '2019-11-15',
                'updated_at'    => '2019-11-15'
            ]
        ]);
    }
}
