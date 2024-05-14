<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmisionController extends Controller
{
    public function index()
    {
        // Aquí puedes obtener la lista de usuarios desde la base de datos
        

        // Retorna una vista pasando la lista de usuarios como variable
        return view('Admin/index');
    }
}
