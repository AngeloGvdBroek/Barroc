<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::Create();
//      150 active customers
        for( $i = 0; $i < 150; $i++ ) {
            \App\User::insert([
                'name'          => $faker->name,
                'email'         => $faker->unique()->safeEmail,
                'password'      => Hash::make('barroc123'),
                'created_at'    => now(),
                'updated_at'    => now(),
                'role_id'          => 7,
                'bkr'           => 1
            ]);
        }
//      30 inactive customers without BKR registration
        for( $i = 0; $i < 30; $i++ ) {
            \App\User::insert([
                'name'          => $faker->name,
                'email'         => $faker->unique()->safeEmail,
                'password'      => Hash::make('barroc123'),
                'created_at'    => now(),
                'updated_at'    => now(),
                'role_id'          => 7,
                'bkr'           => 0
            ]);
        }
//      10 inactive customers with BKR registration
        for( $i = 0; $i < 10; $i++ ) {
            \App\User::insert([
                'name'          => $faker->name,
                'email'         => $faker->unique()->safeEmail,
                'password'      => Hash::make('barroc123'),
                'created_at'    => now(),
                'updated_at'    => now(),
                'role_id'          => 7,
                'bkr'           => 1
            ]);
        }

        \DB::table('users')->insert([
           [
               'email' => 'admin@barroc.nl',
               'name'  => 'Admin Medewerker',
               'bkr'   => '1',
               'password' => Hash::make('barroc123'),
               'role_id'    => 1
           ],
           [
               'email' => 'inkoop@barroc.nl',
               'name'  =>  'Inkoop Medewerker',
               'bkr'   => '1',
               'password' => Hash::make('barroc123'),
               'role_id'    => 6
           ],
           [
               'email'  => 'sales@barroc.nl',
               'name'   => 'Sales Medewerker',
               'bkr'   => '1',
               'password' => Hash::make('barroc123'),
               'role_id'  => 2
           ],
            [
                'email'  => 'finance@barroc.nl',
                'name'   => 'finance Medewerker',
                'bkr'   => '1',
                'password' => Hash::make('barroc123'),
                'role_id'  => 3
            ],
           [
               'email'  => 'info@mediamarkt.nl',
               'name'   => 'Mediamarkt',
               'bkr'   => '1',
               'password' => Hash::make('mediamarkt123'),
               'role_id'  => 7
           ]
        ]);

    }
}
