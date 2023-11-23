@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h3>Alta de libro</h3>
            <div class="col-md-8">
                <form action="{{ url('libros_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container p-3" style="background-color: rgb(247, 238, 238);">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="categoria_id" class="font-weight-bold text-primary">Categoría</label>
                                    <select name="categoria_id" id="categoria_id" class="form-select" required>
                                        <option value>--Seleccione la categoría--</option>
                                        @foreach ($categorias as $categoria)
                                            @if (old('categoria_id') == $categoria->id)
                                                <option value="{{ $categoria->id }}" selected>{{ $categoria->nombre }}
                                                </option>
                                            @else
                                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('categoria_id')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="editorial_id" class="font-weight-bold text-primary">Editorial</label>
                                    <select name="editorial_id" id="editorial_id" class="form-select" required>
                                        <option value>--Seleccione la editorial--</option>
                                        @foreach ($editoriales as $editorial)
                                            @if (old('editorial_id') == $editorial->id)
                                                <option value="{{ $editorial->id }}" selected>{{ $editorial->nombre }}
                                                </option>
                                            @else
                                                <option value="{{ $editorial->id }}">{{ $editorial->nombre }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('editorial_id')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="titulo" class="font-weight-bold text-primary">Título</label>
                                    <input type="text" name="titulo" value="{{ old('titulo') }}" class="form-control"
                                        required>
                                    @error('titulo')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="resenia" class="font-weight-bold text-primary">Reseña</label>
                                    <textarea name="resenia" class="form-control" required>{{ old('resenia') }}</textarea>
                                    @error('resenia')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="isbn" class="font-weight-bold text-primary">ISBN</label>
                                    <input type="text" name="isbn" value="{{ old('isbn') }}" class="form-control"
                                        required>
                                    @error('isbn')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="anio_edicion" class="font-weight-bold text-primary">Año de edición</label>
                                    <input type="number" min="0" value="{{ old('anio_edicion') }}"
                                        name="anio_edicion" class="form-control" required>
                                    @error('anio_edicion')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="imagen" class="font-weight-bold text-primary">Imagen</label>
                                    <input type="file" name="imagen" value="{{ old('imagen') }}" class="form-control"
                                        required>
                                    @error('imagen')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="precio" class="font-weight-bold text-primary">Precio</label>
                                    <input type="number" min="0" step=".01" value="{{ old('precio') }}"
                                        name="precio" class="form-control" required>
                                    @error('precio')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row p-3">
                            <input type="submit" class="btn btn-primary" value="Almacenar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
