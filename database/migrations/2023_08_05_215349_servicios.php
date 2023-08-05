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
        Schema::create('servicios', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('Movil_id')->unsigned()->nullable();
            $table->bigInteger('User_id')->unsigned()->nullable();
            $table->string('Horario1')->nullable();;
            $table->string('Horario2')->nullable();;
            $table->string('Latitud')->nullable();;
            $table->string('Longitud')->nullable();;
            $table->string('Estado')->nullable();;
            $table->foreign('Movil_id')->references('id')->on('movils')->onDelete('cascade');
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
