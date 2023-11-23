<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Categoria;
use App\Models\Editorial;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::orderBy('titulo')->paginate(0);
        return view('libros.index', compact('libros'));
    }

    public function create()
    {
        $categorias = Categoria::orderBy('nombre')->get();
        $editoriales = Editorial::orderBy('nombre')->get();
        //autores
        return view('libros.create', compact('categorias', 'editoriales'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "categoria_id" => "required",
            "editorial_id" => "required",
            "titulo" => "required",
            "resenia" => "required",
            "isbn" => "required",
            "anio_edicion" => "required|min:4|max:4",
            "precio" => "required",
            "imagen" => "required",
        ], [
            "categoria_id.required" => "Campo requerido",
            "editorial_id.required" => "Campo requerido",
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
}
