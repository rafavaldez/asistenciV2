<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Asistencia extends Model
{
    protected $table = 'asistencia';

    protected $fillable = ['hora', 'titulo', 'descripcion', 'estudiante_id', 'fecha_id'];

    // Relaciones
    public function estudiante() {
        return $this->belongsTo(Estudiante::class);
    }

    public function fecha() {
        return $this->belongsTo(Fecha::class);
    }
}
