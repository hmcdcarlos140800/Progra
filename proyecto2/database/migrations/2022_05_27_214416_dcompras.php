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
        Schema::create('dcompras', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->biginteger('ropas_id')->unsigned();
            $table->biginteger('compras_id')->unsigned();
            $table->integer('cantidad');
            $table->timestamps();

            $table->foreign('ropas_id')->references('id')->on('ropas')->onDelete("cascade");
            $table->foreign('compras_id')->references('id')->on('compras')->onDelete("cascade");
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
