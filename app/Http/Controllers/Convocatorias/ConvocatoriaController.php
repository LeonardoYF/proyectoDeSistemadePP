<?php

namespace App\Http\Controllers\Convocatorias;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConvocatoriaController extends Controller
{
    //
    public function index()
    {
        //
        return view('content.postulante.ofertas.convocatorias.index');
    }
}
