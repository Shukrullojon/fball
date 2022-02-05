<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->integer('player_id')->nullable();
            $table->integer('game_id')->nullable();
            $table->integer('minut')->nullable();
            $table->timestamps();
            /*$table->foreign('id')->references('player_id')->on('players');
            $table->foreign('id')->references('game_id')->on('games');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goals');
    }
}
