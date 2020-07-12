<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePopUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pop_ups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('popup_title');
            $table->text('description')->nullable();
            $table->string('popup_title_nep');
            $table->text('description_nep')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('pop_ups');
    }
}
