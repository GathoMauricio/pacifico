@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('autores.create') }}" class="btn btn-primary float-right">Nuevo</a>
                        <h4>Autores</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>A. Paterno</th>
                                    <th>A. Materno</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($autores as $key => $autor)
                                    <tr>
                                        <td>{{ $autor->nombre }}</td>
                                        <td>{{ $autor->apaterno }}</td>
                                        <td>{{ $autor->amaterno }}</td>
                                        <td>
                                            <a href="{{ route('autores.edit', $autor->id) }}" class="btn btn-warning"><i
                                                    class="bi bi-pencil"></i></a>
                                            <a href="javascript:void(0);" onclick="eliminarAutor({{ $autor->id }})"
                                                class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                                            <form action="{{ route('autores.destroy', $autor->id) }}"
                                                id="form_autores_delete_{{ $autor->id }}" method="POST">
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
@endsection
