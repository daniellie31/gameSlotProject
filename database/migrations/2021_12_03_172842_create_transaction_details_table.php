<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            // $table->unsignedBigInteger('TransactionDetailsId', 20);
            $table->unsignedBigInteger('TransactionId');
            $table->unsignedBigInteger('id');
            $table->integer('Qty');
            $table->timestamps();

            $table->primary(['TransactionId', 'id']);
            $table->foreign('TransactionId')->references('TransactionId')->on('transactions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id')->references('id')->on('games')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_details');
    }
}