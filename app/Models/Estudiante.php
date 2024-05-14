<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Estudiante extends Model
{
    protected $table = 'estudiante';

    protected $fillable = ['nombres', 'codigo', 'telefono', 'fecha_nacimiento', 'escuela', 'talento'];

    // Relaciones
    public function asistencias() {
        return $this->hasMany(Asistencia::class);
    }
}
