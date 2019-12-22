<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Judge extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judge',function (Blueprint $table){
            $table->bigIncrements('judgeID');
            $table->string('username') -> unique();
            $table->string('password');
            $table -> timestamp('update_at')->useCurrent();
            $table -> string('type');
    
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
        Schema::dropIfExists('judge');
    }
}
