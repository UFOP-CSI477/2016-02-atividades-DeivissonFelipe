<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('atleta_id')->unsigned();
            $table->integer('evento_id')->unsigned();
            $table->string('data', 80);
            $table->smallInteger('pago');
            $table->timestamps();


            $table->foreign('atleta_id')->references('id')
             ->on('atletas')->onDelete('cascade');

             $table->foreign('evento_id')->references('id')
             ->on('eventos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
