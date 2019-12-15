<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informations', function (Blueprint $table){
          $table->smallIncrements('id');
          $table->string('first_name')->nullable();
          $table->string('last_name')->nullable();
          $table->string('address')->nullable();
          $table->string('zip')->nullable();
          $table->string('city')->nullable();
          $table->string('telephone_number')->nullable();
          $table->string('shadow_email')->nullable();
          $table->string('image')->nullable();
          $table->string('discord')->nullable();
          $table->text('description')->nullable();
          $table->string('twitter')->nullable();
          $table->string('instagram')->nullable();
          $table->string('facebook')->nullable();
          $table->string('snapchat')->nullable();
          $table->string('twitch')->nullable();
          $table->string('youtube')->nullable();
          $table->string('mixer')->nullable();
          $table->string('website')->nullable();
          $table->timestamps();

          $table->unsignedSmallInteger('user_id');
          $table->foreign('user_id')
              ->references('id')
              ->on('users')
              ->onDelete('cascade')
              ->onUpdate('cascade');
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
