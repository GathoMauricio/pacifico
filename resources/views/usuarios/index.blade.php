@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('usuarios.create') }}" class="btn btn-primary float-right">Nuevo</a>
                        <h4>Usuarios</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Rol</th>
                                    <th>Email</th>
                                    <th>Nombre</th>
                                    <th>A. Paterno</th>
                                    <th>A. Materno</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $key => $usuario)
                                    <tr>
                                        <td>{{ $usuario->rol->nombre }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td>{{ $usuario->name }}</td>
                                        <td>{{ $usuario->apaterno }}</td>
                                        <td>{{ $usuario->amaterno }}</td>
                                        <td>
                                            <a title="Cambiar password" href="javascript:void(0)"
                                                onclick="editarPassword({{ $usuario->id }})" class="btn btn-info"><i
                                                    class="bi bi-key"></i></a>
                                            <a title="Editar" href="{{ route('usuarios.edit', $usuario->id) }}"
                                                class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                            <a title="Eliminar" href="javascript:void(0);"
                                                onclick="eliminarUsuario({{ $usuario->id }})" class="btn btn-danger"><i
                                                    class="bi bi-trash3"></i></a>
                                            <form action="{{ route('usuarios.destroy', $usuario->id) }}"
                                                id="form_usuarios_delete_{{ $usuario->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('usuarios.modal_editar_password')
@endsection
