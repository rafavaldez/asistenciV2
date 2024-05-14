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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('name', 225)->nullable();
            $table->string('password', 225)->nullable();
            $table->unsignedBigInteger('rol_id');
        
            $table->foreign('rol_id')->references('id')->on('rol')->onDelete('no action')->onUpdate('no action');
        
            $table->index('rol_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
