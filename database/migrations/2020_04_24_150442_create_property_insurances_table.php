<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_insurances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_image');
            $table->text('about_product');
            $table->string('benefit_title1');
            $table->text('benefit_description1');
            $table->string('benefit_title2')->nullable();
            $table->text('benefit_description2')->nullable();
            $table->string('benefit_title3')->nullable();
            $table->text('benefit_description3')->nullable();
            $table->string('benefit_title4')->nullable();
            $table->text('benefit_description4')->nullable();
            $table->string('document_pdf')->nullable();
            $table->string('document_doc')->nullable();
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
        Schema::dropIfExists('property_insurances');
    }
}
