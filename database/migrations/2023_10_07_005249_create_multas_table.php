<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serie');
            $table->string('lugar');
            $table->date('fecha');
            $table->string('articulo');
            $table->string('monto_multa');
            $table->string('Conductor');
            $table->string('licencia_conducir');
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
        Schema::dropIfExists('multas');
    }
}
