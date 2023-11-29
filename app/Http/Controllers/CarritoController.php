<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use Cart;
use Auth;

class CarritoController extends Controller
{
    public function index()
    {
        if (Auth::check())
            Cart::session(Auth::user()->id);
        $items = Cart::getContent();
        $precio_carrito = Cart::getTotal();
        $cantidad_carrito = Cart::getTotalQuantity();
        return view('carrito.index', compact('items', 'precio_carrito', 'cantidad_carrito'));
    }

    public function cargarCarrito()
    {
        return $this->obtenerCarrito();
    }

    public function agregarLibro($libro_id)
    {
        if (Auth::check())
            Cart::session(Auth::user()->id);
        $libro = Libro::findOrFail($libro_id);
        Cart::session(Auth::user()->id)->add(array(
            'id' => $libro->id,
            'name' => $libro->titulo,
            'price' => $libro->precio,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $libro
        ));

        return $this->obtenerCarrito();
    }

    public function removerLibro($libro_id)
    {
        if (Auth::check())
            Cart::session(Auth::user()->id);
        Cart::remove($libro_id);
    }

    public function obtenerCarrito()
    {
        if (Auth::check())
            Cart::session(\Auth::user()->id);
        $items = Cart::getContent();
        return response()->json([
            'carrito' => $items,
            'precio_carrito' => Cart::getTotal(),
            'cantidad_carrito' => Cart::getTotalQuantity(),
        ]);
    }
}
