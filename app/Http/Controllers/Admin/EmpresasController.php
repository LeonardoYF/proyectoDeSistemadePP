<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    //
    public function index(Request $request)
    {
        // Obtener los términos de búsqueda del formulario
        $nombreSearch = $request->input('nombre');
        $emailSearch = $request->input('email');
        
        // Obtener todos los usuarios con el rol de postulante y seleccionar solo las columnas 'id', 'name', 'estado', y 'email' con paginación
        $empresas = User::role('empresa') // Utiliza el método role() proporcionado por el paquete Spatie
            ->select('id', 'name', 'estado', 'email')
            ->when($nombreSearch, function ($query, $nameSearch) {
                // Agregar condición de búsqueda por nombre si se proporciona un término de búsqueda
                $query->where('name', 'like', '%' . $nameSearch . '%');
            })
            ->when($emailSearch, function ($query, $emailSearch) {
                // Agregar condición de búsqueda por email si se proporciona un término de búsqueda
                $query->where('email', 'like', '%' . $emailSearch . '%');
            })
            ->orderByRaw("CASE WHEN estado = 'PENDIENTE' THEN 1 WHEN estado = 'RECHAZADO' THEN 2 ELSE 3 END, estado") 
            ->paginate(10);
        // Pasar los datos a la vista junto con los términos de búsqueda
        return view('content.admin.empresas.index', compact('empresas', 'nombreSearch', 'emailSearch'));
    }
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'estado' => 'required|in:APROBADO,PENDIENTE,RECHAZADO',
        ]);

        User::where('id', $id)->update(['estado' => $request->estado]);

        return redirect()->route('admin.empresas.index')->with('success', 'Estado actualizado con éxito');
    }
}
