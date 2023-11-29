@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card">
                    <div class="card-header">
                        <h4>Crear autor</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('autores.store') }}" method="POST">
                            @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre" class="test-primary font-weight-bold">Nombre</label>
                                            <input type="text" name="nombre" value="{{ old('nombre') }}"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="apaterno" class="test-primary font-weight-bold">A. Paterno</label>
                                            <input type="text" name="apaterno" value="{{ old('apaterno') }}"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="amaterno" class="test-primary font-weight-bold">A. Materno</label>
                                            <input type="text" name="amaterno" value="{{ old('amaterno') }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary float-right">Almacenar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
