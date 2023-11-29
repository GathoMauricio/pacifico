<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
use App\Models\AutorLibro;

class AutorController extends Controller
{
    public function index()
    {
        $autores = Autor::all();
        return view('autores.index', compact('autores'));
    }

    public function create()
    {
        return view('autores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apaterno' => 'required'
        ], [
            'nombre.required' => 'Campo requerido',
            'apaterno.required' => 'Campo requerido',
        ]);

        $autor = Autor::create([
            'nombre' => $request->nombre,
            'apaterno' => $request->apaterno,
            'amaterno' => $request->amaterno,
        ]);

        if ($autor) {
            return redirect('autores')->with('mensaje_correcto', 'El registro se creó correctamente');
        } else {
            return redirect('autores')->with('mensaje_error', 'Ocurrió un error durante el proceso');
        }
    }

    public function edit($id)
    {
        $autor = Autor::findOrFail($id);
        return view('autores.edit', compact('autor'));
    }

    public function update(Request $request, $id)
    {
        $autor = Autor::findOrFail($id);
        if ($autor->update($request->all())) {
            return redirect('autores')->with('mensaje_correcto', 'El registro se actualizó correctamente');
        } else {
            return redirect('autores')->with('mensaje_error', 'Ocurrió un error durante el proceso');
        }
    }

    public function destroy($id)
    {
        $autor = Autor::findOrFail($id);
        $autor_libros = AutorLibro::where('autor_id', $autor->id);
        $autor_libros->delete();
        if ($autor->delete()) {
            return redirect('autores')->with('mensaje_correcto', 'El registro se eliminó correctamente');
        } else {
            return redirect('autores')->with('mensaje_error', 'Ocurrió un error durante el proceso');
        }
    }
}
