<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('Tarifa_Id')->unsigned()->nullable();
            $table->bigInteger('Servicios_id')->unsigned()->nullable();
            $table->bigInteger('User_id')->unsigned()->nullable();
            $table->string('LatitudD')->nullable();;
            $table->string('LongitudD')->nullable();;
            $table->string('LatitudO')->nullable();;
            $table->string('LongitudO')->nullable();;
            $table->string('Estado')->nullable();
            $table->string('ValorTotal')->nullable();
            $table->string('TipoPago')->nullable();
            $table->timestamps();
            $table->foreign('Tarifa_Id')->references('id')->on('tarifas')->onDelete('cascade');
            $table->foreign('Servicios_id')->references('id')->on('servicios')->onDelete('cascade');
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

