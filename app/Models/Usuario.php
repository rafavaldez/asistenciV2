<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Usuario extends Model
{
    protected $table = 'usuario';

    protected $fillable = ['name', 'password', 'rol_id'];

    // Relaciones
    public function rol() {
        return $this->belongsTo(Rol::class);
    }
}
