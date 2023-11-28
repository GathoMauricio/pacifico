@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{ url('buscar') }}" id="form_buscar_titulo">
                                    <input type="search" id="txt_buscar_titulo" class="form-control"
                                        placeholder="Buscar título...">
                                </form>
                            </div>
                            <div class="col-md-6">
                                <select onchange="buscarCategoria(this.value)" class="form-select">
                                    <option value>--Seleccione una categoría--</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @isset($q)
                            <b>Se muestran los resultados para:</b> <i>{{ $q }}</i>
                        @endisset
                        @isset($categoria_buscada)
                            <b>Categoria:</b> <i>{{ $categoria_buscada->nombre }}</i>
                        @endisset
                        <div class="container">
                            <div class="row">
                                @foreach ($libros as $key => $libro)
                                    <div class="col-md-3 p-1">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="text-center"><b>{{ $libro->titulo }}</b></h5>
                                                <div class="text-secondary text-center" style="width:100%;">
                                                    <i>AUTORES</i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <img src="{{ asset('storage/libros/' . $libro->imagen) }}" width="100%"
                                                    alt="{{ $libro->imagen }}">
                                            </div>
                                            <div class="card-footer">
                                                <table style="width:100%;">
                                                    <tr>
                                                        <td class="text-center">
                                                            <button class="btn btn-primary"><i
                                                                    class="bi bi-eye"></i></button>
                                                        </td>
                                                        <td class="text-center">
                                                            <button class="btn btn-primary"><i
                                                                    class="bi bi-cart"></i></button>
                                                        </td>
                                                        <td class="text-center">
                                                            <h5 class="text-primary"><b>${{ $libro->precio }}</b></h5>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="test_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
