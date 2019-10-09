<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavedGames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saved_games', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->string('name');
            //$table->string('character');
            //$table->string('deck');
            $table->Increments('turnTimer')->default(1);
            $table->Increments('turnCount')->default(0);
            $table->boolean('bigBoard?')->default(false);
            $table->boolean('henk?')->default(false);
            //$table->string('board?');
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
        Schema::dropIfExists('saved_games');
    }
}
