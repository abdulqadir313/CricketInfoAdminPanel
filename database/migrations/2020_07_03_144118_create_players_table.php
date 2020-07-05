<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('firstName'); //varchar(255)
            $table->string('lastLame');
            $table->string('photo'); //varchar(255)
            $table->string('country');
            $table->string('jerseyNumber'); //varchar(255)
            $table->string('matches');
            $table->string('run');
            $table->string('highestScore');
            $table->string('fifties'); //varchar(255)
            $table->string('hundreds'); //varchar(255)
            $table->decimal('average');
            $table->decimal('strikeRate');
            $table->integer('teamId'); 
            $table->timestamps();
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
