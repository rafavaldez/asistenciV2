<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function index()
    {
        // Retorna una vista pasando la lista de usuarios como variable
        return view('Admin/index');
    }

    public function showall()
    {
        $estudiantes = Estudiante::all();
        return response()->json([
            'success' => true,
            'data' => $estudiantes
        ]);
    }

    
}
