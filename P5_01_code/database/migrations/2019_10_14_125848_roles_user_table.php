<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RolesUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_user', function (Blueprint $table){
           $table->smallIncrements('id');
           $table->timestamps();

           $table->unsignedSmallInteger('roles_id');
           $table->foreign('roles_id')
               ->references('id')
               ->on('roles')
               ->onDelete('cascade')
               ->onUpdate('cascade');

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
