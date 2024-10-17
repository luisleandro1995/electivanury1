<!-- resources/views/tutores/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Tutor</h1>
        <form action="{{ route('tutores.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
