<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fecha;
class AsistenciaController extends Controller
{
    public function index()
    {
        // Retorna una vista pasando la lista de usuarios como variable
        return view('Admin/Asistencia/index');
    }

    public function showall()
    {
        $fecha = Fecha::all();
        return response()->json([
            'success' => true,
            'data' => $fecha
        ]);
    }
}
