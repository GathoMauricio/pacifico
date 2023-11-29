<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Libro;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ], [
            'nombre.required' => 'Campo requerido'
        ]);

        $categoria = Categoria::create([
            'nombre' => $request->nombre
        ]);

        if ($categoria) {
            return redirect('categorias')->with('mensaje_correcto', 'El registro se creó correctamente');
        } else {
            return redirect('categorias')->with('mensaje_error', 'Ocurrió un error durante el proceso');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::findOrFail($id);
        if ($categoria->update($request->all())) {
            return redirect('categorias')->with('mensaje_correcto', 'El registro se actualizó correctamente');
        } else {
            return redirect('categorias')->with('mensaje_error', 'Ocurrió un error durante el proceso');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $libros = Libro::where('categoria_id', $categoria->id);
        $libros->delete();
        if ($categoria->delete()) {
            return redirect('categorias')->with('mensaje_correcto', 'El registro se eliminó correctamente');
        } else {
            return redirect('categorias')->with('mensaje_error', 'Ocurrió un error durante el proceso');
        }
    }
}
