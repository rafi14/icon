<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // // Schema::create('admin', function (Blueprint $table) {
        // //     $table->bigIncrements('id');
        // //     $table->string('username')->unique();
        // //     $table->string('password');
        // //     $table->string('email')->unique();
        // //     $table->timestamp('email_verified_at')->nullable();
        // //     $table->string('no_telp');
        // //     $table->bigInteger('id_role')->unsigned();
        // //     $table->timestamp('admin_login')->nullable();
        // //     $table->timestamp('admin_logout')->nullable();
        // //     $table->rememberToken();
        // //     $table->timestamps();

        // //     $table->foreign('id_role')
        // //     ->references('id')
        // //     ->on('role')
        // //     ->onUpdate('cascade')
        // //     ->onDelete('cascade');
    
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
