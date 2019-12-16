<?php

use Illuminate\Database\Seeder;

class lease_typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('lease_types')->insert(
            [
                [
                    'type'      => 'maandeijks',

                ],
                [
                    'type'      => 'periodiek',
                ]
            ]
        );
    }
}
