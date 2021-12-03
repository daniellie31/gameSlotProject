<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->unsignedBigInteger('GameId', 20);
            $table->unsignedBigInteger('GenreId');
            $table->string('GameTitle', 255);
            $table->string('GameImage', 255);
            $table->timestamps();
            $table->foreign('GenreId')->references('GenreId')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}