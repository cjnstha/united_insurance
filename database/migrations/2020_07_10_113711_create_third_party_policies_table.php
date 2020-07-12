<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThirdPartyPoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('third_party_policies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('motor_type');
            $table->integer('cubic_capacity');
            $table->string('pool');
            $table->date('year');
            $table->string('pradesh_zone');
            $table->integer('lot_no');
            $table->string('vechile_type');
            $table->integer('vechile_id');
            $table->string('brand');
            $table->string('model');
            $table->string('chasis')->unique();
            $table->string('engine')->unique();
            $table->string('images');
            $table->date('policy_effective');
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
        Schema::dropIfExists('third_party_policies');
    }
}
