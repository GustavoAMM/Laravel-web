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
        Schema::create('tb_libro', function (Blueprint $table) {
            $table->increments('idLibro');
            $table->bigInteger('isbn');
            $table->string('titulo');
            $table->string('autor');
            $table->integer('paginas');
            $table->string('editorial');
            $table->string('email');
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
        Schema::dropIfExists('tb_libro');
    }
};
