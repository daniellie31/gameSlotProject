<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_details', function (Blueprint $table) {
            $table->unsignedBigInteger('GameId');
            $table->unsignedBigInteger('GameDetailsId', 20);
            $table->longText('GameDesc');
            $table->integer('GamePrice');
            $table->integer('GamePegiRating');
            $table->timestamps();
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
        Schema::dropIfExists('game_details');
    }
}
