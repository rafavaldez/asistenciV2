<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Fecha extends Model
{
    protected $table = 'fecha';

    protected $fillable = ['fecha', 'hora'];

    // Relación uno a muchos con Asistencia
    public function asistencias() {
        return $this->hasMany(Asistencia::class);
    }
}

