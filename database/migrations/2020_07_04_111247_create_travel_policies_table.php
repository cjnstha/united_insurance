<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelPoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_policies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('passport_number');
            $table->string('place_visit');
            $table->string('occupation');
            $table->string('doctors_name')->nullable();
            $table->string('doctor_address')->nullable();
            $table->integer('contact_number')->nullable();
            $table->integer('age');
            $table->integer('days');
            $table->string('rate');
            $table->string('plan');
            $table->string('cover');
            $table->string('image');
            $table->date('policy_date');
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
        Schema::dropIfExists('travel_policies');
    }
}
