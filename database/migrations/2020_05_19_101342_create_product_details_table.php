<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_types_id');
            $table->text('details');
            $table->string('product_image');
            $table->string('amount_payment');
            $table->string('risk_level')->nullable();
            $table->string('location')->nullable();
            $table->string('no_people')->nullable();
            $table->string('support')->nullable();
            $table->string('file_pdf')->nullable();
            $table->string('file_doc')->nullable();
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
        Schema::dropIfExists('product_details');
    }
}
