<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->dateTime('date_sign_up');
            $table->dateTime('date_begin');
            $table->dateTime('date_end');
            $table->integer('number_student');
            $table->integer('number_teacher');
            $table->integer('menu_id');
            $table->string('thumb');
            $table->string('thumb_active');
            $table->longText('content');
            $table->integer('active');
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
        Schema::dropIfExists('events');
    }
}
