<?php

use Illuminate\Database\Seeder;

class invoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for( $i = 1; $i < 500; $i++ ) {
            \DB::table('invoices')->insert(
                [
                    [
                        'lease_id'           => $faker->numberBetween($min = 1, $max = 149),
                        'betaald_op'         => $faker->date($format = 'Y-m-d', $max = 'now'),
                    ]
                ]
            );

        }
    }
}
