<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lease_type_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('finance_id');

            $table->timestamps();

            $table->foreign('lease_type_id')
                ->references('id')
                ->on('lease_types');

            $table->foreign('customer_id')
                ->references('id')
                ->on('users');


            $table->foreign('finance_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leases');
    }
}
