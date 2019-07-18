<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('nama', 255);
            $table->string('lokasi', 255);
            $table->string('materi', 255)->nullable();
            $table->timestamps(); 
            
            $table->foreign('user_id')
                ->references('id')->on('users'); 
            // $table->foreign('user_id')
            //     ->references('id')->on('users');        
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
