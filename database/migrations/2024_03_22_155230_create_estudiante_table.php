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
        Schema::create('estudiante', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 225)->nullable();
            $table->string('codigo', 45)->nullable();
            $table->string('telefono', 45)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('escuela', 225)->nullable();
            $table->text('talento')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiante');
    }
};
