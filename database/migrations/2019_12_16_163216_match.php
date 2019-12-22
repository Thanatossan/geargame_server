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
            $table -> string('nameTeam3')->nullable();
            $table -> string('scoreTeam1');
            $table -> string('scoreTeam2');
            $table -> string('scoreTeam3')->nullable();
            $table -> string('team1Player')->nullable();
            $table -> string('team2Player')->nullable();
            $table -> string('team3Player')->nullable();
            $table -> string('sportType');
            $table-> string('sportCategory') ->nullable();
            $table -> unsignedBigInteger('fieldNumber');
            $table -> foreign('fieldNumber')->references('fieldNumber')->on('field') -> onDelete('cascade');
            $tabel -> unsignedBigInteger('judgeID');
            $table-> foreign('judgeID')->references('judgeID')->on('judge')-> onDelete('cascade');
            $table -> dateTime('matchStartTime');
            $table -> dateTime('matchEndTime');      
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
