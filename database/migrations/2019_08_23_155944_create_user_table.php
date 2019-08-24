<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('user', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('username')->unique();
        //     $table->string('password');
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('no_telp');
        //     $table->bigInteger('id_role')->unsigned();
        //     $table->timestamp('user_login')->nullable();
        //     $table->timestamp('user_logout')->nullable();
        //     $table->rememberToken();
        //     $table->timestamps();

            
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
