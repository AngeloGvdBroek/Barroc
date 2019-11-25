<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 8; $i++) {
            \App\Product::insert([
                'name'          => $faker->word,
                'price'         => $faker->randomFloat('2', '2','999'),
                'description'   => $faker->word,
                'created_at'    => now(),
                'updated_at'    => now()
            ]);
        }
    }
}
