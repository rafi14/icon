<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_kelas')->unsigned();
            $table->string('gender');
            $table->string('name_parent');
            $table->bigInteger('total');
            $table->timestamps();

            $table->foreign('id_user')
            ->references('id')
            ->on('user')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('id_kelas')
            ->references('id')
            ->on('kelas')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
