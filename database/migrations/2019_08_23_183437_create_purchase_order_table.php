<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_order')->unsigned();
            $table->bigInteger('id_bank')->unsigned();
            $table->bigInteger('total_cost');
            $table->timestamps();

            $table->foreign('id_order')
            ->references('id')
            ->on('order')
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
        Schema::dropIfExists('purchase_order');
    }
}
