<!-- resources/views/tutores/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Tutores</h1>
        <a href="{{ route('tutores.create') }}" class="btn btn-primary">Agregar Tutor</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tutores as $tutor)
                    <tr>
                        <td>{{ $tutor->id }}</td>
                        <td>{{ $tutor->nombre }}</td>
                        <td>{{ $tutor->email }}</td>
                        <td>
                            <a href="{{ route('tutores.edit', $tutor->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('tutores.destroy', $tutor->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
