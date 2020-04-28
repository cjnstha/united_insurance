<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('branch_title');
            $table->string('branch_title_nep');
            $table->string('address_nep');
            $table->string('address');
            $table->string('branch_contact');
            $table->string('branch_fax')->nullable();
            $table->string('branch_email')->unique()->nullable();
            $table->string('branch_incharge');
            $table->string('branch_incharge_nep');
            $table->string('position');
            $table->string('position_nep');
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
        Schema::dropIfExists('branch_lists');
    }
}
