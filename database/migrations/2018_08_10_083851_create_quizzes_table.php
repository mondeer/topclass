<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzesTable extends Migration
{

    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('level');
            $table->string('work_type');
            $table->string('page_count');
            $table->string('language');
            $table->string('deadline');
            $table->string('topic');
            $table->text('instructions');
            $table->string('email');
            $table->string('phone');
            $table->string('writer');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
}
