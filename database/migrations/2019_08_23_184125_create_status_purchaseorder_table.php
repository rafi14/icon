<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusPurchaseorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_purchaseorder', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_purchaseorder')->unsigned();
            $table->string('name');
            $table->timestamps();

            $table->foreign('id_purchaseorder')
            ->references('id')
            ->on('purchase_order')
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
        Schema::dropIfExists('status_purchaseorder');
    }
}
