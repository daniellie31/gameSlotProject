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
            $table->unsignedBigInteger('UserId');
            $table->unsignedBigInteger('GameId');
            $table->integer('Qty');
            $table->timestamps();

            // $table->primary(['UserId', 'GameId']);
            $table->foreign('UserId')->references('UserId')->on('users');
            $table->foreign('GameId')->references('GameId')->on('games');
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