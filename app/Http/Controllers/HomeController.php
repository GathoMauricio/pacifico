<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Categoria;

class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $libros = Libro::orderBy('titulo')->paginate(12);
        $categorias = Categoria::orderBy('nombre')->get();
        return view('home', compact('libros', 'categorias'));
    }

    public function buscar($q)
    {
        $libros = Libro::where('titulo', 'like', '%' . $q . '%')->orderBy('titulo')->paginate(12);
        $categorias = Categoria::orderBy('nombre')->get();
        return view('home', compact('libros', 'categorias', 'q'));
    }

    public function categoria($categoria_id)
    {
        $libros = Libro::where('categoria_id', $categoria_id)->orderBy('titulo')->paginate(12);
        $categorias = Categoria::orderBy('nombre')->get();
        $categoria_buscada = Categoria::find($categoria_id);
        return view('home', compact('libros', 'categorias', 'categoria_buscada'));
    }
}
