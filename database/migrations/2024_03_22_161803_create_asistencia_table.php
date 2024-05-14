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
        Schema::create('asistencia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id');
            $table->unsignedBigInteger('fecha_id');
            $table->time('hora')->nullable();
            $table->string('titulo', 225)->nullable();
            $table->text('descripcion')->nullable();
        
            $table->foreign('estudiante_id')->references('id')->on('estudiante')->onDelete('no action')->onUpdate('no action');
            $table->foreign('fecha_id')->references('id')->on('fecha')->onDelete('no action')->onUpdate('no action');
        
            $table->index('estudiante_id');
            $table->index('fecha_id');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencia');
    }
};
