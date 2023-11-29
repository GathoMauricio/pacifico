<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rol;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Rol::all();
        return view('usuarios.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'rol_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
        ], [
            'name.required' => 'Campo obligatorio',
            'email.required' => 'Campo obligatorio',
            'password.required' => 'Campo obligatorio',
            'password.confirmed' => 'La confirmación no coincide',
            'password.min' => 'El password debe ser de 6 caracteres como mínimo',
            'password_confirmation.required' => 'Campo obligatorio',
        ]);

        $usuario = User::create([
            'rol_id' => $request->rol_id,
            'name' => $request->name,
            'apaterno' => $request->apaterno,
            'amaterno' => $request->amaterno,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if ($usuario) {
            return redirect('usuarios')->with('mensaje_correcto', 'El registro se creó correctamente');
        } else {
            return redirect('usuarios')->with('mensaje_error', 'Ocurrió un error durante el proceso');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        $roles = Rol::all();
        return view('usuarios.edit', compact('usuario', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);
        if ($usuario->update($request->all())) {
            return redirect('usuarios')->with('mensaje_correcto', 'El registro se actualizó correctamente');
        } else {
            return redirect('usuarios')->with('mensaje_error', 'Ocurrió un error durante el proceso');
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
        $usuario = User::findOrFail($id);
        if ($usuario->delete()) {
            return redirect('usuarios')->with('mensaje_correcto', 'El registro se eliminó correctamente');
        } else {
            return redirect('usuarios')->with('mensaje_error', 'Ocurrió un error durante el proceso');
        }
    }

    public function UpdatePassword(Request $request)
    {
        $usuario = User::findOrFail($request->usuario_id);
        $usuario->password = bcrypt($request->password);
        if ($usuario->save()) {
            return response()->json([
                'error' => 0,
                'message' => 'Contraseña actualizada'
            ]);
        } else {
            return response()->json([
                'error' => 1,
                'message' => 'Ocurrió un error durante el proceso'
            ]);
        }
    }
}
