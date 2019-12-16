<?php

use Illuminate\Database\Seeder;

class workordersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for( $i = 1; $i < 75; $i++ ) {
            \DB::table('workorders')->insert(
                [
                    [
                        'user_id'           => $faker->numberBetween($min = 1, $max = 195),
                        'work_address'         => $faker->address(),
                        'description'       => $faker->text(300),
                        'total_price'       => $faker->randomFloat(2,400,1000)
                    ]
                ]
            );

        }
    }
}
