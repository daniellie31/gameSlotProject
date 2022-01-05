<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->unsignedBigInteger('GameId');
            $table->unsignedBigInteger('UserId');
            $table->integer('Qty');
            $table->timestamps();

            $table->primary(['UserId', 'GameId']);
            $table->foreign('UserId')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('GameId')->references('id')->on('games')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
