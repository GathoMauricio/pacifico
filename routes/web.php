<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

\Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
Route::get('buscar/{q}', [App\Http\Controllers\HomeController::class, 'buscar'])->name('buscar');
Route::get('categoria/{categoria}', [App\Http\Controllers\HomeController::class, 'categoria'])->name('categoria');
#Libros
Route::get('libros', [App\Http\Controllers\LibroController::class, 'index'])->name('libros');
Route::get('libros_show/{libro_id}', [App\Http\Controllers\LibroController::class, 'show'])->name('libros_show');
Route::get('libros_create', [App\Http\Controllers\LibroController::class, 'create'])->name('libros_create');
Route::post('libros_store', [App\Http\Controllers\LibroController::class, 'store'])->name('libros_store');
Route::get('libros_edit/{libro_id}', [App\Http\Controllers\LibroController::class, 'edit'])->name('libros_edit');
Route::put('libros_update/{libro_id}', [App\Http\Controllers\LibroController::class, 'update'])->name('libros_update');
Route::delete('libros_delete/{libro_id}', [App\Http\Controllers\LibroController::class, 'destroy'])->name('libros_delete');
#Autores
Route::resource('autores', App\Http\Controllers\AutorController::class);
#Autores
Route::resource('categorias', App\Http\Controllers\CategoriaController::class);
#Autores
Route::resource('editoriales', App\Http\Controllers\EditorialController::class);
#Usuarios
Route::resource('usuarios', App\Http\Controllers\UsuarioController::class);
Route::put('usuarios_update_password', [App\Http\Controllers\UsuarioController::class, 'UpdatePassword']);
#Carrito
Route::get('carrito', [App\Http\Controllers\CarritoController::class, 'index']);
Route::get('cargar_carrito', [App\Http\Controllers\CarritoController::class, 'cargarCarrito']);
Route::get('agregar_libro/{libro_id}', [App\Http\Controllers\CarritoController::class, 'agregarLibro'])->name('agregar_libro');
Route::get('remover_libro/{libro_id}', [App\Http\Controllers\CarritoController::class, 'removerLibro'])->name('remover_libro');
