<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editorial;
use App\Models\Libro;

class EditorialController extends Controller
{

    public function index()
    {
        $editoriales = Editorial::all();
        return view('editoriales.index', compact('editoriales'));
    }

    public function create()
    {
        return view('editoriales.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ], [
            'nombre.required' => 'Campo requerido'
        ]);

        $editorial = Editorial::create([
            'nombre' => $request->nombre
        ]);

        if ($editorial) {
            return redirect('editoriales')->with('mensaje_correcto', 'El registro se creó correctamente');
        } else {
            return redirect('editoriales')->with('mensaje_error', 'Ocurrió un error durante el proceso');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $editorial = Editorial::findOrFail($id);
        return view('editoriales.edit', compact('editorial'));
    }

    public function update(Request $request, $id)
    {
        $editorial = Editorial::findOrFail($id);
        if ($editorial->update($request->all())) {
            return redirect('editoriales')->with('mensaje_correcto', 'El registro se actualizó correctamente');
        } else {
            return redirect('editoriales')->with('mensaje_error', 'Ocurrió un error durante el proceso');
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
        $editorial = Editorial::findOrFail($id);
        $libros = Libro::where('editorial_id', $editorial->id);
        $libros->delete();
        if ($editorial->delete()) {
            return redirect('editoriales')->with('mensaje_correcto', 'El registro se eliminó correctamente');
        } else {
            return redirect('editoriales')->with('mensaje_error', 'Ocurrió un error durante el proceso');
        }
    }
}
