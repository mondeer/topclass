<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreelancesTable extends Migration
{

    public function up()
    {
        Schema::create('freelances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('category_of_freelance')->default('general');
            $table->tinyInteger('years_of_experience')->default(0);
            $table->string('email');
            $table->string('phone');
            $table->string('status_of_acceptance')->default('pending'); //pending approved rejected
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('freelances');
    }
}
