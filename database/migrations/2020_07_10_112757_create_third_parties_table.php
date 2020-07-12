<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThirdPartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('third_parties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('address');
            $table->string('district');
            $table->string('lgus');
            $table->string('tole');
            $table->integer('ward_no');
            $table->integer('phone_no');
            $table->date('dob');
            $table->string('email');
            $table->string('father_name');
            $table->string('grand_father_name');
            $table->string('vat_pan_no');
            $table->string('citizenship_no');
            $table->date('citizenship_issued_date');
            $table->string('citizenship_issued_place');
            $table->string('pp_image');
            $table->string('citizen_doc');
            $table->string('citizen_back');
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
        Schema::dropIfExists('third_parties');
    }
}
