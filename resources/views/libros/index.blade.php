@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h3>Catálogo de libros</h3>
            <div class="col-md-12">
                <a href="{{ url('libros_create') }}" class="btn btn-primary float-right">Nuevo</a>
                {{ $libros->links('pagination::bootstrap-4') }}
                <div class="table-responsive">
                    <br><br>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Portada</th>
                                <th>Categoría</th>
                                <th>Editorial</th>
                                <th>Título</th>
                                <th>Reseña</th>
                                <th>Autor(es)</th>
                                <th>ISBN</th>
                                <th>Precio</th>
                                <th>Año</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($libros as $key => $libro)
                                <tr>
                                    <td><img src="{{ asset('storage/libros/' . $libro->imagen) }}" alt="{{ $libro->imagen }}"
                                            width="80"></td>
                                    <td>{{ $libro->categoria->nombre }}</td>
                                    <td>{{ $libro->editorial->nombre }}</td>
                                    <td>{{ $libro->titulo }}</td>
                                    <td>{{ $libro->resenia }}</td>
                                    <td>AUTORES</td>
                                    <td>{{ $libro->isbn }}</td>
                                    <td>${{ $libro->precio }}</td>
                                    <td>{{ $libro->anio_edicion }}</td>
                                    <td>
                                        <a href="#" class="btn btn-warning" title="Editar"><i
                                                class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-danger" title="Eliminar"><i
                                                class="bi bi-trash3"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            @if (count($libros) <= 0)
                                <tr>
                                    <td colspan="10" class="text-center">No se encontraron registros</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
