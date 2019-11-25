<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('role');
            $table->timestamps();
        });

        DB::table('roles')->insert(
            array(
                'id' => '1',
                'role' => 'customer',
            )
        );
        DB::table('roles')->insert(
            array(
                'id' => '2',
                'role' => 'sale'
            )
        );
        DB::table('roles')->insert(
            array(
                'id' => '3',
                'role' => 'maintenance'
            )
        );
        DB::table('roles')->insert(
            array(
                'id' => '4',
                'role' => 'ceo'
            )
        );
        DB::table('roles')->insert(
            array(
                'id' => '5',
                'role' => 'finance'
            )
        );
        DB::table('roles')->insert(
            array(
                'id' => '6',
                'role' => 'purchase'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
