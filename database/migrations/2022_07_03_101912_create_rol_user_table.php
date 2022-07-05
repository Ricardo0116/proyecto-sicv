<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_user', function (Blueprint $table) {
            $table->id('idrol');
            // $table->string('nombre_rol');

            $table->bigInteger('idroles')->unsigned();
            $table->foreign('idroles')->references('id')->on('roles');

            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');


        
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
        Schema::dropIfExists('rol_user');
    }
}
