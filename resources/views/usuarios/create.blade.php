@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card">
                    <div class="card-header">
                        <h4>Crear usuario</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('usuarios.store') }}" method="POST">
                            @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre" class="test-primary font-weight-bold">Rol</label>
                                            <select name="rol_id" class="form-select" required>
                                                <option value>--Seleccione una opción--</option>
                                                @foreach ($roles as $rol)
                                                    @if (old('rol_id') == $rol->id)
                                                        <option value="{{ $rol->id }}" selected>{{ $rol->nombre }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('rol_id')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre" class="test-primary font-weight-bold">Email</label>
                                            <input type="email" name="email" value="{{ old('email') }}"
                                                class="form-control" required>
                                            @error('email')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre" class="test-primary font-weight-bold">Nombre</label>
                                            <input type="text" name="name" value="{{ old('name') }}"
                                                class="form-control" required>
                                            @error('name')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="apaterno" class="test-primary font-weight-bold">A. Paterno</label>
                                            <input type="text" name="apaterno" value="{{ old('apaterno') }}"
                                                class="form-control">
                                            @error('apaterno')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="amaterno" class="test-primary font-weight-bold">A. Materno</label>
                                            <input type="text" name="amaterno" value="{{ old('amaterno') }}"
                                                class="form-control">
                                            @error('amaterno')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password" class="test-primary font-weight-bold">Password</label>
                                            <input type="password" name="password" class="form-control" required>
                                            @error('amaterno')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password_confirmation"
                                                class="test-primary font-weight-bold">Confirmaar password</label>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                required>
                                            @error('password_confirmation')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
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
