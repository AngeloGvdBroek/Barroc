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
        \DB::table('users')->insert([
           [
               'email' => 'admin@barroc.nl',
               'name'  => 'Admin Medewerker',
               'password' => Hash::make('barroc123'),
               'role_id'    => 1
           ],
           [
               'email' => 'inkoop@barroc.nl',
               'name'  =>  'Inkoop Medewerker',
               'password' => Hash::make('barroc123'),
               'role_id'    => 6
           ],
           [
               'email'  => 'sales@barroc.nl',
               'name'   => 'Sales Medewerker',
               'password' => Hash::make('barroc123'),
               'role_id'  => 2
           ]
        ]);
    }
}
