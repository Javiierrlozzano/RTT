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
        Schema::create('tarifas', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id');
            $table->string('Horario1')->nullable();
            $table->string('ValorMinimo')->nullable();
            $table->string('ValorKilometro')->nullable();;
            $table->string('Ruta')->nullable();;
            $table->string('Latitud')->nullable();;
            $table->string('Longitud')->nullable();;
            $table->string('RadioProximacion')->nullable();;
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
