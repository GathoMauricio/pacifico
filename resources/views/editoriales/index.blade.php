@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('editoriales.create') }}" class="btn btn-primary float-right">Nuevo</a>
                        <h4>Editoriales</h4>
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
                                @foreach ($editoriales as $key => $editorial)
                                    <tr>
                                        <td>{{ $editorial->nombre }}</td>
                                        <td>
                                            <a href="{{ route('editoriales.edit', $editorial->id) }}"
                                                class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                            <a href="javascript:void(0);" onclick="eliminarEditorial({{ $editorial->id }})"
                                                class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                                            <form action="{{ route('editoriales.destroy', $editorial->id) }}"
                                                id="form_editoriales_delete_{{ $editorial->id }}" method="POST">
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
