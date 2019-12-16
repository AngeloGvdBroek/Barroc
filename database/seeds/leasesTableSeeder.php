<?php

use Illuminate\Database\Seeder;

class leasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for( $i = 1; $i < 150; $i++ ) {
            \DB::table('leases')->insert(
                [
                    [
                        'lease_type_id'      => $faker->numberBetween($min = 1, $max = 2),
                        'customer_id'        => $i,
                        'finance_id'         => 7,
                        'monthly_costs'      => $faker->randomFloat(2,400, 10000)
                    ]
                ]
            );

        }
    }
}
