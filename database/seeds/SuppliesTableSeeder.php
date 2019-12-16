<?php

use Illuminate\Database\Seeder;
use \Faker\Generator as Faker;
class SuppliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        \DB::table('supplies')->insert(
            [
                [
                    'name'      => 'koffiemachine 1',
                    'in_stock'  => rand(1, 10),
                    'ean_nr'    => $faker->ean8,
                    'price_per_unit' => 2600.75
                ],
                [
                    'name'      => 'koffiemachine 2',
                    'in_stock'  => rand(1, 10),
                    'ean_nr'    => $faker->ean8,
                    'price_per_unit' => 2800.50
                ],
                [
                    'name'      => 'koffieboon type 1',
                    'in_stock'  => rand(1, 10),
                    'ean_nr'    => $faker->ean8,
                    'price_per_unit' => 40.55
                ],

                [
                    'name'      => 'koffieboon type 2',
                    'in_stock'  => rand(1, 10),
                    'ean_nr'    => $faker->ean8,
                    'price_per_unit' => 43.55
                ],

                [
                    'name'      => 'waterfilter',
                    'in_stock'  => rand(1, 10),
                    'ean_nr'    => $faker->ean8,
                    'price_per_unit' => 28.55
                ],

                [
                    'name'      => 'slang 23mm',
                    'in_stock'  => rand(1, 10),
                    'ean_nr'    => $faker->ean8,
                    'price_per_unit' => 3.45
                ],

                [
                    'name'      => 'slang 45mm',
                    'in_stock'  => rand(1, 10),
                    'ean_nr'    => $faker->ean8,
                    'price_per_unit' => 4.65
                ],

                [
                    'name'      => 'elektrische pomp',
                    'in_stock'  => rand(1, 10),
                    'ean_nr'    => $faker->ean8,
                    'price_per_unit' => 89.55
                ],



            ]

        );
    }
}
