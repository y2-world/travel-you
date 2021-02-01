<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTroublesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('troubles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('user_name');
            $table->string('title');
            $table->string('country');
            $table->string('category')->nullable();
            $table->string('image');
            $table->text('content');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_name')->references('name')->on('users');
            $table->unique(['user_id', 'user_name'],'uq_roles');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('troubles');
    }
}
