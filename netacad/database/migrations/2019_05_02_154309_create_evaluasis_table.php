<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('soal_id')->unsigned();
            $table->string('jawaban', 124);
            $table->string('jawabaBenar', 124);
            $table->timestamps();

            // $table->foreign('user_id')
            //     ->references('id')->on('users'); 
            //     $table->foreign('soal_id')
            //     ->references('r_id')
            //     ->references('id')->on('users'); 
            //     $table->foreign('soal_id')
            //     ->references('id')->on('soal'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluasis');
    }
}
