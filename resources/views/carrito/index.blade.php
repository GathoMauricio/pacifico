@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4>Carrito</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Título</th>
                                    <th>P. Unitario</th>
                                    <th>Cantidad</th>
                                    <th>Subtotal</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $key => $item)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('storage/libros/' . $item->associatedModel->imagen) }}"
                                                alt="{{ $item->associatedModel->imagen }}" width="80">
                                        </td>
                                        <td>{{ $item->associatedModel->titulo }}</td>
                                        <td>${{ $item->associatedModel->precio }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>${{ $item->price * $item->quantity }}</td>
                                        <td>
                                            <a href="javascript:void(0);" onclick="removerLibro({{ $item->id }})"
                                                class="btn btn-danger"><i class="bi bi-trash3"></i></a>
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
