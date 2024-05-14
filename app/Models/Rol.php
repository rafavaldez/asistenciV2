<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Rol extends Model
{
    protected $table = 'rol';

    protected $fillable = ['nombre'];

    // Relaciones
    public function usuarios() {
        return $this->hasMany(Usuario::class);
    }
}
