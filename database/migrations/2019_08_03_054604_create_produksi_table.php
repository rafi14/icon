<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_jenishewan')->unsigned();
            $table->integer('berat');
            $table->bigInteger('jumlah');
            $table->timestamps();

            $table->foreign('id_jenishewan')
            ->references('id')
            ->on('_jenishewan')
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
        Schema::dropIfExists('produksi');
    }
}
