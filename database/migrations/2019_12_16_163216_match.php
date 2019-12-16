<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Match extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match',function (Blueprint $table){
            $table -> bigIncrements('matchNumber');
            $table -> string('nameTeam1');
            $table -> string('nameTeam2');
            $table -> string('scoreTeam1');
            $table -> string('scoreTeam2');
            $table -> unsignedBigInteger('fieldNumber');
            $table -> foreign('fieldNumber')->references('fieldNumber')->on('field') -> onDelete('cascade');
            $table -> dateTime('matchTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('match');
    }
}
