<?php

use Illuminate\Database\Seeder;

class Purchase_rulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('purchase_rules')->insert([
           [
               'purchase_id' => 1,
               'supply_id'  => 1
           ],
           [
               'purchase_id'    => 1,
               'supply_id'      => 3
           ],
           [
               'purchase_id'    => 2,
               'supply_id'      => 4
           ],
           [
               'purchase_id'    => 3,
               'supply_id'      => 1
           ],
           [
               'purchase_id'    => 3,
               'supply_id'      => 5
           ],
           [
               'purchase_id'    => 4,
               'supply_id'      => 3
           ],
           [
               'purchase_id'    => 4,
               'supply_id'      => 6
           ],
        ]);
    }
}
