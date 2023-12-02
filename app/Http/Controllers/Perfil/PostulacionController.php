<?php

namespace App\Http\Controllers\Perfil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostulacionController extends Controller
{
    //
    public function index()
    {
        return view('content.postulante.perfil.postulaciones.index');
    }
}
