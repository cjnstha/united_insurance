<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_admin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('roles_id');
            $table->unsignedBigInteger('admin_id');
//            $table->unique(['roles_id','admin_id']);
//            $table->foreign('roles_id')->references('id')->on('roles')->onDelete('cascade');
//            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
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
        Schema::dropIfExists('roles_admin');
    }
}
