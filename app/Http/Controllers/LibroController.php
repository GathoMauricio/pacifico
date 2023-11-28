<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Categoria;
use App\Models\Editorial;
use App\Models\Autor;
use App\Models\AutorLibro;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::orderBy('titulo')->paginate(0);
        return view('libros.index', compact('libros'));
    }

    public function show($libro_id)
    {
        $libro = Libro::where('id', $libro_id)->with('categoria')->with('editorial')->with('autores')->first();
        return $libro;
        return response()->json($libro);
    }

    public function create()
    {
        $categorias = Categoria::orderBy('nombre')->get();
        $editoriales = Editorial::orderBy('nombre')->get();
        $autores = Autor::orderBy('nombre')->get();
        return view('libros.create', compact('categorias', 'editoriales', 'autores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "categoria_id" => "required",
            "editorial_id" => "required",
            "autores" => "required",
            "titulo" => "required",
            "resenia" => "required",
            "isbn" => "required",
            "anio_edicion" => "required|min:4|max:4",
            "precio" => "required",
            "imagen" => "required",
        ], [
            "categoria_id.required" => "Campo requerido",
            "editorial_id.required" => "Campo requerido",
            "autores.required" => "Seleccione por lo menos un autor",
            "titulo.required" => "Campo requerido",
            "resenia.required" => "Campo requerido",
            "isbn.required" => "Campo requerido",
            "anio_edicion.required" => "Campo requerido",
            "anio_edicion.min" => "El valor debe ser de 4 dígitos",
            "anio_edicion.max" => "El valor debe ser de 4 dígitos",
            "precio.required" => "Campo requerido",
            "imagen.required" => "Campo requerido",
        ]);
        $libro = Libro::create([
            "categoria_id" => $request->categoria_id,
            "editorial_id" => $request->editorial_id,
            "titulo" => $request->titulo,
            "resenia" => $request->resenia,
            "isbn" => $request->isbn,
            "anio_edicion" => $request->anio_edicion,
            "precio" => $request->precio,
            "imagen" => 'default',
        ]);
        if ($libro) {
            foreach ($request->autores as $autor_id) {
                AutorLibro::create([
                    'autor_id' => $autor_id,
                    'libro_id' => $libro->id
                ]);
            }
            $ruta_completa = $request->file('imagen')->store('public/libros');
            $partes = explode('/', $ruta_completa);
            $nombre_imagen = $partes[2];
            $libro->imagen = $nombre_imagen;
            $libro->save();
            return redirect('libros')->with('mensaje_correcto', 'El libro ' . $libro->titulo . ' se creó correctamente');
        } else {
            return redirect('libros')->with('mensaje_error', 'Ocurrió un error durante el proceso');
        }
    }

    public function edit($libro_id)
    {
        $libro = Libro::findOrFail($libro_id);
        $categorias = Categoria::orderBy('nombre')->get();
        $editoriales = Editorial::orderBy('nombre')->get();
        $autores = Autor::orderBy('nombre')->get();
        return view('libros.edit', compact('libro', 'categorias', 'editoriales', 'autores'));
    }

    public function update(Request $request, $libro_id)
    {
        $request->validate([
            "categoria_id" => "required",
            "editorial_id" => "required",
            "autores" => "required",
            "titulo" => "required",
            "resenia" => "required",
            "isbn" => "required",
            "anio_edicion" => "required|min:4|max:4",
            "precio" => "required",
        ], [
            "categoria_id.required" => "Campo requerido",
            "editorial_id.required" => "Campo requerido",
            "autores.required" => "Seleccione por lo menos un autor",
            "titulo.required" => "Campo requerido",
            "resenia.required" => "Campo requerido",
            "isbn.required" => "Campo requerido",
            "anio_edicion.required" => "Campo requerido",
            "anio_edicion.min" => "El valor debe ser de 4 dígitos",
            "anio_edicion.max" => "El valor debe ser de 4 dígitos",
            "precio.required" => "Campo requerido",
        ]);
        $libro = Libro::findOrFail($libro_id);
        $libro->categoria_id = $request->categoria_id;
        $libro->editorial_id = $request->editorial_id;
        $libro->titulo = $request->titulo;
        $libro->resenia = $request->resenia;
        $libro->isbn = $request->isbn;
        $libro->anio_edicion = $request->anio_edicion;
        $libro->precio = $request->precio;

        AutorLibro::where('libro_id', $libro->id)->delete();
        foreach ($request->autores as $autor_id) {
            AutorLibro::create([
                'autor_id' => $autor_id,
                'libro_id' => $libro->id
            ]);
        }

        if ($request->file('imagen')) {

            if (\Storage::get('public/libros/' . $libro->imagen)) {
                \Storage::disk('public')->delete('/libros/' . $libro->imagen);
            }

            $ruta_completa = $request->file('imagen')->store('public/libros');
            $partes = explode('/', $ruta_completa);
            $nombre_imagen = $partes[2];
            $libro->imagen = $nombre_imagen;
        }

        if ($libro->save()) {

            return redirect('libros')->with('mensaje_correcto', 'El libro ' . $libro->titulo . ' se actualizó correctamente');
        } else {
            return redirect('libros')->with('mensaje_error', 'Ocurrió un error durante el proceso');
        }
    }

    public function destroy($libro_id)
    {
        $libro = Libro::findOrFail($libro_id);

        if (\Storage::get('public/libros/' . $libro->imagen)) {
            \Storage::disk('public')->delete('/libros/' . $libro->imagen);
        }

        if ($libro->delete()) {

            return redirect('libros')->with('mensaje_correcto', 'El libro  se elimino correctamente');
        } else {
            return redirect('libros')->with('mensaje_error', 'Ocurrió un error durante el proceso');
        }
    }
}
