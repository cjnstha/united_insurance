<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bod', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bod_name');
            $table->string('bod_name_nep');
            $table->string('bod_position');
            $table->string('bod_position_nep');
            $table->text('bod_message')->nullable();
            $table->text('bod_message_nep')->nullable();
            $table->string('bod_imag')->nullable();
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
        Schema::dropIfExists('bod');
    }
}
