<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaseRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lease_rules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lease_id');
            $table->unsignedBigInteger('supply_id');
            $table->timestamps();

            $table->foreign('lease_id')
                ->references('id')
                ->on('leases');

            $table->foreign('supply_id')
                ->references('id')
                ->on('supplies');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lease_rules');
    }
}
