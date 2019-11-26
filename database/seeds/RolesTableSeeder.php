<?php

use Illuminate\Database\Seeder;
use \Faker\Generator as Faker;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        \DB::table('roles')->insert([
           [
               'name' => 'admin'
           ],
           [
               'name' => 'sales'
           ],
           [
               'name' => 'finance'
           ],
           [
               'name' => 'maintenance'
           ],
           [
               'name' => 'head_maintenance'
           ],
            [
                'name' => 'inkoop'
            ]
        ]);
    }
}
