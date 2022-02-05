<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->nullable();
            $table->string('phone',20)->nullable();
            $table->tinyInteger('position_id')->nullable();
            $table->integer('team_id')->nullable();
            $table->string('login')->nullable();
            $table->string('password')->nullable();
            $table->string('details')->nullable();
            $table->string('image',40)->nullable();
            $table->tinyInteger('status')->nullable();
            $table->timestamps();
            //$table->foreign('id')->references('position_id')->on('positions');
            //$table->foreign('id')->references('team_id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
