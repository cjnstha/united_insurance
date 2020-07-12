<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyPoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_policies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('owner_name');
            $table->string('districts');
            $table->string('address');
            $table->string('location_nature')->nullable();
            $table->string('building_stories')->nullable();
            $table->string('construction_class')->nullable();
            $table->string('pool');
            $table->integer('value_property');
            $table->string('remarks')->nullable();
            $table->string('image')->nullable();
            $table->date('policy_effective');
            $table->date('policy_expiry');
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
        Schema::dropIfExists('property_policies');
    }
}
