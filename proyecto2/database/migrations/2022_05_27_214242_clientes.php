<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('cpostales_id')->unsigned();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('calle');
            $table->string('colonia');
            $table->string('correo');
            $table->timestamps();

            $table->foreign('cpostales_id')->references('id')->on('cpostales')->onDelete("cascade");
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
};
