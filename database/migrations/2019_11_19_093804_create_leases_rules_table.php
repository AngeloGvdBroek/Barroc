<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeasesRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leases_rules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lease_id');
            $table->unsignedBigInteger('supply_id');
            $table->text('description');
            $table->text('expiration_date');
            $table->text('amount');
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
        Schema::dropIfExists('leases_rules');
    }
}
