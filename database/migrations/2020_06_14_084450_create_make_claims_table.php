<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMakeClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('make_claims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('insurance_type');
            $table->string('name_insured');
            $table->string('phone_number');
            $table->string('email')->unique()->nullable();
            $table->date('date_loss');
            $table->string('contact_person')->nullable();
            $table->text('detail_loss');
            $table->text('message')->nullable();
            $table->string('documents');
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
        Schema::dropIfExists('make_claims');
    }
}
