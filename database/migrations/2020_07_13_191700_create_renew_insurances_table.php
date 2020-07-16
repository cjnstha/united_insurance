<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenewInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renew_insurances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('insurance_type')->nullable();
            $table->string('name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('policy_number')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('renew_insurances');
    }
}
