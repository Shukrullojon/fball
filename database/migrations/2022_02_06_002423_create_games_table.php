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
            $table->id();
            $table->integer('cub_id')->nullable();
            $table->integer('team_one_id')->nullable();
            $table->integer('team_two_id')->nullable();
            $table->integer('win_id')->nullable();
            $table->integer('judge_id')->nullable();
            $table->string('details')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->timestamps();
            /*$table->foreign('id')->references('cub_id')->on('cubs');
            $table->foreign('id')->references('team_one_id')->on('teams');
            $table->foreign('id')->references('team_two_id')->on('teams');
            $table->foreign('id')->references('win_id')->on('teams');
            $table->foreign('id')->references('judge_id')->on('judges');*/

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
