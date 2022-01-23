<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiemdanhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diemdanhs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_event');
            $table->string('roll_no');
            $table->foreign('roll_no')->references('roll_no')->on('students');
            $table->tinyInteger('status');//0 va 1 . 0 la vang 1 la di 
            $table->string('note', 200);
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
        Schema::dropIfExists('diemdanhs');
    }
}
