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
        Schema::create('integrantes_bandas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bandas_id');
            $table->foreign('bandas_id')->references('id')->on('bandas')->onDelete('cascade');
            $table->unsignedBigInteger('cantantes_id');
            $table->foreign('cantantes_id')->references('id')->on('cantantes')->onDelete('cascade');;
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
        Schema::dropIfExists('integrantes_bandas');
    }
};
