@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('categorias.create') }}" class="btn btn-primary float-right">Nuevo</a>
                        <h4>Categorias</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorias as $key => $categoria)
                                    <tr>
                                        <td>{{ $categoria->nombre }}</td>
                                        <td>
                                            <a href="{{ route('categorias.edit', $categoria->id) }}"
                                                class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                            <a href="javascript:void(0);" onclick="eliminarCategoria({{ $categoria->id }})"
                                                class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                                            <form action="{{ route('categorias.destroy', $categoria->id) }}"
                                                id="form_categorias_delete_{{ $categoria->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @if (Cart::count() <= 0)
                                    <tr>
                                        <td>NO hay libros agregados</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
