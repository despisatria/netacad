<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('soal');
            $table->text('opsiA');
            $table->text('opsiB');
            $table->text('opsiC');
            $table->text('opsiD');
            $table->text('opsiE');
            $table->integer('a');
            $table->integer('b');
            $table->integer('c');
            $table->integer('d');
            $table->integer('e');
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
        Schema::dropIfExists('soals');
    }
}
