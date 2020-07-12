<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoronalPoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coronal_policies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('policy_type');
            $table->string('policy_plan');
            $table->integer('number_family');
            $table->string('full_name');
            $table->integer('age');
            $table->string('relations');
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
        Schema::dropIfExists('coronal_policies');
    }
}
