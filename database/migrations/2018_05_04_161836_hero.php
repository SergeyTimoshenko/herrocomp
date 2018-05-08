<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hero extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hero', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nickname');
            $table->string('real_name');
            $table->string('origin_description');
            $table->string('superpowers');
            $table->string('catch_phrase');
            $table->string('images');
            $table->timestamp('created_at')->nullable();
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
    }
}
