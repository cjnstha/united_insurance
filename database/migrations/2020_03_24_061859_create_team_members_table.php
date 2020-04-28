<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('team_name');
            $table->string('team_name_nep');
            $table->string('team_position');
            $table->string('team_position_nep');
            $table->string('team_email')->unique()->nullable();
            $table->string('team_phone')->nullable();
            $table->text('team_description')->nullable();
            $table->text('team_description_nep')->nullable();
            $table->string('team_image')->nullable();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('team_members');
    }
}
